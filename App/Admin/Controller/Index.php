<?php

namespace App\Admin\Controller;

use App\Config;
use Core\Controller;
use Core\Page;
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

        // не залогинен - нахуй
        if (!Auth::instance()->logged()) {
            if (!in_array($_SERVER['REQUEST_URI'], ['/login'])) {
                Session::instance()->set('return_location', $_SERVER['REQUEST_URI']);
            }
            $this->login(New Request());
            exit();
        }

        // роли нет - нахуй
        if (!\App\Admin\Model\User::one(Auth::instance()->current()->id)->canAccessCRM()) {
            $this->redirectToRoute('http://' . Config::SiteDomain);
        }

        Page::instance()->push('user',
            \App\Admin\Model\User::one(Auth::instance()->current()->id)
        );

        Page::instance()->push('menus', \App\Admin\Model\Content::all());
        if (strpos($_SERVER['REQUEST_URI'], '/content/'.(New Request())->seg(1)) >= 0) {
            Page::instance()->push('content_id', (New Request())->seg(1));
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

                $url = Session::instance()->get('return_location');
                Session::instance()->remove('return_location');

                return $this->redirectToRoute($url ? $url : '/');
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

    function notFound()
    {
        return $this->render('Admin:404');
    }

    function forbidden()
    {
        return $this->render('Admin:403');
    }
}