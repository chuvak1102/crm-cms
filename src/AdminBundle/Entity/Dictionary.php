<?php
namespace AdminBundle\Entity;
use Framework\Component\ORM\Entity;

/**
 * @ORM\Table(name="Dictionary")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\Dictionary")
 */
class Dictionary extends Entity
{
    public $id;
    public $name;
    public $alias;
    public $type;
    public $key;
    public $value;

    function getId(){return $this->id;}
    function setId($id){$this->id = $id;}
    function getName(){return $this->name;}
    function setName($name){$this->name = $name;}
    function getAlias(){return $this->alias;}
    function setAlias($alias){$this->alias = $alias;}
    function getType(){return $this->type;}
    function setType($type){$this->type = $type;}
    function getKey(){return $this->key;}
    function setKey($key){$this->key = $key;}
    function getValue(){return $this->value;}
    function setValue($value){$this->value = $value;}

}