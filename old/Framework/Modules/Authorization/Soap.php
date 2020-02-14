<?php
namespace Framework\Modules\Authorization;
use SoapClient;
use SoapFault;

class Soap{

    protected $soap;

    function __construct()
    {
        $this->soap = new SoapClient(SOAP_ADDRESS, array(
            'trace' => 1,
            'soap_version' => SOAP_1_1,
            'cache_wsdl' => WSDL_CACHE_NONE,
            'exceptions' => true,
            'login' => SOAP_LOGIN,
            'password' => SOAP_PASSWORD
        ));
    }

    function execute($procedureName, $params = array()) {

        try {
            $res = $this->soap->$procedureName($params);

        } catch(\Exception $e){
            return false;
        }
        return $res;
    }

    function getUserID($login, $pass) {
        $res = $this->execute('GetUserId',
            array(
                'login' => '+7'.$login,
                'passwd' => $pass
            )
        );
        return ($res) ? intval($res->return) : FALSE;
    }

    function setNewUser($login, $pass) {
        $res = $this->execute('NewUser',
            array(
                'login' => '+7'.$login,
                'passwd' => $pass
            )
        );
        return ($res) ? intval($res->return) : FALSE;
    }

    function setUserInfo($id, $login, $pass, $last_name, $first_name, $middle_name, $birthday, $sex, $email, $policy='', $prem='', $date_beg='', $date_end='', $passportSer='', $passportNum='') {

        $res = $this->execute('setUserDetail',
            array(
                'login'       => '+7'.$login,
                'passwd'      => $pass,
                'lastName'    => $last_name,
                'firstName'   => $first_name,
                'middleName'  => $middle_name,
                'birthDay'    => $birthday,
                'sex'         => $sex,
                'email'       => $email,
                'policy'      => $policy,
                'prem'        => $prem,
                'date_beg'    => $date_beg,
                'date_end'    => $date_end,
                'passportSer' => $passportSer,
                'passportNum' => $passportNum
            )
        );

        return ($res) ? strval($res->return) : FALSE;
    }

    function changeUserPass($login, $old_pass, $new_pass) {
        $res = $this->execute('changePasswd',
            array(
                'login' => '+7'.$login,
                'passwd' => $old_pass,
                'new-passwd' => $new_pass
            )
        );
        return ($res) ? strval($res->return) : FALSE;
    }

    function getUserAllInfo($login, $pass) {
        $res = $this->execute('getUserPolices',
            array(
                'login' => '+7'.$login,
                'passwd' => $pass
            )
        );
        return ($res) ? $res->return : FALSE;
    }

    function SendSMS($tel, $message) {
        $res = $this->execute('SendSMS',
            array(
                'phone' => '+7'. $tel,
                'message' => $message
            )
        );
        return ($res) ? strval($res->return) : FALSE;
    }

    function RecoveryPassword($login) {
        $res = $this->execute('RecoveryPassword',
            array(
                'login' => '+7'.$login
            ));
        return ($res) ? $res->return : FALSE;
    }


}