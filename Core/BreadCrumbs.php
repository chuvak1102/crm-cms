<?php

namespace Core;

class BreadCrumbs {

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

    public function push($data)
    {
        array_push(self::$data, ['url' => key($data), 'name' => current($data)]);

        return $this;
    }

    public function getAll()
    {
        return self::$data;
    }
}
