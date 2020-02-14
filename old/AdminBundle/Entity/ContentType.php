<?php
namespace AdminBundle\Entity;
use Framework\Component\ORM\Entity;

/**
 * @ORM\Table(name="E_Content")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ContentType")
 */
class ContentType extends Entity{

    /**
     * @ORM\Column(type="id")
     */
    public $id;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $category;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $name;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $alias;

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getCategory(){
        return $this->category;
    }

    function setCategory($category){
        $this->category = $category;
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

}