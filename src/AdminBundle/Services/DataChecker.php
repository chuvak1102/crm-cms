<?php
namespace AdminBundle\Services;

class DataChecker {

    public static function ceilNumber($number){

        $p = '/[0-9]+/';

        if(preg_match($p, $number) && !(empty($number))){
            return $number;
        } else {
            return false;
        }
    }

    public static function russianName($phrase){

        $p = "/[\!\@\#\$\%\^\&\*\(\)\|\!\№\;\%\:\?\*\(\)\_\+\/\\\`\~\'\;\<\>a-zA-Z]+/";

        if(!preg_match($p, $phrase) && !(empty($phrase))){
            return $phrase;
        } else {
            return false;
        }
    }

    public static function date_dmY($dateString){ // 00.00.0000

        $p = '/^[0-3][0-9][.][0-1][0-9][.][0-9]{4}$/';

        if(preg_match($p, $dateString) && !(empty($dateString))){
            return $dateString;
        } else {
            return false;
        }
    }

    public static function phone($phone){

        $phone = str_replace(' ', '', $phone);
        $phone = str_replace('(', '', $phone);
        $phone = str_replace(')', '', $phone);
        $phone = str_replace('-', '', $phone);

        $phone = intval($phone);

        if(is_int($phone) && (preg_match('/^\d{10}$/', $phone))){
            return true;
        } else {
            return false;
        }
    }

    public static function captcha($string){
        $p = '/^[0-9a-zA-Z]+$/';

        if(preg_match($p, $string) && !(empty($string))){
            if(md5($_REQUEST['captcha']) == $_SESSION['sid']){
                return true;
            } else {
                return false;
            }

        } else {
            return false;
        }
    }

    public static function boolean($boolean){
        if(is_bool($boolean)){
            return $boolean;
        } else {
            return false;
        }
    }

    public static function policy($policyNum){

        $p = '/^[a-zA-Z0-9\-\s]{3,15}$/';
        if(preg_match($p, $policyNum) && !(empty($policyNum))){
            return $policyNum;
        } else {
            return false;
        }
    }

    public static function email($email){

        $p = '/^[a-zA-Z0-9\-\s\_\.\@]{3,50}$/';
        if(preg_match($p, $email) && !(empty($email))){
            return $email;
        } else {
            return false;
        }
    }

    public static function isChecked($radio){

        if(is_int(intval($radio)) || $radio == 'on'){
            return true;
        } else {
            return false;
        }
    }

    public static function varChar($string){
        $p = '/^[a-zA-ZА-Яа-яЁё0-9\s.,]{5,50}$/';
        if(preg_match($p, $string) && !(empty($string))){
            return true;
        } else {
            return false;
        }
    }

    public static function passwordFormat($password, $pattern = '/^[0-9a-zA-Z_-]+$/', $length = 8){

        if(strlen($password) >= $length && strlen($password) < 17){
            if(preg_match($pattern, $password)){
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    public static function isYear($year){

        if(is_integer(intval($year)) && strlen($year) === 4 && $year <= date('Y') && $year >= 2000){
            return true;
        } else {
            return false;
        }
    }

    public static function isString($string){
        $p = '/^[a-zA-Z0-9]{1,50}$/';
        if(preg_match($p, $string) && !(empty($string))){
            return true;
        } else {
            return false;
        }
    }

    public static function agree($checkboxVal){
        if(isset($checkboxVal) || $checkboxVal == true) return true;
        return false;
    }
}