<?php

namespace App\Admin\Controller;

use Core\Request\Request;
use Core\Database\DB;

class Product extends Index {

    function index(Request $request)
    {
        $limit = 100;
        $page = $request->get('page', 1);
        $offset = $limit * ($page - 1);

        $product = DB::select(DB::expr('SQL_CALC_FOUND_ROWS *'))
            ->from('product2')
            ->order_by('name')
            ->limit($limit)
            ->offset($offset);

        if ($supplier_id = $request->get('supplier')) {
            $product = $product
                ->join(['product_to_supplier', 'p'])
                ->on('p.product_id', '=', 'product.id')
                ->where('p.supplier_id', '=', DB::expr($supplier_id));
        }

        if ($category_id = $request->get('category')) {
            $product = $product
                ->where('product.category_id', '=', DB::expr($category_id));
        }

        if ($name = $request->get('name')) {
            $product = $product
                ->where('product.name', 'like', DB::expr("'%{$name}%'"));
        }

        $product = $product->execute()->fetch_all();
        $count = DB::select(DB::expr('FOUND_ROWS() as cnt'))->execute()->current()['cnt'];
        $supplier = DB::select('*')->from('supplier')->execute()->fetch_all();
        $category = DB::select('*')->from('category')->execute()->fetch_all();

        return $this->render('Admin:product/index', [
            'product' => $product,
            'supplier' => $supplier,
            'category' => $category,
            'pagination' => new \Core\Pagination(
                $count,
                $limit,
                3,
                $request->get('page') ? $request->get('page') : 1,
                "/product?category={$category_id}&supplier={$supplier_id}&name={$name}&page="
            ),
            'filter' => [
                'supplier' => $supplier_id,
                'category' => $category_id,
                'name' => $name
            ]
        ]);
    }

    function edit()
    {
        return new \Core\JsonResponse(\Core\Router::seg(2));
    }
}