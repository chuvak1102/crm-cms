<?php

namespace Core;

class Page {

    private static $data = [];
    private static $instance = null;

    private function __clone(){}

    static function instance()
    {
        if (self::$instance) {
            return self::instance();
        }
        return new self();
    }

    public function push($key, $data)
    {
        self::$data[$key] = $data;
    }

    public function getAll()
    {
        return self::$data;
    }
}
