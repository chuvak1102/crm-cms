<?php

namespace App\Admin\Controller;

use App\Admin\Model\DictionaryValue;
use App\Admin\Model\Error;
use App\Admin\Model\OrderItem;
use App\Admin\Model\SupplierOrder;
use App\Admin\Model\SupplierOrderItem;
use Core\Auth;
use Core\Controller;
use Core\Database\Database\Exception;
use Core\Database\DB;
use Core\Helpers\Text;
use Core\JsonResponse;
use Core\Request\Request;
use Framework\Modules\Mailer\Mailer;
use PHPMailer\PHPMailer\PHPMailer;

class Test extends Index {

    function before()
    {
        parent::before();
        if (!\App\Admin\Model\User::one(Auth::instance()->current()->id)->isAdmin()) {
            $this->redirectToRoute('/403');
        }
    }

    function alias()
    {
        $prodyct = DB::select('*')
            ->from('product')
            ->execute()
            ->fetch_all();

        echo '<pre>';

        $old = [];
        foreach ($prodyct as $p){

            $old[$p->id] = [
                'alias' => $p->alias
            ];

            $alias = \Core\Helpers\Text::alias(mb_strtolower($p->name));
            $id = intval($p->id);

            DB::update('product')
                ->set([
                    'alias' => $alias,
                ])
                ->where('id', '=', $id)
                ->execute();
        }

        print_r($old);
        dump("OK");

        return $this->render('Admin:test', [
            'tree' => 'asdfasdfasdf'
        ]);
    }

    function sync()
    {
        return;
        // products
        $shit = DB::select('*')
            ->from('diafan_shop')
            ->where('act1', '=', 1)
            ->execute()->fetch_all();

        foreach ($shit as $i) {
            $exist = DB::select('*')
                ->from('product')
                ->where('id', '=', $i->id)
                ->execute()->fetch_all();

            if (!$exist) {

                // opts
                $values = DB::select('*')
                    ->from('diafan_shop_price')
                    ->where('good_id', '=', $i->id)
                    ->execute()
                    ->fetch();
                $alias = Text::alias($i->name1);
                $image = DB::select('name')
                    ->from('diafan_images')
                    ->where('element_id', '=', $i->id)
                    ->execute()
                    ->fetch();
                $img = "";
                if ($image) {
                    $img = $image->name;
                }
                $site_price = 0;
                if ($values) {
                    $site_price = $values->price;
                }

                DB::insert('product', [
                    'id',
                    'name',
                    'alias',
                    'article',
                    'image',
                    'price_site',
                    'sort'
                ])
                    ->values([
                        $i->id,
                        $i->name1,
                        $alias,
                        $i->article,
                        $img,
                        $site_price,
                        $i->sort
                    ])
                    ->execute();

                // count, count critical
                if ($values) {

                    DB::update('product')
                        ->set([
                            'count_current' => $values->count_goods
                        ])
                        ->where('id', '=', $i->id)
                        ->execute();

                    DB::update('product')
                        ->set([
                            'count_minimal' => $values->count_limit
                        ])
                        ->where('id', '=', $i->id)
                        ->execute();
                }
            }
        }

        echo 'PRODUCTS OK'.PHP_EOL;

        // orders
        $items = DB::select('*')
            ->from('diafan_shop_order')
            ->execute()
            ->fetch_all();

        foreach ($items as $i) {

            $exist = DB::select('*')
                ->from('order')
                ->where('id', '=', $i->id)
                ->execute()
                ->fetch();

                $d = \DateTime::createFromFormat('U', $i->created)
                    ->format('Y-m-d H:i:s');

            if (!$exist) {

                DB::insert('order', [
                    'id',
                    'created',
                    'number',
                    'status',
                    'status_warehouse',
                    'user_id',
                    'mailed',
                    'shipped'
                ])
                    ->values([
                        $i->id,
                        $d,
                        $i->id,
                        1,
                        1,
                        1,
                        1,
                        1
                    ])
                    ->execute();

                // order mainpage contact
                $cont = DB::select('dsope.value')
                    ->from(['diafan_shop_order', 'o'])
                    ->join(['diafan_shop_order_param_element', 'dsope'])
                    ->on('o.id', '=', 'dsope.element_id')
                    ->where('o.id', '=', $i->id)
                    ->execute()
                    ->fetch_all();

                if ($cont) {

                    $shits = "";

                    foreach ($cont as $item) {

                        $shits .= ', '.$item->value;
                    }

                    DB::insert('order_detail', [

                        'order_id',
                        'name',
                    ])
                        ->values([
                            $i->id,
                            $shits,
                        ])
                        ->execute();

                }

            }

        }

        echo 'ORDER OK'.PHP_EOL;

    }

    function img(Request $request)
    {
        return;
        $root = $_SERVER['DOCUMENT_ROOT'].'/files/';
        $images = scandir($root);
        $chunk = [];

        $forProcess = [];
        foreach ($images as $i) {

            if (!is_dir($root.$i)) {

                try {

                    if (!file_exists($root.'mini/'.$i)) {
                        $img = new \Imagick($root.$i);
                        $img->scaleImage(200,0);
                        $img->writeImage($root.'mini/'.$i);
                        $img->destroy();
                    } else {
//                        dump('exist');
                    }


                } catch (\ImagickException $e) {
                }

            }

//            if (is_dir($_SERVER['DOCUMENT_ROOT'].'/files/'.$i)) {
//                dump($i);
//            }
        }

//        dump($images);
//        die();

//        $chunk = array_chunk($forProcess, 100);

//        dump($chunk);
//
//        foreach ($chunk[0] as $i) {
//
//            $img = new \Imagick($_SERVER['DOCUMENT_ROOT'].'/files/4_prosto-tovar-smotri-nazvan.jpg');
//            $img->scaleImage(200,0);
//            $img->writeImage($_SERVER['DOCUMENT_ROOT'].'/files/mini/4_prosto-tovar-smotri-nazvan.jpg');
//            $img->destroy();
//        }

        return new JsonResponse('chunk ');
    }

}
