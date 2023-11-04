<?php

namespace App\Admin\Model;

use Core\Model\Model;

/**
 * table = category
 */
class Category extends Model {

    function parent()
    {
        if ($this->parent_id) {

            return Category::one($this->parent_id, 'parent_id');
        }

        return null;
    }

}