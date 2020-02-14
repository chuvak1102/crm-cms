<?php
namespace AdminBundle\Services;

class Helpers {

    public static function transliterize($string) {
        $converter = array(
            'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'y',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'h',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
            'ь' => '',  'ы' => 'y',   'ъ' => '',
            'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

            'А' => 'A',   'Б' => 'B',   'В' => 'V',
            'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
            'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
            'И' => 'I',   'Й' => 'Y',   'К' => 'K',
            'Л' => 'L',   'М' => 'M',   'Н' => 'N',
            'О' => 'O',   'П' => 'P',   'Р' => 'R',
            'С' => 'S',   'Т' => 'T',   'У' => 'U',
            'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
            'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
            'Ь' => '',  'Ы' => 'Y',   'Ъ' => '',
            'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
        );
        return strtr($string, $converter);
    }

    public static function stringToUrl($str) {

        $str = self::transliterize($str);
        $str = strtolower($str);
        $str = str_replace(' ','-',$str);
        $str = str_replace('|', '', $str);
        $str = str_replace('`', '', $str);
        $str = str_replace('=', '', $str);
        $str = str_replace('*', '', $str);
        $str = str_replace('"', '', $str);
        $str = str_replace('\'', '', $str);
        $str = str_replace(';', '', $str);
        $str = str_replace('#', '', $str);
        $str = str_replace('!', '', $str);
        $str = str_replace('@', '', $str);
        $str = str_replace('#', '', $str);
        $str = str_replace('№', '', $str);
        $str = str_replace('%', '', $str);
        $str = str_replace('^', '', $str);
        $str = str_replace(':', '', $str);
        $str = str_replace('&', '', $str);
        $str = str_replace('?', '', $str);
        $str = str_replace('(', '', $str);
        $str = str_replace(')', '', $str);
        $str = str_replace('{', '', $str);
        $str = str_replace('}', '', $str);
        $str = str_replace('[', '', $str);
        $str = str_replace(']', '', $str);
        $str = str_replace('!', '', $str);
        $str = str_replace('/', '', $str);
        $str = str_replace('\\', '', $str);
        $str = str_replace('!', '', $str);
        $str = str_replace('~', '', $str);
        $str = str_replace('<', '', $str);
        $str = str_replace('>', '', $str);
        $str = str_replace('.', '', $str);
        $str = str_replace(',', '', $str);
        $str = str_replace('$', '', $str);
        $str = str_replace('+', '', $str);
        $str = str_replace('_', '', $str);

        return $str;
    }

    public static function toUTF8($filePath){
        file_put_contents($filePath, iconv("WINDOWS-1251", "UTF-8", file_get_contents($filePath)));
    }

    public static function stringToAlias($str){

        $str = self::transliterize($str);
        $str = preg_replace("/[^a-zA-Z0-9\-]+/i", "", $str);

        return $str;
    }

    public static function oneImageFromMany($string){
        $delimiter = strpos($string, ',');
        return substr($string, 0, $delimiter);
    }

    public static function lastName($fullName)
    {
        $array = explode(' ', trim($fullName));
        if(!empty($array[0])) return $array[0];
        if(empty($array[0])) return null;
    }

    public static function firstName($fullName)
    {
        $array = explode(' ', trim($fullName));
        if(!empty($array[1])) return $array[1];
        if(empty($array[1])) return null;
    }

    public static function middleName($fullName)
    {
        $array = explode(' ', trim($fullName));
        if(!empty($array[2])) return $array[2];
        if(empty($array[2])) return null;
    }

    public static function sanitizePhone(&$phone){
        $phone = str_replace('(', '', $phone);
        $phone = str_replace(')', '', $phone);
        $phone = str_replace('-', '', $phone);
        return $phone;
    }

    public static function sqlSanitize($str){

        $str = strip_tags($str);
        $str = preg_replace('/[SsEeLlEeCcTt]{6}/', '', $str);
        $str = preg_replace('/[IiNnSsEeRrTt]{6}/', '', $str);
        $str = preg_replace('/[DdRrOoPp]{4}/', '', $str);
        $str = preg_replace('/[DdAaTtAaBbAaSsEe]{8}/', '', $str);
        $str = preg_replace('/[UuPpDdAaTtEe]{6}/', '', $str);
        $str = preg_replace('/[TtAaBbLlEe]{5}/', '', $str);
        $str = preg_replace('/[UuNnIiOoNn]{5}/', '', $str);
        $str = preg_replace('/[EeXxEeCc]{4}/', '', $str);
        $str = str_replace('|', '', $str);
        $str = str_replace('`', '', $str);
        $str = str_replace('=', '', $str);
        $str = str_replace('*', '', $str);
        $str = str_replace('"', '', $str);
        $str = str_replace('\'', '', $str);
        $str = str_replace(';', '', $str);
        $str = str_replace('#', '', $str);
        $str = str_replace('--', '', $str);
        return $str;
    }

    public static function getFilesInDir($directory){
        $files = scandir($_SERVER['DOCUMENT_ROOT'].$directory);
        for($i = 0; $i < count($files); $i++){
            $file = $files[$i];
            if($file == '..' || $file == '.'){
                unset($file);
            } else {
                $data[] = $file;
            }
        }
        if(empty($data)) return null;
        return $data;
    }

}

