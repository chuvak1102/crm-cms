<?php
namespace Framework\Component\ORM;
use Framework\Modules\DB\Connection;

class EntityManager extends AbstractEntityManager implements EntityManagerInterface {

    protected $entity = array();
    protected $original = array();
    protected $persistence = array();
    protected static $length = 0;
    protected $pdo;

    function __construct(){
        $this->pdo = Connection::mysql();
    }

    public function persist($entity)
    {
        if(is_array($entity))
        {
            foreach($entity as $e)
            {
                if($e instanceof Entity)
                {
                    $this->entity[] = $entity;
                    self::$length++;

                } else {

                    throw new \Exception('EntityManager::persist expects parameter 1 to be an instance of Entity!');
                }
            }

        } else {

            if($entity instanceof Entity)
            {

                $this->entity[] = $entity;
                self::$length++;

            } else {

                throw new \Exception('EntityManager::persist expects parameter 1 to be an instance of Entity!');
            }
        }
    }

    public function flush()
    {
        foreach($this->entity as $entity)
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