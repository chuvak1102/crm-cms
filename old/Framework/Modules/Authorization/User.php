<?php
namespace Framework\Modules\Authorization;

class User implements UserInterface
{
    public static function isAuthorized()
    {
        return new static();
    }
}
