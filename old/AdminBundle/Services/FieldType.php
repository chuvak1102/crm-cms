<?php
namespace AdminBundle\Services;

class FieldType
{
    const TEXT = 1;
    const TEXT_AREA = 2;
    const FILE = 3;
    const CHECK = 4;
    const SELECT = 5;
    const HIDDEN = 6;
    const PASSWORD = 7;
    const LIST = 8;
    const DATE = 9;
    const DATETIME = 10;
    const DICTIONARY = 11;

    function text(){return self::TEXT;}
    function textarea(){return self::TEXT_AREA;}
    function file(){return self::FILE;}
    function check(){return self::CHECK;}
    function select(){return self::SELECT;}
    function hidden(){return self::HIDDEN;}
    function password(){return self::PASSWORD;}
    function list(){return self::LIST;}
    function date(){return self::DATE;}
    function datetime(){return self::DATETIME;}
    function dictionary(){return self::DICTIONARY;}
}