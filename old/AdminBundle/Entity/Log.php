<?php
namespace AdminBundle\Entity;
use Framework\Component\ORM\Entity;

/**
 * @ORM\Table(name="E_Log")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\Log")
 */
class Log extends Entity
{
    /**
     * @ORM\Column(type="id")
     */
    public $id;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    public $user;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $message;

    /**
     * @ORM\Column(type="datetime")
     */
    public $date;

    /**
     * @ORM\Column(type="text", length=255)
     */
    public $ip;

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getUser(){
        return $this->user;
    }

    function setUser($user){
        $this->user = $user;
    }

    function getMessage(){
        return $this->message;
    }

    function setMessage($message){
        $this->message = $message;
    }

    function getDate(){
        return $this->date;
    }

    function setDate($date){
        $this->date = $date;
    }

    function getIp(){
        return $this->ip;
    }

    function setIp($ip){
        $this->ip = $ip;
    }


}