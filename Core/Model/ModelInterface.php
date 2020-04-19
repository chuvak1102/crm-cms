<?php

namespace Core\Model;

interface ModelInterface {

    public static function instance(int $id) : Model;
}