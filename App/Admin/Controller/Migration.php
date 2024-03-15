<?php

namespace App\Admin\Controller;

use Core\Auth;
use Core\BreadCrumbs;
use Core\Database\DB;
use Core\Database\Kohana\Database;
use Core\JsonResponse;
use Core\Request\Request;

class Migration extends Index {

    function before()
    {
        parent::before();
//        if (!\App\Admin\Model\User::one(Auth::instance()->current()->id)->isGrantedAdmin()) {
//            $this->redirectToRoute('/403');
//        }
    }

    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'migrations']);

        return new JsonResponse("MIGRATIONS");
    }

    function migrate()
    {
        DB::query(null, '
            delete from department where id not in (2,3,5,8);
        ')->execute();

        DB::query(null, '
            drop table order_warehouse;
        ')->execute();

        DB::query(null, '
            ALTER TABLE order_detail MODIFY COLUMN sticker int(11) default 0;
        ')->execute();

        DB::query(null, '
            ALTER TABLE order_status ADD COLUMN active int(11) default 1;
        ')->execute();

        DB::query(null, '
            ALTER TABLE user ADD COLUMN color varchar (128) default "#1ab394";
        ')->execute();

        DB::query(null, '
            ALTER TABLE `order` ADD COLUMN driver int(11) default null;
        ')->execute();

        DB::query(null, '
            ALTER TABLE order_detail DROP COLUMN driver;
        ')->execute();

        DB::query(null, '
            alter table `order` add column status_prev int(11) default 0;
        ')->execute();

        DB::query(null, '
            drop table order_status_to_status;
        ')->execute();

        DB::query(null, '
            update `order` set status = 21 where status = 1;
        ')->execute();

        DB::query(null, '
            alter table order_item add column color varchar(256) default "#ffffff";
        ')->execute();

        DB::query(null, '
            alter table order_item add column alert int(1) default 0;
        ')->execute();

        DB::query(null, '
            alter table order_item add column is_extra int(1) default 0;
        ')->execute();
    }
}