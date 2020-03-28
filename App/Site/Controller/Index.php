<?php

namespace App\Site\Controller;
use Core\Database\DB;

class Index extends Site {

    function index()
    {
        return $this->render('Site:index');
    }

    function insert()
    {
        $c = DB::select('*')
            ->from('diafan_shop_param_select')
            ->where('param_id', '=', 26)
//            ->where('site_id', '=', 30)
            ->execute()->fetch_all();

        foreach ($c as $i) {

//            $alias = mb_strtolower(\Core\Helpers\Text::transliterate($i->name1));
//            $alias = preg_replace('/[^a-z0-9\s]/', '', $alias);
//            $alias = str_replace(' ', '-', trim($alias));

                DB::insert('supplier', [
                'id',
                'name',
//                'name',
//                'alias',
//                    'sort',
//                    'active'
            ])->values([
                $i->id,
                $i->name1,
//                $i->name1,
//                $alias,
//                    $i->sort,
//                    $i->act1
            ])
                ->execute();

        }

//        dump($c);
        die();


        return $this->render('Site:index', [
            's' => \Core\Page::instance()->getAll()
        ]);
    }
}
