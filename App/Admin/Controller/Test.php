<?php

namespace App\Admin\Controller;

use App\Admin\Model\DictionaryValue;
use Core\Controller;
use Core\Database\Database\Exception;
use Core\Database\DB;
use Core\JsonResponse;

class Test extends Index {

    function sync()
    {
        $ids = DB::select('id')
            ->from('product')
            ->execute()->fetch_all();

        foreach ($ids as $id) {

            $id = $id->id;

            $values = DB::select('*')
                ->from('diafan_shop_price')
                ->where('good_id', '=', $id)
                ->execute()
                ->fetch();

            // cricical
            if ($values) {

//                $dv = new DictionaryValue();
//                $dv->key = 5;
//                $dv->value = $values->count_limit;
//                $dv->external_id = $id;
//                $dv->external_table = 'product';
//                $dv->external_column = 'count_minimal';
//                $dv->save();
//
//                if ($dv->id) {
//                    DB::update('product')
//                        ->set([
//                            'count_minimal' => $dv->id
//                        ])
//                        ->where('id', '=', $id)
//                        ->execute();
//                }
            }

            // current
            if ($values) {

//                $dv = new DictionaryValue();
//                $dv->key = 5;
//                $dv->value = $values->count_goods;
//                $dv->external_id = $id;
//                $dv->external_table = 'product';
//                $dv->external_column = 'count_current';
//                $dv->save();
//
//                if ($dv->id) {
//                    DB::update('product')
//                        ->set([
//                            'count_current' => $dv->id
//                        ])
//                        ->where('id', '=', $id)
//                        ->execute();
//                }
            }
        }



        return new JsonResponse('SYNC');
    }

    function index()
    {
        $root = $_SERVER['DOCUMENT_ROOT'].'/files/';
        $images = scandir($root);
        $chunk = [];

        $forProcess = [];
        foreach ($images as $i) {

            if (!is_dir($root.$i)) {

                try {

//                    $img = new \Imagick($root.$i);
//                    $img->scaleImage(200,0);
//                    $img->writeImage($root.'mini/'.$i);
//                    $img->destroy();

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
