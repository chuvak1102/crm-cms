<?php

namespace App\Admin\Controller;

use App\Admin\Model\DictionaryValue;
use App\Admin\Model\Error;
use App\Admin\Model\OrderItem;
use App\Admin\Model\SupplierOrder;
use App\Admin\Model\SupplierOrderItem;
use Core\Controller;
use Core\Database\Database\Exception;
use Core\Database\DB;
use Core\Helpers\Text;
use Core\JsonResponse;
use Core\Request\Request;
use Framework\Modules\Mailer\Mailer;
use PHPMailer\PHPMailer\PHPMailer;

class Test extends Index {

    function sync()
    {
        return;
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
                    'price_site'
                ])
                    ->values([
                        $i->id,
                        $i->name1,
                        $alias,
                        $i->article,
                        $img,
                        $site_price
                    ])
                    ->execute();

//                dump([
//                    $i->id,
//                    $i->name1,
//                    $alias,
//                    $i->article,
//                    $img,
//                    $site_price
//                ]);

                // cricical
                if ($values) {

                    $dv = new DictionaryValue();
                    $dv->key = 5;
                    $dv->value = $values->count_limit;
                    $dv->external_id = $i->id;
                    $dv->external_table = 'product';
                    $dv->external_column = 'count_minimal';
                    $dv->save();

                    if ($dv->id) {
                        DB::update('product')
                            ->set([
                                'count_minimal' => $dv->id
                            ])
                            ->where('id', '=', $i->id)
                            ->execute();
//                        dump($dv);
                    }
                }

                // current
                if ($values) {

                    $dv = new DictionaryValue();
                    $dv->key = 5;
                    $dv->value = $values->count_goods;
                    $dv->external_id = $i->id;
                    $dv->external_table = 'product';
                    $dv->external_column = 'count_current';
                    $dv->save();

                    if ($dv->id) {
                        DB::update('product')
                            ->set([
                                'count_current' => $dv->id
                            ])
                            ->where('id', '=', $i->id)
                            ->execute();
//                        dump($dv);
                    }
                }
            }
        }

        $values = DB::select('*')
            ->from('diafan_shop_price')
            ->execute()
            ->fetch();

        // count
        foreach ($values as $i) {
            $dv = DB::select('*')
                ->from('dictionary_value')
                ->where('external_id', '=', $i->id)
                ->where('external_table', '=', 'product')
                ->where('external_column', '=', 'count_current')
                ->execute()
                ->fetch();
            if (!$dv) {
                $dv = new DictionaryValue();
                $dv->key = 5;
                $dv->value = $values->count_goods;
                $dv->external_id = $i->id;
                $dv->external_table = 'product';
                $dv->external_column = 'count_current';
                $dv->save();
            } else {
                DB::update('dictionary_value')
                    ->set(['count_current', $dv->count_goods])
                    ->where('external_id', '=', $i->id)
                    ->where('external_table', '=', 'product')
                    ->where('external_column', '=', 'count_current')
                    ->execute();
            }

            //critical
            $dv = DB::select('*')
                ->from('dictionary_value')
                ->where('external_id', '=', $i->id)
                ->where('external_table', '=', 'product')
                ->where('external_column', '=', 'count_minimal')
                ->execute()
                ->fetch();
            if (!$dv) {
                $dv = new DictionaryValue();
                $dv->key = 5;
                $dv->value = $values->count_limit;
                $dv->external_id = $i->id;
                $dv->external_table = 'product';
                $dv->external_column = 'count_minimal';
                $dv->save();
            } else {
                DB::update('dictionary_value')
                    ->set(['count_minimal', $dv->count_limit])
                    ->where('external_id', '=', $i->id)
                    ->where('external_table', '=', 'product')
                    ->where('external_column', '=', 'count_minimal')
                    ->execute();
            }
        }

        dump('done');
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
