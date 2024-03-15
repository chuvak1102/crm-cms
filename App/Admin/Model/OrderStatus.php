<?php

namespace App\Admin\Model;

use Core\Model\Model;

/**
 * table = order_status
 */
class OrderStatus extends Model {

    // statuses all
    const OFFICE_4 = 4; // Cчет для клиента,#de0d00,office
    const OFFICE_5 = 5; // Оплата наличными,#de0d00,office
    const OFFICE_7 = 7; // Ожидание ответа от клиента,#e29603,office
    const OFFICE_8 = 8; // Заказ оплачен,#00c26e,office
    const OFFICE_9 = 9; // Заказ отменен,#920600,office
    const OFFICE_12 = 12; // Ожидание оплаты,#0018de,office
    const OFFICE_13 = 13; // Ожидание реквизитов от клиента,#e29603,office
    const WAREHOUSE_14 = 14; // Заказ собран,#00c26e,warehouse
    const WAREHOUSE_15 = 15; // Не хватает товара,#e29603,warehouse
    const WAREHOUSE_16 = 16; // Резерв собран,#920600,warehouse
    const WAREHOUSE_17 = 17; // Товар в наличии,#de0d00,warehouse
    const WAREHOUSE_18 = 18; // Сборка заказа,#0018de,warehouse
    const WAREHOUSE_19 = 19; // Заказ разобран,#dc212a,warehouse
    const WAREHOUSE_20 = 20; // Резерв разобран,#920600,warehouse
    const WAREHOUSE_21 = 21; // Новый,#920600,warehouse

    // склад сборка заказа
    function inProcess()
    {
        return self::WAREHOUSE_18;
    }

}