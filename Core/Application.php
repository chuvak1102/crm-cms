<?php

namespace Core;

class Application {

    private static $data = [
        'controller' => null,
        'action' => null,
    ];

    static function get($key)
    {
        return self::$data[$key] ?? null;
    }

    static function set($key, $value){
        self::$data[$key] = $value;
    }

}