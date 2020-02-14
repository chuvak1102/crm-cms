<?php
namespace Framework\Modules\Oracle;

class Oracle{

    public $connection;

    function __construct()
    {
        $this->connection = oci_connect(ORA_DB_LOGIN, ORA_DB_PASSWORD, ORA_DB_ADDRESS, ORA_DB_ENCODING);
    }

}