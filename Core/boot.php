<?php

require_once '../Core/Autoload.php';
require_once '../App/config.php';
require_once '../Core/Router.php';
require_once '../vendor/autoload.php'; // composer autoloader

try {

    if ($route = \Core\Router::getMatchedRoute()) {

        $controllerName = trim(key($route), '[]');
        $action = current($route);

        if (class_exists($controllerName)) {
            if (method_exists($controllerName, $action)) {
                $controller = new $controllerName();

                \Core\Application::set('controller', str_replace('App\\Admin\\Controller\\','',$controllerName));
                \Core\Application::set('action', $action);

                $controller->$action(new \Core\Request\Request());
            } else {
                error("action {$action} not found in {$controllerName}");
            }
        } else {
            error("controller not found: {$controllerName}");
        }
    } else {
        error("404");
    }



} catch (Exception $e) {

    error($e->getMessage());
}