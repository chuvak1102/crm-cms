<?php

namespace App\Admin\Controller;

use App\Admin\Model\DictionaryValue;
use Core\Controller;
use Core\Database\Database\Exception;
use Core\Database\DB;
use Core\Helpers\DataFormatter;
use Core\JsonResponse;
use Core\Request\Request;

class Document extends Index {

    function order(Request $request)
    {
        return $this->render('Admin:document/order_check',
            $this->getCheck($request)
        );
    }

    function account(Request $request)
    {
        return $this->render('Admin:document/account_check',
            $this->getCheck($request)
        );
    }

    function sticker(Request $request)
    {
        return $this->render('Admin:document/sticker', [
            'order' => \App\Admin\Model\Order::one($request->seg(2)),
            'range' => range(1, $request->seg(3))
        ]);
    }

    private function getCheck(Request $request){
        $total = DB::select(
            DB::expr('SUM(price_row_total) total_price'),
            DB::expr('SUM(product_count) total_count'),
            DB::expr('SUM(product_count) total_count')
        )
            ->from('order_item')
            ->where('order_id', '=', $request->seg(2))
            ->execute()->fetch()->total;
        $order = \App\Admin\Model\Order::one($request->seg(2));
        $date = new \DateTime($order->created);
        $date = DataFormatter::unix_to_date($date->getTimestamp());

        return [
            'total_string' => DataFormatter::literalize($total),
            'total_price' => $total,
            'date' => $date,
            'order' => $order,
            'items' => $order->getItems()
        ];

    }
}
