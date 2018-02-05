<?php
namespace Framework\Component\Session;

class Session {

    protected $session;
    private $token;

    function __construct(){

        if(isset($_SESSION))
        {
            $this->session = $_SESSION;
        } else {
            $this->session = null;
        }
    }

    function get($name){
        if(isset($this->session[$name]) && $this->session[$name] != ''){
            return $this->session[$name];
        } else {
            return null;
        }
    }

    function set($key, $value){
        $this->session[$key] = $value;
        $_SESSION[$key] = $value;
    }

    function has($key){
        if(isset($this->session[$key]) && $this->session[$key] != ''){
            return true;
        } else {
            return false;
        }
    }

    function remove($key){
        unset($_SESSION[$key]);
    }

    function clear()
    {
        $_SESSION = null;
        session_destroy();
    }

    function getToken(){
        return $this->token;
    }

}