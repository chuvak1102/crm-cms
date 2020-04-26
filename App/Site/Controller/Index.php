<?php

namespace App\Site\Controller;
use App\Admin\Model\Category;
use App\Admin\Model\Product;
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

            if ($i->parent_id) {
                $category[$i->parent_id]['extend'][] = [
                    'name' => $i->name,
                    'alias' => $i->alias,
                ];
            } else {
                $category[$i->id] = [
                    'name' => $i->name,
                    'alias' => $i->alias,
                    'extend' => []
                ];
            }
        }

        \Core\Page::instance()->push('menu', $category);
    }

    function index()
    {
        return $this->render('Site:index');
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
                        ->execute()
                        ->fetch_all();

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

    private function insert()
    {
        $c = DB::select('*')
            ->from('diafan_shop_param_select')
            ->where('param_id', '=', 26)
//            ->where('site_id', '=', 30)
            ->execute()->fetch_all();

        foreach ($c as $i) {

//            $alias = mb_strtolower(\Core\Helpers\Text::transliterate($i->name1));
//            $alias = preg_replace('/[^a-z0-9\s]/', '', $alias);
//            $alias = str_replace(' ', '-', trim($alias));

                DB::insert('supplier', [
                'id',
                'name',
//                'name',
//                'alias',
//                    'sort',
//                    'active'
            ])->values([
                $i->id,
                $i->name1,
//                $i->name1,
//                $alias,
//                    $i->sort,
//                    $i->act1
            ])
                ->execute();

        }

//        dump($c);
        die();


        return $this->render('Site:index', [
            's' => \Core\Page::instance()->getAll()
        ]);
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
}
