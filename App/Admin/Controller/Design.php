<?php

namespace App\Admin\Controller;

use App\Client\Model\UserDetail;
use Core\Request\Request;
use Core\Database\DB;

class Design extends Index {

    function index(Request $request)
    {
        return $this->render('Admin:design/index', [
            'design' => DB::select('*')->from('design_product')->execute()->fetch_all()
        ]);
    }
}