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

    public function getLength(): DictionaryValue
    {
        return DictionaryValue::one($this->length);
    }

    public function getWidth(): DictionaryValue
    {
        return DictionaryValue::one($this->width);
    }

    public function getHeight(): DictionaryValue
    {
        return DictionaryValue::one($this->height);
    }

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

        $priceSiteOptCount = $this->getPriceSiteOptCount()->id ? $this->getPriceSiteOptCount() : new DictionaryValue();
        if ($request->get('price_site_opt_count')) {
            $priceSiteOptCount->key = $request->get('price_site_opt_count')['key'];
            $priceSiteOptCount->value = $request->get('price_site_opt_count')['value'];
            $priceSiteOptCount->external_id = $this->id;
            $priceSiteOptCount->external_table = 'product';
            $priceSiteOptCount->external_column = 'price_site_opt_count';
            $priceSiteOptCount->save();
        }

        $countCurrent = $this->countCurrent()->id ? $this->countCurrent() : new DictionaryValue();
        if ($request->get('count_current')) {
            $countCurrent->key = $request->get('count_current')['key'];
            $countCurrent->value = $request->get('count_current')['value'];
            $countCurrent->external_id = $this->id;
            $countCurrent->external_table = 'product';
            $countCurrent->external_column = 'count_current';
            $countCurrent->save();
        }

        $countMinimal = $this->countMinimal()->id ? $this->countMinimal() : new DictionaryValue();
        if ($request->get('count_minimal')) {
            $countMinimal->key = $request->get('count_minimal')['key'];
            $countMinimal->value = $request->get('count_minimal')['value'];
            $countMinimal->external_id = $this->id;
            $countMinimal->external_table = 'product';
            $countMinimal->external_column = 'count_minimal';
            $countMinimal->save();
        }
        $countReserve = $this->countReserve()->id ? $this->countReserve() : new DictionaryValue();
        if ($request->get('count_reserve')) {
            $countReserve->key = $request->get('count_reserve')['key'];
            $countReserve->value = $request->get('count_reserve')['value'];
            $countReserve->external_id = $this->id;
            $countReserve->external_table = 'product';
            $countReserve->external_column = 'count_reserve';
            $countReserve->save();
        }

        if ($request->get('category') || $request->get('category_extra')) {

            $category = $request->get('category');
            $extra = $request->get('category_extra', []);
            $categoryNew = in_array($category, $extra) ? $extra : array_merge([$category], $extra);
            $categoryExist = (array) DB::select('category_id')
                ->from('product_to_category')
                ->where('product_id', '=', $this->id)
                ->execute()
                ->fetch_all();
            $categoryExist = array_column($categoryExist, 'category_id');
            $process = array_merge(
                array_diff($categoryNew, $categoryExist),
                array_diff($categoryExist, $categoryNew)
            );

            if (count($categoryNew) > count($categoryExist)) {
                foreach ($process as $category_id) {
                    DB::insert('product_to_category', ['product_id', 'category_id'])
                        ->values([$this->id, $category_id])
                        ->execute();
                }
            }

            if (count($categoryNew) < count($categoryExist)) {
                foreach ($process as $category_id) {
                    DB::delete('product_to_category')
                        ->where('product_id', '=', $this->id)
                        ->where('category_id', '=', $category_id)
                        ->execute();
                }
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

        $packCount = $this->getPackCount()->id ? $this->getPackCount() : new DictionaryValue();
        if ($request->get('pack_count')) {
            $packCount->key = $request->get('pack_count')['key'];
            $packCount->value = $request->get('pack_count')['value'];
            $packCount->external_id = $this->id;
            $packCount->external_table = 'product';
            $packCount->external_column = 'pack_count';
            $packCount->save();
        }

        $packWeight = $this->getPackWeight()->id ? $this->getPackWeight() : new DictionaryValue();
        if ($request->get('pack_weight')) {
            $packWeight->key = $request->get('pack_weight')['key'];
            $packWeight->value = $request->get('pack_weight')['value'];
            $packWeight->external_id = $this->id;
            $packWeight->external_table = 'product';
            $packWeight->external_column = 'pack_weight';
            $packWeight->save();
        }

        $packVolume = $this->getPackVolume()->id ? $this->getPackVolume() : new DictionaryValue();
        if ($request->get('pack_volume')) {
            $packVolume->key = $request->get('pack_volume')['key'];
            $packVolume->value = $request->get('pack_volume')['value'];
            $packVolume->external_id = $this->id;
            $packVolume->external_table = 'product';
            $packVolume->external_column = 'pack_volume';
            $packVolume->save();
        }

        $boxCount = $this->getBoxCount()->id ? $this->getBoxCount() : new DictionaryValue();
        if ($request->get('box_count')) {
            $boxCount->key = $request->get('box_count')['key'];
            $boxCount->value = $request->get('box_count')['value'];
            $boxCount->external_id = $this->id;
            $boxCount->external_table = 'product';
            $boxCount->external_column = 'box_count';
            $boxCount->save();
        }

        $boxWeight = $this->getBoxWeight()->id ? $this->getBoxWeight() : new DictionaryValue();
        if ($request->get('box_weight')) {
            $boxWeight->key = $request->get('box_weight')['key'];
            $boxWeight->value = $request->get('box_weight')['value'];
            $boxWeight->external_id = $this->id;
            $boxWeight->external_table = 'product';
            $boxWeight->external_column = 'box_weight';
            $boxWeight->save();
        }

        $boxVolume = $this->getBoxVolume()->id ? $this->getBoxVolume() : new DictionaryValue();
        if ($request->get('box_volume')) {
            $boxVolume->key = $request->get('box_volume')['key'];
            $boxVolume->value = $request->get('box_volume')['value'];
            $boxVolume->external_id = $this->id;
            $boxVolume->external_table = 'product';
            $boxVolume->external_column = 'box_volume';
            $boxVolume->save();
        }

        $length = $this->getLength()->id ? $this->getLength() : new DictionaryValue();
        if ($request->get('length')) {
            $length->key = $request->get('length')['key'];
            $length->value = $request->get('length')['value'];
            $length->external_id = $this->id;
            $length->external_table = 'product';
            $length->external_column = 'length';
            $length->save();
        }

        $width = $this->getWidth()->id ? $this->getWidth() : new DictionaryValue();
        if ($request->get('width')) {
            $width->key = $request->get('width')['key'];
            $width->value = $request->get('width')['value'];
            $width->external_id = $this->id;
            $width->external_table = 'product';
            $width->external_column = 'width';
            $width->save();
        }

        $height = $this->getHeight()->id ? $this->getHeight() : new DictionaryValue();
        if ($request->get('height')) {
            $height->key = $request->get('height')['key'];
            $height->value = $request->get('height')['value'];
            $height->external_id = $this->id;
            $height->external_table = 'product';
            $height->external_column = 'height';
            $height->save();
        }

        $values = [
            'name' => $request->get('name'),
            'alias' => Text::alias($request->get('name')),
            'article' => $request->get('article'),
            'active' => $request->get('active') ? 1 : 0,
            'price_site' => $request->get('price_site'),
            'count_current' => $countCurrent->id,
            'count_minimal' => $countMinimal->id,
            'count_reserve' => $countReserve->id,
            'hit' => $request->get('hit') ? 1 : 0,
            'new' => $request->get('new') ? 1 : 0,
            'share' => $request->get('share') ? 1 : 0,
            'price_site_opt' => $request->get('price_site_opt'),
            'price_supplier' => $request->get('price_supplier'),
            'price_site_opt_count' => $priceSiteOptCount->id,
            'supplier_product_name' => $request->get('supplier_product_name'),
            'supplier_article' => $request->get('supplier_article'),
            'supplier_date_arrive' => $request->get('supplier_date_arrive'),
            'available' => $request->get('available') ? 1 : 0,
            'kit' => $request->get('kit') ? 1 : 0,
            'logo' => $request->get('logo') ? 1 : 0,
            'pack_count' => $packCount->id,
            'pack_weight' => $packWeight->id,
            'pack_volume' => $packVolume->id,
            'box_count' => $boxCount->id,
            'box_weight' => $boxWeight->id,
            'box_volume' => $boxVolume->id,
            'length' => $length->id,
            'width' => $width->id,
            'height' => $height->id,
            'material' => $request->get('material'),
            'color' => $request->get('color'),
            'description' => $request->get('description'),
            'tags' => $request->get('tags')
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

        DB::update('product')
            ->set($values)
            ->where('id', '=', $this->id)
            ->execute();
    }

    public static function getCategoryTree()
    {
        $catalog = DB::select('*')
            ->from('category')
//            ->where('active', '=', '1')
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
        return 0;
    }

    public function afterLoad()
    {

    }
}