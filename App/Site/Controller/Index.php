<?php

namespace App\Site\Controller;
use App\Admin\Model\Category;
use App\Admin\Model\Content;
use App\Admin\Model\DictionaryValue;
use App\Admin\Model\Product;
use Core\Application;
use Core\Controller;
use Core\Database\DB;
use Core\Request\Request;
use Core\Router;

class Index extends Controller {

    public function before()
    {
        // запихать каталог на все страницы
        $catalog = DB::select('*')
            ->from('category')
            ->where('active', '=', '1')
            ->order_by('sort')
            ->execute()
            ->fetch_all();

        $category = [];
        foreach ($catalog as $i) {
            if (!$i->parent_id) {
                $category[$i->id] = [
                    'name' => $i->name,
                    'alias' => $i->alias,
                    'extend' => []
                ];
            }
        }
        foreach ($catalog as $i) {
            if ($i->parent_id) {
                if (isset($category[$i->parent_id])) {
                    $category[$i->parent_id]['extend'][] = [
                        'name' => $i->name,
                        'alias' => $i->alias,
                    ];
                }
            }
        }

        \Core\Page::instance()->push('category', Router::seg(1));
        \Core\Page::instance()->push('action', Application::get('action'));
        \Core\Page::instance()->push('menu', $category);
    }

    function index()
    {
        $slider = DB::select('alias', 'image')
            ->from('product')
            ->order_by(DB::expr('RAND()'))
            ->limit(6)
            ->execute()
            ->fetch_all();

        return $this->render('Site:index', [
            'slider' => $slider
        ]);
    }

    function catalog(Request $request)
    {
        $urls = [
            Router::seg(4),
            Router::seg(3),
            Router::seg(2),
            Router::seg(1),
        ];
        $template = 'index';
        $category = null;
        $subCategory = [];
        $product = null;
        $products = [];

        foreach ($urls as $i) {

            if ($i) {

                $product = Product::one($i, 'alias');
                if ($product->id) {

                    $template = 'product';
                    break;
                }

                $category = Category::one($i, 'alias');
                if ($category->id) {

                    $products = DB::select(DB::expr('product.*'))
                        ->from('product')
                        ->join('product_to_category')
                        ->on('product_to_category.product_id', '=', 'product.id')
                        ->where('product_to_category.category_id', '=', $category->id)
                        ->where('product.active', '=', 1)
                        ->execute()
                        ->fetch_all();

                    $ids = array_column($products, 'id');

                    $products = [];
                    foreach ($ids as $id) {
                        $products[] = Product::one($id);
                    }

                    $subCategory = Category::many($category->id, 'parent_id');

                    $template = 'category';
                    break;
                }
            }
        }

        return $this->render("Site:{$template}", [
            'category' => $category,
            'product' => $product,
            'products' => $products,
            'sub_category' => $subCategory,
            'path' => $request->uri()
        ]);
    }

    function termoprint()
    {
        return $this->render('Site:termoprint', []);
    }

    function withlogoSingle(Request $request)
    {
        return $this->render('Site:withlogo_product', [
            'product' => Product::one(Router::seg(2), 'alias'),
            'path' => $request->uri()
        ]);
    }

    function withlogo(Request $request)
    {
        $category = Category::one(Router::seg(1), 'alias');

        $pid = DB::select(DB::expr('product.id'))
            ->from('product')
            ->join('product_to_category')
            ->on('product_to_category.product_id', '=', 'product.id')
            ->where('product_to_category.category_id', '=', $category->id)
            ->where('product.active', '=', 1)
            ->execute()
            ->fetch_all();

        $products = [];
        foreach ($pid as $id) {
            $products[] = Product::one($id->id);
        }

        return $this->render('Site:withlogo', [
            'products' => $products,
            'path' => $request->uri()
        ]);
    }

    function cart()
    {
        return $this->render('Site:cart', []);
    }

    function about()
    {
        return $this->render('Site:about', []);
    }
    function news()
    {
        return $this->render('Site:news');
    }
    function delivery()
    {
        return $this->render('Site:delivery');
    }
    function job()
    {
        return $this->render('Site:job');
    }
    function contacts()
    {
        return $this->render('Site:contacts');
    }

    function submit(Request $request)
    {
        if ($form = $request->get('submit')) {
            switch ($form) {
                case 'custom_print' : {

//                    DB::insert('design_product');

                    DB::insert('design_product', [
                        'count',
                        'color',
                        'name',
                        'phone',
                        'email',
                        'comment',
                    ])->values([
                        preg_replace('/[^0-9]+/', '', $request->get('count')),
                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('color')),
                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('name')),
                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('phone')),
                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('email')),
                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('comment')),
                    ])
                        ->execute();

//                    dump([
//                        $request,
//                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('count')),
//                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('color')),
//                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('name')),
//                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('phone')),
//                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('email')),
//                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('comment')),
//                    ]);






                    break;
                }
                default: break;
            }
        }

        return $this->render('Site:success', [
            'message' => 'Заказ успешно отправлен!'
        ]);
    }
}
