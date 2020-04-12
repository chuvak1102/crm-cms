<?php
namespace Core\Helpers;

class DataFormatter
{
    protected static $monthNames = [
        "Января",
        "Февраля",
        "Марта",
        "Апреля",
        "Мая",
        "Июня",
        "Июля",
        "Августа",
        "Сентября",
        "Октября",
        "Ноября",
        "Декабря"
    ];

    /**
     * Обрезка строки до указанной длины с сохранением последнего слова
     */
    public static function strCut($str, $cut = 150)
    {
        return trim(mb_strlen($str) <= $cut ? $str
            : mb_substr($str, 0, mb_strrpos(mb_substr($str, 0, $cut), ' ')));
    }

    /**
     * Вернуть строку до указанного символа
     */
    public static function strBefore($str, $char)
    {
        return mb_substr($str, 0, mb_strpos($str, $char));
    }

    /**
     * Вернуть строку после указанного символа
     */
    public static function strAfter($str, $char)
    {
        return mb_substr($str, mb_strpos($str, $char) + 1);
    }

    /**
     * Убрать верстку и скрипты из текста
     */
    public static function CleanText($text)
    {
        if (empty($text)) {
            return '';
        }
        $text = preg_replace('/<script[^>]+>.+<\/script>/ismU', '', $text);
        $text = preg_replace('/\{\[.+\]\}/ismU', '', $text);
        $text = mb_substr(strip_tags(str_replace("\n", "<br />\n", $text)), 0, 180, "UTF-8");
        return trim($text);
    }

    /**
     * @param $timestamp
     * @return string
     */
    public static function unix_to_date($timestamp) : string
    {
        $date = \DateTime::createFromFormat('U', $timestamp);
        $m = self::$monthNames[$date->format('m') - 1];

        return "{$date->format('d')} {$m} {$date->format('Y')}";
    }

    /**
     * склеить массив в строку рекурсивно
     */
    public static function multi_implode($glue, $array) {

        $out = "";
        $g = $glue;
        $c = count($array);
        $i = 0;
        foreach ($array as $val){
            if (is_array($val)){
                $out .= self::multi_implode($glue,$val);
            } else {
                $out .= (string)$val;
            }
            $i++;
            if ($i<$c){
                $out .= $g;
            }
        }
        return $out;
    }

}
