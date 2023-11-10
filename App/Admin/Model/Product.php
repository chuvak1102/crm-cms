<?php

namespace App\Admin\Model;

use Core\Database\DB;
use Core\FileUploader;
use Core\Helpers\Text;
use Core\Model\Model;
use Core\Request\Request;

/**
 * table = product
 */
class Product extends Model {

//    public $id = self::INT;
//    public $name = self::STRING;
//    public $count_current = DictionaryValue::class;

    function getCategory()
    {
        return DB::select('category.*')
            ->from('category')
            ->join('product_to_category')
                ->on('product_to_category.category_id', '=', 'category.id')
            ->where('product_to_category.product_id', '=', $this->id)
            ->execute()
            ->fetch();
    }

    public function countCurrent() : DictionaryValue
    {
        return DictionaryValue::one($this->count_current);
    }

    public function countMinimal() : DictionaryValue
    {
        return DictionaryValue::one($this->count_minimal);
    }

    public function countReserve() : DictionaryValue
    {
        return DictionaryValue::one($this->count_reserve);
    }

    public function getPriceSiteOptCount(): DictionaryValue
    {
        return DictionaryValue::one($this->price_site_opt_count);
    }

    public function getPackCount(): DictionaryValue
    {
        return DictionaryValue::one($this->pack_count);
    }

    public function getPackWeight(): DictionaryValue
    {
        return DictionaryValue::one($this->pack_weight);
    }

    public function getPackVolume(): DictionaryValue
    {
        return DictionaryValue::one($this->pack_volume);
    }

    public function getBoxCount(): DictionaryValue
    {
        return DictionaryValue::one($this->box_count);
    }

    public function getBoxWeight(): DictionaryValue
    {
        return DictionaryValue::one($this->box_weight);
    }

    public function getBoxVolume(): DictionaryValue
    {
        return DictionaryValue::one($this->box_volume);
    }

//    public function getLength(): DictionaryValue
//    {
//        return DictionaryValue::one($this->length);
//    }
//
//    public function getWidth(): DictionaryValue
//    {
//        return DictionaryValue::one($this->width);
//    }
//
//    public function getHeight(): DictionaryValue
//    {
//        return DictionaryValue::one($this->height);
//    }

    public function categoryIds()
    {
        $ptc = ProductToCategory::many($this->id, 'product_id');

        $categoryIds = [];
        foreach ($ptc as $i) {
            $categoryIds[] = $i->category_id;
        }

        return $categoryIds;
    }

    public function productToSupplier()
    {
        return ProductToSupplier::one($this->id, 'product_id');
    }

