<?php

namespace App\Admin\Controller;

use App\Admin\Model\OrderItem;
use Core\Controller;
use Core\Database\Database\Exception;
use Core\Database\DB;
use Core\JsonResponse;
use Core\Request\Request;
use App\Admin\Model\Order as OrderModel;

class Order extends Index {

    function index(Request $request)
    {
        $page = $request->get('page', 1);
        $limit = 50;
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
        ]);
    }

    function edit(Request $request)
    {
        if($request->get('submit')) {
            foreach ($request->get('product') as $id => $item) {
                DB::update('order_item')
                    ->set([
                        'product_count' => $item['count'],
                        'price_one' => $item['price_one'],
                        'price_discount' => $item['discount'],
                        'price_with_discount' => $item['price_one'] - $item['discount'],
                        'price_row_total' => ($item['price_one'] - $item['discount']) * $item['count'],
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
            'order' => \App\Admin\Model\Order::one($request->seg(2)),
            'total' => $total,
            'status_office' => DB::select('*')->from('order_status')->execute()->fetch_all(),
            'status_warehouse' => DB::select('*')->from('order_warehouse')->execute()->fetch_all(),
            'delivery_company' => DB::select('*')->from('delivery_company')->execute()->fetch_all(),
            'delivery_self' => DB::select('*')->from('delivery_self')->execute()->fetch_all(),
            'users' => $users
        ]);
    }

}
