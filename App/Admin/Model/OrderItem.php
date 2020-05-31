<?php

namespace App\Admin\Model;

use App\Site\Controller\Index;
use Core\Model\Model;

/**
 * table = order_item
 */
class OrderItem extends Model {

    function getProduct()
    {
        return Product::one($this->product_id);
    }

    function getPriceForAll()
    {
        return Index::calculate(Product::one($this->product_id), $this->product_count);
    }

    function getPriceForOne()
    {
        return Index::calculate(Product::one($this->product_id), 1);
    }

}