<?php
namespace Framework\Core\Entity;
use Framework\Modules\DB\Connection;

class Entity implements EntityInterface {

    private static function getVars($entity){
        return get_object_vars($entity);
    }

    public static function getInstance($criteria = 'id', $value)
    {
        $entityName = get_called_class();
        $rc = new \ReflectionClass($entityName);
        $shortName = $rc->getShortName();

        $pdo = Connection::MySql();

        $newInstance = new $entityName;
        $table = str_replace('Entity', '', $shortName);
        $vars = self::getVars($newInstance);

        $stmt = $pdo->prepare("SELECT * FROM `$table` WHERE `$criteria` = '$value'");
        $stmt->execute();

        $entity = $stmt->fetch($pdo::FETCH_ASSOC);

        foreach($vars as $k => $v){
            $setPropertyName = 'set'.$k;
            $newInstance->$setPropertyName($entity[$k]);
        }

        if(empty($newInstance)) return null;

        return $newInstance;
    }

}