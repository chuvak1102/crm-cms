<?php
namespace AdminBundle\Entity;
use Framework\Component\ORM\Entity;

/**
 * @ORM\Table(name="E_Import_Fields")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\Import")
 */
class ImportFields extends Entity
{
    /**
     * @ORM\Column(type="id")
     */
    public $id;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $import;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $key;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $column;

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getImport(){
        return $this->import;
    }

    function setImport($import){
        $this->import = $import;
    }

    function getKey(){
        return $this->key;
    }

    function setKey($key){
        $this->key = $key;
    }

    function getColumn(){
        return $this->column;
    }

    function setSource($column){
        $this->column = $column;
    }

}