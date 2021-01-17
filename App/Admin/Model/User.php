<?php

namespace App\Admin\Model;

use App\Client\Model\UserDetail;
use Core\Database\DB;
use Core\Model\Model;

/**
 * table = user
 */
class User extends Model {

    const ROLE_DRIVER = 5;
    private $roleDriver = [5];
    private $roleWarehouse = [3];
    private $roleManager = [100, 2, 6];

    function isWarehouse()
    {
        return in_array($this->department, $this->roleWarehouse);
    }

    function isManager()
    {
        return in_array($this->department, $this->roleManager);
    }

    function getDetail()
    {
        UserDetail::one($this->id, 'user_id');
    }

    function lastOrder()
    {
        return DB::select(DB::expr('MAX(created) created'))
            ->from('order')
            ->where('user_id', '=', $this->id)
            ->execute()
            ->fetch();
    }

    function getCompany()
    {
        return DB::select('name')
            ->from('user_detail_company')
            ->where('user_id', '=', $this->id)
            ->limit(1)
            ->execute()
            ->fetch();
    }

}