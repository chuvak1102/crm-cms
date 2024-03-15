<?php

namespace App\Admin\Controller;

use App\Admin\Model\ContentField;
use App\Admin\Model\ContentType;
use App\Admin\Model\Dictionary;
use App\Admin\Model\Field;
use Core\Auth;
use Core\Controller;
use Core\Database\Database;
use Core\Database\Database\Exception;
use Core\FileUploader;
use Core\Helpers\Text;
use Core\Request\Request;
use Core\Database\DB;
use App\Admin\Model\Content as ContentModel;
use Core\Router;

class Content extends Index {

    const TEXT = 'text';
    const FILE_IMAGE = 'file_image';
    const TEXT_ALIAS = 'text_alias';

    const COLUMN_TYPE_STATIC = 'static';
    const COLUMN_TYPE_REFERENCE = 'constraint';
    const COLUMN_TYPE_DICTIONARY = 'dictionary';
    const COLUMN_TYPE_ALIAS = 'alias';

    function before()
    {
        parent::before();
        if (!\App\Admin\Model\User::one(Auth::instance()->current()->id)->isGrantedManager()) {
            $this->redirectToRoute('/403');
        }
    }

    function index(Request $request)
    {
        if (Router::seg(1)) {

            $cols = 6;
            $content = ContentModel::one(Router::seg(1));
            $contentFields = ContentField::many($content->id, 'content_id');
            $fields_all = DB::select('*')
                ->from('content_field')
                ->where('content_id', '=', Router::seg(1))
                ->limit($cols)
                ->execute()
                ->fetch_all();
            $fields = array_column($fields_all, 'name');
            $columns = array_column($fields_all, 'column_name');

            if (count($fields) < $cols) {
                $fields = $fields + array_fill(count($fields),$cols - count($fields) - 1, "");
            }

            $data = DB::select(DB::expr('id, '.implode(', ', $columns)))
                ->from($content->table)
                ->execute()
                ->fetch_all();
            $columnNames = DB::query(Database::SELECT,"show columns from $content->table")->execute()->fetch_all();

            $result = [];
            foreach ($data as $i) {

                $i = (array) $i;
                $buff = array_fill(count($i),$cols - count($i) + 1, "");

                $columns = (array) $i + $buff;

                $arrayData = [];
                foreach ($columns as $column => $value) {

                    $field = null;
                    $fieldType = null;

                    if ($value) {

                        $field = DB::select('*')
                            ->from('content_field')
                            ->where('content_id', '=', $content->id)
                            ->where('column_name', '=', $column)
                            ->execute()->fetch();
                        $fieldType = Field::one($field->field_id);
                    }

                    $row = [
                        'field' => $field,
                        'type' => $fieldType,
                        'data' => $i
                    ];

                    $arrayData[] = $row;
                }

                $result[] = $arrayData;
            }

            return $this->render('Admin:content/show', [
                'fields' => $fields,
                'data' => $result,
                'content' => $content,
                'content_fields' => $contentFields,
                'columns' => $columnNames
            ]);
        }

        return $this->render('Admin:content/index', [
            'content' => ContentModel::all(),
            'content_type' => ContentType::all()
        ]);
    }

    function save(Request $request)
    {
        if ($id = Router::seg(2)) {

            DB::update('content')->set([
//                'canonical' => $request->get('canonical'),
//                'type' => $request->get('type'),
                'show' => $request->get('show'),
            ])->where('id', '=', $id)
                ->execute();

        } else {

            DB::insert('content', [
                'canonical',
                'table',
                'content_type_id',
                'show',
            ])->values([
                $request->get('canonical'),
                $request->get('table'),
                $request->get('type'),
                $request->get('show'),
            ])
                ->execute();
        }

        return $this->redirectToRoute('/content');
    }

