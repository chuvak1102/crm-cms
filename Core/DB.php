<?php

namespace Core;

class DB {

    private static $pdo;

    /**
     * DB constructor.
     * @throws \Exception
     */
    private function __construct()
    {
        if (!self::$pdo) {
            $dsn = \app\Config\Config::DB;

            try{
                $pdo = new \PDO('mysql:host='.$dsn['host'].';'.'dbname='.$dsn['base'], $dsn['user'], $dsn['pass'], array(
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                ));
                $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                if(!$pdo)
                {
                    throw new \Exception('Mysql: connection failed!');
                }

            } catch (\PDOException $e){

                throw new \Exception($e->getMessage());
            }

            self::$pdo = $pdo;
        }

    }

    /**
     * @return \PDO
     * @throws \Exception
     */
    private static function pdo()
    {
        if (!self::$pdo) {
            $dsn = \app\Config\Config::DB;

            try{
                $pdo = new \PDO('mysql:host='.$dsn['host'].';'.'dbname='.$dsn['base'], $dsn['user'], $dsn['pass'], array(
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                ));
                $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

                if(!$pdo)
                {
                    throw new \Exception('Mysql: connection failed!');
                }

            } catch (\PDOException $e){

                throw new \Exception($e->getMessage());
            }

            self::$pdo = $pdo;
        }

        return self::$pdo;
    }

    /**
     * @param $query
     * @return bool
     * @throws \Exception
     */
    public static function insert($query)
    {
        $stmt = self::pdo()->prepare($query);
        try {

            $stmt->execute();
        } catch (\Exception $e) {
            error($e->getMessage());
        }

        return true;
    }

    /**
     * @param $query
     * @return array
     * @throws \Exception
     */
    public static function select($query)
    {
        $stmt = self::pdo()->prepare($query);
        $data = [];
        try {

            $stmt->execute();

            $data = [];
            while($row = $stmt->fetch(\PDO::FETCH_ASSOC))
            {
                $data[] = (object) $row;
            }

        } catch (\Exception $e) {
            error($e->getMessage());
        }

        return $data;
    }

    /**
     * @param $query
     * @return bool
     * @throws \Exception
     */
    public static function delete($query)
    {
        $stmt = self::pdo()->prepare($query);
        try {

            $stmt->execute();
        } catch (\Exception $e) {
            error($e->getMessage());
        }

        return true;
    }

    /**
     * @param $query
     * @return bool
     * @throws \Exception
     */
    public static function update($query)
    {
        $stmt = self::pdo()->prepare($query);
        try {

            $stmt->execute();
        } catch (\Exception $e) {
            error($e->getMessage());
        }

        return true;
    }

}