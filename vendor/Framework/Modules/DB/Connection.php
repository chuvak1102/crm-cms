<?php
namespace Framework\Modules\DB;
use app\Config\Config;
use PDO;
use PDOException;

class Connection
{
    static function MySql()
    {
        $dsn = Config::mysql();

        try{
            $pdo = new PDO('mysql:host='.$dsn['host'].';'.'dbname='.$dsn['base'], $dsn['user'], $dsn['pass'], array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                ));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(!$pdo)
            {
                throw new \Exception('Mysql: connection failed!');
            }

        } catch (PDOException $e){

            throw new \Exception($e->getMessage());
        }

        return $pdo;
    }

    static function MSSQL()
    {
        $dsn = Config::mssql();

        $connectionInfo = array( "Database" => $dsn['base'], "UID" => $dsn['user'], "PWD" => $dsn['pass']);
        $conn = sqlsrv_connect( $dsn['host'], $connectionInfo);

        if($conn)
        {
            return $conn;

        } else {

            echo "MsSql: connection failed!<br />";
            die( print_r( sqlsrv_errors(), true));
        }
    }

    static function Oracle()
    {
//        return oci_connect(ORA_DB_LOGIN, ORA_DB_PASSWORD, ORA_DB_ADDRESS, ORA_DB_ENCODING);
    }
}