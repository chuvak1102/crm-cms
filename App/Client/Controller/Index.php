<?php

namespace App\Client\Controller;

use App\Config;
use Core\Controller;
use Core\JsonResponse;
use Core\Request\Request;
use Core\Session;
use Core\Auth;
use Core\Database\DB;

class Index extends Controller {

    function before()
    {
        parent::before();

        if (!Auth::instance()->logged()) {
            return $this->redirectToRoute('http://'.Config::SiteDomain);
        }
    }

    function index(Request $request)
    {
        return $this->render('Client:index', [
            'task' => []
        ]);
    }

    function logout()
    {
        Auth::instance()->logout();
        return $this->redirectToRoute('http://'.Config::SiteDomain);
    }
}