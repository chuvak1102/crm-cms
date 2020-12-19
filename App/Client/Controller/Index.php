<?php

namespace App\Client\Controller;

use App\Admin\Model\Order;
use App\Admin\Model\Product;
use App\Client\Model\UserDetail;
use App\Config;
use Core\BreadCrumbs;
use Core\Controller;
use Core\Helpers\Text;
use Core\JsonResponse;
use Core\Page;
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

        Page::instance()->push('client_name', Auth::instance()->current()->name);
    }

    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['/profile' => 'История заказов']);

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

        $orderPerMonth = DB::select(DB::expr('id'))
            ->from('order')
            ->where('user_id', '=', Auth::instance()->current()->id)
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
                ->where('order.user_id', '=', Auth::instance()->current()->id)
            )->execute()->fetch_all();

        $products = [];
        foreach ($list as $i) {
            $products[] = Product::one($i->id);
        }

        return $this->render('Client:index', [
            'orders' => Order::many(Auth::instance()->current()->id, 'user_id'),
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

        if ($request->get('face')) {

            $client = (object) [
                'name' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('name')),
                'account_r' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('account_r')),
                'account_k' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('account_k')),
                'inn' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('inn')),
                'ogrn' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('ogrn')),
                'bik' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('bik')),
                'bank' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('bank')),
                'director' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('director')),
            ];

            DB::insert('user_detail_company', [
                'user_id',
                'name',
                'account_r',
                'account_k',
                'inn',
                'ogrn',
                'bik',
                'bank',
                'director',
            ])->values([
                Auth::instance()->current()->id,
                $client->name,
                $client->account_r,
                $client->account_k,
                $client->inn,
                $client->ogrn,
                $client->bik,
                $client->bank,
                $client->director,
            ])
                ->execute();

            return $this->redirectToRoute('/profile');
        }

        if ($request->get('address')) {

            $client = (object) [
                'address' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('address')),
                'email' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('email')),
                'phone' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('phone')),
            ];

            DB::insert('user_detail_address', [
                'user_id',
                'address',
                'email',
                'phone',
            ])->values([
                Auth::instance()->current()->id,
                $client->address,
                $client->email,
                $client->phone,
            ])
                ->execute();

            return $this->redirectToRoute('/profile');
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

        return $this->render('Client:profile', [
            'client' => UserDetail::one(Auth::instance()->current()->id, 'user_id'),
            'user' => Auth::instance()->current(),
            'company' => $company,
            'address' => $address,
        ]);
    }

    function logout()
    {
        Auth::instance()->logout();
        return $this->redirectToRoute('http://'.Config::SiteDomain);
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

        return $this->redirectToRoute('/profile');
    }

    function order(Request $request)
    {
        $user = UserDetail::one(Auth::instance()->current()->id, 'user_id');
        $company = DB::select('*')->from('user_detail_company')->where('user_id', '=', Auth::instance()->current()->id)->execute()->fetch();
        $address = DB::select('*')->from('user_detail_address')->where('user_id', '=', Auth::instance()->current()->id)->execute()->fetch();

        $client = (object) [
            'name' => $company->name,
            'email' => $address->email,
            'phone' => $address->phone,
            'delivery_date' => (new \DateTime())->modify('+ 1 day')->format('d.m.Y'),
            'work_time' => $user->work_time,
            'address_index' => $user->index,
            'city' => $user->city,
            'street' => $user->street,
            'house' => $user->house,
            'block' => $user->block,
            'office' => $user->office,
            'advanced' => 'заказ совершен из личного кабинета',
            'payment_type' => 'cash',
            'user_id' => Auth::instance()->current()->id
        ];

        $number = intval(DB::select(DB::expr('max(id) id'))
            ->from('order')
            ->execute()
            ->fetch()
            ->id);
        $number = $number ? $number + 1 : 10000;

        DB::insert('order', ['id', 'number', 'status', 'status_warehouse', 'user_id'])
            ->values([$number, $number, 1, 1, $client->user_id])
            ->execute();

        DB::insert('order_detail', [
            'order_id',
            'name',
            'email',
            'phone',
            'delivery_date',
            'work_time',
            'address_index',
            'city',
            'street',
            'house',
            'block',
            'office',
            'advanced',
            'payment_type',
        ])
            ->values([
                $number,
                $client->name,
                $client->email,
                $client->phone,
                $client->delivery_date,
                $client->work_time,
                $client->address_index,
                $client->city,
                $client->street,
                $client->house,
                $client->block,
                $client->office,
                $client->advanced,
                $client->payment_type
            ])
            ->execute();

        foreach ($request->get('order') as $id => $vals) {

            if (intval($vals['checked']) && intval($vals['count'])) {

                $item = Product::one($id);

                DB::insert('order_item', [
                    'order_id',
                    'product_id',
                    'product_count',
                    'price_one',
                    'price_discount',
                    'price_with_discount',
                    'price_row_total',
                ])->values([
                    $number,
                    $id,
                    $vals['count'],
                    $item->price_site,
                    $item->getDiscount(),
                    $item->price_site - $item->getDiscount(),
                    ($item->price_site - $item->getDiscount()) * $vals['count']

                ])
                    ->execute();
            }
        }

        return $this->redirectToRoute('/');
    }
}