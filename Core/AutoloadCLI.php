<?php

function classLoaderCLI($class) {

    $classPath = str_replace('\\', '/', $class.'.php');

    if(file_exists($classPath)){
        require_once $classPath;
        return;
    }

    print_r("class ".$class." not found");
}

spl_autoload_register('classLoaderCLI');


