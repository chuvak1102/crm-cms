<?php

namespace Core\Model;

use Core\Database\DB;

class Model {

    const STRING = 1;
    const INT = 2;

    private function future()
    {
//        dump(is_a(DictionaryValue::class, Model::class, true));
    }

    public static function one($value = null, $column = 'id')
    {
        $model = new static();
        $table = self::getTableName($model);

        if (is_array($column)) {

            $object = DB::select('*')
                ->from($table);

            foreach ($column as $key => $val) {
                $object = $object->where($key, '=', $val);
            }

            $object = $object
                ->execute()
                ->fetch();

        } else {

            $object = DB::select('*')
                ->from($table)
                ->where($column, '=', $value)
                ->execute()
                ->fetch();
        }

        if ($object) {
            foreach ($object as $k => $v) {
                $model->$k = $v;
            }

            return $model;
        }

        $model->afterLoad();

        return $model;
    }

    public static function many($value = null, $column = 'id') : array
    {
        $table = self::getTableName(new static());

        $object = DB::select('*')
            ->from($table)
            ->where($column, '=', $value)
            ->execute()
            ->fetch_all();

        $many = [];

        if ($object) {

            foreach ($object as $single) {

                $model = new static();

                foreach ($single as $k => $v) {
                    $model->$k = $v;
                }

                $model->afterLoad();

                array_push($many, $model);
            }

            return $many;
        }

        return [];
    }

    /**
     * @param $class
     * @throws \ReflectionException
     * @throws \Exception
     */
    private static function getTableName($class)
    {
        $rf = new \ReflectionClass($class);

        preg_match('/table[\s=]+[a-zA-Z\_]+/', $rf->getDocComment(), $tableMatch);

        if ($table = current($tableMatch)) {
            $table = str_replace(' ', '', $table);
            $table = str_replace('table=', '', $table);
        } else {
            throw new \Exception($rf->getName().': no table name specified');
        }

        return $table;
    }

    public function afterLoad() {}
}
