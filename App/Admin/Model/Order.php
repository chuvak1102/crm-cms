<?php

namespace App\Admin\Model;

use App\Config;
use App\Site\Controller\Index;
use Core\Auth;
use Core\Database\Database;
use Core\Database\Database\Exception;
use Core\Database\DB;
use Core\Model\Model;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * table = order
 */
class Order extends Model {

    // новый
    public const ORDER_NEW = 21;
    // резерв товара
    public const ORDER_RESERVE = 23;
    // сборка заказа
    public const ORDER_PACKING = 18;
    // резерв собран
    public const ORDER_RESERVE_PACKED = 16;
    // не хватает товара
    public const ORDER_LOW_PRODUCT = 15;
    // разобрать резерв
    public const ORDER_UNPACK_RESERVE = 17;
    // резерв разобран
    public const ORDER_RESERVE_UNPACKED = 20;
    // заказ собран
    public const ORDER_READY = 14;
    // сборка заказа доп
    public const ORDER_PACKING_ADVANCED = 22;
    // разобрать заказ
    public const ORDER_UNPACK = 19;
    // заказ разобран
    public const ORDER_UNPACKED = 24;

    function visibleIds($prev, $curr): array
    {
        if ($prev == 0 && $curr == self::ORDER_NEW) {
            return [self::ORDER_RESERVE, self::ORDER_PACKING];
        }
        if ($prev == self::ORDER_NEW && $curr == self::ORDER_RESERVE) {
            return [self::ORDER_RESERVE_PACKED, self::ORDER_LOW_PRODUCT];
        }
        if ($prev == self::ORDER_RESERVE && $curr == self::ORDER_LOW_PRODUCT) {
            return [self::ORDER_RESERVE, self::ORDER_PACKING];
        }
        if ($prev == self::ORDER_LOW_PRODUCT && $curr == self::ORDER_RESERVE) {
            return [self::ORDER_RESERVE_PACKED, self::ORDER_LOW_PRODUCT];
        }
        if ($curr == self::ORDER_RESERVE_PACKED && $prev == self::ORDER_RESERVE) {
            return [self::ORDER_UNPACK_RESERVE];
        }
        if ($curr == self::ORDER_UNPACK_RESERVE && $prev == self::ORDER_RESERVE_PACKED) {
            return [self::ORDER_RESERVE_UNPACKED];
        }
        if ($curr == self::ORDER_PACKING && $prev == self::ORDER_NEW) {
            return [self::ORDER_READY, self::ORDER_LOW_PRODUCT];
        }
        if ($curr == self::ORDER_LOW_PRODUCT && $prev == self::ORDER_PACKING) {
            return [self::ORDER_UNPACK, self::ORDER_PACKING_ADVANCED, self::ORDER_PACKING];
        }
        if ($curr == self::ORDER_PACKING && $prev == self::ORDER_LOW_PRODUCT) {
            return [self::ORDER_READY, self::ORDER_LOW_PRODUCT];
        }
        if ($curr == self::ORDER_UNPACK && $prev == self::ORDER_LOW_PRODUCT) {
            return [self::ORDER_UNPACKED];
        }
        if ($curr == self::ORDER_UNPACK && $prev == self::ORDER_UNPACKED) {
            return [self::ORDER_UNPACKED];
        }
        if ($curr == self::ORDER_READY && $prev == self::ORDER_PACKING) {
            return [self::ORDER_UNPACK, self::ORDER_PACKING_ADVANCED];
        }
        if ($curr == self::ORDER_UNPACK && $prev == self::ORDER_READY) {
            return [self::ORDER_UNPACKED];
        }
        if ($curr == self::ORDER_PACKING_ADVANCED && $prev == self::ORDER_UNPACKED) {
            return [self::ORDER_READY, self::ORDER_LOW_PRODUCT];
        }
        if ($curr == self::ORDER_LOW_PRODUCT && $prev == self::ORDER_PACKING_ADVANCED) {
            return [self::ORDER_UNPACK, self::ORDER_PACKING_ADVANCED];
        }
        if ($curr == self::ORDER_PACKING_ADVANCED && $prev == self::ORDER_LOW_PRODUCT) {
            return [self::ORDER_READY, self::ORDER_LOW_PRODUCT];
        }
        if ($curr == self::ORDER_READY && $prev == self::ORDER_PACKING_ADVANCED) {
            return [self::ORDER_UNPACK];
        }
        if ($curr == self::ORDER_PACKING_ADVANCED && $prev == self::ORDER_READY) {
            return [self::ORDER_READY, self::ORDER_LOW_PRODUCT];
        }

        return [];
    }

