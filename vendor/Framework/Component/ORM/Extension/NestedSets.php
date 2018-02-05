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

    private function createSchema(){

        $query =
            "
           CREATE TABLE IF NOT EXISTS `E_Site_Tree` (
               id INT AUTO_INCREMENT PRIMARY KEY,
               `name` VARCHAR(500) NOT NULL,
               `lft` INT NOT NULL,
               `rgt` INT NOT NULL,
               `alias` VARCHAR(500) DEFAULT '',
               `image` VARCHAR(500) DEFAULT '',
               `description` TEXT(10000) DEFAULT '',
               `created` DATETIME NOT NULL,
               `template` VARCHAR(500) DEFAULT '',
               `setup` INT DEFAULT 0
           );
        ";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $query = "SELECT `id` FROM `E_Site_Tree` WHERE `id` = 1";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        if(!$stmt->fetch()['id']){
            $query = "INSERT INTO E_Site_Tree(id, name, lft, rgt, image, description, setup, created) VALUES(1, 'ROOT', 1, 2, '', '', 0, now());";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        }
    }

    public function getTree(){
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
               FROM E_Site_Tree AS node, E_Site_Tree AS parent
               WHERE node.lft BETWEEN parent.lft AND parent.rgt
               GROUP BY node.name
               ORDER BY node.lft;
           ";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }

        if(empty($data)) return null;

        return $data;
    }

    function deleteAll(){
        $query = "TRUNCATE TABLE `E_Site_Tree`";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute();
    }

    function getNodeById($id){

        $query = "SELECT * FROM E_Site_Tree WHERE id = $id";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();

        if(!$result) return null;

        return array(
            'id' => $result['id'],
            'name' => $result['name'],
            'alias' => $result['alias'],
            'description' => $result['description']
        );
    }

    function getNodeByAlias($alias){

        $query = "SELECT * FROM E_Site_Tree WHERE `alias` = '$alias'";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
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

    public function insertNode($name, $alias, $image, $description, $targetId){

        $query =
            "
               SELECT @myLeft := lft FROM `E_Site_Tree`
               WHERE `id` = $targetId;
               UPDATE `E_Site_Tree` SET rgt = rgt + 2 WHERE rgt > @myLeft;
               UPDATE `E_Site_Tree` SET lft = lft + 2 WHERE lft > @myLeft;
               INSERT INTO E_Site_Tree(`name`, `lft`, `rgt`, `alias`, `image`, `description`, `created`) 
               VALUES('$name', @myLeft + 1, @myLeft + 2,'$alias', '$image', '$description', now());
           ";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        return true;
    }

    public function getCategoryPathById($id){

        if(!is_numeric($id)) return 'getE_Site_TreePathById: (id is not integer)';

        $query = "
            SELECT parent.id, parent.name, parent.alias
            FROM E_Site_Tree AS node, E_Site_Tree AS parent
            WHERE node.lft BETWEEN parent.lft AND parent.rgt AND node.id = $id
            ORDER BY parent.lft;
        ";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }

        if(empty($data)) return null;

        return $data;
    }

    public function deleteNodeRecursively($id){

        if(!is_numeric($id)) throw new \Exception('deleteNodeRecursively: (id is not integer)');

        $query = "
            SELECT @myLeft := lft, @myRight := rgt, @myWidth := rgt - lft + 1 
            FROM `E_Site_Tree` 
            WHERE `id` = $id;
            DELETE FROM `E_Site_Tree` WHERE lft BETWEEN @myLeft AND @myRight;
            UPDATE `E_Site_Tree` SET rgt = rgt - @myWidth WHERE rgt > @myRight;
            UPDATE `E_Site_Tree` SET lft = lft - @myWidth WHERE lft > @myRight;
        ";

        $stmt = $this->pdo->prepare($query);
        return $stmt->execute();
    }

    public function completeSetup($id){

        if(!is_numeric($id)) throw new \Exception('completeSetup: (id is not integer)');

        $query = "
            UPDATE `E_Site_Tree`
            SET `setup` = 1
            WHERE `id` = $id
        ";

        $stmt = $this->pdo->prepare($query);
        return $stmt->execute();
    }

    public function getPath($alias){

//        if(!is_numeric($id)) return 'getPathById: (id is not integer)';

        $query = "
            SELECT parent.name, parent.alias
            FROM E_Site_Tree AS node
            JOIN E_Site_Tree AS parent
            ON node.lft BETWEEN parent.lft AND parent.rgt
            WHERE node.alias = '$alias'
            ORDER BY parent.lft
        ";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

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
            UPDATE `E_Site_Tree`
            SET `template` = '$template'
            WHERE `id` = '$id'
        ";

        $stmt = $this->pdo->prepare($query);
        return $stmt->execute();
    }
}
