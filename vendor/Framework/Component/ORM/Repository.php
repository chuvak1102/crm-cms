<?php
namespace Framework\Component\ORM;
use Framework\Modules\DB\Connection;
use Framework\Component\ORM\Mapping;
use app\Config\Config;
use PDO;

class Repository {

    private $entity;
    private $pdo;
    private $entities = array();

    function __construct($repositoryName)
    {
        $this->pdo = Connection::MySql();
        $this->entity = $repositoryName;
    }

    public function findBy($criteria = array()){

        $table = Mapping::getTableName(new $this->entity);

        $and = '';
        foreach($criteria as $field => $value)
        {
            if(substr_count($field, ':') > 0){
                $expression = explode(':', $field);
                $field = trim($expression[0]);
                $expression = trim($expression[1]);
            } else {
                $expression = ' = ';
            }
            $and = $and.' AND '."`$field`".' '.$expression.' '."'$value'";
        }

        $query = "SELECT * FROM `$table` WHERE 1 = 1 $and";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $newInstance = new $this->entity;
            $fields = Mapping::getTableFields($newInstance);

            foreach($fields as $field)
            {
                $setValue = 'set'.$field['name'];

                switch ($field['type'])
                {
                    case 'datetime' : {

                        $newInstance->$setValue(new \DateTime($row[$field['name']]));
                        break;
                    }

                    default : {

                        $newInstance->$setValue($row[$field['name']]);
                    }
                }
            }

            $this->entities[] = $newInstance;
        }

        if(empty($this->entities)) return null;

        return $this->entities;

    }

    public function findOneBy($criteria = array())
    {
        if($result = $this->findBy($criteria))
        {
            return $result[0];
        } else {

            return null;
        }
    }

    public function findAll(){

        $table = Mapping::getTableName(new $this->entity);

        $query = "SELECT * FROM `$table`";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $newInstance = new $this->entity;
            $fields = Mapping::getTableFields($newInstance);

            foreach($fields as $field)
            {
                $setValue = 'set'.$field['name'];

                switch ($field['type'])
                {
                    case 'datetime' : {

                        $newInstance->$setValue(new \DateTime($row[$field['name']]));
                        break;
                    }

                    default : {

                        $newInstance->$setValue($row[$field['name']]);
                    }
                }
            }

            $this->entities[] = $newInstance;
        }

        if(empty($this->entities)) return null;

        return $this->entities;
    }

}