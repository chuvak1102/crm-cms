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

    const CONTENT_TYPE_STATIC = 'static';
    const CONTENT_TYPE_DICTIONARY = 'dictionary';
    const CONTENT_TYPE_CATEGORY = 'category';

    function getFields()
    {
        return ContentField::many($this->id, 'content_id');
    }

    function getType()
    {
        return ContentType::one($this->content_type_id);
    }

    function processTable(array $fields)
    {
        switch ($this->getType()->slug) {

            case self::CONTENT_TYPE_STATIC : {

                $query = "create table ".$this->table."(";

                foreach ($fields as $i => $field) {

                    $type = DB::select('type')
                        ->from('field')
                        ->where('id', '=', $field['type'])
                        ->execute()
                        ->fetch();

                    if ($type->type) {
                        $query .= "`{$field['column']}` {$type->type}".($i == count($fields) - 1 ? "" : ",");
                    }
                }
                $query .= ")";

                break;
            }

            default : break;

        }

        DB::query(null, $query)
            ->execute();
    }

    static function get($value, $limit = 1000, $column = 'id')
    {
        $content = DB::select('table')
            ->from('content')
            ->where($column, '=', $value)
            ->execute()
            ->fetch();
        if ($content->table) {
            return DB::select('*')
                ->from($content->table)
                ->limit($limit)
                ->execute()
                ->fetch_all();
        }

        return [];
    }


}