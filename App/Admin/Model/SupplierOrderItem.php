<?php

namespace App\Admin\Model;

use Core\Model\Model;

/**
 * table = supplier_order_item
 */
class SupplierOrderItem extends Model {

    function getStatus()
    {
        return SupplierOrderStatus::one($this->status);
    }

    function getSupplier()
    {
        return Supplier::one($this->supplier);
    }

    function getProduct()
    {
        return Product::one($this->product_id);
    }

}