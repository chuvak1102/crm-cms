<?php

namespace Core;

use Core\DB;

class Auth {

    private static $user = null;
    private static $instance = null;
    private static $token = null;
    private static $role = null;

    private function __construct($token)
    {
        if (preg_match('/[a-z0-9]+/', $token)) {
            if (Session::instance()->get($token) === $token) {

                $user = current(DB::select("select * from user where token = '{$token}'"));
                if ($user) {

                    self::$token = $user->token;
                    self::$role = $user->role;
                    self::$user = (object) [
                        'id' => $user->id,
                        'name' => $user->name,
                        'department' => $user->department,
                        'position' => $user->position,
                        'login' => $user->login,
                    ];
                }
            }
        }
    }

    public static function instance()
    {
        if (self::$instance) {
            return self::$instance;
        }

        return new self($_COOKIE['identifier'] ?? null);
    }

    /**
     * @param $login
     * @param $password
     * @throws \Exception
     */
    function login($login, $password)
    {
        if (preg_match('/[a-zA-Z\-\_0-9]{3,24}/', $login)) {
            if (preg_match('/[a-zA-Z\-\_0-9]{3,24}/', $password)) {
                $pass = Hash::hash($password);
                $user = current(DB::select("select * from user where `login` = '$login' and `password` = '$pass'"));

                if ($user) {

                    self::$user = (object) [
                        'id' => $user->id,
                        'name' => $user->name,
                        'department' => $user->department,
                        'position' => $user->position,
                        'login' => $user->login,
                    ];

                    $token = Hash::hash($user->login.session_id().$user->login);

                    $id = $user->id;

                    DB::update("update user set token = '{$token}' where id = $id");

                    Session::instance()->set($token, $token);
                    setcookie('identifier', $token);

                    return true;
                }

            } else {
                return false;
            }
        } else {
            return false;
        }

        return false;
    }

    /**
     * @param array $user
     * @throws \Exception
     */
    function create(array $user)
    {
        $name = $user['name'];
        $department = intval($user['department']);
        $position = $user['position'];
        $login = $user['login'];
        $password = Hash::hash($user['password']);
        $token = Hash::hash($login.session_id().$login);

        DB::insert("
            INSERT INTO user (name, department, position, password, login, token) 
            VALUES('{$name}','{$department}','{$position}','{$password}','{$login}', '{$token}');
        ");
    }

    function current()
    {
        return self::$user;
    }

    function logout()
    {
        self::$user = null;
        self::$token = null;
        Session::instance()->clear();
    }

    function logged()
    {
        if (isset($_COOKIE['identifier'])) {
            if (Session::instance()->get($_COOKIE['identifier']) && self::$token) {
                return Session::instance()->get($_COOKIE['identifier']) === self::$token;
            }
        }

        return false;
    }

    function hasRole(string $role)
    {
        return self::$role === $role;
    }
}
