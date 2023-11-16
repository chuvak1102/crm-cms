<?php

use Core\Database\DB;
use Core\Session;
use App\Admin\Model\Log;

require_once '../Core/Autoload.php';
require_once '../App/Config.php';
require_once '../Core/Router.php';
require_once '../vendor/autoload.php'; // composer autoloader

ini_set('display_errors', E_ALL);
ini_set('session.cookie_domain', '.'.\App\Config::SiteDomain);

session_start();

try {

    Log::add(json_encode([$_REQUEST, $_SERVER]));

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
                \App\Admin\Model\Error::add("action {$action} not found in {$controllerName}");
                if (\App\Config::Mode == 'test') {
                    error("action {$action} not found in {$controllerName}");
                }
            }
        } else {
            \App\Admin\Model\Error::add("controller not found: {$controllerName}");
            if (\App\Config::Mode == 'test') {
                error("controller not found: {$controllerName}");
            }
        }
    } else {
        \App\Admin\Model\Error::add(json_encode([$_REQUEST, $_SERVER]));
        if (\App\Config::Mode == 'test') {
            error("404 - ".$_SERVER['REQUEST_URI']);
        }
    }

} catch (\Exception $e) {

    $er = (var_export($e, true));

    DB::insert('error', ['text'])
        ->values([$er])
        ->execute();

    if (\App\Config::Mode == 'test') {

        error($e);
    }
}