<?php

namespace App\Admin\Model;

use Core\Model\Model;

/**
 * table = supplier_order
 */
class SupplierOrder extends Model {

    function getStatus()
    {
        return SupplierOrderStatus::one($this->status);
    }

    function getSupplier()
    {
        return Supplier::one($this->supplier);
    }

}