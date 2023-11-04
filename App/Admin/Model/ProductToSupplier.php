<?php

namespace App\Admin\Model;

use Core\Model\Model;

/**
 * table = product_to_supplier
 */
class ProductToSupplier extends Model {

    public function supplier()
    {
        return Supplier::one($this->supplier_id, 'id');
    }

}