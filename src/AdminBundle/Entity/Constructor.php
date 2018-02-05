<?php
namespace AdminBundle\Entity;
use Framework\Component\ORM\Entity;

/**
 * @ORM\Table(name="E_Binder")
 */
class Constructor extends Entity{

    /**
     * @ORM\Column(type="id")
     */
    public $id;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $page;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $method;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $variable;

    /**
     * @ORM\Column(type="text")
     */
    public $parameters;

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getPage(){
        return $this->page;
    }

    function setPage($page){
        $this->page = $page;
    }

    function getMethod(){
        return $this->method;
    }

    function setMethod($method){
        $this->method = $method;
    }

    function getVariable(){
        return $this->variable;
    }

    function setVariable($variable){
        $this->variable = $variable;
    }

    function getParameters(){
        return $this->parameters;
    }

    function setParameters($parameters){
        $this->parameters = $parameters;
    }
}