    // набор статусов меняется в зависимости от роли
    // 3 slkad
    // 5 driver
    // 2 manager
    function getPossibleStatuses()
    {
        // если пришел статус принадлежащий складу то отобрадить их в учетке склада


//        dump([
//            "PREV" => $this->status_prev,
//            "CURR" => $this->status_warehouse,
//            "MANAGER" => intval($this->isManager()),
//            "WAREHOUSE" => intval($this->isWarehouse()),
//        ]);

        $statuses = [];
        foreach ($this->visibleIds($this->status_prev, $this->status_warehouse) as $id) {
            $statuses[] = OrderStatus::one($id);
        }

        return $statuses;
    }

    function isVisibleForWarehouseUser() {

        if ($this->isManager()) {
            return true;
        }

        if ($this->isWarehouse()) {
            return in_array($this->status_warehouse, [
                self::ORDER_PACKING,
                self::ORDER_PACKING_ADVANCED,
                self::ORDER_UNPACK,
                self::ORDER_RESERVE,
                self::ORDER_UNPACK_RESERVE
            ]);
        }

        return false;
    }


    function isManager() {
        return in_array(User::one(Auth::instance()->current()->id)->department, [2, 100]);
    }

    function isWarehouse() {
        return in_array(User::one(Auth::instance()->current()->id)->department, [3, 5]);
    }

    function getStatus()
    {
        return OrderStatus::one($this->status);
    }

    function getStatusWarehouse()
    {
        return OrderStatus::one($this->status_warehouse);
    }

    // колво товаров + скидка + доставка
    function getTotalPrice()
    {
        $id = $this->id;
        // товары
        $total = DB::query(Database::SELECT, "select sum(price_row_total) as total from order_item where order_id = $id")
            ->execute()
            ->current();
        if ($total) {
            $total = $total['total'];
        }
        // доставка
        if ($this->getDetail()->deliveryCost()) {
            $total = $total + $this->getDetail()->deliveryCost();
        }

        return $total;
    }

    function getClient()
    {
        $user = User::one($this->user_id, 'id');
        $detail = [];
        $i = OrderDetail::one($this->id, 'order_id');


        if ($user->id) {
            if (!empty($user->name)) {
                array_push($detail, $user->name);
            }
        } else {
            array_push($detail, $i->name);
        }

        if ($i->phone) {
            array_push($detail, $i->phone);
        }

        if ($i->city) {
            array_push($detail, $i->city);
        }

        if ($i->street) {
            array_push($detail, $i->street);
        }

        if ($i->house) {
            array_push($detail, $i->house);
        }

        if ($i->block) {
            array_push($detail, $i->block);
        }

        if ($i->office) {
            array_push($detail, $i->office);
        }

        return implode(', ', $detail);
    }

    function getClientName()
    {
        return User::one($this->user_id, 'id')->name;
    }

    function getDetail()
    {
        return OrderDetail::one($this->id, 'order_id');
    }

    function getAddress()
    {
        $i = OrderDetail::one($this->id, 'order_id');

        return "{$i->city}, {$i->street}, {$i->house}/{$i->block}";
    }

    function getItems()
    {
        return OrderItem::many($this->id, 'order_id');
    }

    function getUser()
    {
        return User::one($this->user_id);
    }

    static function ordersTodayCount()
    {
        $today = (new \DateTime())->format("Y-m-d");

        $cnt = DB::select(DB::expr('count(id) as cnt'))
            ->from('order')
            ->where('created', '>', $today)
            ->execute()
            ->fetch()
            ->cnt;

        return $cnt ? $cnt : 0;
    }

    static function orderSumToday()
    {
        $today = (new \DateTime())->format("Y-m-d");

        $sum = DB::select(DB::expr('SUM(price_row_total) as sum'))
            ->join('order_item')
            ->on('order_item.order_id', '=', 'order.id')
            ->from('order')
            ->where('created', '>', $today)
            ->execute()
            ->fetch()
            ->sum;

        return floatval($sum ? $sum : 0);
    }

    static function orderSumMonth()
    {
        $today = (new \DateTime())->format("Y-m");

        $sum = DB::select(DB::expr('SUM(price_row_total) as sum'))
            ->join('order_item')
            ->on('order_item.order_id', '=', 'order.id')
            ->from('order')
            ->where('created', '>', $today)
            ->execute()
            ->fetch()
            ->sum;

        return floatval($sum ? $sum : 0);
    }


