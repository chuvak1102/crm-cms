<?php

use Core\Session;

require_once '../Core/Autoload.php';
require_once '../App/Config.php';
require_once '../Core/Router.php';
require_once '../vendor/autoload.php'; // composer autoloader

ini_set('display_errors', E_ALL);
ini_set('session.cookie_domain', substr($_SERVER['SERVER_NAME'], strpos($_SERVER['SERVER_NAME'],'.'),200));

session_start();

try {

    if ($route = \Core\Router::getMatchedRoute()) {

        $controllerName = trim(key($route), '[]');
        $action = current($route);

        if (class_exists($controllerName)) {
            if (method_exists($controllerName, $action)) {

                /** @var \Core\Controller $controller */
                $controller = new $controllerName();

                \Core\Application::set('controller', str_replace('App\\Admin\\Controller\\','',$controllerName));
                \Core\Application::set('action', $action);

                $controller->before();
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

//    var_dump($e);

    error($e);
}