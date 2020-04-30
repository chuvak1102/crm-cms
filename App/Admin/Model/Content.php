<?php

namespace App\Admin\Model;

use Core\Database\Database;
use Core\Model\Model;
use Core\Database\DB;

/**
 * table = content
 */
class Content extends Model {

    const VARCHAR_256 = 'varchar(256)';
    const VARCHAR_1024 = 'varchar(1024)';
    const VARCHAR_4096 = 'varchar(4096)';
    const TEXT = 'text';
    const INT_1 = 'int(1)';
    const INT_11 = 'int(11)';
    const TIMESTAMP = 'timestamp';

    function getFields()
    {
        return ContentField::many($this->id, 'content_id');
    }

    function processTable(array $fields)
    {
        $query = "create table ".$this->table."(";

        $query .= "id int auto_increment primary key,";

        foreach ($fields as $i => $field) {

            $query .= "`{$field['column']}` {$field['type']}".($i == count($fields) - 1 ? "" : ",");
        }

        $query .= ")";

        DB::query(null, $query)
            ->execute();

        dump($fields);
    }


}