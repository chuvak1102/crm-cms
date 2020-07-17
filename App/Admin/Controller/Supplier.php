<?php

namespace App\Admin\Controller;

use App\Admin\Model\DictionaryValue;
use App\Admin\Model\SupplierOrder;
use App\Admin\Model\SupplierOrderItem;
use App\Admin\Model\SupplierOrderStatus;
use Core\Request\Request;
use Core\Database\DB;
use \App\Admin\Model\Product;

class Supplier extends Index {

    function list(Request $request)
    {
        return $this->render('Admin:supplier/list', [
            'supplier' => DB::select('*')
                ->from('supplier')
                ->execute()
                ->fetch_all()
        ]);
    }

    function order(Request $request)
    {
        return $this->render('Admin:supplier/order', [
            'order' => SupplierOrder::all('desc')
        ]);
    }

    function edit(Request $request)
    {
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
                ->set(['status' => $request->get('status')])
                ->where('id', '=', $request->seg(3))
                ->execute();

            return $this->redirectToRoute('/supplier/order');
        }

        return $this->render('Admin:supplier/order_edit', [
            'items' => SupplierOrderItem::many($request->seg(3), 'order_id'),
            'order' => SupplierOrder::one($request->seg(3)),
            'status' => SupplierOrderStatus::all(),
        ]);
    }
}