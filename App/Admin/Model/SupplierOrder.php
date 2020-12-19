<?php

namespace App\Admin\Model;

use App\Config;
use Core\Database\Database\Exception;
use Core\DB;
use Core\Model\Model;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * table = supplier_order
 */
class SupplierOrder extends Model {

    const STATUS_NEW = 1;
    const STATUS_CLOSED = 2;
    const STATUS_MOST_CLOSED = 3;

    function getStatus()
    {
        return SupplierOrderStatus::one($this->status);
    }

    function getSupplier()
    {
        return Supplier::one($this->supplier);
    }

    function sendEmailToSupplier()
    {
        $supplier = Supplier::one($this->supplier);

        $mails = explode(',', $supplier->email);

        if (empty($mails) || empty($mails[0])) {
            Error::add("{$supplier->name} - нет почты");
            return;
        }

        $items = SupplierOrderItem::many($this->id, 'order_id');

        if (!$items) {
            Error::add("{$supplier->name} - нет товаров");
            return;
        }

        try {

            $mail = new PHPMailer(true);
            $mail->CharSet = 'UTF-8';
            $mail->setFrom(Config::ShopEmailFrom);
            $mail->addAddress('dan0@mail.ru');
            $mail->isHTML(true);
            $mail->Subject = 'Заявка на поставку товара для ООО "Экопак"(ИНН 7727280804)';

            $html = 'Здравствуйте! <br> Примите, пожалуйста, заявку на поставку товара для ООО "Экопак" (ИНН 7727280804) <br> Просьба сформировать счет и подготовить к отправке товар:<br><br>';
            $html .= '<table border="1"  cellspacing="0" border="1" cellpadding="5"><tr><td><b>Номенклатура</b></td><td><b>Кол-во, шт</b></td></tr>';

            /** @var OrderItem $i */
            foreach ($items as $i) {
                $html .= '<tr><td>'.$i->getProduct()->name.'</td><td width="100" align="right">'.$i->cnt.'</td></tr>';
            }

            $html .='</table><br>';
            $html .= 'Просьба, при отсутствии в наличии товара из заявки указать дату поступления и отгрузки с Вашего склада.';

            $mail->Body = $html;
            $mail->send();

            \Core\Database\DB::update('supplier_order')
                ->set(['mailed' => 1])
                ->where('id', '=', $this->id)
                ->execute();

        } catch (Exception $e) {

            Error::add('ошибка письма поставщику order => '.$this->id.' - '.$e->getMessage());
        }
    }

}