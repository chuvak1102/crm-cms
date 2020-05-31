<?php

namespace App\Site\Controller;
use App\Admin\Model\Category;
use App\Admin\Model\Content;
use App\Admin\Model\DictionaryValue;
use App\Admin\Model\Product;
use Core\Application;
use Core\Controller;
use Core\Database\DB;
use Core\JsonResponse;
use Core\Request\Request;
use Core\Router;
use Core\Session;
use Core\Page;

class Index extends Controller {

    public function before()
    {
        // catalog
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

        // cart
        $cart = Session::instance()->get('cart');

        Page::instance()->push('category', Router::seg(1));
        Page::instance()->push('action', Application::get('action'));
        Page::instance()->push('menu', $category);
        Page::instance()->push('cart_items', $cart['total_count']);
        Page::instance()->push('cart_price', number_format($cart['total_price'], 2, '.', ' '));
        Page::instance()->push('title', 'ЭкоПак');
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
        $search = preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('fts_search'));

        foreach ($urls as $i) {

            if ($i) {

                $product = Product::one($i, 'alias');
                if ($product->id) {

                    Page::instance()->push('title', "{$product->name} - ЭкоПак");

                    $template = 'product';
                    break;
                }

                $category = Category::one($i, 'alias');
                if ($category->id) {

                    Page::instance()->push('title', "{$category->name} - ЭкоПак");

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
            } else {

                if ($search) {

                    Page::instance()->push('title', "Поиск - ЭкоПак");

                    $products = DB::select(DB::expr('product.*'))
                        ->from('product')
                        ->join('product_to_category')
                        ->on('product_to_category.product_id', '=', 'product.id')
                        ->where('product.name', 'like', DB::expr("'%{$search}%'"))
                        ->or_where('product.article', 'like', DB::expr("'%{$search}%'"))
                        ->where('product.active', '=', 1)
                        ->limit(25)
                        ->execute()
                        ->fetch_all();

                    $ids = array_column($products, 'id');

                    $products = [];
                    foreach ($ids as $id) {
                        $products[] = Product::one($id);
                    }

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
            'path' => $request->uri(),
            'similar' => $this->similar()
        ]);
    }

    function similar()
    {
        // похожие
        $ids = DB::select('id')
            ->from('product')
            ->limit(5)
            ->execute()
            ->fetch_all();

        $similar = [];
        foreach ($ids as $id) {
            $similar[] = Product::one($id->id);
        }

        return $similar;
    }

    function termoprint()
    {
        Page::instance()->push('title', 'НАКЛЕЙКИ/ТЕРМОЭТИКЕТКИ С ПЕЧАТЬЮ - ЭкоПак');

        return $this->render('Site:termoprint', []);
    }

    function withlogoSingle(Request $request)
    {
        $product = Product::one(Router::seg(2), 'alias');
        Page::instance()->push('title', "{$product->name} - ЭкоПак");

        return $this->render('Site:withlogo_product', [
            'product' => $product,
            'path' => $request->uri(),
            'similar' => $this->similar()
        ]);
    }

    function withlogo(Request $request)
    {
        $category = Category::one(Router::seg(1), 'alias');

        Page::instance()->push('title', "{$category->name} - ЭкоПак");

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
        Page::instance()->push('title', "Корзина - ЭкоПак");
        $cart = Session::instance()->get('cart');

        $items = [];
        if ($cart['products']) {
            foreach ($cart['products'] as $id => $product) {
                $items['products'][$id] = [
                    'product' => Product::one($id),
                    'count' => $product['count'],
                    'total' => $product['total']
                ];
            }
        }

        $items['total_count'] = $cart['total_count'];
        $items['total_price'] = $cart['total_price'];

        return $this->render('Site:cart', [
            'cart' => $items,
            'client' => Session::instance()->get('client')
        ]);
    }

    function about()
    {
        Page::instance()->push('title', "О компании - ЭкоПак");

        return $this->render('Site:about', []);
    }
    function news()
    {
        Page::instance()->push('title', "Новости - ЭкоПак");

        return $this->render('Site:news');
    }
    function delivery()
    {
        Page::instance()->push('title', "Доставка и оплата - ЭкоПак");

        return $this->render('Site:delivery');
    }
    function job()
    {
        Page::instance()->push('title', "Вакансии - ЭкоПак");

        return $this->render('Site:job');
    }
    function contacts()
    {
        Page::instance()->push('title', "Контакты - ЭкоПак");

        return $this->render('Site:contacts');
    }

    function submit(Request $request)
    {
        if ($form = $request->get('submit')) {
            switch ($form) {
                case 'custom_print' : {

                    DB::insert('design_product', ['count', 'color', 'name', 'phone', 'email', 'comment'])
                        ->values([
                        preg_replace('/[^0-9]+/', '', $request->get('count')),
                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('color')),
                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('name')),
                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('phone')),
                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('email')),
                        preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('comment')),
                    ])
                        ->execute();

