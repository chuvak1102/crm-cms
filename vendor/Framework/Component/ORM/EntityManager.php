<?php
namespace Framework\Component\ORM;
use Framework\Modules\DB\Connection;

class EntityManager extends AbstractEntityManager implements EntityManagerInterface {

    protected $persistEntities = array();
    protected $removeEntities = array();
    protected $original = array();
    protected $persistence = array();
    protected $method;
    protected static $length = 0;
    protected $pdo;

    function __construct(){
        $this->pdo = Connection::mysql();
    }

    public function persist(Entity $entity)
    {
        if($entity instanceof Entity)
        {
            switch ($this->method)
            {
                case 'remove' : {

                    $this->removeEntities[] = $entity;
                    break;
                }

                default : {
                    $this->persistEntities[] = $entity;
                    break;
                }
            }

        } else {

            throw new \Exception('EntityManager::persist expects parameter 1 to be an instance of Entity!');
        }
    }

    public function remove(Entity $entity)
    {
        $this->method = 'remove';
        $this->persist($entity);
    }

    public function flush()
    {
        foreach($this->persistEntities as $entity)
        {
            $table = Mapping::getTableName($entity);
            $fields = Mapping::getTableFields($entity);

            // id нету, значит подготовим insert statement
            if(!$entity->getId())
            {
                $insertStatement = $this->createInsertStatement($fields, $entity);
                $query = "INSERT INTO `$table` $insertStatement";
                $stmt = $this->pdo->prepare($query);
                $stmt->execute();

            // id есть, поэтому подготовим update statement
            } else {

                $updateStatement = $this->createUpdateStatement($fields, $entity);
                $query = "UPDATE `$table` SET $updateStatement";
                $stmt = $this->pdo->prepare($query);
                $stmt->execute();
            }
        }

        foreach($this->removeEntities as $entity)
        {
            $table = Mapping::getTableName($entity);
            $id = $entity->getId();

            $query = "DELETE FROM `$table` WHERE `id` = $id";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
        }
    }

    private function createInsertStatement($fields, $entity)
    {
        $i = 0;
        $length = count($fields) - 1;
        $keys = ''; $vals = '';

        foreach($fields as $field)
        {
            if($i < $length)
            {
                $keys = $keys.' '.'`'.$field['name'].'`'.', ';
                $getValue = 'get'.$field['name'];
                switch ($field['type'])
                {
                    case 'datetime' : {

                        $vals = $vals.' '.'\''.$entity->$getValue()->format('Y-m-d H:i:s').'\''.', ';
                        break;
                    }

                    default : {

                        $vals = $vals.' '.'\''.$entity->$getValue().'\''.', ';
                    }
                }

            } else {

                $keys = $keys.' '.'`'.$field['name'].'`';
                $getValue = 'get'.$field['name'];
                switch ($field['type'])
                {
                    case 'datetime' : {

                        $vals = $vals.' '.'\''.$entity->$getValue()->format('Y-m-d H:i:s').'\'';
                        break;
                    }

                    default : {
                        $vals = $vals.' '.'\''.$entity->$getValue().'\'';

                    }
                }
            }

            $i++;
        }

        return " ( $keys ) VALUES ( $vals ) ";

    }

    private function createUpdateStatement($fields, $entity)
    {
        $i = 0;
        $length = count($fields) - 1;
        $keys = '';

        foreach($fields as $field)
        {
            if($i < $length)
            {
                $getValue = 'get'.$field['name'];

                switch ($field['type'])
                {
                    case 'id' : {

                        break;
                    }

                    case 'datetime' : {

                        $date = $entity->$getValue()->format('Y-m-d H:i:s');
                        $keys = $keys.'`'.$field['name'].'`'.' = '.'\''.$date.'\''.', ';

                        break;
                    }

                    default : {

                        $keys = $keys.'`'.$field['name'].'`'.' = '.'\''.$entity->$getValue().'\''.', ';
                    }
                }

            } else {

                $getValue = 'get'.$field['name'];

                switch ($field['type'])
                {
                    case 'id' : {

                        break;
                    }

                    case 'datetime' : {

                        $date = $entity->$getValue()->format('Y-m-d H:i:s');
                        $keys = $keys.'`'.$field['name'].'`'.' = '.'\''.$date.'\'';

                        break;
                    }

                    default : {

                        $keys = $keys.'`'.$field['name'].'`'.' = '.'\''.$entity->$getValue().'\'';
                    }
                }
            }
            $i++;
        }

        return $keys.' WHERE `id` = '.$entity->getId();
    }

}