<?php
namespace Framework\Modules\Logger;

class Logger{

    public static function save($event){

        $root = $_SERVER['DOCUMENT_ROOT'].'/app/logs/';

        $date = new \DateTime();
        $name = md5($date->format('d-m-Y')).sha1(md5($date->format('d-m-Y')));
        $folder = $root.sha1($date->format('m-Y')).'/';

        $message =
             $date->format('d.m.Y H:i:s').' '.PHP_EOL
             .'EVENT: '.serialize($event).PHP_EOL
            .'FROM: '.$_SERVER['REMOTE_ADDR'].PHP_EOL
            .$_SERVER['HTTP_USER_AGENT'].' '.PHP_EOL
            .'REQUEST: '.$_SERVER['REQUEST_URI'].PHP_EOL;

        if(!is_dir($folder)){
            mkdir($folder);
        }

        if(is_dir($folder)){
            $file = fopen($folder.$name, 'a+');
            fwrite($file, $message.PHP_EOL);
            fclose($file);
        }
    }
}
