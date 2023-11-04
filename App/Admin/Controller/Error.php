<?php

namespace App\Admin\Controller;

use Core\BreadCrumbs;
use Core\Database\DB;
use Core\Request\Request;

class Error extends Index {

    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'Ошибки приложения']);

        $errors = DB::select('*')
            ->from('error')
            ->order_by('id', 'desc')
            ->limit(100)
            ->execute()
            ->fetch_all();

        return $this->render('Admin:error/index', [
            'errors' => $errors
        ]);
    }
}