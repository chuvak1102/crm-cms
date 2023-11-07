<?php

namespace App\Admin\Controller;

use App\Admin\Model\OrderItem;
use App\Admin\Model\OrderStatus;
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
        $limit = 100;
        $offset = $limit * ($page - 1);

        $order = DB::select(DB::expr('SQL_CALC_FOUND_ROWS *'))
            ->from('order')
            ->order_by('order.id', 'desc')
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
            $order = $order
                ->join(['order_detail', 'od'], 'left')
                ->on('od.order_id', '=', 'order.id')
                ->where_open()
                ->or_where_open()
                ->or_where('od.name', 'like', "%$client%")
                ->or_where('od.email', 'like', "%$client%")
                ->or_where('od.city', 'like', "%$client%")
                ->or_where('od.street', 'like', "%$client%")
                ->or_where('od.advanced', 'like', "%$client%")
                ->or_where_close()
                ->where_close();
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
                    $from = (new \DateTime())->format('Y-m-d');
                    $order = $order->where('created', '>=', $from);
                    break;
                }
                case 'tom' : {

                    // доставка на завтра - все заказы за сегодня у которых created до 16ч
                    $from = (new \DateTime())->format('Y-m-d').' 00:00:00';
                    $to = (new \DateTime())->format('Y-m-d').' 15:59:59';

                    $order = $order->where('created', 'between', DB::expr("'{$from}' and '{$to}'"));
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

        $driver = DB::select('*')
            ->from('user')
            ->where('department', '=', \App\Admin\Model\User::ROLE_DRIVER)
            ->execute()
            ->fetch_all();

        $statuses = DB::select('*')
            ->from('order_status')
            ->where('category', '=', 'warehouse')
            ->execute()
            ->fetch_all();

        return $this->render('Admin:order/index', [
            'orders' => $orders,
            'pagination' => new \Core\Pagination(
                $count,
                $limit,
                3,
                $request->get('page', 1),
                "/order?from={$from}&to={$to}&number={$number}&status={$status}&client={$client}&page={$page}"
            ),
            'filter_status' => DB::select('*')
                ->from('order_status')
                ->where('category', '=', 'office')
                ->execute()
                ->fetch_all(),
            'filter' => [
                'from' => $from,
                'to' => $to,
                'number' => $number,
                'status' => $status,
                'client' => $client
            ],
            'order_today' => OrderModel::ordersTodayCount(),
            'sum_today' => OrderModel::orderSumToday(),
            'sum_month' => OrderModel::orderSumMonth(),
            'drivers' => $driver,
            'statuses' => $statuses
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

            DB::update('order_detail')
                ->set([
                    'sticker' => $request->get('sticker')
                ])
                ->where('order_id', '=', $request->seg(2))
                ->execute();

            return $this->redirectToRoute('/order');
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

        $statusOffice = DB::select('order_status.*')
            ->from('order_status')
            ->where('order_status.category', '=', 'office')
            ->execute()
            ->fetch_all();
        $statusTo = DB::select('status_to')
            ->from('order_status_to_status')
            ->where('status_from', '=', $order->status)
            ->execute()
            ->fetch_all();
        $statusTo = array_column($statusTo,'status_to');
        $statusWarehouse = DB::select('order_status.*')
            ->from('order_status')
//            ->where('order_status.id', 'in', $statusTo ? $statusTo : [0])
            ->where('category', '=', 'warehouse')
            ->execute()
            ->fetch_all();

        return $this->render('Admin:order/edit', [
            'items' => OrderItem::many($request->seg(2), 'order_id'),
            'order' => $order,
            'total' => $total,
            'status_office' => $statusOffice,
            'status_warehouse' => $statusWarehouse,
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

    function warehouse(Request $request)
    {
        if ($request->get('warehouse')) {
            if ($request->get('id')) {
                DB::update('order')
                    ->set([
                        'status_warehouse' => $request->get('warehouse'),
                    ])
                    ->where('id', 'in', $request->get('id'))
                    ->execute();
            }
        }
    }
    function driver(Request $request)
    {
        if ($request->get('driver')) {
            if ($request->get('id')) {
                DB::update('order_detail')
                    ->set([
                        'driver' => $request->get('driver'),
                    ])
                    ->where('order_id', 'in', $request->get('id'))
                    ->execute();
            }
        }
    }

    function today(Request $request)
    {
        BreadCrumbs::instance()
            ->push(['/order' => 'Заказы'])
            ->push(['' => 'Товары на сегодня']);

        $from = (new \DateTime())->format('Y-m-d');
        $to = (new \DateTime())->format('Y-m-d').' 16:00:00';

        $orders = DB::select('id')
            ->from('order')
            ->where('created', 'between', DB::expr("'{$from} 00:00:00' and '{$to}'"))
            ->execute()
            ->fetch_all();

        if ($request->get('pdf')) {

            return $this->PDF(array_column($orders, 'id'));
        }

        return $this->render('Admin:order/today', [
            'items' => $this->list(array_column($orders, 'id')),
            'href' => '/order/today?pdf=1'
        ]);

    }

    function tomorrow(Request $request)
    {
        BreadCrumbs::instance()
            ->push(['/order' => 'Заказы'])
            ->push(['' => 'Товары на завтра']);

        $from = (new \DateTime())->format('Y-m-d').' 15:59:59';
        $to = (new \DateTime())->format('Y-m-d').' 23:59:59';

        $orders = DB::select('id')
            ->from('order')
            ->where('created', 'between', DB::expr("'{$from} 00:00:00' and '{$to}'"))
            ->execute()
            ->fetch_all();

        if ($request->get('pdf')) {

            return $this->PDF(array_column($orders, 'id'));
        }

        return $this->render('Admin:order/today', [
            'items' => $this->list(array_column($orders, 'id')),
            'href' => '/order/tomorrow?pdf=1'
        ]);
    }

    function list($orders)
    {
        if (!$orders) return [];

        $items = DB::select('*')
            ->distinct(1)
            ->from('order_item')
            ->where('order_id', 'in', $orders)
            ->execute()->fetch_all();

        $product = [];
        if ($items) {

            foreach ($items as $num => $i) {

                /** @var \App\Admin\Model\Product $item */
                $product[] = \App\Admin\Model\Product::one($i->product_id);
            }
        }

        return $product;
    }

    function PDF($orders = [])
    {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->writeHTML("<html>");
        $mpdf->writeHTML("
            <head>
                <style>
                    *{box-sizing: border-box; margin: 0;padding: 0}
                    tr,th,td{border: 1px solid; padding: 5px}
                    table{border-collapse: collapse}
                </style>
            </head>
        ");

        $mpdf->writeHTML("<table>");
        $mpdf->writeHTML("
            <tr>
                <th>Категория</th>
                <th>Название</th>
                <th>Количество</th>
            </tr>
        ");

        if ($orders) {
            $items = DB::select('*')
                ->distinct(1)
                ->from('order_item')
                ->where('order_id', 'in', $orders)
                ->execute()->fetch_all();

            if ($items) {

                foreach ($items as $num => $i) {

                    /** @var \App\Admin\Model\Product $item */
                    $item = \App\Admin\Model\Product::one($i->product_id);
                    $category = $item->getCategory();

                    $mpdf->writeHTML("
                        <tr>
                            <td>{$category->name}</td>
                            <td>{$item->name}</td>
                            <td>{$i->product_count}</td>
                        </tr>
                    ");
                }
            }

        }

        $mpdf->writeHTML("</table>");

        $mpdf->Output();
    }

    function remove(Request $request)
    {
        $order = $request->seg(2);
        $item = $request->seg(4);

        DB::delete('order_item')
            ->where('product_id', '=', intval($item))
            ->where('order_id', '=', intval($order))
            ->execute();

        return $this->redirectToRoute("/order/edit/{$order}");
    }
}
