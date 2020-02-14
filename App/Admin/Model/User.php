<?php

namespace App\Admin\Model;

use Core\Model;

class User extends Model {

    public $id;
    public $name;
    public $department;
    public $position;
    public $login;
    public $password;

    function create()
    {

    }

}