                    return $this->render('Site:success', [
                        'message' => 'Заказ успешно отправлен!'
                    ]);
                }
                case 'cart_order': {

                    $client = (object) [
                        'name' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('company_name')),
                        'email' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('email')),
                        'phone' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('phone')),
                        'delivery_date' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('delivery_date')),
                        'work_time' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('work_time')),
                        'address_index' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('index')),
                        'city' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('city')),
                        'street' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('street')),
                        'house' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('house')),
                        'block' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('block')),
                        'office' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('office')),
                        'advanced' => preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('comment')),
                        'payment_type' => in_array($request->get('payment_type'), ['online', 'cash']) ? $request->get('payment_type') : 'cash',
                    ];

                    Session::instance()->set('client', $client);

                    if (!$client->name || !$client->email || !$client->phone) {

                        return $this->redirectToRoute('/korzina-tovarov');
                    }

                    $number = intval(DB::select(DB::expr('max(id) id'))
                        ->from('order')
                        ->execute()
                        ->fetch()
                        ->id) + 1;

                    DB::insert('order', ['number', 'status', 'status_warehouse',])
                        ->values([$number, 1, 1])
                        ->execute();

                    DB::insert('order_detail', [
                        'order_id',
                        'name',
                        'email',
                        'phone',
                        'delivery_date',
                        'work_time',
                        'address_index',
                        'city',
                        'street',
                        'house',
                        'block',
                        'office',
                        'advanced',
                        'payment_type',
                    ])
                        ->values([
                            $number,
                            $client->name,
                            $client->email,
                            $client->phone,
                            $client->delivery_date,
                            $client->work_time,
                            $client->address_index,
                            $client->city,
                            $client->street,
                            $client->house,
                            $client->block,
                            $client->office,
                            $client->advanced,
                            $client->payment_type
                        ])
                        ->execute();

                    $cart = Session::instance()->get('cart');

                    foreach ($cart['products'] as $id => $product) {

                        $item = Product::one($id);

                        DB::insert('order_item', [
                            'order_id',
                            'product_id',
                            'product_count',
                            'price_one',
                            'price_discount',
                            'price_with_discount',
                            'price_row_total',
                        ])->values([
                            $number,
                            $id,
                            $product['count'],
                            $item->price_site,
                            $item->getDiscount(),
                            $item->price_site - $item->getDiscount(),
                            ($item->price_site - $item->getDiscount()) * $product['count']

                        ])->execute();
                    }

                    Session::instance()->remove('cart');

                    return $this->render('Site:success', [
                        'message' => 'Заказ успешно создан! Мы свяжемся с вами в ближайшее время.'
                    ]);
                }
                case 'callback' : {

                    DB::insert('callback', ['name', 'phone'])
                        ->values([
                            preg_replace('/[\'\"\`\#\;\:]+/', '', $request->get('name')),
                            preg_replace('/[^0-9]+/', '', $request->get('phone')),
                        ])
                        ->execute();

                    return $this->render('Site:success', [
                        'message' => 'Спасибо! Мы свяжемся с вами в ближайшее время.'
                    ]);
                }
                default: break;
            }
        }

        return $this->redirectToRoute('/');
    }

    function cartAdd(Request $request)
    {
        if ($request->isXmlHttpRequest()) {

            $id = $request->seg(2);
            $count = $request->seg(3);

            if ($id && $count) {

                if (!$cart = Session::instance()->get('cart')) {
                    Session::instance()->set('cart', [
                        'products' => [],
                        'total_count' => 0,
                        'total_price' => 0
                    ]);
                }

                $cart['products'][$id] = [
                    'count' => $count,
                    'total' => $this->calculate(Product::one($id), $count)
                ];
                $cart['total_count'] = array_sum(array_column($cart['products'], 'count'));
                $cart['total_price'] = array_sum(array_column($cart['products'], 'total'));

                Session::instance()->set('cart', $cart);
            }

            return new JsonResponse(Session::instance()->get('cart'));
        }

        return new JsonResponse(null);
    }

    function cartRemove(Request $request)
    {
        $id = $request->seg(2);

        $cart = Session::instance()->get('cart');

        if (isset($cart['products'][$id])) {

            unset($cart['products'][$id]);

            $cart['total_count'] = array_sum(array_column($cart['products'], 'count'));
            $cart['total_price'] = array_sum(array_column($cart['products'], 'total'));

            Session::instance()->set('cart', $cart);
        }

        return $this->redirectToRoute('/korzina-tovarov');
    }

    static function calculate(Product $product, int $count)
    {
        // цена с учетом любого говна
        $number = $product->price_site ? $product->price_site * $count : 0;

        return number_format((float)$number, 2, '.', '');
    }
}
