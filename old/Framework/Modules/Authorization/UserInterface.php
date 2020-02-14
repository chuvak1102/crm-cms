<?php
namespace Framework\Modules\Authorization;

interface UserInterface
{
    static function isAuthorized();
}