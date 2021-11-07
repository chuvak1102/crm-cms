<?php

declare(strict_types=1);

namespace Migration;

use Core\Database\Database;
use Core\Database\DB;
use Core\Helpers\Text;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211024133058 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // products
        $shit = DB::select('*')
            ->from('diafan_shop')
            ->where('act1', '=', 1)
            ->execute()->fetch_all();

        foreach ($shit as $i) {
            $exist = DB::select('*')
                ->from('product')
                ->where('id', '=', $i->id)
                ->execute()->fetch_all();

            // opts
            $values = DB::select('*')
                ->from('diafan_shop_price')
                ->where('good_id', '=', $i->id)
                ->execute()
                ->fetch();
            $alias = Text::alias($i->name1);
            $image = DB::select('name')
                ->from('diafan_images')
                ->where('element_id', '=', $i->id)
                ->execute()
                ->fetch();
            $img = "";
            if ($image) {
                $img = $image->name;
            }
            $site_price = 0;
            if ($values) {
                $site_price = $values->price;
            }

            if (!$exist) {

                DB::insert('product', [
                    'id',
                    'name',
                    'alias',
                    'article',
                    'image',
                    'price_site',
                    'sort'
                ])
                    ->values([
                        $i->id,
                        $i->name1,
                        $alias,
                        $i->article,
                        $img,
                        $site_price,
                        $i->sort
                    ])
                    ->execute();

                // count, count critical
                if ($values) {

                    DB::update('product')
                        ->set([
                            'count_current' => $values->count_goods
                        ])
                        ->where('id', '=', $i->id)
                        ->execute();

                    DB::update('product')
                        ->set([
                            'count_minimal' => $values->count_limit
                        ])
                        ->where('id', '=', $i->id)
                        ->execute();
                }
                // in box
                $box = DB::select(['value1', 'in_box'])
                    ->from(['diafan_shop_param', 'dsp'])
                    ->join(['diafan_shop_param_element', 'dspe'])
                    ->on('dsp.id', '=', 'dspe.param_id')
                    ->where('sdp.id', '=', 4)
                    ->where('dspe.element_id', '=', $i->id)
                    ->limit(1)
                    ->execute()
                    ->fetch();
                if ($box->in_box) {
                    DB::update('product')
                        ->set([
                            'box_count' => $values->count_limit
                        ])
                        ->where('id', '=', $i->id)
                        ->execute();
                }
                // in pack
                $box = DB::select(['value1', 'in_box'])
                    ->from(['diafan_shop_param', 'dsp'])
                    ->join(['diafan_shop_param_element', 'dspe'])
                    ->on('dsp.id', '=', 'dspe.param_id')
                    ->where('sdp.id', '=', 3)
                    ->where('dspe.element_id', '=', $i->id)
                    ->limit(1)
                    ->execute()
                    ->fetch();
                if ($box->in_box) {
                    DB::update('product')
                        ->set([
                            'pack_count' => $values->count_limit
                        ])
                        ->where('id', '=', $i->id)
                        ->execute();
                }

//                select * from diafan_shop_param dsp
//left join diafan_shop_param_element dspe on dsp.id = dspe.param_id
//where dsp.id = 4

            } else {

                DB::update('product')->set([
                    'price_site' => $site_price,
                ])->where('id', '=', $i->id)
                    ->execute();
            }
        }

        echo 'PRODUCTS OK'.PHP_EOL;

        // orders
        $items = DB::select('*')
            ->from('diafan_shop_order')
//            ->where('diafan_shop_order.id', '=', 20132)
            ->execute()
            ->fetch_all();
        $items = [];

        foreach ($items as $i) {

            $exist = DB::select('*')
                ->from('order')
                ->where('id', '=', $i->id)
                ->execute()
                ->fetch();

            $d = \DateTime::createFromFormat('U', $i->created)
                ->format('Y-m-d H:i:s');

            if (!$exist) {

                $st = 1;
                $sw = 1;

                if ($i->status_id == 10) $sw = 18;
                if ($i->status_id == 18) $sw = 14;
                if ($i->status_id == 11) $st = 13;
                if ($i->status_id == 15) $st = 12;

                DB::insert('order', [
                    'id',
                    'created',
                    'number',
                    'status',
                    'status_warehouse',
                    'mailed',
                    'shipped'
                ])
                    ->values([
                        $i->id,
                        $d,
                        $i->id,
                        $st,
                        $sw,
                        1,
                        1
                    ])
                    ->execute();

                // order mainpage contact
                $cont = DB::select('dsope.value')
                    ->from(['diafan_shop_order', 'o'])
                    ->join(['diafan_shop_order_param_element', 'dsope'])
                    ->on('o.id', '=', 'dsope.element_id')
                    ->where('o.id', '=', $i->id)
                    ->execute()
                    ->fetch_all();

                if ($cont) {

                    $shits = "";

                    foreach ($cont as $item) {

                        $shits .= ', '.$item->value;
                    }

                    echo $shits.PHP_EOL;

                    DB::insert('order_detail', [

                        'order_id',
                        'name',
                    ])
                        ->values([
                            $i->id,
                            $shits,
                        ])
                        ->execute();
                }

                // order irems
                $orderitems = DB::select('*')
                    ->from('diafan_shop_order_goods')
                    ->where('order_id', '=', $i->id)
                    ->execute()
                    ->fetch_all();

                if ($orderitems) {
                    foreach ($orderitems as $orderitem) {
                        DB::insert('order_item', [

                            'order_id',
                            'product_id',
                            'product_count',
                            'price_one',
                            'price_discount',
                            'price_with_discount',
                            'price_row_total'
                        ])
                            ->values([
                                $i->id,
                                $orderitem->good_id,
                                $orderitem->count_goods,
                                $orderitem->price,
                                0,
                                $orderitem->price,
                                $orderitem->price * $orderitem->count_goods
                            ])
                            ->execute();

                            echo 'ITEM'. $orderitem->price * $orderitem->count_goods;
                    }
                }

                $order = $i->id;
                $total = DB::query(Database::SELECT, "select sum(price * count_goods) as total from diafan_shop_order_goods where order_id = $order")
                    ->execute()->current();

                var_dump($total['total']);

            }

        }

        echo 'ORDER OK'.PHP_EOL;


        // suppliers

        $sup = DB::select('*')
            ->from('diafan_shop_param_select')
            ->where('param_id', '=','26')
            ->execute()
            ->fetch_all();

        foreach ($sup as $item) {

            DB::insert('supplier', [

                'id',
                'name',
            ])
                ->values([
                    $item->id,
                    $item->name1,
                ])
                ->execute();

            var_dump($item->name1);
        }


        echo 'SUPPLIER OK'.PHP_EOL;

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

        $this->addSql("set foreign_key_checks = 0");

        $this->addSql("delete from supplier where id > 0");
        $this->addSql("truncate supplier");
        $this->addSql("delete from order_item where id > 0");
        $this->addSql("truncate order_item");
        $this->addSql("delete from order_detail where id > 0");
        $this->addSql("truncate order_detail");
        $this->addSql("delete from `order` where id > 0");
        $this->addSql("truncate `order`");

        $this->addSql("set foreign_key_checks = 1");
    }
}
