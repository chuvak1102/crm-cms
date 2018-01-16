<?php
namespace app\Config;

class Config
{
    const Production = false;
    const DisplayErrors = true;
    const CacheEnabled = false;
    const SecretApplicationKey = '0e17ce11162433f25ff96fghjfghjfrtyu45674ac238d3021af757a1a';
    const Admin = '/^[\/]{1}[aAdDmMiInN]{5}[\/]{0,1}[a-zA-Z\/\-\_0-9]{1,500}$/';
    const Firewall = '/^[a-zA-Z\/\-\_0-9]{1,500}$/';

    private static $mysql = array
    (
        'test' => array
        (
            'host' => '10.10.0.196',
            'base' => 'box_product',
            'user' => 'mysql196',
            'pass' => '',
        ),

        'production' => array
        (
            'host' => '10.10.0.196',
            'base' => 'box_product',
            'user' => 'mysql196',
            'pass' => '',
        )
    );

    private static $mssql = array
    (
        'test' => array
        (
            'host' => '10.10.0.196',
            'base' => 'test',
            'user' => 'sa',
            'pass' => 'LTYrhen12345678'
        ),

        'production' => array
        (
            'host' => '10.10.0.196',
            'base' => 'test',
            'user' => 'sa',
            'pass' => 'LTYrhen12345678'
        )
    );

    private static $oracle = array
    (
        'test' => array
        (
            'host' => '//100.100.0.134:1521/',
            'base' => 'base',
            'user' => 'username',
            'pass' => 'password'
        ),

        'production' => array
        (
            'host' => '//100.100.0.134:1521/',
            'base' => 'base',
            'user' => 'username',
            'pass' => 'password'
        )
    );

    // CLEAR CACHE BEFORE CHANGE!
    private static $bundles = array
    (
        'test' => array
        (
            'AdminBundle',
            'AuthorizationBundle',
//            'TestBundle',
            'psbBundle',
//            'BoxBundle',
//            'InsBundle'
        ),

        'production' => array
        (
            'AdminBundle',
            'AuthorizationBundle',
            'TestBundle',
            'psbBundle',
            'BoxBundle',
            'InsBundle'
        )
    );

    public static function mysql()
    {
        if(self::Production === true)
        {
            return self::$mysql['production'];
        } else {
            return self::$mysql['test'];
        }
    }

    public static function mssql()
    {
        if(self::Production === true)
        {
            return self::$mssql['production'];
        } else {
            return self::$mssql['test'];
        }
    }

    public static function oracle()
    {
        self::Production === true ? self::$oracle['production'] : self::$oracle['test'];
    }


    public static function bundles()
    {
        if(self::Production === true)
        {
            return self::$bundles['production'];
        } else {
            return self::$bundles['test'];
        }
    }
}







// OLD CONFIG STRUCTURE

//define('PRODUCTION', true); // application mode

//if(PRODUCTION === false)
//{
//    ini_set('display_errors', E_ALL);
//    define('MYSQL_HOST', 'mysql:host=172.20.22.130;dbname=MakclifeGui');
//    define('MYSQL_LOGIN', 'mlife_dba');
//    define('MYSQL_PASSWORD', 'Bulyzhnik');
//    define('ORA_DB_ADDRESS', '//172.20.0.91:1521/DEV');
//    define('SOAP_ADDRESS', 'http://unitest.makc.ru:7001/UnicusAgimaWS2/UnicusAgimaWS2Port?WSDL');
//    define('SOAP_LOGIN', null);
//    define('SOAP_PASSWORD', null);
//    define('TEST_CONTROLLER_DISABLED', false);

//} else {
//    ini_set('display_errors', E_ALL);
//    define('MYSQL_HOST', 'mysql:host=100.100.0.134;dbname=box_product');
//    define('MYSQL_LOGIN', 'mysql5');
//    define('MYSQL_PASSWORD', null);
//    define('ORA_DB_ADDRESS', '//172.20.0.47:1521/MAKC');
//    define('SOAP_ADDRESS', 'http://uni2.makc.ru:7001/UnicusAgimaWS2/UnicusAgimaWS2Port?WSDL');
//    define('SOAP_LOGIN', 'agima');
//    define('SOAP_PASSWORD', '12345678');
//    define('TEST_CONTROLLER_DISABLED', true);
//}

//define('MYSQL_DB', 'box_product');
//define('ORA_DB_LOGIN', 'unicus_maks');
//define('ORA_DB_PASSWORD', 'maks');
//define('ORA_DB_ENCODING', 'AL32UTF8');
//define('FILES', '/var/files');
//define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'].'/');
//define('FRAMEWORK_ROOT', DOCUMENT_ROOT.'vendor/Framework');
//define('files', DOCUMENT_ROOT.'web/files/');

// Router
//define('Admin', '/^[\/]{1}[aAdDmMiInN]{5}[\/]{0,1}[a-zA-Z\/\-\_0-9]{1,500}$/');
//define('Firewall', '/^[a-zA-Z\/\-\_0-9]{1,500}$/');

// Выключить/включить кэш. Не забываем удалить файлы в директории app/cache. Если какой-то новый код не работает.
//define('cache', false);

// Secret application key
//define('secret', '0e17ce11162433f25ff96fghjfghjfrtyu45674ac238d3021af757a1a');









