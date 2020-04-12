<?php

namespace App\Admin\Controller;

use Core\Request\Request;
use Core\Database\DB;

class Product extends Index {

    function index(Request $request)
    {
        $page = $request->get('page', 1);
        $limit = 50;
        $offset = $limit * ($page - 1);

        $product = DB::select(DB::expr('SQL_CALC_FOUND_ROWS *'))
            ->distinct(true)
            ->select(
                ['product.id', 'id'],
                ['product.name', 'name'],
                ['product.article', 'article'],
                ['product.alias', 'alias'],
                ['product.active', 'active'],
                ['product.image', 'image'],
                ['product.price', 'price'],
                ['product.count_current', 'count_current'],
                ['product.count_minimal', 'count_minimal'],
                ['p.id', 'supplier_id']
            )
            ->from('product')
            ->join(['product_to_supplier', 'p'], 'left')
            ->on('p.product_id', '=', 'product.id')
            ->order_by('name')
            ->limit($limit)
            ->offset($offset);

        if ($supplier_id = $request->get('supplier')) {
            $product = $product
                ->where('p.supplier_id', '=', DB::expr($supplier_id));
        }

        if ($category_id = $request->get('category')) {
            $product = $product
                ->join('product_to_category')
                ->on('product_to_category.product_id', '=', 'product.id')
                ->where('product_to_category.category_id', '=', DB::expr($category_id));
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
        return $this->render('Admin:product/edit', []);
    }

    /**
     * @param Request $request
     * @throws \Mpdf\MpdfException
     */
    function print(Request $request)
    {
        $ids = implode(',', array_map(function($i){
            return intval($i);
        }, $request->get('id', [0])));

        $items = DB::select(
            'product.name', 'product.article', 'e.value', 'product.price', ['e2.value', 'in_box']
        )->from('product')
            ->join(['product_option_values', 'e'], 'left')
            ->on('e.element_id', '=', 'product.id')
            ->join(['product_option_values', 'e2'], 'left')
            ->on('e2.element_id', '=', 'product.id')
            ->where('product.id', 'in', DB::expr("({$ids})"))
            ->where('e.param_id', 'in', [3, 9])
            ->where('e2.param_id', 'in', [4, 8])
            ->group_by('product.id')
            ->execute()
            ->fetch_all();

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->writeHTML("<html>");
        $mpdf->writeHTML("
            <head>
                <style>
                    *{box-sizing: border-box; margin: 0;padding: 0}
                    .price {width: 55mm;  border: 0.5mm solid #000; float: left; margin: 1mm; }
                    .up {width: 55mm; height: 30mm; position: relative;  border-bottom: 0.5mm solid #000}
                    .down {width: 55mm; padding-bottom: 0.5mm}
                    .left {width: 23mm; float: left;border-right: 0.5mm solid #000}
                    .right {width: 29mm; }
                    .p1 {font-size: 3.5mm; padding-top: 2mm; padding-left: 2mm;}
                    .p2 {text-align: right; padding-right: 2mm; font-size: 3mm}
                    .p3 {font-size: 3.5mm; padding: 1mm; padding-bottom: 0}
                    .p4 {font-size: 4mm; padding-left: 1mm}
                    .p5 {font-size: 3.5mm; padding: 1mm; padding-bottom: 0}
                    .p6 {font-size: 4mm; padding-left: 1mm}
                </style>
            </head>
        ");
//        $mpdf->writeHTML("<body>");

        $cnt = 1;
        $html = "";

        foreach ($items as $num => $i) {

            $price_all = $i->value * $i->price;

            $html = $html."
                <div class='price'>
                    <div class='up'>
                        <div class='p1'>{$i->name}</div>
                        <div class=\"p2\">арт. {$i->article}</div>
                    </div>
                    <div class=\"down\">
                        <div class=\"left\"><div class=\"p3\">Цена:</div><div class=\"p4\"><b>{$i->price}&nbsp;&nbsp;&nbsp;</b> руб/шт.</div></div>
                        <div class=\"right\"><div class=\"p5\">В упаковке: {$i->value} шт. -</div><div class=\"p6\"> <b>{$price_all}</b>руб.</div></div>
                    </div>
                </div>
            ";

            if ($cnt % 15 == 0 && $cnt > 0) {
                $mpdf->writeHTML($html);
                $mpdf->addPage();
                $html = "";
                $cnt = 0;
            }

            $cnt++;
        }

        if ($cnt > 0) {
            $mpdf->writeHTML($html);
        }

        $mpdf->Output();
    }
}