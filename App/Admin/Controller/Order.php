<?php

namespace App\Admin\Controller;

use Core\Controller;
use Core\Database\Database\Exception;
use Core\JsonResponse;

class Order extends Controller {

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
