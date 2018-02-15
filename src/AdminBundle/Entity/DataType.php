<?php
namespace AdminBundle\Entity;
use Framework\Component\ORM\Entity;

/**
 * @ORM\Table(name="E_Data_Type")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\DataType")
 */
class DataType extends Entity
{
    /**
     * @ORM\Column(type="id")
     */
    public $id;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $type;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $name;

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getType(){
        return $this->type;
    }

    function setType($type){
        $this->type = $type;
    }

    function getName(){
        return $this->name;
    }

    function setName($name){
        $this->name = $name;
    }
}