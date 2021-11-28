<?php

namespace App\Admin\Model;

use App\Site\Controller\Index;
use Core\Database\DB;
use Core\Model\Model;

/**
 * table = log
 */
class Log extends Model {

    static function add($text = "")
    {
        DB::insert('log', ['text'])
            ->values(['text' => $text])
            ->execute();
    }

}