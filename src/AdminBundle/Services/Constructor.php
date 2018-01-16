<?php
namespace AdminBundle\Services;
use Framework\Modules\MySql\MySql;

class Constructor {

    protected $mysql;

    function __construct()
    {
        $this->mysql = new MySql();
    }

    public function getCTypeByAlias($alias)
    {
        return $this->mysql->findAll($alias);
    }

}