<?php

namespace App\Admin\Model;

use App\Site\Controller\Index;
use Core\Database\DB;
use Core\Model\Model;

/**
 * table = error
 */
class Error extends Model {

    static function add($text = "")
    {
        DB::insert('error', ['text'])
            ->values(['text' => $text])
            ->execute();
    }

}