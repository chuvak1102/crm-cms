<?php

namespace App\Admin\Controller;

use App\Admin\Model\User;
use Core\Auth;
use Core\BreadCrumbs;
use Core\Request\Request;
use Core\Database\DB;

class Client extends Index {

    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'Клиенты']);

        $clients = DB::select('user.id','u.name', 'user.login', 'u.phone', 'u.city', 'u.street', 'u.house', 'u.block')
            ->from('user')
            ->where('role', '=', 'client')
            ->join(['user_detail', 'u'], 'left')
            ->on('u.user_id', '=', 'user.id')
            ->execute()
            ->fetch_all();

        $users = [];
        foreach ($clients as $i) {

            $user = $i;

            $company = DB::select('name')
                ->from('user_detail_company')
                ->where('user_id', '=', $i->id)
                ->limit(1)
                ->execute()
                ->fetch();

            $last = User::one($i->id);

            $user->company = $company->name;
            $user->lastOrder = $last->lastOrder()->created;

            $users[] = $user;
        }

        return $this->render('Admin:client/index', [
            'clients' => $users
        ]);
    }

    function create(Request $request)
    {
        BreadCrumbs::instance()
            ->push(['/client' => 'Клиенты'])
            ->push(['' => 'Создать']);

        if ($request->get('submit')) {

            Auth::instance()->create([
                'name' => $request->get('name'),
                'department' => 8,
                'position' => 'Клиенты',
                'login' => $request->get('login'),
                'password' => $request->get('password'),
                'role' => 'client'
            ]);

            $id = User::one($request->get('login'), 'login')->id;
            DB::insert('user_detail', ['user_id', 'name'])
                ->values([$id, $request->get('name')])
                ->execute();

            return $this->redirectToRoute('/client');
        }

        return $this->render('Admin:client/create', []);
    }
}