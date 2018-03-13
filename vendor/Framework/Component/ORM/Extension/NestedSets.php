<?php
namespace Framework\Component\ORM\Extension;
use Framework\Modules\DB\Connection;
use PDO;

class NestedSets{

    private $pdo;

    function __construct()
    {
        $this->pdo = Connection::MySql();
        self::createSchema();
    }

    private function createSchema()
    {
        $query =
            "
           CREATE TABLE IF NOT EXISTS `E_Content_Tree` (
               id INT AUTO_INCREMENT PRIMARY KEY,
               `name` VARCHAR(500) NOT NULL,
               `alias` VARCHAR(500) DEFAULT '',
               `lft` INT NOT NULL,
               `rgt` INT NOT NULL,
               `lvl` INT NOT NULL,
               `image` VARCHAR(500) DEFAULT '',
               `description` TEXT(10000) DEFAULT '',
               `created` DATETIME NOT NULL,
               `template` VARCHAR(500) DEFAULT '',
               `setup` INT DEFAULT 0
           );
        ";

        $stmt = $this->pdo->prepare($query);

        try{$stmt->execute();}catch(\PDOException $e)
        {
            throw new \Exception($e->getMessage());
        }

        $query = "SELECT `id` FROM `E_Content_Tree` WHERE `id` = 1";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        if(!$stmt->fetch()['id'])
        {
            $query = "
              INSERT INTO E_Content_Tree(id, name, alias, lft, rgt, lvl, image, description, created, template, setup) 
              VALUES(1, 'ROOT', '/', 1, 2, 0, '', '', now(), '', 1);";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        }
    }

    public function getTree()
    {
        $query =
            "
               SELECT 
               node.id, 
               node.name, 
               node.alias, 
               node.image, 
               node.description, 
               node.setup, 
               node.created,
               node.template, 
               COUNT(parent.name) - 1 as level
               FROM E_Content_Tree AS node, E_Content_Tree AS parent
               WHERE node.lft BETWEEN parent.lft AND parent.rgt
               GROUP BY node.name
               ORDER BY node.lft;
           ";

        $stmt = $this->pdo->prepare($query);

        try{$stmt->execute();}catch(\PDOException $e)
        {
            throw new \Exception($e->getMessage());
        }

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }

        if(empty($data)) return null;

        return $data;
    }

    function deleteAll()
    {
        $query = "TRUNCATE TABLE `E_Content_Tree`";
        $stmt = $this->pdo->prepare($query);

        try{$stmt->execute();}catch(\PDOException $e)
        {
            throw new \Exception($e->getMessage());
        }

        return true;
    }

    function getNodeById($id)
    {
        $query = "SELECT * FROM E_Content_Tree WHERE id = $id";

        $stmt = $this->pdo->prepare($query);

        try{$stmt->execute();}catch(\PDOException $e)
        {
            throw new \Exception($e->getMessage());
        }

        $result = $stmt->fetch();

        if(!$result) return null;

        return array(
            'id' => $result['id'],
            'name' => $result['name'],
            'alias' => $result['alias'],
            'description' => $result['description']
        );
    }

    function getNodeByAlias($alias)
    {
        $query = "SELECT * FROM E_Content_Tree WHERE `alias` = '$alias'";
        $stmt = $this->pdo->prepare($query);

        try{$stmt->execute();}catch(\PDOException $e)
        {
            throw new \Exception($e->getMessage());
        }

        $result = $stmt->fetch();

        if(!$result) return null;

        return array(
            'id' => $result['id'],
            'name' => $result['name'],
            'alias' => $result['alias'],
            'description' => $result['description'],
            'setup' => $result['setup'],
            'created' => $result['created'],
            'template' => $result['template'],
        );
    }

    public function insertNode($name, $alias, $template, $image, $description, $targetId)
    {
        $query =
            "
               SELECT @myLeft := lft, @lvl := lvl FROM `E_Content_Tree`
               WHERE `id` = $targetId;
               UPDATE `E_Content_Tree` SET rgt = rgt + 2 WHERE rgt > @myLeft;
               UPDATE `E_Content_Tree` SET lft = lft + 2 WHERE lft > @myLeft;
               INSERT INTO E_Content_Tree(`name`,`alias`, `lft`, `rgt`, `lvl`, `image`, `description`, `created`, `template`) 
               VALUES('$name', '$alias', @myLeft + 1, @myLeft + 2, @lvl + 1, '$image', '$description', now(), '$template');
           ";

        $stmt = $this->pdo->prepare($query);

        try{$stmt->execute();}catch(\PDOException $e)
        {
            throw new \Exception($e->getMessage());
        }

        return true;
    }

    public function getCategoryPathById($id)
    {
        if(!is_numeric($id)) return 'getE_Content_TreePathById: (id is not integer)';

        $query = "
            SELECT parent.id, parent.name, parent.alias
            FROM E_Content_Tree AS node, E_Content_Tree AS parent
            WHERE node.lft BETWEEN parent.lft AND parent.rgt AND node.id = $id
            ORDER BY parent.lft;
        ";

        $stmt = $this->pdo->prepare($query);

        try{$stmt->execute();}catch(\PDOException $e)
        {
            throw new \Exception($e->getMessage());
        }

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }

        if(empty($data)) return null;

        return $data;
    }

    public function deleteNodeRecursively($id)
    {
        if(!is_numeric($id)) throw new \Exception('deleteNodeRecursively: (id is not integer)');

        $query = "
            SELECT @myLeft := lft, @myRight := rgt, @myWidth := rgt - lft + 1 
            FROM `E_Content_Tree` 
            WHERE `id` = $id;
            DELETE FROM `E_Content_Tree` WHERE lft BETWEEN @myLeft AND @myRight;
            UPDATE `E_Content_Tree` SET rgt = rgt - @myWidth WHERE rgt > @myRight;
            UPDATE `E_Content_Tree` SET lft = lft - @myWidth WHERE lft > @myRight;
        ";

        $stmt = $this->pdo->prepare($query);

        try{$stmt->execute();}catch(\PDOException $e)
        {
            throw new \Exception($e->getMessage());
        }

        return true;
    }

    public function completeSetup($id)
    {
        if(!is_numeric($id)) throw new \Exception('completeSetup: (id is not integer)');

        $query = "
            UPDATE `E_Content_Tree`
            SET `setup` = 1
            WHERE `id` = $id
        ";

        $stmt = $this->pdo->prepare($query);

        try{$stmt->execute();}catch(\PDOException $e)
        {
            throw new \Exception($e->getMessage());
        }

        return true;
    }

    public function getPath($alias)
    {
        $query = "
            SELECT parent.name, parent.alias
            FROM E_Content_Tree AS node
            JOIN E_Content_Tree AS parent
            ON node.lft BETWEEN parent.lft AND parent.rgt
            WHERE node.alias = '$alias'
            ORDER BY parent.lft
        ";

        $stmt = $this->pdo->prepare($query);

        try{$stmt->execute();}catch(\PDOException $e)
        {
            throw new \Exception($e->getMessage());
        }

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }

        if(empty($data)) return null;

        return $data;
    }

    public function setTemplate($id, $template)
    {
        if(!is_numeric($id)) throw new \Exception('setTemplate: (id is not integer)');

        $query = "
            UPDATE `E_Content_Tree`
            SET `template` = '$template'
            WHERE `id` = '$id'
        ";

        $stmt = $this->pdo->prepare($query);

        try{$stmt->execute();}catch(\PDOException $e)
        {
            throw new \Exception($e->getMessage());
        }

        return true;
    }
}
