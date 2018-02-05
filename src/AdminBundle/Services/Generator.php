<?php
namespace AdminBundle\Services;

class Generator{

    public static function password($length = 7){

        $p = md5(microtime()); $pass = '';

        for($i = 0; $i < $length; $i++){
            $pass = $pass.$p[rand(0, 31)];
        }

        return $pass;
    }

    public static function passwordInteger($length = 7){

        $p = '123456789'; $pass = '';

        for($i = 0; $i < $length; $i++){
            $pass = $pass.$p[rand(0, 8)];
        }

        return $pass;
    }

    public static function loginFromFullName($fullname)
    {
        $array = explode(' ', trim(Helpers::transliterize($fullname)));

        if(empty($array[0])) $array[0] = 'a';
        if(empty($array[1])) $array[1] = 'b';
        if(empty($array[2])) $array[2] = 'c';

        return
            strtolower(
                Helpers::transliterize(substr($array[1], 0, 1))
               .Helpers::transliterize(substr($array[2], 0, 1))
               .Helpers::transliterize($array[0])
            );
    }

    public static function passwordHash($pass){
        return strtoupper(md5($pass));
    }




}
