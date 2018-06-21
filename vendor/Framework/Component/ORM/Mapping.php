<?php
namespace Framework\Component\ORM;

class Mapping
{
    static function getTableName($entityClass)
    {
        $class = new \ReflectionClass($entityClass);
        $classDoc = $class->getDocComment();
        $classDoc = str_replace(['*', ' ', '\'', '"', '/', ')', '\\', '@ORM', 'Table(', '\n', '\r', 'name='], '', $classDoc);

        preg_match('/[a-zA-Z\-\_0-9]+/', $classDoc, $match);

        if(isset($match[0]) && !empty($match[0]))
        {
            return $match[0];
        }

        return $class->getShortName();
    }

    static function getTableFields($entityClass)
    {
        $class = new \ReflectionClass($entityClass);
        $vars = $class->getProperties();

        foreach($vars as $v)
        {
            $doc = str_replace(['*', ' ', '\'', '"', '/', '\\', '@ORM', '\n', '\r'], '', $v->getDocComment());
            $currentDoc = explode(',', $doc);

            if(isset($currentDoc[0]))
            {
                $type = null;
                $type = str_replace(['Column', '(type=', ')'], '', $currentDoc[0]);
                $match = preg_match('/[a-zA-Z]+/', $type, $result);
                if($match) $type = $result[0];
            } else {
                $type = null;
            }

            if(isset($currentDoc[1]))
            {
                $parameter = explode('=', $currentDoc[1]);

                if(isset($parameter[0]) && isset($parameter[1]))
                {
                    $key = $parameter[0];
                    $match = preg_match('/[z-zA-Z0-9\.]+/', $parameter[1], $value);
                    if($match)
                    {
                        $parameter = array($key => $value[0]);
                    } else {
                        $parameter = array($key => null);
                    }

                } else {

                    $parameter = array();
                }

            } else {
                $parameter = array();
            }

            $fields[] = array(
                'name' => $v->getName(),
                'type' =>  $type,
                'parameters' => $parameter
            );
        }

        if(!empty($fields)) return $fields;
        return null;
    }

    static function getEntityRepository($entityClass)
    {
        $class = new \ReflectionClass($entityClass);
        $classDoc = $class->getDocComment();

        preg_match('/[Entity(repositoryClass="]{24}[a-zA-Z0-9\\\\]+/', $classDoc, $match);

        if(!empty($match[0]))
        {
            return str_replace(['Entity(repositoryClass=', '"'], '', $match[0]);
        }

        return null;
    }
}
