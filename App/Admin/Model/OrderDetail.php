<?php

namespace App\Admin\Model;

use Core\Model\Model;

/**
 * table = order_detail
 */
class OrderDetail extends Model {

    function driverName()
    {
        return User::one($this->driver, 'id')->name;
    }

    function deliveryCost()
    {
        return $this->delivery_cost;
    }

}