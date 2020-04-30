<?php

namespace App\Site\Controller;
use App\Admin\Model\Category;
use App\Admin\Model\DictionaryValue;
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

    public function insert()
    {
        // 3,9 pack
        // 4,8 box
        $ids = DB::select('id')
            ->from('product')
            ->execute()
            ->fetch_all();

        foreach ($ids as $id) {

            $id = $id->id;

//            $values = DB::select(['value1', 'value'], ['element_id', 'product_id'], ['act1', 'active'])
//                ->from('diafan_shop_param_element')
//                ->where('element_id', '=', $id)
//                ->where('param_id', 'in', [15])
//                ->execute()
//                ->fetch();
//
//            dump($values);

            $active = DB::select(['act1', 'active'])
                ->from('diafan_shop')
                ->where('id', '=', $id)
                ->execute()
                ->fetch();

            if ($active) {

                $act = $active->active ? 1 : 0;

                DB::update('product')
                        ->set([
                            'active' => $act
                        ])
                        ->where('id', '=', $id)
                        ->execute();

            }

//            if ($values) {


//
//                $dv = new DictionaryValue();
//                $dv->key = 5;
//                $dv->value = $values->value;
//                $dv->external_id = $id;
//                $dv->external_table = 'product';
//                $dv->external_column = 'material';
//                $dv->save();
//
//                if ($dv->id) {
//                    DB::update('product')
//                        ->set([
//                            'description' => $values->value
//                        ])
//                        ->where('id', '=', $id)
//                        ->execute();
//                }

//            }
        }



        die('FINISH');
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
