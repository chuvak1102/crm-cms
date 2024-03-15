<?php

namespace App\Admin\Controller;

use App\Config;
use Core\Auth;
use Core\BreadCrumbs;
use Core\FileUploader;
use Core\Helpers\Text;
use Core\JsonResponse;
use Core\Request\Request;
use Core\Database\DB;

class Gallery extends Index {

    function before()
    {
        parent::before();
        if (!\App\Admin\Model\User::one(Auth::instance()->current()->id)->isGrantedManager()) {
            $this->redirectToRoute('/403');
        }
    }

    /**
     * @return bool
     * @throws \Exception
     */
    function index(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'Наша продукция']);

        return $this->render('Admin:gallery/index', [
            'gallery' => DB::select('*')
                ->from('gallery')
                ->order_by('sort')
                ->execute()
                ->fetch_all(),
        ]);
    }

    function create(Request $request)
    {
        BreadCrumbs::instance()->push(['' => 'Наша продукция']);

        if ($id = $request->seg(2)) {

            $img = '';
            $name = $request->get('name');
            $alias = Text::alias(urldecode($name));

            if ($image = $request->files('image')['name']) {

                if ($image) {
                    $img = (new FileUploader())->save($request->files('image'));
                }

                DB::update('gallery')->set([
                    'image' => $img
                ])->where('id', '=', $id)
                    ->execute();
            }

            DB::update('gallery')->set([
                'name' => $name,
                'alias' => $alias
            ])->where('id', '=', $id)
                ->execute();

        } else {

            $img = '';
            $name = $request->get('name');
            $alias = Text::alias(urldecode($name));

            if ($image = $request->files('image')) {

                if ($image['name']) {
                    $img = (new FileUploader())->save($image);
                }
            }

            DB::insert('gallery', ['name', 'alias', 'image'])->values([
                'name' => $name,
                'alias' => $alias,
                'image' => $img
            ])->execute();
        }

        $this->redirectToRoute('/gallery');
    }

    function sort(Request $request)
    {
        $sort = $request->get('sort');
        $data = [];
        for ($i = 0; $i < count($sort); $i++) {

            $id = intval($sort[$i]);

            DB::update('gallery')
                ->set([
                    'sort' => $i
                ])->where('id', '=', $id)
                ->execute();

            $data[] = [$sort[$i], $i];
        }


        return new JsonResponse($data);
    }

    function items(Request $request)
    {
        $name = DB::select('name')
            ->from('gallery')
            ->where('id', '=', $request->seg(2))
            ->execute()
            ->fetch();

        BreadCrumbs::instance()->push(['/gallery' => 'Наша продукция']);
        BreadCrumbs::instance()->push(['' => $name->name]);

        return $this->render('Admin:gallery/items', [
            'gallery' => $request->seg(2),
            'items' => DB::select('*')
            ->from('product')
            ->where('id', 'in', DB::select('product_id')
                ->from('gallery_item')
                ->where('gallery_id', '=', $request->seg(2))
            )
            ->execute()
            ->fetch_all()
        ]);
    }

    function search(Request $request)
    {
        $product = [];
        if ($name = $request->get('value')) {
            $product = DB::select('*')
                ->from('product')
                ->where_open()
                ->or_where_open()
                ->or_where('product.name', 'like', "%$name%")
                ->or_where('product.article', 'like', "%$name%")
                ->or_where_close()
                ->where_close()
                ->limit(15)
                ->execute()
                ->fetch_all();
        }

        return new JsonResponse($product);
    }

    function save(Request $request)
    {
        if ($items = $request->get('items')) {

            DB::delete('gallery_item')
                ->where('gallery_id', '=', $request->get('gallery'))
                ->execute();

            for ($i = 0; $i < count($items); $i++) {

                DB::insert('gallery_item', ['product_id', 'sort', 'gallery_id'])
                    ->values([
                        $items[$i], $i, $request->get('gallery')
                    ])
                    ->execute();
            }

        }

        return new JsonResponse($request->get('items'));
    }

    function delete()
    {
        DB::delete('gallery_item')
            ->where('gallery_id', '=', DB::expr(\Core\Router::seg(2)))
            ->execute();

        DB::delete('gallery')
            ->where('id', '=', DB::expr(\Core\Router::seg(2)))
            ->execute();

        return $this->redirectToRoute('/gallery');
    }
}