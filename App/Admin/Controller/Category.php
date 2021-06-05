<?php

namespace App\Admin\Controller;

use Core\Auth;
use Core\BreadCrumbs;
use Core\Request\Request;
use Core\Database\DB;
use mysql_xdevapi\Exception;

class Category extends Index {

    /**
     * @return bool
     * @throws \Exception
     */
    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'Категории']);

        $catalog = DB::select('*')
            ->from('category')
            ->where('parent_id', '=', 0)
            ->order_by('name', 'asc')
            ->execute()
            ->fetch_all();

        $cats = DB::select('*')
            ->from('category')
            ->order_by(DB::expr('sort = 0, sort'))
            ->execute()
            ->fetch_all();

        $parents = array_filter($cats, function($i){
            return $i->parent_id == 0;
        });

        $tree = [];
        foreach ($parents as $parent) {
            $tree[$parent->id] = [
                'category' => $parent,
                'extend' => []
            ];
        }

        foreach ($cats as $i) {
            if ($i->parent_id) {
                $tree[$i->parent_id]['extend'][] = $i;
            }
        }

        return $this->render('Admin:category/index', [
            'category' => $catalog,
            'tree' => $tree
        ]);
    }

    function save(Request $request)
    {
        if ($request->get('id')) {

            $alias = mb_strtolower(\Core\Helpers\Text::transliterate($request->get('name')));
            $alias = preg_replace('/[^a-z0-9\s]/', '', $alias);
            $alias = str_replace(' ', '-', trim($alias));

            DB::update('category')
                ->set([
                    'name' => $request->get('name'),
                    'alias' => $alias,
                    'parent_id' => intval($request->get('parent')),
                    'sort' => intval($request->get('sort')),
                    'active' => intval($request->get('status'))
                ])
                ->where('id', '=', DB::expr($request->get('id')))
                ->execute();
        } else {

            $alias = mb_strtolower(\Core\Helpers\Text::transliterate($request->get('name')));
            $alias = preg_replace('/[^a-z0-9\s]/', '', $alias);
            $alias = str_replace(' ', '-', trim($alias));

            DB::insert('category', [
                'parent_id', 'name', 'alias', 'sort', 'active'
            ])
                ->values([
                    $request->get('parent'),
                    $request->get('name'),
                    $alias,
                    $request->get('sort'),
                    DB::expr($request->get('status'))
                ])->execute();
        }
    }

    function delete()
    {
        DB::delete('category')
            ->where('id', '=', DB::expr(\Core\Router::seg(2)))
            ->execute();

        return $this->redirectToRoute('/category');

    }
}