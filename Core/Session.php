<?php
namespace Core;

class Session {

    private static $session;
    private static $instance = null;

    private function __construct($session){
        self::$session = $session;
    }

    public static function instance()
    {
        if (self::$instance) {
            return self::$instance;
        }

        return new self($_SESSION);
    }

    function get($name){
        if(isset(self::$session[$name]) && self::$session[$name]){
            return self::$session[$name];
        } else {
            return null;
        }
    }

    function set($key, $value){
        self::$session[$key] = $value;
        $_SESSION[$key] = $value;
    }

    function has($key){
        if(isset(self::$session[$key]) && self::$session[$key]){
            return true;
        } else {
            return false;
        }
    }

    function remove($key){
        unset(self::$session[$key]);
        unset($_SESSION[$key]);
    }

    function clear()
    {
        $_SESSION = null;
        session_destroy();
    }

    function dump()
    {
        dump(self::$session);
    }
}