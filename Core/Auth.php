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

    public static function instance()
    {
        if (self::$instance) {
            return self::$instance;
        }

        return new self(Session::instance()->get('token'));
    }

    /**
     * @param $login
     * @param $password
     * @throws \Exception
     */
    function login($login, $password)
    {
        if (preg_match('/[a-zA-Z\-\_0-9\-]{3,24}/', $login)) {
            if (preg_match('/[a-zA-Z\-\_0-9\-]{3,24}/', $password)) {

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

                    $token = Hash::hash($user->login.$password.$user->login);

                    $id = $user->id;

                    DB::update("update user set token = '{$token}' where id = $id");

                    Session::instance()->set('token', $token);

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
        $token = Hash::hash($login.$password.$login);
        $role = $user['role'] ? $user['role'] : 'client';

        DB::insert("
            INSERT INTO user (name, department, position, password, login, token, role) 
            VALUES('{$name}','{$department}','{$position}','{$password}','{$login}', '{$token}', '{$role}');
        ");
    }

    function current()
    {
        return self::$user;
    }

    function logout()
    {
        \Core\Database\DB::update('user')
            ->set(['token' => ''])
            ->where('token', '=', self::$token)
            ->execute();
        self::$user = null;
        self::$token = null;
        Session::instance()->clear();
    }

    function logged()
    {
        return !empty(self::$user);
    }

    function hasRole(string $role)
    {
        return self::$role === $role;
    }
}
