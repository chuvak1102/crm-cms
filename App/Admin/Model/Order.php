<?php

namespace App\Admin\Model;

use App\Site\Controller\Index;
use Core\Database\DB;
use Core\Model\Model;

/**
 * table = order
 */
class Order extends Model {

    function getStatus()
    {
        return OrderStatus::one($this->status);
    }

    function getStatusWarehouse()
    {
        return OrderWarehouse::one($this->status_warehouse);
    }

    function getTotalPrice()
    {
        $total = 0;

        foreach (OrderItem::many($this->id, 'order_id') as $i) {
            $total += Index::calculate(Product::one($i->product_id), $i->product_count);
        }

        return $total;
    }

    function getClient()
    {
        $i = OrderDetail::one($this->id, 'order_id');
        return "{$i->name}, {$i->email}, {$i->phone}";
    }

    function getDetail()
    {
        return OrderDetail::one($this->id, 'order_id');
    }

    function getAddress()
    {
        $i = OrderDetail::one($this->id, 'order_id');

        return "{$i->city}, {$i->street}, {$i->house}/{$i->block}";
    }

    function getItems()
    {
        return OrderItem::many($this->id, 'order_id');
    }

    static function ordersTodayCount()
    {
        $today = (new \DateTime())->format("Y-m-d");

        $cnt = DB::select(DB::expr('count(id) as cnt'))
            ->from('order')
            ->where('created', '>', $today)
            ->execute()
            ->fetch()
            ->cnt;

        return $cnt ? $cnt : 0;
    }

    static function orderSumToday()
    {
        $today = (new \DateTime())->format("Y-m-d");

        $sum = DB::select(DB::expr('SUM(price_row_total) as sum'))
            ->join('order_item')
            ->on('order_item.order_id', '=', 'order.id')
            ->from('order')
            ->where('created', '>', $today)
            ->execute()
            ->fetch()
            ->sum;

        return floatval($sum ? $sum : 0);
    }

    static function orderSumMonth()
    {
        $today = (new \DateTime())->format("Y-m");

        $sum = DB::select(DB::expr('SUM(price_row_total) as sum'))
            ->join('order_item')
            ->on('order_item.order_id', '=', 'order.id')
            ->from('order')
            ->where('created', '>', $today)
            ->execute()
            ->fetch()
            ->sum;

        return floatval($sum ? $sum : 0);
    }

}