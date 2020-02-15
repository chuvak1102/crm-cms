<?php
namespace App;

class Config
{
    const Mode = 'production';
    const SECRET = 'lj*Y&^G%F%#S%$DF%^G&()OKIJNHBVCFDSW#$R^&OLKJUIOL<LOP:"":{}';
    const DB = [
        'host' => 'localhost',
        'base' => 'u0742521_ecopacking',
        'user' => 'u0742521_default',
        'pass' => 'j3x3HI!Q',
    ];
    const ROLES = [
        'anon' => [],
        'user' => [],
        'admin' => [],
        'su' => [],
    ];

    public static function mysql()
    {
        return [
            'test' => [
                'host' => 'localhost',
                'base' => 'db',
                'user' => 'user',
                'pass' => 'pass',
            ],
            'production' => [
                'host' => 'localhost',
                'base' => 'u0742521_ecopacking',
                'user' => 'u0742521_default',
                'pass' => 'j3x3HI!Q',
            ],
        ][self::Mode];
    }
}






