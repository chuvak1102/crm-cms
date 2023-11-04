<?php

function classLoader($class) {

    $classPath = str_replace('\\', '/', $class.'.php');

    if(file_exists('../'.$classPath)){
        require_once '../'.$classPath;
        return;
    }

    error("class ".$class." not found");
}

spl_autoload_register('classLoader');


