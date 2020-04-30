<?php

namespace App\Admin\Controller;

use App\Admin\Model\ContentField;
use App\Admin\Model\Field;
use Core\Controller;
use Core\Database\Database\Exception;
use Core\FileUploader;
use Core\Request\Request;
use Core\Database\DB;
use App\Admin\Model\Content as ContentModel;
use Core\Router;

class Content extends Controller {

    const TEXT = 'text';
    const FILE_IMAGE = 'file_image';

    function index(Request $request)
    {
        if (Router::seg(1)) {

            $cols = 6;
            $content = ContentModel::one(Router::seg(1));
            $data = DB::select('*')
                ->from($content->table)
                ->execute()
                ->fetch_all();

            $arrayData = [];
            foreach ($data as $i) {
                $i = (array) $i;
                $buff = array_fill(count($i),$cols - count($i), "");
                $arrayData[] = (array) $i + $buff;
            }

            $fields = DB::select('*')
                ->from('content_field')
                ->where('content_id', '=', Router::seg(1))
                ->limit($cols)
                ->execute()
                ->fetch_all();
            $fields = array_column($fields, 'name');


            if (count($fields) < $cols) {
                $fields = $fields + array_fill(count($fields),$cols - count($fields) - 1, "");
            }

            return $this->render('Admin:content/show', [
                'fields' => $fields,
                'data' => $arrayData,
                'content' => $content
            ]);
        }

        return $this->render('Admin:content/index', [
            'content' => ContentModel::all()
        ]);
    }

    function save(Request $request)
    {
        if ($id = Router::seg(2)) {

            DB::update('content')->set([
                'canonical' => $request->get('canonical'),
                'route' => $request->get('route'),
                'template' => $request->get('template'),
            ])->where('id', '=', $id)
                ->execute();

        } else {

            DB::insert('content', [
                'canonical',
                'table',
                'route',
                'template',
            ])->values([
                $request->get('canonical'),
                'generated_'.$request->get('table'),
                $request->get('route'),
                $request->get('template'),
            ])
                ->execute();
        }

        return $this->redirectToRoute('/content');
    }

    function fields(Request $request)
    {
        if ($request->get('submit')) {

            $content = ContentModel::one(Router::seg(3));

            if ($content->id) {

                $fields = [];
                foreach ($request->get('canonical') as $i => $value) {
                    $fields[] = [
                        'canonical' => $request->get('canonical')[$i],
                        'column' => $request->get('column')[$i],
                        'type' => $request->get('type')[$i],
                        'advanced' => $request->get('advanced')[$i],
                    ];
                }

                if ($fields) {

                    try {
                        $content->processTable($fields);
                    } catch (Exception $e) {
                        dump($e->getMessage());
                    }

                    foreach ($fields as $i) {

                        $fieldId = DB::select('id')
                            ->from('field')
                            ->where('type', '=', $i['type'])
                            ->execute()
                            ->fetch()
                            ->id;

                        DB::insert('content_field', [
                            'content_id',
                            'field_id',
                            'name',
                            'column_name',
                        ])->values([
                            $content->id,
                            $fieldId,
                            $i['canonical'],
                            $i['column'],
                        ])
                            ->execute();

                    }
                }

                return $this->redirectToRoute('/content');
            }
        }


        return $this->render('Admin:content/fields', [
            'fields' => Field::all(),
            'content' => ContentModel::one(Router::seg(3)),
            'content_field' => ContentField::many(Router::seg(3), 'content_id')
        ]);
    }

    function create(Request $request)
    {
        $content = ContentModel::one(Router::seg(1));
        $fields = $content->getFields();
        $columns = DB::select('column_name')
            ->from('content_field')
            ->where('content_id', '=', $content->id)
            ->execute()
            ->fetch_all();
        $cols = array_column($columns, 'column_name');

        if ($request->get('submit')) {

            $columns = [];
            $values = [];

            /** @var ContentField $i */
            foreach ($fields as $i) {

                if (in_array($i->column_name, $cols)) {

                    if ($i->getField()->value == self::FILE_IMAGE) {
                        if ($image = $request->files($i->column_name)) {
                            if ($image['name']) {

                                $columns[] = $i->column_name;
                                $values[] = (new FileUploader())->save($image);
                            }
                        }
                    }

                    if ($i->getField()->value == self::TEXT) {
                        $columns[] = $i->column_name;
                        $values[] = $request->get($i->column_name);
                    }
                }
            }

            DB::insert($content->table, $columns)
                ->values($values)
                ->execute();

            return $this->redirectToRoute("/content/{$content->id}");
        }

        return $this->render('Admin:content/create', [
            'content' => $content,
            'fields' => $fields
        ]);
    }

}
