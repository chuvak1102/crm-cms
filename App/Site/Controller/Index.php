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
            ->from('diafan_menu')
            ->where('module_name', '=', 'shop')
            ->where('site_id', '=', 30)
            ->execute()->fetch_all();



        foreach ($c as $i) {

            $alias = mb_strtolower(\Core\Helpers\Text::transliterate($i->name1));
            $alias = preg_replace('/[^a-z0-9\s]/', '', $alias);
            $alias = str_replace(' ', '-', trim($alias));

//            dump([
//                $i->id,
//                $i->name1,
//                $i->parent_id,
//                $alias
//
//            ]);

//                DB::insert('category', [
//                'id',
//                'parent_id',
//                'name',
//                'alias',
//                    'sort'
//            ])->values([
//                $i->id,
//                $i->parent_id,
//                $i->name1,
//                $alias,
//                    $i->sort
//            ])
//                ->execute();

        }

//        dump($c);
        die();


        return $this->render('Site:index', [
            's' => \Core\Page::instance()->getAll()
        ]);
    }
}
