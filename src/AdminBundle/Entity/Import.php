<?php
namespace AdminBundle\Entity;
use Framework\Component\ORM\Entity;

/**
 * @ORM\Table(name="E_Import")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\Import")
 */
class Import extends Entity
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
    public $type;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $source;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $table;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $location;

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

    function getType(){
        return $this->type;
    }

    function setType($type){
        $this->type = $type;
    }

    function getSource(){
        return $this->source;
    }

    function setSource($source){
        $this->source = $source;
    }

    function getTable(){
        return $this->table;
    }

    function setTable($table){
        $this->table = $table;
    }

    function getLocation()
    {
        return $this->location;
    }

    function setLocation($location)
    {
        $this->location = $location;
    }

}