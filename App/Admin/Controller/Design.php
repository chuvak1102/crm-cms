<?php

namespace App\Admin\Controller;

use App\Client\Model\UserDetail;
use Core\Auth;
use Core\BreadCrumbs;
use Core\Request\Request;
use Core\Database\DB;

class Design extends Index {

    function before()
    {
        parent::before();
        if (!\App\Admin\Model\User::one(Auth::instance()->current()->id)->isAdmin()) {
            $this->redirectToRoute('/403');
        }
    }

    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'Индивидуальный дизайн']);

        return $this->render('Admin:design/index', [
            'design' => DB::select('*')->from('design_product')->execute()->fetch_all()
        ]);
    }
}