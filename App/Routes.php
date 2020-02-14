<?php

namespace App;

class Routes {

    // вместо слеша =>
    public static function all($domain)
    {
        return [
            'front.alkogram.ru' => [
                '{katalog-tovarov}' => [Site\Controller\Catalog::class => 'index'],
                '{katalog-tovarov}=>{[^\/]+}' => [Site\Controller\Catalog::class => 'parent'],
                '{katalog-tovarov}=>{[^\/]+}=>{[^\/]+}' => [Site\Controller\Catalog::class => 'child'],
                '{katalog-tovarov}=>{[^\/]+}=>{[^\/]+}=>{[^\/]+}' => [Site\Controller\Catalog::class => 'item'],
                '' => [Site\Controller\Index::class => 'index'],
            ],
            'crm.alkogram.ru' => [
                '' => [Admin\Controller\Index::class => 'index'],
                '{task}' => [Admin\Controller\Task::class => 'index'],
                '{task}=>{create}' => [Admin\Controller\Task::class => 'create'],
                '{task}=>{template}' => [Admin\Controller\Task::class => 'template'],
                '{task}=>{save}' => [Admin\Controller\Task::class => 'save'],
                '{task}=>{edit}=>{[\d]+}' => [Admin\Controller\Task::class => 'edit'],
                '{task}=>{comment}=>{[\d]+}' => [Admin\Controller\Task::class => 'comment'],
                '{user}' => [Admin\Controller\User::class => 'index'],
                '{user}=>{create}' => [Admin\Controller\User::class => 'create'],
                '{user}=>{delete}=>{[\d]+}' => [Admin\Controller\User::class => 'delete'],
            ],
        ][$domain] ?? [];
    }
}
