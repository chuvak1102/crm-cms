<?php

namespace App\Site\Controller;

class Index extends Site {

    function index()
    {
        return $this->render('Site:index', [
            's' => \Core\Page::instance()->getAll()
        ]);
    }
}
