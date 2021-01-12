<?php

namespace App\Admin\Controller;

use Core\BreadCrumbs;
use Core\JsonResponse;
use Core\Request\Request;
use Core\Database\DB;

class Critical extends Index {

    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'Остатки']);

        if ($request->get('submit')) {

            $supplier = $request->get('submit');
            $items = $request->get('count');
            $total = 0;

            foreach ($items as $id => $count) {

                $total += \App\Site\Controller\Index::calculate(\App\Admin\Model\Product::one($id), $count);
            }

            DB::insert('supplier_order', ['created', 'status', 'total', 'supplier'])
                ->values([DB::expr('now()'), 1, $total, $supplier])
                ->execute();

            foreach ($items as $id => $count) {

                $price = \App\Site\Controller\Index::calculate(\App\Admin\Model\Product::one($id), $count);
                $order = DB::select(DB::expr('max(id) id'))->from('supplier_order')->execute()->fetch();

                DB::insert('supplier_order_item', ['cnt', 'fact', 'avail', 'price', 'product_id', 'order_id'])
                    ->values([$count, 0, 0, $price, $id, $order->id])
                    ->execute();
            }

            return $this->redirectToRoute('/critical');
        }

        $all = $this->suppliers();

        if ($supplier = $request->get('all')) {

            $all = $all->where('s.id', '=', $supplier);

        } else {

            $all = $all
                ->where('product.active', '=', 1)
                ->where('current.value', '>', 0)
                ->where('minimal.value', '>', 0)
                ->where(DB::expr('current.value + 0'), '<', DB::expr('minimal.value + 0'));
        }

        $all = $all->execute()->fetch_all();

        $suppliers = [];
        foreach ($all as $i) {
            $suppliers[$i->supplier_id][] = $i;
        }

        return $this->render('Admin:critical/index', [
            'suppliers' => $suppliers
        ]);
    }

    /**
     * @param Request $request
     * @return bool
     * @throws \Exception
     */
    function matrix(Request $request)
    {
        BreadCrumbs::instance()->push(['/critical' => 'Остатки']);

        if ($request->get('submit')) {

            $supplier = $request->get('submit');
            $items = $request->get('count');
            $total = 0;

            foreach ($items as $id => $count) {

                $total += \App\Site\Controller\Index::calculate(\App\Admin\Model\Product::one($id), $count);
            }

            DB::insert('supplier_order', ['created', 'status', 'total', 'supplier'])
                ->values([DB::expr('now()'), 1, $total, $supplier])
                ->execute();

            foreach ($items as $id => $count) {

                $price = \App\Site\Controller\Index::calculate(\App\Admin\Model\Product::one($id), $count);
                $order = DB::select(DB::expr('max(id) id'))->from('supplier_order')->execute()->fetch();

                DB::insert('supplier_order_item', ['cnt', 'fact', 'avail', 'price', 'product_id', 'order_id'])
                    ->values([$count, 0, 0, $price, $id, $order->id])
                    ->execute();
            }

            return $this->redirectToRoute('/critical');
        }

        if ($supplier = $request->get('all')) {

            BreadCrumbs::instance()->push(['' => \App\Admin\Model\Supplier::one($supplier)->name]);

            $all = $this->suppliers();
            $all = $all->where('s.id', '=', $supplier);
            $all = $all->execute()->fetch_all();

            $suppliers = [];
            foreach ($all as $i) {

                $product = \App\Admin\Model\Product::one($i->id);

                $i->monthlySales = $product->monthlySales();
                $i->image = $product->image;

                $suppliers[$i->supplier_id][] = $i;
            }

            return $this->render('Admin:critical/index', [
                'suppliers' => $suppliers
            ]);
        }

        $all = $this->suppliers()
//            ->where('product.active', '=', 1)
            ->order_by('s.name')
            ->execute()
            ->fetch_all();

        $suppliers = [];
        foreach ($all as $i) {
            $suppliers[$i->supplier_id]['products'][] = $i;
            $suppliers[$i->supplier_id]['supplier'] = $i->supplier_id;
            $suppliers[$i->supplier_id]['name'] = $i->supplier;

            // закончилось
            if ($i->cur == 0) {
                if (!isset($suppliers[$i->supplier_id]['finished'])) {
                    $suppliers[$i->supplier_id]['finished'] = 1;
                } else {
                    $suppliers[$i->supplier_id]['finished']++;
                }
            }
            // критично
            if ($i->cur < $i->min) {
                if (!isset($suppliers[$i->supplier_id]['critical'])) {
                    $suppliers[$i->supplier_id]['critical'] = 1;
                } else {
                    $suppliers[$i->supplier_id]['critical']++;
                }
            }
            // всего
            if (!isset($suppliers[$i->supplier_id]['total'])) {
                $suppliers[$i->supplier_id]['total'] = 1;
            } else {
                $suppliers[$i->supplier_id]['total']++;
            }


        }

        return $this->render('Admin:critical/matrix', [
            'suppliers' => $suppliers
        ]);
    }

    function items(Request $request)
    {
        $id = $request->get('id');
        $str = $request->get('str');

        $all = DB::select(
            'product.id',
            'product.name',
            'product.image',
            ['current.value', 'cur'],
            ['minimal.value', 'min'],
            ['s.name', 'supplier'],
            ['s.id', 'supplier_id'],
            [
                DB::select(DB::expr('max(created) as last_ordered'))
                    ->from(['supplier_order', 'so'])
                    ->join(['supplier_order_item', 'soi'])
                    ->on('soi.order_id', '=', 'so.id')
                    ->where('soi.product_id', '=', DB::expr('product.id')), 'last_order'
            ]
        )
            ->from('product')
            ->join(['dictionary_value', 'current'])
            ->on('current.id', '=', 'product.count_current')
            ->join(['dictionary_value', 'minimal'])
            ->on('minimal.id', '=', 'product.count_minimal')
            ->join(['product_to_supplier', 'pts'])
            ->on('pts.product_id', '=', 'product.id')
            ->join(['supplier', 's'])
            ->on('s.id', '=', 'pts.supplier_id')
            ->where('s.id', '=', $id)
            ->where('product.name', 'like', DB::expr("'%{$str}%'"))
            ->limit(15)
            ->execute()
            ->fetch_all();

        return new JsonResponse($all);
    }

    private function suppliers()
    {
        return DB::select(
            'product.id',
            'product.name',
            ['current.value', 'cur'],
            ['minimal.value', 'min'],
            ['s.name', 'supplier'],
            ['s.id', 'supplier_id'],
            [
                DB::select(DB::expr('max(created) as last_ordered'))
                    ->from(['supplier_order', 'so'])
                    ->join(['supplier_order_item', 'soi'])
                    ->on('soi.order_id', '=', 'so.id')
                    ->where('soi.product_id', '=', DB::expr('product.id')), 'last_order'
            ]
        )
            ->from('product')
            ->join(['dictionary_value', 'current'])
            ->on('current.id', '=', 'product.count_current')
            ->join(['dictionary_value', 'minimal'])
            ->on('minimal.id', '=', 'product.count_minimal')
            ->join(['product_to_supplier', 'pts'])
            ->on('pts.product_id', '=', 'product.id')
            ->join(['supplier', 's'])
            ->on('s.id', '=', 'pts.supplier_id');
    }
}