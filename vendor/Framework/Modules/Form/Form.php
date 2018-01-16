<?php
namespace Framework\Modules\Form;
use Framework\Core\HttpFoundation\Request;

abstract class Form
{
    static function isValid(Request $request)
    {
        return new static();
    }
}