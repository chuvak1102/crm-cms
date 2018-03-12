<?php
namespace AdminBundle\Entity;
use Framework\Component\ORM\Entity;

/**
 * @ORM\Table(name="E_Import_Update")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ImportUpdate")
 */
class ImportUpdate extends Entity
{
    /**
     * @ORM\Column(type="id")
     */
    public $id;

    /**
     * @ORM\Column(type="integer", length=11)
     */
    public $import;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $field;


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

    function getField(){
        return $this->field;
    }

    function setField($field){
        $this->field = $field;
    }



}