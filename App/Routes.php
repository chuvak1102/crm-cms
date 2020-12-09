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
                '{login}' => [Site\Controller\Index::class => 'login'],
                '{logout}' => [Site\Controller\Index::class => 'logout'],
                '{register}' => [Site\Controller\Index::class => 'register'],
                '{o-kompanii}' => [Site\Controller\Index::class => 'about'],
                '{novosti}' => [Site\Controller\Index::class => 'news'],
                '{oplata-i-dostavka}' => [Site\Controller\Index::class => 'delivery'],
                '{vakansii}' => [Site\Controller\Index::class => 'job'],
                '{kontakty}' => [Site\Controller\Index::class => 'contacts'],
                '{korzina-tovarov}' => [Site\Controller\Index::class => 'cart'],
                '{korzina-tovarov}=>{search}' => [Site\Controller\Index::class => 'cart'],
                '{katalog-tovarov}=>{nakleykitermoetiketki-s-pechatyu}' => [Site\Controller\Index::class => 'termoprint'],
                '{katalog-tovarov}=>{bumazhnye-stakany-s-logotipom}' => [Site\Controller\Index::class => 'withlogo'],
                '{katalog-tovarov}=>{bumazhnye-stakany-s-logotipom}=>{[a-zA-Z0-9\_\-]+}' => [Site\Controller\Index::class => 'withlogoSingle'],
                '{katalog-tovarov}' => [Site\Controller\Index::class => 'index'],
                '{katalog-tovarov}=>{[a-zA-Z0-9\_\-]+}' => [Site\Controller\Index::class => 'catalog'],
                '{katalog-tovarov}=>{[a-zA-Z0-9\_\-]+}=>{[a-zA-Z0-9\_\-]+}' => [Site\Controller\Index::class => 'catalog'],
                '{katalog-tovarov}=>{[a-zA-Z0-9\_\-]+}=>{[a-zA-Z0-9\_\-]+}=>{[a-zA-Z0-9\_\-]+}' => [Site\Controller\Index::class => 'catalog'],
                '{submit}' => [Site\Controller\Index::class => 'submit'],
                '{cart}=>{add}=>{[\d]+}=>{[\d]+}' => [Site\Controller\Index::class => 'cartAdd'],
                '{cart}=>{remove}=>{[\d]+}' => [Site\Controller\Index::class => 'cartRemove'],
            ],
            Config::AdminDomain => [
                '{sync}' => [Admin\Controller\Test::class => 'sync'],

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

                '{category}' => [Admin\Controller\Category::class => 'index'],
                '{category}=>{save}' => [Admin\Controller\Category::class => 'save'],
                '{category}=>{delete}=>{[\d]+}' => [Admin\Controller\Category::class => 'delete'],

                '{product}' => [Admin\Controller\Product::class => 'index'],
                '{product}=>{edit}=>{[\d]+}' => [Admin\Controller\Product::class => 'edit'],
                '{product}=>{print}' => [Admin\Controller\Product::class => 'print'],
                '{product}=>{sticker}=>{[\d]+}' => [Admin\Controller\Product::class => 'sticker'],
                '{product}=>{create}' => [Admin\Controller\Product::class => 'create'],

                '{order}' => [Admin\Controller\Order::class => 'index'],
                '{order}=>{edit}=>{[\d]+}' => [Admin\Controller\Order::class => 'edit'],
                '{order}=>{getClient}' => [Admin\Controller\Order::class => 'getClient'],
                '{order}=>{setClient}' => [Admin\Controller\Order::class => 'setClient'],

                '{content}' => [Admin\Controller\Content::class => 'index'],
                '{content}=>{[\d]+}' => [Admin\Controller\Content::class => 'index'],
                '{content}=>{[\d]+}=>{create}' => [Admin\Controller\Content::class => 'create'],
                '{content}=>{[\d]+}=>{delete}=>{[\d]+}' => [Admin\Controller\Content::class => 'delete'],
                '{content}=>{save}' => [Admin\Controller\Content::class => 'save'],
                '{content}=>{save}=>{[\d]+}' => [Admin\Controller\Content::class => 'save'],
                '{content}=>{fields}=>{create}=>{[\d]+}' => [Admin\Controller\Content::class => 'fields'],
                '{content}=>{fields}=>{save}=>{[\d]+}' => [Admin\Controller\Content::class => 'fields'],

                '{document}=>{order}=>{[\d]+}' => [Admin\Controller\Document::class => 'order'],
                '{document}=>{account}=>{[\d]+}' => [Admin\Controller\Document::class => 'account'],
                '{document}=>{sticker}=>{[\d]+}=>{[\d]+}' => [Admin\Controller\Document::class => 'sticker'],

                '{critical}' => [Admin\Controller\Critical::class => 'matrix'],
                '{critical}=>{items}' => [Admin\Controller\Critical::class => 'items'],

                '{client}' => [Admin\Controller\Client::class => 'index'],

                '{callback}' => [Admin\Controller\Callback::class => 'index'],
                '{design}' => [Admin\Controller\Design::class => 'index'],

                '{supplier}=>{list}' => [Admin\Controller\Supplier::class => 'list'],
                '{supplier}=>{order}' => [Admin\Controller\Supplier::class => 'order'],
                '{supplier}=>{order}=>{edit}=>{[\d]+}' => [Admin\Controller\Supplier::class => 'edit'],

                '{test}=>{api}' => [Admin\Controller\Test::class => 'api']
            ],
            Config::ClientDomain => [
                '' => [Client\Controller\Index::class => 'index'],
                '{profile}' => [Client\Controller\Index::class => 'profile'],
                '{logout}' => [Client\Controller\Index::class => 'logout'],
            ],
        ][$domain] ?? [];
    }
}
