<?php

namespace App\Admin\Controller;

use Core\Controller;

class Index extends Controller {

    function index()
    {
        return $this->render('Admin:index', [
            'var' => 12345
        ]);
    }

}