<?php
namespace Framework\Modules\MySql;
use PDO;

class NestedSets{

    protected $pdo;

    function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        self::createSchema();
    }

    private function createSchema(){

        $query =
            "
           CREATE TABLE IF NOT EXISTS `Category` (
               id INT AUTO_INCREMENT PRIMARY KEY,
               `name` VARCHAR(500) NOT NULL,
               `lft` INT NOT NULL,
               `rgt` INT NOT NULL,
               `alias` VARCHAR(500) DEFAULT '',
               `image` VARCHAR(500) DEFAULT '',
               `description` TEXT(10000) DEFAULT '',
               `created` DATETIME NOT NULL,
	           `active` INT(11) NOT NULL DEFAULT '1',
               `setup` INT DEFAULT 0
           );
        ";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $query = "SELECT `id` FROM `Category` WHERE `id` = 1";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        if(!$stmt->fetch()['id']){
            $query = "INSERT INTO Category(id, name, lft, rgt, image, description, setup, created, active) VALUES(1, 'ROOT', 1, 2, '', '', 0, now(), 1);";
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
               node.active,
               COUNT(parent.name) - 1 as level
               FROM Category AS node, Category AS parent
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
        $query = "TRUNCATE TABLE `Category`";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute();
    }

    function getNodeById($id){

        $query = "SELECT * FROM Category WHERE id = $id";

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

        $query = "SELECT * FROM Category WHERE `alias` = '$alias'";

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

    public function insertNode($name, $alias, $image, $description, $targetId){

        $query =
            "
               SELECT @myLeft := lft FROM `Category`
               WHERE `id` = $targetId;
               UPDATE `Category` SET rgt = rgt + 2 WHERE rgt > @myLeft;
               UPDATE `Category` SET lft = lft + 2 WHERE lft > @myLeft;
               INSERT INTO Category(`name`, `lft`, `rgt`, `alias`, `image`, `description`) 
               VALUES('$name', @myLeft + 1, @myLeft + 2,'$alias', '$image', '$description');
           ";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        return true;
    }

    public function getCategoryPathById($id){

        if(!is_numeric($id)) return 'getCategoryPathById: (id is not integer)';

        $query = "
            SELECT parent.name
            FROM Category AS node, Category AS parent
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
            FROM Category
            WHERE `id` = $id;
            DELETE FROM Category WHERE lft BETWEEN @myLeft AND @myRight;
            UPDATE Category SET rgt = rgt - @myWidth WHERE rgt > @myRight;
            UPDATE Category SET lft = lft - @myWidth WHERE lft > @myRight;
        ";

        $stmt = $this->pdo->prepare($query);
        return $stmt->execute();
    }

    public function completeSetup($id){

        if(!is_numeric($id)) throw new \Exception('completeSetup: (id is not integer)');

        $query = "
            UPDATE `Category`
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
            FROM Category AS node
            JOIN Category AS parent
            ON node.lft BETWEEN parent.lft AND parent.rgt
            WHERE node.alias = '$alias'
            ORDER BY node.lft
        ";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }

        if(empty($data)) return null;

        return $data;
    }
}
