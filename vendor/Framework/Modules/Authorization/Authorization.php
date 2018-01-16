<?php
namespace Framework\Modules\Authorization;
use Framework\Modules\MySql\MySql;
use Framework\Core\Session\Session;
use LifeBundle\Services\Helpers;
use LifeBundle\Services\DataChecker;

class Authorization{

    private $id;
    private $login;
    private $password;
    private $token;
    private $db;
    private static $isConfirmed;
    private $session;

    function __construct($login, $password)
    {
        $this->db = new MySql();
        $this->session = new Session();
        $this->login = $login;
        $this->password = $password;
        $this->token = md5($_COOKIE['PHPSESSID']);

        if(self::isExist()){
            self::$isConfirmed = true;
            $this->setUser();

        } else {
            self::$isConfirmed = false;
            $this->unsetUser();
        }
    }

    private function isExist()
    {
        $user = $this->db->findBy('E_Auth', array(
            'login' => $this->login,
            'hash' => md5($this->password)
        ));

        if(!$user) return false;

        return true;
    }

    public static function isConfirmed()
    {
        $session = new Session();
        if(!empty($session->get(md5($_COOKIE['PHPSESSID'])))) return true;
        return false;
    }

    private function setUser()
    {
        setcookie('token', $this->token, time() + 3600, '/'); // 1 hour
        $this->session->set($this->token, array(
            'user' => array(
                'login' => $this->login
            )
        ));

        $this->db->query("UPDATE E_Auth SET `last_login` = NOW() where `login` = "."'".$this->login."'");
    }

    private function unsetUser()
    {
        $this->session->clear();
    }

    function getUser(){
        return $this->session->get($this->token);
    }

    // попытка логина, если пароль и логин прошли валидацию и по ним есть юзер в agima_users
    // то запишем в его в сессию, а так же токен
    function login()
    {
        $this->login = Helpers::sanitizePhone($this->login);

        if(!DataChecker::phone($this->login)) return false;
        if(!DataChecker::varChar($this->password)) return false;

        $res = $this->soap->execute('getUserPolices',
            array(
                'login' => '+7'.$this->login,
                'passwd' => $this->password,
            )
        );

        if(!$res) return false;

        $this->session->set('user', $res->return->agimaUser);
        $this->session->set('token', sha1($res->return->agimaUser->userLogin));

        return true;
    }

}