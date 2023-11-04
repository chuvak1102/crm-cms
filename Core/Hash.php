<?php

namespace Core;

class Hash {

    public static function hash(string $string)
    {
        return hash('sha256', \App\Config::SECRET.$string);
    }

}