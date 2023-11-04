<?php

namespace App\Client\Model;

use App\Admin\Model\User;
use Core\Model\Model;

/**
 * table = user_detail
 */
class UserDetail extends Model {

    function getUser()
    {
        return User::one($this->user_id);
    }

}