    function fields(Request $request)
    {
        if ($request->get('submit')) {

            $content = ContentModel::one($request->seg(3));

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

                    $content->processTable($fields);

                    foreach ($fields as $i) {

                        $columnType = current(explode(':',$i['advanced']));
                        $referenceId = end(explode(':',$i['advanced']));
                        $field = Field::one($i['type']);

                        try {

                            switch ($columnType) {


                                case self::COLUMN_TYPE_STATIC : {

                                    DB::insert('content_field', [
                                        'content_id', 'field_id', 'name', 'column_name', 'column_type'
                                    ])->values([
                                        $content->id, $field->id, $i['canonical'], $i['column'], $columnType
                                    ])->execute();

                                    break;
                                }

                                case self::COLUMN_TYPE_REFERENCE : {

                                    DB::insert('content_field', [
                                        'content_id', 'field_id', 'name', 'column_name', 'column_type', 'reference_table', 'reference_column'
                                    ])->values([
                                        $content->id, $field->id, $i['canonical'], $i['column'], $columnType, $content->id, $referenceId
                                    ])->execute();

                                    break;
                                }

                                case self::COLUMN_TYPE_DICTIONARY : {

                                    DB::insert('content_field', [
                                        'content_id', 'field_id', 'name', 'column_name', 'column_type', 'reference_table', 'reference_column'
                                    ])->values([
                                        $content->id, $field->id, $i['canonical'], $i['column'], $columnType, $content->id, $referenceId
                                    ])->execute();

                                    break;
                                }

                                case self::COLUMN_TYPE_ALIAS : {

                                    $param = json_encode([
                                        'alias_to' => end(explode(':',$i['advanced']))
                                    ]);

                                    DB::insert('content_field', [
                                        'content_id', 'field_id', 'name', 'column_name', 'column_type', 'reference_table', 'reference_column', 'column_param'
                                    ])->values([
                                        $content->id, $field->id, $i['canonical'], $i['column'], $columnType, $content->id, null, $param
                                    ])->execute();

                                    break;
                                }

                                default: break;
                            }

                        } catch (Exception $e) {

                            throw $e;
                        }
                    }
                }

                return $this->redirectToRoute('/content');
            }
        }

        return $this->render('Admin:content/fields', [
            'fields' => Field::all(),
            'content' => ContentModel::one(Router::seg(3)),
            'content_field' => ContentField::many(Router::seg(3), 'content_id'),
            'dictionary' => Dictionary::all(),
            'constraint' => ContentField::all(),
            'id_type' => Field::one('id', 'value')
        ]);
    }

    function create(Request $request)
    {
        $content = ContentModel::one(Router::seg(1));
        $fields = $content->getFields();
        $columns = DB::select('*')
            ->from('content_field')
            ->where('content_id', '=', $content->id)
            ->execute()
            ->fetch_all();
        $cols = array_column($columns, 'column_name');
        $cols = array_column($columns, 'column_name');

        if ($request->get('submit')) {

            $columns = [];
            $values = [];

            /** @var ContentField $i */
            foreach ($fields as $i) {

                if (in_array($i->column_name, $cols)) {

                    switch ($i->column_type) {

                        case self::COLUMN_TYPE_STATIC : {

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
                            break;
                        }

                        case self::COLUMN_TYPE_ALIAS : {

                            $params = json_decode($i->column_param);
                            
                            $aliasTo = $params->alias_to;

                            $value = $request->get($i->column_name);

                            if ($value) {
                                $alias = Text::alias($value);
                            } else {
                                $alias = Text::alias($request->get($aliasTo));
                            }

                            if ($i->getField()->value == self::TEXT) {
                                $columns[] = $i->column_name;
                                $values[] = $alias;
                            }
                            break;
                        }
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

    function delete(Request $request)
    {
        $content = \App\Admin\Model\Content::one(Router::seg(1));

        DB::delete($content->table)
            ->where('id', '=', Router::seg(3))
            ->execute();

        return $this->redirectToRoute('/content/'.$content->id);

    }

}
