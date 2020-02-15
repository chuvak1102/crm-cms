<?php

namespace App\Admin\Controller;

use Core\Auth;
use Core\Request\Request;
use Core\DB;

class User extends Index {

    /**
     * @return bool
     * @throws \Exception
     */
    function index()
    {
        $data = DB::select("
            select * from department join user on department.id = user.department
        ");

        $departments = DB::select("
            select * from department
        ");

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
        DB::delete("delete from user where id = {$id}");

        $this->redirectToRoute("/user");
    }

}