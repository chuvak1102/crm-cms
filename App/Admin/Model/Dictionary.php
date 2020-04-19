<?php

namespace App\Admin\Model;

use Core\Model\Model;

/**
 * Class DictionaryValue
 * @package App\Admin\Model
 * table = dictionary
 */
class Dictionary extends Model {

    // has_many
    public function dictionaryField()
    {
        return DictionaryField::many($this->id, 'dictionary');
    }
}