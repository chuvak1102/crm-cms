<?php

namespace App\Admin\Controller;

use App\Client\Model\UserDetail;
use Core\BreadCrumbs;
use Core\Request\Request;
use Core\Database\DB;

class Client extends Index {

    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'Клиенты']);

        $clients = DB::select('u.name', 'user.login', 'u.phone', 'u.city', 'u.street', 'u.house', 'u.block')
            ->from('user')
            ->where('role', '=', 'client')
            ->join(['user_detail', 'u'], 'left')
            ->on('u.user_id', '=', 'user.id')
            ->execute()
            ->fetch_all();

        return $this->render('Admin:client/index', [
            'clients' => $clients
        ]);
    }
}