<?php

namespace App\Admin\Model;

use App\Client\Model\UserDetail;
use Core\Model\Model;

/**
 * table = user
 */
class User extends Model {

    function getDetail()
    {
        UserDetail::one($this->id, 'user_id');
    }

}