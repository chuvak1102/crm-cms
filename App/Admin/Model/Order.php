<?php

namespace App\Admin\Model;

use App\Config;
use App\Site\Controller\Index;
use Core\Database\Database;
use Core\Database\Database\Exception;
use Core\Database\DB;
use Core\Model\Model;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * table = order
 */
class Order extends Model {

    function getStatus()
    {
        return OrderStatus::one($this->status);
    }

    function getStatusWarehouse()
    {
        return OrderStatus::one($this->status_warehouse);
    }

    function getTotalPrice()
    {
        $id = $this->id;
        $total = DB::query(Database::SELECT, "select sum(price_one * product_count) as total from order_item where order_id = $id")
            ->execute()
            ->current();

        if ($total) {
            $total = $total['total'];
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

}