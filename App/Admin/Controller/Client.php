<?php

namespace App\Admin\Controller;

use App\Admin\Model\Order;
use App\Admin\Model\Product;
use App\Admin\Model\User;
use App\Client\Model\UserDetail;
use App\Client\Model\UserDetailAddress;
use Core\Auth;
use Core\BreadCrumbs;
use Core\Request\Request;
use Core\Database\DB;

class Client extends Index {

    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'Клиенты']);

        $clients = DB::select('user.id','u.name', 'user.login', 'u.phone', 'u.email')
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

            /** @var User $last */
            $last = User::one($i->id);

            $user->company = $company->name;
            $user->lastOrder = $last->lastOrder()->created;
            $user->ordersPerMonth = $last->ordersPerMonth();

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

    function profile(Request $request)
    {
        BreadCrumbs::instance()->push(['/profile' => 'Профиль']);

        if ($request->get('main')) {

            $client = (object) [
                'name' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('name')),
                'fio' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('fio')),
                'phone' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('phone')),
                'email' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('email')),
                'user_id' => Auth::instance()->current()->id
            ];

            DB::update('user_detail')
                ->set([
                    'name' => $client->name,
                    'fio' => $client->fio,
                    'phone' => $client->phone,
                    'email' => $client->email,
                ])
                ->where('user_id', '=', Auth::instance()->current()->id)
                ->execute();

            DB::update('user')
                ->set([
                    'name' => $client->name
                ])
                ->where('id', '=', Auth::instance()->current()->id)
                ->execute();

            return $this->redirectToRoute('/client/profile/'.$request->seg(2));
        }

        if ($request->get('face')) {

            $dover = $request->get('dover') ? 'по доверенности '.$request->get('dover') : 'на основании устава';

            $client = (object) [
                'company_type' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('company_type')),
                'name' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('name')),
                'inn' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('inn')),
                'ogrn' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('ogrn')),
                'firm_address' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('firm_address')),
                'fact_address' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('fact_address')),
                'account_r' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('account_r')),
                'account_k' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('account_k')),
                'bik' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('bik')),
                'bank' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('bank')),
                'director' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('director')),
                'dover' => $dover
            ];

            DB::insert('user_detail_company', [
                'user_id',
                'company_type',
                'name',
                'inn',
                'ogrn',
                'firm_address',
                'fact_address',
                'account_r',
                'account_k',
                'bik',
                'bank',
                'director',
                'dover'
            ])->values([
                Auth::instance()->current()->id,
                $client->company_type,
                $client->name,
                $client->inn,
                $client->ogrn,
                $client->firm_address,
                $client->fact_address,
                $client->account_r,
                $client->account_k,
                $client->bik,
                $client->bank,
                $client->director,
                $client->dover,
            ])
                ->execute();

            return $this->redirectToRoute('/client/profile/'.$request->seg(2));
        }

        if ($request->get('address')) {

            $client = (object) [
                'company' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('company')),
                'name' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('name')),
                'city' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('city')),
                'street' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('street')),
                'house' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('house')),
                'block' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('block')),
                'phone' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('phone')),
                'work_time' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('work_time')),
                'pass' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('pass')),
                'comment' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('comment')),
            ];

            DB::insert('user_detail_address', [
                'user_id',
                'user_detail_company_id',
                'company',
                'name',
                'city',
                'street',
                'house',
                'block',
                'phone',
                'work_time',
                'pass',
                'comment',
            ])->values([
                Auth::instance()->current()->id,
                $request->get('company'),
                $client->company,
                $client->name,
                $client->city,
                $client->street,
                $client->house,
                $client->block,
                $client->phone,
                $client->work_time,
                $client->pass,
                $client->comment,
            ])
                ->execute();

            return $this->redirectToRoute('/client/profile/'.$request->seg(2));
        }

        $company = DB::select('*')
            ->from('user_detail_company')
            ->where('user_id', '=', Auth::instance()->current()->id)
            ->execute()
            ->fetch_all();

        $address = DB::select('*')
            ->from('user_detail_address')
            ->where('user_id', '=', Auth::instance()->current()->id)
            ->execute()
            ->fetch_all();
        $addresses = [];
        foreach ($address as $i) {
            $addresses[] = UserDetailAddress::one($i->id);
        }

        return $this->render('Admin:client/profile', [
            'client' => UserDetail::one(Auth::instance()->current()->id, 'user_id'),
            'user' => Auth::instance()->current(),
            'company' => $company,
            'address' => $addresses,
        ]);
    }

    function remove(Request $request)
    {
        if ($company = $request->get('face')) {
            DB::delete('user_detail_company')
                ->where('id', '=', intval($company))
                ->where('user_id', '=', Auth::instance()->current()->id)
                ->execute();
        }

        if ($company = $request->get('address')) {
            DB::delete('user_detail_address')
                ->where('id', '=', intval($company))
                ->where('user_id', '=', Auth::instance()->current()->id)
                ->execute();
        }

        return $this->redirectToRoute('/client/profile/'.$request->seg(2));
    }
}