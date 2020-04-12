<?php

namespace App\Admin\Controller;

use Core\Auth;
use Core\Request\Request;
use Core\Database\DB;

class Category extends Index {

    /**
     * @return bool
     * @throws \Exception
     */
    function index(Request $request)
    {
        $catalog = DB::select('*')
            ->from('category')
            ->order_by('active', 'desc')
            ->order_by('name', 'asc')
            ->execute()
            ->fetch_all();

        return $this->render('Admin:category/index', [
            'category' => $catalog
        ]);
    }

    function save(Request $request)
    {
        if ($request->get('id')) {
            DB::update('category')
                ->set([
                    'name' => $request->get('name'),
                    'parent_id' => DB::expr($request->get('parent')),
                    'sort' => DB::expr($request->get('sort')),
                    'active' => DB::expr($request->get('status'))
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