<?php

namespace App\Admin\Model;

use Core\Model\Model;

/**
 * table = content_field
 */
class ContentField extends Model {

    function getContent()
    {
        return Content::one($this->content_id);
    }

    function getField()
    {
        return Field::one($this->field_id);
    }

    function save()
    {

    }


}