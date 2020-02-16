<?php

namespace App\Admin\Controller;

use Core\Controller;
use Core\Request\Request;
use Core\Session;
use Core\Auth;
use Core\Database\DB;

class Index extends Controller {

    const RoleUser = 'user';
    const RoleAdmin = 'admin';
    const TaskStatusNew = 1;

    function before()
    {
        parent::before();

        if (!Auth::instance()->logged()) {
            $this->login(New Request());
            exit();
        }
    }

    function index(Request $request)
    {
        $taskNew = DB::select('id')
            ->from('task')
            ->where('status', '=', self::TaskStatusNew)
            ->execute()->count();

        return $this->render('Admin:index', [
            'task' => $taskNew
        ]);
    }

    /**
     * @param Request $request
     * @throws \Exception
     */
    function login(Request $request)
    {
        if ($request->get('login') && $request->get('password')) {

            if (Auth::instance()->login($request->get('login'), $request->get('password'))) {
                return $this->redirectToRoute('/');
            } else {
                return $this->redirectToRoute('/login');
            }
        }

        return $this->render('Admin:login');
    }

    function logout()
    {
        Auth::instance()->logout();
        return $this->redirectToRoute('/login');
    }

}