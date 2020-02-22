<?php

namespace App;

class Routes {

    // вместо слеша стрелка =>
    // в фигурных скобках {} тупо чистяком регулярка
    public static function all($domain)
    {
        return [
            Config::SiteDomain => [
                '' => [Site\Controller\Index::class => 'index'],
                '{katalog-tovarov}' => [Site\Controller\Catalog::class => 'index'],
                '{katalog-tovarov}=>{[^\/]+}' => [Site\Controller\Catalog::class => 'parent'],
                '{katalog-tovarov}=>{[^\/]+}=>{[^\/]+}' => [Site\Controller\Catalog::class => 'child'],
                '{katalog-tovarov}=>{[^\/]+}=>{[^\/]+}=>{[^\/]+}' => [Site\Controller\Catalog::class => 'item'],
            ],
            Config::AdminDomain => [
                '' => [Admin\Controller\Index::class => 'index'],
                '{login}' => [Admin\Controller\Index::class => 'login'],
                '{logout}' => [Admin\Controller\Index::class => 'logout'],

                '{task}' => [Admin\Controller\Task::class => 'index'],
                '{task}=>{create}' => [Admin\Controller\Task::class => 'create'],
                '{task}=>{save}' => [Admin\Controller\Task::class => 'save'],
                '{task}=>{edit}=>{[\d]+}' => [Admin\Controller\Task::class => 'edit'],
                '{task}=>{comment}=>{[\d]+}' => [Admin\Controller\Task::class => 'comment'],
                '{task}=>{update}=>{[\d]+}' => [Admin\Controller\Task::class => 'update'],
                '{task}=>{template}' => [Admin\Controller\Task::class => 'template'],
                '{task}=>{template}=>{create}=>{[\d]+}' => [Admin\Controller\Task::class => 'templateCreate'],
                '{task}=>{template}=>{create}=>{save}=>{[\d]+}' => [Admin\Controller\Task::class => 'templateCreateSave'],
                '{task}=>{template}=>{delete}=>{[\d]+}' => [Admin\Controller\Task::class => 'templateDelete'],

                '{user}' => [Admin\Controller\User::class => 'index'],
                '{user}=>{create}' => [Admin\Controller\User::class => 'create'],
                '{user}=>{delete}=>{[\d]+}' => [Admin\Controller\User::class => 'delete'],
            ],
        ][$domain] ?? [];
    }
}
