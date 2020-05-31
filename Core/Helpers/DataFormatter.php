<?php
namespace Core\Helpers;

class DataFormatter
{
    protected static $monthNames = [
        "января",
        "февраля",
        "марта",
        "апреля",
        "мая",
        "июня",
        "июля",
        "августа",
        "сентября",
        "октября",
        "ноября",
        "декабря"
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

    static function literalize($num) {

        function morph($n, $f1, $f2, $f5) {
            $n = abs(intval($n)) % 100;
            if ($n>10 && $n<20) return $f5;
            $n = $n % 10;
            if ($n>1 && $n<5) return $f2;
            if ($n==1) return $f1;
            return $f5;
        }

        $nul='ноль';
        $ten=array(
            array('','один','два','три','четыре','пять','шесть','семь', 'восемь','девять'),
            array('','одна','две','три','четыре','пять','шесть','семь', 'восемь','девять'),
        );
        $a20=array('десять','одиннадцать','двенадцать','тринадцать','четырнадцать' ,'пятнадцать','шестнадцать','семнадцать','восемнадцать','девятнадцать');
        $tens=array(2=>'двадцать','тридцать','сорок','пятьдесят','шестьдесят','семьдесят' ,'восемьдесят','девяносто');
        $hundred=array('','сто','двести','триста','четыреста','пятьсот','шестьсот', 'семьсот','восемьсот','девятьсот');
        $unit=array( // Units
            array('копейка' ,'копейки' ,'копеек',	 1),
            array('рубль'   ,'рубля'   ,'рублей'    ,0),
            array('тысяча'  ,'тысячи'  ,'тысяч'     ,1),
            array('миллион' ,'миллиона','миллионов' ,0),
            array('миллиард','милиарда','миллиардов',0),
        );
        //
        list($rub,$kop) = explode('.',sprintf("%015.2f", floatval($num)));
        $out = array();
        if (intval($rub)>0) {
            foreach(str_split($rub,3) as $uk=>$v) { // by 3 symbols
                if (!intval($v)) continue;
                $uk = sizeof($unit)-$uk-1; // unit key
                $gender = $unit[$uk][3];
                list($i1,$i2,$i3) = array_map('intval',str_split($v,1));
                // mega-logic
                $out[] = $hundred[$i1]; # 1xx-9xx
                if ($i2>1) $out[]= $tens[$i2].' '.$ten[$gender][$i3]; # 20-99
                else $out[]= $i2>0 ? $a20[$i3] : $ten[$gender][$i3]; # 10-19 | 1-9
                // units without rub & kop
                if ($uk>1) $out[]= morph($v,$unit[$uk][0],$unit[$uk][1],$unit[$uk][2]);
            } //foreach
        }
        else $out[] = $nul;
        $out[] = morph(intval($rub), $unit[1][0],$unit[1][1],$unit[1][2]); // rub
        $out[] = $kop.' '.morph($kop,$unit[0][0],$unit[0][1],$unit[0][2]); // kop
        return trim(preg_replace('/ {2,}/', ' ', join(' ',$out)));
    }

}
