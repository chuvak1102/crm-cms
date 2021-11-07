<?php

namespace App\Admin\Controller;

use Core\Auth;
use Core\BreadCrumbs;
use Core\FileUploader;
use Core\Request\Request;
use Core\Database\DB;

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

    function saveImage(Request $request)
    {
        if ($image = $request->files('image')) {

            if ($image['name']) {

                $name = (new FileUploader())->save($image);
                $id = $request->get('category');

                $root = $_SERVER['DOCUMENT_ROOT'].'/files/';
                $img = new \Imagick($root.$name);
                $img->scaleImage(200,0);
                $img->writeImage($root.'mini/'.$name);
                $img->destroy();

                DB::update('category')->set([
                    'image' => $name,
                ])->where('id', '=', $id)
                    ->execute();
            }
        }

        return $this->redirectToRoute('/category');
    }

    function delete()
    {
        DB::delete('product_to_category')
            ->where('category_id', '=', DB::expr(\Core\Router::seg(2)))
            ->execute();

        DB::delete('category')
            ->where('id', '=', DB::expr(\Core\Router::seg(2)))
            ->execute();

        return $this->redirectToRoute('/category');

    }
}