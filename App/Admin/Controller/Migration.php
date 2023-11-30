<?php

namespace App\Admin\Controller;

use Core\BreadCrumbs;
use Core\Database\DB;
use Core\Database\Kohana\Database;
use Core\JsonResponse;
use Core\Request\Request;

class Migration extends Index {

    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'migrations']);

        return new JsonResponse("MIGRATIONS");
    }

    // добавить поле с доставкой в детали заказа
    function migration_1()
    {
        DB::query(null, '
            alter table order_detail add column delivery_cost int default 0;
        ')
            ->execute();
    }
}