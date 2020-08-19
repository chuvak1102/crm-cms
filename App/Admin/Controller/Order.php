<?php

namespace App\Admin\Controller;

use App\Admin\Model\OrderItem;
use Core\BreadCrumbs;
use Core\Controller;
use Core\Database\Database\Exception;
use Core\Database\DB;
use Core\JsonResponse;
use Core\Request\Request;
use App\Admin\Model\Order as OrderModel;

class Order extends Index {

    const statusOrderNew = 1;

    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'Заказы']);

        $page = $request->get('page', 1);
        $limit = 25;
        $offset = $limit * ($page - 1);

        $order = DB::select(DB::expr('SQL_CALC_FOUND_ROWS *'))
            ->from('order')
            ->order_by('id', 'desc')
            ->limit($limit)
            ->offset($offset);

        if ($from = $request->get('from')) {
            $from = (new \DateTime($from))->format("Y-m-d");
            $order = $order->where('created', '>=', $from);
        }

        if ($to = $request->get('to')) {
            $to = (new \DateTime($to))->format("Y-m-d");
            $order = $order->where('created', '<=', $to);
        }

        if ($number = $request->get('number')) {
            $order = $order->where('number', '=', $number);
        }

        if ($status = $request->get('status')) {
            $order = $order->where('status', '=', $status);
        }

        if ($client = $request->get('client')) {
            $users = DB::select( 'id')
                ->from('user')
                ->where('name', 'like', "%$client%")
                ->where('role', '=', 'client')
                ->execute()->fetch_all();
            $order = $order->where('user_id', 'in', array_column($users, 'id'));
        }

        // filter 2
        if ($showBy = $request->get('show')) {
            switch ($showBy) {
                case 'new' : {
                    $order = $order->where('status', '=', self::statusOrderNew);
                    break;
                }
                case 'out' : {

                    break;
                }
                case 'tod' : {
                    $from = (new \DateTime())->format("Y-m-d");
                    $order = $order->where('created', '>=', $from);
                    break;
                }
            }
        }

        $order = $order->execute()->fetch_all();
        $count = DB::select(DB::expr('FOUND_ROWS() as cnt'))->execute()->current()['cnt'];

        $orders = [];
        foreach ($order as $i) {
            $orders[] = OrderModel::one($i->id);
        }

        return $this->render('Admin:order/index', [
            'orders' => $orders,
            'pagination' => new \Core\Pagination(
                $count,
                $limit,
                3,
                $request->get('page', 1),
                "/order?from={$from}&to={$to}&number={$number}&status={$status}&client={$client}&page="
            ),
            'filter_status' => DB::select('*')->from('order_status')->execute()->fetch_all(),
            'filter' => [
                'from' => $from,
                'to' => $to,
                'number' => $number,
                'status' => $status,
                'client' => $client
            ],
            'order_today' => OrderModel::ordersTodayCount(),
            'sum_today' => OrderModel::orderSumToday(),
            'sum_month' => OrderModel::orderSumMonth()
        ]);
    }

    function edit(Request $request)
    {
        $order = \App\Admin\Model\Order::one($request->seg(2));

        BreadCrumbs::instance()
            ->push(['/order' => 'Заказы'])
            ->push(['' => 'Редактировать заказ №'.$order->number]);

        if($request->get('submit')) {
            foreach ($request->get('product') as $id => $item) {
                DB::update('order_item')
                    ->set([
                        'product_count' => intval($item['count']),
                        'price_one' => floatval($item['price_one']),
                        'price_discount' => floatval($item['discount']),
                        'price_with_discount' => floatval(floatval($item['price_one']) - floatval($item['discount'])),
                        'price_row_total' => floatval((floatval($item['price_one']) - floatval($item['discount'])) * floatval($item['count']))
                    ])
                    ->where('order_id', '=', $request->seg(2))
                    ->where('product_id', '=', $id)
                    ->execute();
            }
            DB::update('order')
                ->set([
                    'status' => $request->get('status_office'),
                    'status_warehouse' => $request->get('status_warehouse'),
                    'delivery_company' => $request->get('delivery_company'),
                    'delivery_self' => $request->get('delivery_self'),
                    'manager' => $request->get('manager'),
                    'packing' => $request->get('packing'),
                ])
                ->where('id', '=', $request->seg(2))
                ->execute();

            return $this->redirectToRoute($request->uri());
        }

        $total = DB::select(DB::expr('SUM(price_row_total) price'))
            ->from('order_item')
            ->where('order_id', '=', $request->seg(2))
            ->execute()->fetch()->price;

        $users = DB::select('id', 'name', 'role')
            ->from('user')
            ->where('role', 'in', ['manager', 'packing'])
            ->execute()
            ->fetch_all();

        return $this->render('Admin:order/edit', [
            'items' => OrderItem::many($request->seg(2), 'order_id'),
            'order' => $order,
            'total' => $total,
            'status_office' => DB::select('*')->from('order_status')->execute()->fetch_all(),
            'status_warehouse' => DB::select('*')->from('order_warehouse')->execute()->fetch_all(),
            'delivery_company' => DB::select('*')->from('delivery_company')->execute()->fetch_all(),
            'delivery_self' => DB::select('*')->from('delivery_self')->execute()->fetch_all(),
            'users' => $users
        ]);
    }

    function setClient(Request $request)
    {
        $client = intval($request->get('client'));
        $order = intval($request->get('order'));

        if ($client && $order) {
            DB::update('order')
                ->set(['user_id' => $client])
                ->where('id', '=', $order)
                ->execute();
        }

        return new JsonResponse([$client, $order]);
    }

    function getClient(Request $request)
    {
        $str = $request->get('str');
        $client = DB::select('*')->from('user_detail')
            ->where('name', 'like', DB::expr("'%{$str}%'"))
            ->limit(15)
            ->execute()
            ->fetch_all();

        return new JsonResponse($client);
    }

}
