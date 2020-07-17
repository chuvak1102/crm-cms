<?php

namespace App\Client\Controller;

use App\Admin\Model\Order;
use App\Client\Model\UserDetail;
use App\Config;
use Core\BreadCrumbs;
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
        BreadCrumbs::instance()->push(['/profile' => 'История заказов']);

        return $this->render('Client:index', [
            'orders' => Order::many(Auth::instance()->current()->id, 'user_id')
        ]);
    }

    function profile(Request $request)
    {
        BreadCrumbs::instance()->push(['/profile' => 'Профиль']);

        if ($request->get('submit')) {

            $client = (object) [
                'name' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('company_name')),
                'user_name' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('name')),
                'email' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('email')),
                'phone' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('phone')),
                'delivery_date' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('delivery_date')),
                'work_time' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('work_time')),
                'address_index' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('index')),
                'city' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('city')),
                'street' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('street')),
                'house' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('house')),
                'block' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('block')),
                'office' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('office')),
                'advanced' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('comment')),
                'payment_type' => in_array($request->get('payment_type'), ['online', 'cash']) ? $request->get('payment_type') : 'cash',
                'user_id' => Auth::instance()->current()->id
            ];

            DB::update('user_detail')
                ->set([
                    'phone' => $client->phone,
                    'work_time' => $client->work_time,
                    'index' => $client->address_index,
                    'city' => $client->city,
                    'street' => $client->street,
                    'house' => $client->house,
                    'block' => $client->block,
                    'office' => $client->office,
                ])
                ->where('user_id', '=', Auth::instance()->current()->id)
                ->execute();

            DB::update('user')
                ->set([
                    'name' => $client->user_name
                ])
                ->where('id', '=', Auth::instance()->current()->id)
                ->execute();

            return $this->redirectToRoute('/profile');
        }


        return $this->render('Client:profile', [
            'client' => UserDetail::one(Auth::instance()->current()->id, 'user_id'),
            'user' => Auth::instance()->current()
        ]);
    }

    function logout()
    {
        Auth::instance()->logout();
        return $this->redirectToRoute('http://'.Config::SiteDomain);
    }
}