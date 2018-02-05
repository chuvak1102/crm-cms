<?php
namespace Framework\Component\ORM;

abstract class AbstractEntityManager{

    protected $entity = array();

    protected function save($entity){
        return true;
    }

}