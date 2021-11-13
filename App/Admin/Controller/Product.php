<?php

namespace App\Admin\Controller;

use App\Admin\Model\DictionaryField;
use App\Admin\Model\Supplier;
use Core\BreadCrumbs;
use Core\JsonResponse;
use Core\Page;
use Core\Request\Request;
use Core\Database\DB;
use Core\Router;
use App\Admin\Model\Product as ProductModel;

class Product extends Index {

    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'Товары']);

        $page = $request->get('page', 1);
        $limit = $request->get('onpage', 25);
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
                ['product.price_site', 'price'],
                ['product.count_current', 'count_current'],
                ['product.count_minimal', 'count_minimal'],
                ['p.id', 'supplier_id'],
                [$request->get('category') ? 'product_to_category.sort' : 'product.sort']
            )
            ->from('product')
            ->join(['product_to_supplier', 'p'], 'left')
            ->on('p.product_id', '=', 'product.id')
            ->order_by($request->get('category')
                ? DB::expr('product_to_category.sort = 0, product_to_category.sort')
                : DB::expr('product.sort = 0, product.sort')
            )
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

        if ($active = $request->get('active')) {
            $product = $product
                ->where('product.active', '=', 1);
        }

        $product = $product->execute()->fetch_all();
        $count = DB::select(DB::expr('FOUND_ROWS() as cnt'))->execute()->current()['cnt'];
        $supplier = DB::select('*')->from('supplier')->execute()->fetch_all();
        $category = ProductModel::getCategoryTree();

        $products = [];
        foreach ($product as $i) {
            $p = ProductModel::one($i->id);
            $p->sort = $i->sort;
            $products[] = $p;
        }

        return $this->render('Admin:product/index', [
            'product' => $products,
            'supplier' => $supplier,
            'category' => $category,
            'pagination' => (new \Core\Pagination(
                $count,
                $request->get('onpage', 25),
                3,
                $request->get('page', 1),
                "/product?category={$category_id}&supplier={$supplier_id}&name={$name}&active={$active}&page={$page}&onpage={$limit}",
                [25, 50, 75, 100]
            )),
            'filter' => [
                'supplier' => $supplier_id,
                'category' => $category_id,
                'name' => $name,
                'active' => $active
            ]
        ]);
    }

    function create(Request $request)
    {
        BreadCrumbs::instance()
            ->push(['/product' => 'Товары'])
            ->push(['' => 'Добавить товар']);

        $item = new ProductModel();
        $category = $item::getCategoryTree();
        $supplier = DB::select('*')
            ->from('supplier')
            ->execute()
            ->fetch_all();
        $dictionary = DictionaryField::many(1, 'dictionary');
        $additional = DictionaryField::many(2, 'dictionary');
        $additionalExist = $item->getAdditional();

        if ($request->get('submit')) {
            $item->save($request);
            return $this->redirectToRoute('/product');
        }

        return $this->render('Admin:product/edit', [
            'product' => $item,
            'supplier' => $supplier,
            'dictionary' => $dictionary,
            'category' => $category,
            'additional' => $additional,
            'additionals' => $additionalExist,
            'formAction' => '/product/create'
        ]);
    }

    function edit(Request $request)
    {
        $item = ProductModel::one(Router::seg(2));
        $category = ProductModel::getCategoryTree();

        if ($request->get('submit')) {
            $item->save($request);
            return $this->redirectToRoute('/product/edit/'.Router::seg(2));
        }

        $supplier = DB::select('*')
            ->from('supplier')
            ->execute()
            ->fetch_all();
        $dictionary = DictionaryField::many(1, 'dictionary');
        $additional = DictionaryField::many(2, 'dictionary');
        $additionalExist = $item->getAdditional();

        BreadCrumbs::instance()
            ->push(['/product' => 'Товары'])
            ->push(['' => 'Редактировать '.$item->name]);

        return $this->render('Admin:product/edit', [
            'product' => $item,
            'supplier' => $supplier,
            'dictionary' => $dictionary,
            'category' => $category,
            'additional' => $additional,
            'additionals' => $additionalExist,
            'formAction' => '/product/edit/'.Router::seg(2)
        ]);
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
            'product.name', 'product.article', 'e.value', ['product.price_site', 'price'], ['e2.value', 'in_box']
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

    public function sticker()
    {
        $id = intval(Router::seg(2));
        $i = DB::select('product.*')
            ->from('product')
            ->where('id', '=', $id)
            ->execute()
            ->fetch();

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

        $html = "
                <div class='price'>
                    <div class='up'>
                        <div class='p1'>{$i->name}</div>
                        <div class=\"p2\">надо список что выводить</div>
                    </div>
                </div>
            ";

        $mpdf->writeHTML($html);
        $mpdf->Output();
    }

    function delete(Request $request)
    {
        DB::delete('product_to_category')
            ->where('product_id', '=', intval($request->seg(2)))
            ->execute();
        DB::delete('product_to_supplier')
            ->where('product_id', '=', intval($request->seg(2)))
            ->execute();
        DB::delete('product')
            ->where('id', '=', intval($request->seg(2)))
            ->execute();

        return $this->redirectToRoute('/product');
    }

    function sort(Request $request)
    {
        $log = [];

        foreach ($request->get('values') as $i) {

            $i = (object) $i;

            if ($i->category) {
                $log['category'][] = $i->category;

                $exist = DB::select('id')
                    ->from('product_to_category')
                    ->where('product_id', '=', $i->id)
                    ->where('category_id', '=', $i->category)
                    ->execute()
                    ->fetch();

                $log['ex'][] = $exist;

                if ($exist->id) {
                    $log['exist'][] = [
                        'product_id' => $i->id,
                        'category_id' => $i->category,
                        'sort' => $i->sort,
                        'exist' => $exist->id
                    ];
                    DB::update('product_to_category')->set([
                        'product_id' => $i->id,
                        'category_id' => $i->category,
                        'sort' => $i->sort
                    ])->where('id', '=', $exist->id)
                        ->execute();
                } else {
                    $log['not-exist'][] = $exist->id;
                    DB::insert('product_to_category', ['product_id', 'category_id', 'sort'])
                        ->values([$i->id, $i->category, $i->sort])
                        ->execute();
                }

            } else {
                $log['no-category'][] = [
                    $i->id
                ];
                DB::update('product')->set([
                    'sort' => $i->sort
                ])->where('id', '=', $i->id)
                    ->execute();
            }
        }

        return new JsonResponse($log);
    }

    function deleteImage(Request $request)
    {
        DB::delete('product_images')
            ->where('id', '=', $request->seg(4))
            ->execute();

        return $this->redirectToRoute('/product/edit/'.$request->seg(2));
    }

    function deleteMainImage(Request $request)
    {
        $id = intval($request->seg(2));

        DB::update('product')
            ->set(['image' => ''])
            ->where('id', '=', $id)
            ->execute();

        return $this->redirectToRoute('/product/edit/'.$request->seg(2));
    }
}
