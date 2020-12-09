<?php

namespace App\Admin\Model;

use Core\Model\Model;

/**
 * table = supplier_order
 */
class SupplierOrder extends Model {

    const STATUS_NEW = 1;
    const STATUS_CLOSED = 2;
    const STATUS_MOST_CLOSED = 3;

    function getStatus()
    {
        return SupplierOrderStatus::one($this->status);
    }

    function getSupplier()
    {
        return Supplier::one($this->supplier);
    }

}