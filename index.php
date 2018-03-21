<?php
session_start();

ini_set('display_errors', 0);
ini_set('max_execution_time', 0);

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

function error($text)
{
    echo '<div style="clear: both"></div>';
    echo '<div style="background-color: rgb(255,72,65); width: 100%; padding: 100px">';
    echo '<pre style="color: #fff"><h2>';
    print_r($text);
    echo '</pre><h2/>';
    echo '</div>';
    echo '<div style="clear: both"></div>';
    die();
}

//$method = 'id';
//$var = 'id';
//$value = 'asdflkjshadfljkasdfljksdafkljasdfasdfasdf';
//
//$func = <<<FUNC
//
//    /**
//    * asdfsadf
//    */
//    function get$method()
//    {
//        return \$this->$var;
//    }
//
//    function set$method()
//    {
//        return \$this->$var;
//    }
//
//FUNC;
//
//$functions = $func.<<<FUNC
//
//    function et$method()
//    {
//        return \$this->$var;
//    }
//
//    function st$method()
//    {
//        return \$this->$var;
//    }
//
//FUNC;
//
//$text = <<<HUY
//<?php
//
//use Framework\Component\ORM\Entity;
//
//class A extends Entity
//{
//    public \$$var;
//
//    $functions
//
//}
//
//HUY;
//
//
//
//$file = ('/var/www/html/some.php');
//file_put_contents($file, $text);
////fwrite($file, $text);
////fclose($file);
//
//require '/var/www/html/some.php';
//
//$abc = new A();
//
//$abc->getId();




