    public function save(Request $request)
    {
        // create
        if (!$this->id) {
            DB::insert('product', [
                'name',
                'alias',
            ])->values([
                $request->get('name'),
                Text::alias($request->get('name'))
            ])
                ->execute();

            $id = DB::select(DB::expr('MAX(id) as id'))
                ->from('product')
                ->execute()->current()['id'];

            $this->id = $id;
        }

        $priceSiteOptCount = $request->get('price_site_opt_count');
        $countCurrent = $request->get('count_current');
        $countMinimal = $request->get('count_minimal');
        $countReserve = $request->get('count_reserve');

        // запоминаем старые вместе сортировкой, удаляем всё,
        // и записываем заново подсовывая сортировку если она была
        if ($request->get('category_extra')) {

            $categoryNew = $request->get('category_extra', []);
            $categoryExist = (array) DB::select('category_id', 'product_id', 'sort')
                ->from('product_to_category')
                ->where('product_id', '=', $this->id)
                ->execute()
                ->fetch_all();
            $exist = array_column($categoryExist, 'category_id');
            $stored = [];
            foreach ($categoryExist as $i) {
                $stored[$i->category_id] = $i;
            }

            // drop exist
            foreach ($exist as $i) {
                DB::delete('product_to_category')
                    ->where('product_id', '=', $this->id)
                    ->where('category_id', '=', $i)
                    ->execute();
            }

            foreach ($categoryNew as $i) {
                $sort = in_array($i, $exist) ? $stored[$i]->sort : 0;
                $category = in_array($i, $exist) ? $stored[$i]->category_id : $i;
                DB::insert('product_to_category', ['product_id', 'category_id', 'sort'])
                    ->values([$this->id, $category, $sort])
                    ->execute();
            }
        }

        if ($request->get('additional')) {

            $additionalNew = array_keys($request->get('additional'));
            $additionalExist = DB::select('dictionary_value.*')
                ->from('dictionary_value')
                ->join('dictionary_field')
                ->on('dictionary_field.id', '=', 'dictionary_value.key')
                ->join('dictionary')
                ->on('dictionary.id', '=','dictionary_field.dictionary')
                ->where('dictionary_value.external_table', '=', 'dictionary_field')
                ->where('dictionary_value.external_column', '=', 'external_column')
                ->where('dictionary_value.external_id', '=', $this->id)
                ->where('dictionary.id', '=', 2)
                ->execute()
                ->fetch_all();
            $additionalExist = array_column($additionalExist, 'key');
            $process = array_merge(
                array_diff($additionalNew, $additionalExist),
                array_diff($additionalExist, $additionalNew)
            );

            if (count($additionalNew) > count($additionalExist)) {
                foreach ($process as $id) {
                    DB::insert('dictionary_value', ['key', 'value', 'external_id', 'external_table', 'external_column'])
                        ->values([$id, 1, $this->id, 'dictionary_field', 'external_column'])
                        ->execute();
                }
            }

            if (count($additionalNew) < count($additionalExist)) {
                foreach ($process as $id) {
                    DB::delete('dictionary_value')
                        ->where('external_id', '=', $this->id)
                        ->where('key', '=', $id)
                        ->where('external_table', '=', 'dictionary_field')
                        ->where('external_column', '=', 'external_column')
                        ->execute();
                }
            }
        }

        $packCount = $request->get('pack_count');
        $packWeight = $request->get('pack_weight');
        $packVolume = $request->get('pack_volume');
        $boxCount = $request->get('box_count');
        $boxWeight = $request->get('box_weight');
        $boxVolume = $request->get('box_volume');
        $length = $request->get('length');
        $width = $request->get('width');
        $height = $request->get('height');
        $diameter = $request->get('diameter');

        $values = [
            'name' => $request->get('name'),
            'alias' => Text::alias($request->get('name')),
            'article' => $request->get('article'),
            'active' => $request->get('active') ? 1 : 0,
            'price_site' => str_replace(',', '.', $request->get('price_site')),
            'count_current' => $countCurrent,
            'count_minimal' => $countMinimal,
            'count_reserve' => $countReserve,
            'hit' => $request->get('hit') ? 1 : 0,
            'new' => $request->get('new') ? 1 : 0,
            'share' => $request->get('share') ? 1 : 0,
            'price_site_opt' => str_replace(',', '.', $request->get('price_site_opt')),
            'price_supplier' => str_replace(',', '.', $request->get('price_supplier')),
            'price_site_opt_count' => $priceSiteOptCount,
            'supplier_product_name' => $request->get('supplier_product_name'),
            'supplier_article' => $request->get('supplier_article'),
            'supplier_date_arrive' => $request->get('supplier_date_arrive'),
            'available' => $request->get('available') ? 1 : 0,
            'kit' => $request->get('kit') ? 1 : 0,
            'logo' => $request->get('logo') ? 1 : 0,
            'pack_count' => $packCount,
            'pack_weight' => $packWeight,
            'pack_volume' => $packVolume,
            'box_count' => $boxCount,
            'box_weight' => $boxWeight,
            'box_volume' => $boxVolume,
            'length' => $length,
            'width' => $width,
            'height' => $height,
            'diameter' => $diameter,
            'material' => $request->get('material'),
            'color' => $request->get('color'),
            'description' => $request->get('description'),
            'tags' => $request->get('tags'),
//            'sort' => $request->get('sort'),
        ];

        if ($image = $request->files('image')) {
            if ($image['name']) {
                $values['image'] = (new FileUploader())->save($image);

                $root = $_SERVER['DOCUMENT_ROOT'].'/files/';
                $img = new \Imagick($root.$values['image']);
                $img->scaleImage(200,0);
                $img->writeImage($root.'mini/'.$values['image']);
                $img->destroy();
            }
        }

        if ($images = $request->files('image_advanced')) {

            if ($images) {

                $images = $this->reArrayImages($images);

                foreach ($images as $i) {

                    if ($i['name']) {
                        $name = (new FileUploader())->save($i);

                        if (is_array($name)) {
                            throw new \Exception(var_export($name, true));
                        }

                        $root = $_SERVER['DOCUMENT_ROOT'].'/files/';
                        $img = new \Imagick($root.$name);
                        $img->scaleImage(200,0);
                        $img->writeImage($root.'mini/'.$name);
                        $img->destroy();

                        DB::insert('product_images', ['product_id', 'href'])
                            ->values([$this->id, $name])
                            ->execute();
                    }
                }
            }
        }

        if ($supplier = $request->get('supplier')) {
            $exist = DB::select('*')
                ->from('product_to_supplier')
                ->where('product_to_supplier.product_id', '=', $this->id)
                ->execute()
                ->fetch();
            if ($exist) {
                DB::update('product_to_supplier');
                DB::update('product_to_supplier')->set([
                    'supplier_id' => intval($supplier)
                ])->where('product_id', '=', $this->id)
                    ->execute();
            } else {
                DB::insert('product_to_supplier', ['supplier_id', 'product_id'])
                    ->values([$supplier, $this->id])
                    ->execute();
            }
        }

        DB::update('product')
            ->set($values)
            ->where('id', '=', $this->id)
            ->execute();
    }

