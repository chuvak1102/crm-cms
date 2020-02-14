<?php
namespace Framework\Modules\DB\Driver;

class MSSQL
{
    private $server;
    private $database;
    private $user;
    private $password;
    private $connection;
    const FETCH_ASSOC = 2;

    function __construct($server, $database, $user, $password)
    {
        $this->server = $server;
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
        $this->connect();
    }

    private function connect()
    {
        $this->connection = sqlsrv_connect($this->server, array(
            'Database' => $this->database,
            'UID' => $this->user,
            'PWD' => $this->password
        ));

        if(!$this->connection)
        {
            throw new \Exception(sqlsrv_errors());
        }

        return $this;
    }

    public function prepare()
    {

    }

    public function bindParam()
    {

    }

    public function bindValue()
    {

    }

    public function execute()
    {

    }

    function fetch($mode = 0)
    {
        switch ($mode)
        {
            case 0 : {

            }
            case 1 : {

            }
            case 2 : {

            }
        }
    }
}