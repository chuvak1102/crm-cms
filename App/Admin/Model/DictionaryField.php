<?php

namespace App\Admin\Model;

use Core\Model\Model;

/**
 * Class DictionaryValue
 * @package App\Admin\Model
 * table = dictionary_field
 */
class DictionaryField extends Model {

    // has_one
    public function getDictionary()
    {
        return Dictionary::one($this->dictionary);
    }

    // has_many
    public function fields()
    {
        return DictionaryField::many($this->dictionary, 'dictionary');
    }

}