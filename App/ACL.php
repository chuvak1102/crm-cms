<?php
namespace App;

class ACL {

    const Manager = 'manager';
    const Client = 'client';
    const Packing = 'packing';
    const Anon = 'anon';
    const Admin = 'admin';
    const Su = 'su';

    static function hierarchy()
    {
        return [];


        return [
            'role' => self::Anon,
            'allow' => [
                \App\Site\Controller\Index::class => ['*'],
            ],
            'next' => [
                'role' => [
                    self::Manager,
                    self::Client => ['deny' => []],
                    self::Packing
                ],
                'allow' => [
                    \App\Admin\Controller\Category::class => ['*'],
                    \App\Admin\Controller\Document::class => ['*'],
                    \App\Admin\Controller\Index::class => ['*'],
                    \App\Admin\Controller\Order::class => ['*'],
                    \App\Admin\Controller\Product::class => ['*'],
                    \App\Admin\Controller\Task::class => ['*'],
                    \App\Admin\Controller\Test::class => ['*'],
                    \App\Admin\Controller\User::class => ['*'],
                    \App\Client\Controller\Index::class => ['*'],
                ],
                'next' => [
                    'role' => [self::Admin],
                    'allow' => [

                    ],
                    'next' => [
                        'role' => [self::Su],
                        'allow' => [
                            \App\Admin\Controller\Content::class => ['*'],
                        ],
                    ]
                ]
            ]
        ];
    }

    static function rules()
    {
        return [
            self::Su
        ];

        return [
            self::Su => [
                \App\Admin\Controller\Category::class => ['*'],
                \App\Admin\Controller\Content::class => ['*'],
                \App\Admin\Controller\Document::class => ['*'],
                \App\Admin\Controller\Index::class => ['*'],
                \App\Admin\Controller\Order::class => ['*'],
                \App\Admin\Controller\Product::class => ['*'],
                \App\Admin\Controller\Task::class => ['*'],
                \App\Admin\Controller\Test::class => ['*'],
                \App\Admin\Controller\User::class => ['*'],
                \App\Site\Controller\Index::class => ['*'],
                \App\Client\Controller\Index::class => ['*'],
            ],
            self::Admin => [
                \App\Admin\Controller\Category::class => ['*'],
                \App\Admin\Controller\Document::class => ['*'],
                \App\Admin\Controller\Index::class => ['*'],
                \App\Admin\Controller\Order::class => ['*'],
                \App\Admin\Controller\Product::class => ['*'],
                \App\Admin\Controller\Task::class => ['*'],
                \App\Admin\Controller\Test::class => ['*'],
                \App\Admin\Controller\User::class => ['*'],
                \App\Site\Controller\Index::class => ['*'],
                \App\Client\Controller\Index::class => ['*'],
            ],
            self::Manager => [
                \App\Admin\Controller\Category::class => ['*'],
                \App\Admin\Controller\Document::class => ['*'],
                \App\Admin\Controller\Index::class => ['*'],
                \App\Admin\Controller\Order::class => ['*'],
                \App\Admin\Controller\Product::class => ['*'],
                \App\Admin\Controller\Task::class => ['*'],
                \App\Admin\Controller\Test::class => ['*'],
                \App\Admin\Controller\User::class => ['*'],
                \App\Site\Controller\Index::class => ['*'],
                \App\Client\Controller\Index::class => ['*'],
            ],
            self::Client => [
                \App\Site\Controller\Index::class => ['*'],
                \App\Client\Controller\Index::class => ['*'],
            ],
            self::Packing => [
                \App\Admin\Controller\Category::class => ['*'],
                \App\Admin\Controller\Document::class => ['*'],
                \App\Admin\Controller\Index::class => ['*'],
                \App\Admin\Controller\Order::class => ['*'],
                \App\Admin\Controller\Product::class => ['*'],
                \App\Admin\Controller\Task::class => ['*'],
                \App\Admin\Controller\Test::class => ['*'],
                \App\Admin\Controller\User::class => ['*'],
                \App\Site\Controller\Index::class => ['*'],
                \App\Client\Controller\Index::class => ['*'],
            ],
            self::Anon => [
                \App\Site\Controller\Index::class => ['*'],
            ]
        ];
    }
}
