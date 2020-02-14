<?php

function classLoader($class) {

    $classPath = str_replace('\\', '/', $class.'.php');

    if(file_exists($_SERVER['DOCUMENT_ROOT'].'/core/'.$classPath)){
        require_once $_SERVER['DOCUMENT_ROOT'].'/core/'.$classPath;
        return;
    }

    if(file_exists($_SERVER['DOCUMENT_ROOT'].'/src/'.$classPath)){
        require_once $_SERVER['DOCUMENT_ROOT'].'/src/'.$classPath;
        return;
    }
}

spl_autoload_register('classLoader');


