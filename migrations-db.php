<?php

require_once 'App/Config.php';
require_once 'Core/AutoloadCLI.php';

return [
    'dbname' => App\Config::DB['base'],
    'user' => App\Config::DB['user'],
    'password' => App\Config::DB['pass'],
    'host' => App\Config::DB['host'],
    'driver' => 'pdo_mysql',
];