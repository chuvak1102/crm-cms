<?php

namespace App\Client\Model;

use Core\Model\Model;

/**
 * table = user_detail_address
 */
class UserDetailAddress extends Model {

    function getCompany()
    {
        return UserDetailCompany::one($this->user_detail_company_id);
    }

}