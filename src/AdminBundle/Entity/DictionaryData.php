<?php
namespace AdminBundle\Entity;
use Framework\Component\ORM\Entity;

/**
 * @ORM\Table(name="E_Dictionary_Data")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\DictionaryData")
 */
class DictionaryData extends Entity
{
    public $id;
    public $dictionary;
    public $name;
    public $key;
    public $value;

    function getId(){return $this->id;}
    function setId($id){$this->id = $id;}
    function getDictionary(){return $this->dictionary;}
    function setDictionary($dictionary){$this->dictionary = $dictionary;}
    function getName(){return $this->name;}
    function setName($name){$this->name = $name;}
    function getKey(){return $this->key;}
    function setKey($key){$this->key = $key;}
    function getValue(){return $this->value;}
    function setValue($value){$this->value = $value;}

}