    function sendEmailToClient()
    {
        $email = $this->getDetail()->email;

        if (!$email) {
            Error::add("{$this->id} заказ - отсутствует эмейл - {$email} письмо не ушло");
            return;
        }

        $items = OrderItem::many($this->id, 'order_id');
        $totalPrice = number_format($this->getTotalPrice(), 2, '.', ' ');

        if (!$items) {
            Error::add("{$this->id} заказ - нет товаров для отправки почты");
            return;
        }

        try {

            $mail = new PHPMailer(true);
            $mail->CharSet = 'UTF-8';
            $mail->setFrom(Config::ShopEmailFrom);
            if (!Config::TestEmails) {
                $mail->addAddress($email);
            } else {
                foreach (Config::TestEmails as $e)
                    $mail->addAddress($e);
            }
            $mail->isHTML(true);
            $mail->Subject = 'ЭкоПак - ваш заказ принят';

            $html = "Здравствуйте! <br> Благодарим за заказ на сайте ecopacking.ru! <br> Номер вашего заказа: {$this->number}<br><br>";
            $html .= '<table border="1"  cellspacing="0" border="1" cellpadding="5"><tr><td><b>Состав заказа</b></td><td><b>Количество</b></td><td><b>Сумма</b></td></tr>';

            /** @var OrderItem $i */
            foreach ($items as $i) {
                $html .= '<tr><td>'.$i->getProduct()->name.'</td><td width="100" align="center">'.$i->product_count.'</td><td width="100" align="center">'.$i->price_row_total.'</td></tr>';
            }

            $html .= '<tr><td>Итого</td><td></td><td width="100" align="center">'.$totalPrice.'</td></tr>';
            $html .= '</table><br>';
            $html .= 'Мы свяжемся с Вами в ближайшее время! Письмо отправлено автоматически, если вы не совершали заказ - проигнорируйте его';

            $mail->Body = $html;
            $mail->send();

            DB::update('order')
                ->set(['mailed' => 1])
                ->where('id', '=', $this->id)
                ->execute();

        } catch (Exception $e) {

            Error::add('ошибка письма клиенту order => '.$this->id.' - '.$e->getMessage());
        }
    }

    function sendEmailToAdmin()
    {
        $email = Config::ShopEmailFrom;

        if (!$email) {
            Error::add("{$this->id} заказ - отсутствует эмейл - {$email} письмо не ушло");
            return;
        }

        $items = OrderItem::many($this->id, 'order_id');
        $totalPrice = number_format($this->getTotalPrice(), 2, '.', ' ');

        if (!$items) {
            Error::add("{$this->id} заказ - нет товаров для отправки почты");
            return;
        }

        try {

            $mail = new PHPMailer(true);
            $mail->CharSet = 'UTF-8';
            $mail->setFrom(Config::ShopEmailFrom);
            if (!Config::TestEmails) {
                $mail->addAddress($email);
            } else {
                foreach (Config::TestEmails as $e)
                    $mail->addAddress($e);
            }
            $mail->isHTML(true);
            $mail->Subject = 'ЭкоПак - ваш заказ принят';

            $html = 'Здравствуйте! <br> Благодарим за заказ на сайте ecopacking.ru! <br><br>';
            $html .= '<table border="1"  cellspacing="0" border="1" cellpadding="5"><tr><td><b>Состав заказа</b></td><td><b>Кол-во</b></td></tr>';

            /** @var OrderItem $i */
            foreach ($items as $i) {
                $html .= '<tr><td>'.$i->getProduct()->name.'</td><td width="100" align="right">'.$i->price_row_total.'</td></tr>';
            }

            $html .= '<tr><td>Итого</td><td width="100" align="right">'.$totalPrice.'</td></tr>';
            $html .= '</table><br>';
            $html .= 'Мы свяжемся с Вами в ближайшее время! Письмо отправлено автоматически, если вы не совершали заказ - проигнорируйте его';

            $mail->Body = $html;
            $mail->send();

            DB::update('order')
                ->set(['mailed' => 1])
                ->where('id', '=', $this->id)
                ->execute();

        } catch (Exception $e) {

            Error::add('ошибка письма клиенту order => '.$this->id.' - '.$e->getMessage());
        }
    }

    function deliveryDate()
    {
        // заказ до 16ч или после

        $date = (new \DateTime($this->created));
        $date->modify('+'.($date->format('H:i') < 16 ? ' 1 day' : ' 2 day'));

        return $date;
    }

    function deliveryDay()
    {
        $date = (new \DateTime($this->created));

        return $date->format('H:i') < 16 ? 'today' : 'tomorrow';
    }

    function getDriverUser()
    {
        return User::one($this->driver);
    }
    function getWarehouseUser()
    {
        return User::one($this->packing);
    }

}