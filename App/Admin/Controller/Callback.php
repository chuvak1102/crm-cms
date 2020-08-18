<?php

namespace App\Admin\Controller;

use App\Client\Model\UserDetail;
use Core\BreadCrumbs;
use Core\Request\Request;
use Core\Database\DB;

class Callback extends Index {

    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'Обратный звонок']);

        return $this->render('Admin:callback/index', [
            'callback' => DB::select('*')
                ->from('callback')
                ->order_by('id', 'desc')
                ->execute()
                ->fetch_all()
        ]);
    }
}