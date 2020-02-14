<?php
namespace Framework\Component\ORM;
use Framework\Modules\DB\Connection;

class Entity implements EntityInterface {

    public static function getInstance($criteria = 'id', $value)
    {
        $entityName = get_called_class();
        $rc = new \ReflectionClass($entityName);


        $pdo = Connection::MySql();

        $newInstance = new $entityName;
        $fields = Mapping::getTableFields($newInstance);
        $table = Mapping::getTableName($newInstance);

        $stmt = $pdo->prepare("SELECT * FROM `$table` WHERE `$criteria` = '$value'");
        $stmt->execute();

        $entity = $stmt->fetch($pdo::FETCH_ASSOC);

        foreach($fields as $field)
        {
            $setValue = 'set'.$field['name'];

            switch ($field['type'])
            {
                case 'datetime' : {

                    $newInstance->$setValue(new \DateTime($entity[$field['name']]));
                    break;
                }

                default : {

                    $newInstance->$setValue($entity[$field['name']]);
                }
            }
        }

        if(empty($newInstance)) return null;

        return $newInstance;
    }



}