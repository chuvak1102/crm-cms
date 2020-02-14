<?php
namespace AdminBundle\Entity;
use Framework\Component\ORM\Entity;

/**
 * @ORM\Table(name="E_Content_Tree")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\Category")
 */
class Category extends Entity{

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
     * @ORM\Column(type="integer", length=10)
     */
    public $rgt;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    public $lft;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    public $lvl;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $image;

    /**
     * @ORM\Column(type="text")
     */
    public $description;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $template;

    /**
     * @ORM\Column(type="integer", length=1)
     */
    public $setup;

    /**
     * @ORM\Column(type="datetime")
     */
    public $created;

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

    function getLft(){
        return $this->lft;
    }

    function setLft($lft){
        $this->lft = $lft;
    }

    function getRgt(){
        return $this->rgt;
    }

    function setRgt($rgt){
        $this->rgt = $rgt;
    }

    function getLvl(){
        return $this->lvl;
    }

    function setLvl($level)
    {
        $this->lvl = $level;
    }

    function getAlias(){
        return $this->alias;
    }

    function setAlias($alias){
        $this->alias = $alias;
    }

    function getImage(){
        return $this->image;
    }

    function setImage($image){
        $this->image = $image;
    }

    function getDescription(){
        return $this->description;
    }

    function setDescription($description){
        $this->description = $description;
    }

    function getSetup(){
        return $this->setup;
    }

    function setSetup($setup){
        $this->setup = $setup;
    }

    function getTemplate(){
        return $this->template;
    }

    function setTemplate($template){
        $this->template = $template;
    }

    function getCreated(){
        return $this->created;
    }

    function setCreated($created){
        $this->created = $created;
    }
}