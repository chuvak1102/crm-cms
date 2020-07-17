<?php

namespace App\Admin\Controller;

use Core\Auth;
use Core\Request\Request;
use Core\Database\DB;

class User extends Index {

    /**
     * @return bool
     * @throws \Exception
     */
    function index(Request $request)
    {
        $data = DB::select('user.id', 'user.name', 'department.alias', 'user.position', 'user.login', 'user.department')
            ->from('department')
            ->join('user')
            ->on('department.id', '=', 'user.department')
            ->execute()
            ->fetch_all();

        $departments = DB::select('*')
            ->from('department')
            ->execute()
            ->fetch_all();

        return $this->render('Admin:user/index', [
            'users' => $data,
            'departments' => $departments
        ]);
    }

    /**
     * @param Request $request
     * @throws \Exception
     */
    function create(Request $request)
    {
        Auth::instance()->create([
            'name' => $request->get('name'),
            'department' => $request->get('department'),
            'position' => $request->get('position'),
            'login' => $request->get('login'),
            'password' => $request->get('password'),
            'role' => 'manager'
        ]);

        $this->redirectToRoute("/user");
    }

    /**
     * @param Request $request
     * @throws \Exception
     */
    function delete(Request $request)
    {
        $id = intval(\Core\Router::seg(2));

        DB::delete('user')
            ->where('user.id', '=', $id)
            ->execute();

        $this->redirectToRoute("/user");
    }

}