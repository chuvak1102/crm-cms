<?php
namespace Framework\Core\ORM;

abstract class AbstractEntityManager{

    protected $entity = array();

    protected function save($entity){
        return true;
    }

}