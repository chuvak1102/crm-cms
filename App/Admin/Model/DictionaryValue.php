<?php

namespace App\Admin\Model;

use Core\Model\Model;
use Core\Database\DB;

/**
 * table = dictionary_value
 */
class DictionaryValue extends Model {

    public function dictionaryField()
    {
        return DictionaryField::one($this->key);
    }

    public function save()
    {
        if ($this->id) {

            DB::update('dictionary_value')->set([
                'key' => $this->key,
                'value' => $this->value,
                'external_id' => $this->external_id,
                'external_table' => $this->external_table,
                'external_column' => $this->external_column,
            ])->where('id', '=', $this->id)
                ->execute();

        } else {

            DB::insert('dictionary_value', [
                'key',
                'value',
                'external_id',
                'external_table',
                'external_column',
            ])->values([
                $this->key,
                $this->value,
                $this->external_id,
                $this->external_table,
                $this->external_column,
            ])
                ->execute();

            $this->id = DB::select('*')
                ->from('dictionary_value')
                ->where('key', '=', $this->key)
                ->where('value', '=', $this->value)
                ->where('external_id', '=', $this->external_id)
                ->where('external_table', '=', $this->external_table)
                ->where('external_column', '=', $this->external_column)
                ->execute()
                ->fetch()
                ->id;
        }
    }

}