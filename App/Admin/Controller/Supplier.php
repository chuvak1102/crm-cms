<?php

namespace App\Admin\Controller;

use App\Admin\Model\DictionaryValue;
use App\Admin\Model\SupplierOrder;
use App\Admin\Model\SupplierOrderItem;
use App\Admin\Model\SupplierOrderStatus;
use Core\BreadCrumbs;
use Core\JsonResponse;
use Core\Request\Request;
use Core\Database\DB;
use \App\Admin\Model\Product;
use App\Admin\Model\Supplier as SupplierModel;

class Supplier extends Index {

    function list(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'Поставщики']);

        return $this->render('Admin:supplier/list', [
            'supplier' => DB::select('*')
                ->from('supplier')
                ->execute()
                ->fetch_all()
        ]);
    }

    function listEdit(Request $request)
    {
        if ($request->get('submit')) {

            DB::update('supplier')
                ->set([
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'ooo' => $request->get('ooo'),
                    'inn' => $request->get('inn'),
                    'warehouse_address' => $request->get('warehouse_address'),
                    'work_time' => $request->get('work_time'),
                    'fio' => $request->get('fio'),
                    'phone' => $request->get('phone'),
            ])->where('id', '=', $request->seg(3))
                ->execute();

            return $this->redirectToRoute('/supplier/list');
        }

        return $this->render('Admin:supplier/list_edit', [
            'supplier' => SupplierModel::one($request->seg(3))
        ]);
    }

    function listDelete(Request $request)
    {
        DB::delete('supplier')
            ->where('id', '=', $request->seg(3))
            ->execute();

        $this->redirectToRoute('/supplier/list');
    }

    function order(Request $request)
    {
        $supplier = $request->get('id');
        $supplier = \App\Admin\Model\Supplier::one($supplier);
        BreadCrumbs::instance()
            ->push(['/supplier/order' => 'Заявки поставщикам'])
            ->push(['' => $supplier->name]);

        $orders = SupplierOrder::all('desc');

        if ($request->get('id')) {
            $orders = DB::select('*')
                ->from('supplier_order')
                ->where('supplier', '=', $supplier->id)
                ->execute()
                ->fetch_all();
            $all = [];
            foreach ($orders as $i) {
                $all[] = SupplierOrder::one($i->id);
            }
            $orders = $all;
        }

        return $this->render('Admin:supplier/order', [
            'order' => $orders,
            'finished' => SupplierOrder::STATUS_CLOSED
        ]);
    }

    function edit(Request $request)
    {
        $order = SupplierOrder::one($request->seg(3));

        BreadCrumbs::instance()->push(['' => 'Заявка поставщику - '.$order->getSupplier()->name]);
        BreadCrumbs::instance()->push(['' => 'Заявка от '.(new \DateTime($order->created))->format('d.m.Y H:i')]);

        if ($request->get('submit')) {

            foreach ($request->get('fact') as $id => $value) {

                DB::update('supplier_order_item')
                    ->set(['fact' => $value])
                    ->where('order_id', '=', $request->seg(3))
                    ->where('product_id', '=', $id)
                    ->execute();

                $product = Product::one($id);

                if (!$product->count_current) {

                    $dv = new DictionaryValue();
                    $dv->key = 5;
                    $dv->value = $value;
                    $dv->external_id = $id;
                    $dv->external_table = 'product';
                    $dv->external_column = 'count_current';
                    $dv->save();

                    DB::update('product')
                        ->set(['count_current' => $dv->id])
                        ->where('id', '=', $id)
                        ->execute();
                }

                if ($product->count_current) {
                    DB::update('dictionary_value')
                        ->set(['value' => DB::expr("value + {$value}")])
                        ->where('id', '=', $product->count_current)
                        ->execute();
                }
            }

            if ($request->get('avail')) {
                foreach ($request->get('avail') as $id => $avail) {

                    DB::update('supplier_order_item')
                        ->set(['avail' => 1])
                        ->where('order_id', '=', $request->seg(3))
                        ->where('product_id', '=', $id)
                        ->execute();
                }
            }

            DB::update('supplier_order')
                ->set([
                    'status' => $request->get('status'),
                    'comment' => $request->get('comment'),
                    'mail_to' => $request->get('mail_to')
                ])
                ->where('id', '=', $request->seg(3))
                ->execute();

            return $this->redirectToRoute('/supplier/order');
        }

        return $this->render('Admin:supplier/order_edit', [
            'items' => SupplierOrderItem::many($request->seg(3), 'order_id'),
            'order' => $order,
            'status' => SupplierOrderStatus::all(),
            'open' => SupplierOrder::STATUS_NEW
        ]);
    }

    /**
     * В заявке поставщика при добавлении товара в заявку
     */
    function extend(Request $request)
    {
        $order = SupplierOrder::one($request->seg(3));

        $products = [];
        foreach ($request->get('count') as $product => $cnt) {

            $cnt = current($cnt);
            $products[] = $product;

            DB::insert('supplier_order_item', [
                'cnt', 'fact', 'avail', 'price', 'product_id', 'order_id'
            ])
                ->values([
                    $cnt,
                    $cnt,
                    0,
                    0,
                    $product,
                    $order->id
                ])->execute();

        }

        $order->sendEmailToSupplierModify($products);

        $this->redirectToRoute('/supplier/order');
    }
}