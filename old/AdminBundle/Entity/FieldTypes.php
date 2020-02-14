<?php
namespace AdminBundle\Entity;
use Framework\Component\ORM\Entity;

/**
 * @ORM\Table(name="E_Field_Types")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\FieldTypes")
 */
class FieldTypes extends Entity
{
    /**
     * @ORM\Column(type="id")
     */
    public $id;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $name;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $alias;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $type;

//    /**
//     * @ORM\Column(type="integer", length=10)
//     */
//    public $fieldType;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $params;

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getName(){
        return $this->name;
    }

    function setName($name){
        $this->name = $name;
    }

    function getAlias(){
        return $this->alias;
    }

    function setAlias($alias){
        $this->alias = $alias;
    }

    function getType(){
        return $this->type;
    }

    function setType($type){
        $this->type = $type;
    }

//    function getFieldType(){
//        return $this->fieldType;
//    }
//
//    function setFieldType($fieldType){
//        $this->fieldType = $fieldType;
//    }

    function getParams(){
        return $this->params;
    }

    function setParams($params){
        $this->params = $params;
    }
}