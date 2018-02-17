<?php
session_start();

ini_set('display_errors', 0);

require_once 'vendor/autoload.php'; // composer autoloader
require_once 'app/Config/config.php';
require_once 'vendor/Framework/Router.php';
require_once 'vendor/Framework/App.php';
require_once 'vendor/Framework/Autoload.php';

if(\app\Config\Config::DisplayErrors === true)
{
    ini_set('display_errors', E_ALL);
}

\Framework\Component\System\System::startScriptTime();

$router = new Router();
$router->run();

\Framework\Component\System\System::stopScriptTime();

/*
if(\app\Config\Config::Production === false)
{
    ?>
    <style>
        .debug_panel{position: fixed; background-color: #000; bottom: 0; left: 0; height: 30px; width: 100%; border-top: 1px solid #999}
        .debug_panel ul li{float: left; line-height: 30px; margin-left: 10px; color: #fff}
    </style>
    <div class="debug_panel">
        <ul>
            <li><?echo \Framework\Component\System\System::scriptExecutionTime()?></li>
        </ul>
    </div>
    <?
}
*/

function dump($scope)
{
    echo '<div style="clear: both"></div>';
    echo '<div style="background-color: rgba(0,0,0,0.64); width: 100%; padding-bottom: 50px">';
    echo '<pre style="color: #fff">';
    print_r($scope);
    echo '</pre>';
    echo '</div>';
    echo '<div style="clear: both"></div>';
}