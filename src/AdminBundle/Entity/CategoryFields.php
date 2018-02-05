<?php
namespace AdminBundle\Entity;
use Framework\Component\ORM\Entity;

/**
 * @ORM\Table(name="E_Content_Fields")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\CategoryFields")
 */
class CategoryFields extends Entity{

    /**
     * @ORM\Column(type="id")
     */
    public $id;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    public $category;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    public $type;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $canonical;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $alias;

    /**
     * @ORM\Column(type="text")
     */
    public $params;

    public function setCategory($name){
        $this->category = $name;
    }

    public function getCategory(){
        return $this->category;
    }


    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    function setType($type){
        $this->type = $type;
    }

    function getType(){
        return $this->type;
    }

    function getCanonical(){
        return $this->canonical;
    }

    function setCanonical($canonical){
        $this->canonical = $canonical;
    }

    function getAlias(){
        return $this->alias;
    }

    function setAlias($alias){
        $this->alias = $alias;
    }

    function getParams(){
        return $this->params;
    }

    function setParams($params){
        $this->params = $params;
    }
}