    public static function getCategoryTree()
    {
        $catalog = DB::select('*')
            ->from('category')
            ->order_by('sort')
            ->execute()
            ->fetch_all();

        $category = [];
        foreach ($catalog as $i) {
            if (!$i->parent_id) {
                $category[$i->id] = [
                    'id' => $i->id,
                    'name' => $i->name,
                    'alias' => $i->alias,
                    'extend' => []
                ];
            }
        }
        foreach ($catalog as $i) {
            if ($i->parent_id) {
                if (isset($category[$i->parent_id])) {
                    $category[$i->parent_id]['extend'][] = [
                        'id' => $i->id,
                        'name' => $i->name,
                        'alias' => $i->alias,
                    ];
                }
            }
        }

        return $category;
    }

    private function reArrayImages($file_post) {
        $file_ary = [];
        $file_keys = array_keys($file_post);
        foreach ($file_post as $key => $value) {
            foreach ($value as $key2 => $value2) {
                $file_ary[$key2][$key] = $value2;
            }
        }
        return $file_ary;
    }

    public function advancedImages()
    {
        return DB::select('*')
            ->from('product_images')
            ->where('product_id', '=', $this->id)
            ->execute()
            ->fetch_all();
    }

    public function getAdditional()
    {
        $additionalExist = DB::select('dictionary_value.*')
            ->from('dictionary_value')
            ->join('dictionary_field')
            ->on('dictionary_field.id', '=', 'dictionary_value.key')
            ->join('dictionary')
            ->on('dictionary.id', '=','dictionary_field.dictionary')
            ->where('dictionary_value.external_table', '=', 'dictionary_field')
            ->where('dictionary_value.external_column', '=', 'external_column')
            ->where('dictionary_value.external_id', '=', $this->id)
            ->where('dictionary.id', '=', 2)
            ->execute()
            ->fetch_all();
        return array_column($additionalExist, 'key');
    }

    public function getPrices()
    {
        $ids = DB::select('id')
            ->from('dictionary_value')
            ->where('external_id', '=', $this->id)
            ->where('external_column', 'in', [
                'price_3000',
                'price_5000',
                'price_10000',
                'price_20000',
                'price_30000',
            ])
            ->execute()
            ->fetch_all();

        $prices = [];
        foreach ($ids as $id) {
            $prices[] = DictionaryValue::one($id->id);
        }

        return $prices;
    }

    function getDiscount()
    {
        return 0.00;
    }

    function getPrice()
    {
        return $this->price_site ? $this->price_site : 0;
    }

    function getPriceWithDiscount($count = 1)
    {
        return ($this->price_site - $this->getDiscount()) * $count;
    }

    public function afterLoad()
    {

    }

    public function ordersPerMonth()
    {
        return intval(DB::select(DB::expr('sum(product_count) sum'))
            ->from('order_item')
            ->join('order')
            ->on('order.id', '=', 'order_item.order_id')
            ->where('order.created', '>=', DB::expr('(now() - INTERVAL 1 month)'))
            ->where('order_item.product_id', '=', $this->id)
            ->execute()
            ->get('sum'));
    }

    public function reserved()
    {
        return 0;
    }

    public function monthlySales()
    {
        $cnt = DB::select(DB::expr('sum(product_count) sum'))
            ->from('order_item')
            ->join('order')
            ->on('order.id', '=', 'order_item.order_id')
            ->where('order.created', '>=', DB::expr('(now() - INTERVAL 1 month)'))
            ->where('order_item.product_id', '=', $this->id)
            ->execute()
            ->get('sum');

        return $cnt ? $cnt : 0;
    }

    function salesPerCurrentMonth()
    {
        $date = new \DateTime();
        $y = $date->format('Y');
        $m = $date->format('m');
        $d = '01';

        return DB::select('product_count')
            ->from('order_item')
            ->join('order')
            ->on('order.id', '=', 'order_item.order_id')
            ->where('order_item.product_id', '=', $this->id)
            ->where('order.created', '>=', DB::expr("{$y}-{$m}-{$d}"))
            ->execute()
            ->get('product_count');
    }

    function salesPerPastMonth()
    {
        $date = (new \DateTime())->modify('- 1 month');
        $y = $date->format('Y');
        $m = $date->format('m');
        $d = '01';

        $date2 = (new \DateTime())->modify('- 1 month');
        $y2 = $date2->format('Y');
        $m2 = $date2->format('m');
        $d2 = '01';

        return DB::select('product_count')
            ->from('order_item')
            ->join('order')
            ->on('order.id', '=', 'order_item.order_id')
            ->where('order_item.product_id', '=', $this->id)
            ->where('order.created', '>=', DB::expr("{$y}-{$m}-{$d}"))
            ->where('order.created', '<=', DB::expr("{$y2}-{$m2}-{$d2}"))
            ->execute()
            ->get('product_count');
    }
}