<?php

namespace App\Admin\Controller;

use App\Admin\Model\Order;
use App\Admin\Model\Product;
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

    function cabinet(Request $request)
    {
        $user = User::one(intval($request->seg(2)));

        BreadCrumbs::instance()->push(['' => 'Личный кабинет - '.$user->name]);

        $company = DB::select('*')
            ->from('user_detail_company')
            ->where('user_id', '=', $user->id)
            ->execute()
            ->fetch_all();

        $address = DB::select('*')
            ->from('user_detail_address')
            ->where('user_id', '=', $user->id)
            ->execute()
            ->fetch_all();

        $orderPerMonth = DB::select(DB::expr('id'))
            ->from('order')
            ->where('user_id', '=', $user->id)
            ->where('created', '>=', DB::expr('(now() - INTERVAL 1 month)'))
            ->execute()
            ->count();

        $moneyPerMonth = intval(DB::select(DB::expr('sum(price_one * product_count) sum'))
            ->from('order_item')
            ->join('order')
            ->on('order.id', '=', 'order_item.order_id')
            ->where('order.created', '>=', DB::expr('(now() - INTERVAL 1 month)'))
            ->execute()
            ->get('sum'));

        $discountPerMonth = intval(DB::select(DB::expr('sum(price_discount * product_count) sum'))
            ->from('order_item')
            ->join('order')
            ->on('order.id', '=', 'order_item.order_id')
            ->where('order.created', '>=', DB::expr('(now() - INTERVAL 1 month)'))
            ->execute()
            ->get('sum'));

        $itemsPerMonth = intval(DB::select(DB::expr('sum(product_count) sum'))
            ->from('order_item')
            ->join('order')
            ->on('order.id', '=', 'order_item.order_id')
            ->where('order.created', '>=', DB::expr('(now() - INTERVAL 1 month)'))
            ->execute()
            ->get('sum'));

        $moneyPerYear = intval(DB::select(DB::expr('sum(price_one * product_count) sum'))
            ->from('order_item')
            ->join('order')
            ->on('order.id', '=', 'order_item.order_id')
            ->where('order.created', '>=', DB::expr('(now() - INTERVAL 12 month)'))
            ->execute()
            ->get('sum'));

        $list = DB::select('*')
            ->from('product')
            ->where('id', 'in',
                DB::select('product_id')
                    ->distinct(true)
                    ->from('order_item')
                    ->join('order')
                    ->on('order_item.order_id', '=', 'order.id')
                    ->where('order.user_id', '=', $user->id)
            )->execute()->fetch_all();

        $products = [];
        foreach ($list as $i) {
            $products[] = Product::one($i->id);
        }

        return $this->render('Admin:client/cabinet', [
            'orders' => Order::many($user->id, 'user_id'),
            'company' => $company,
            'address' => $address,
            'order_per_month' => $orderPerMonth,
            'money_per_month' => $moneyPerMonth,
            'discount_per_month' => $discountPerMonth,
            'items_per_month' => $itemsPerMonth,
            'money_per_year' => $moneyPerYear,
            'product' => $products
        ]);
    }
}