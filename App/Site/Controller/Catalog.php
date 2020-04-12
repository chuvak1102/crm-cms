<?php

namespace App\Site\Controller;

use Core\Request\Request;

class Catalog extends Site {

    function index()
    {
        
    }

    function item(Request $request)
    {
        return $this->render('Site:layout', [
            'param' => $request->get('qweqwe')
        ]);
    }
}
