<?php

namespace App\Admin\Controller;

use App\Admin\Model\SupplierOrder;
use App\Admin\Model\SupplierOrderItem;
use App\Admin\Model\SupplierOrderStatus;
use Core\Request\Request;
use Core\Database\DB;

class Supplier extends Index {

    function list(Request $request)
    {
        return $this->render('Admin:supplier/list', [
            'supplier' => DB::select('*')
                ->from('supplier')
                ->execute()
                ->fetch_all()
        ]);
    }

    function order(Request $request)
    {
        return $this->render('Admin:supplier/order', [
            'order' => SupplierOrder::all('desc')
        ]);
    }

    function edit(Request $request)
    {
        dump($request);

        if ($request->get('submit')) {



        }


        return $this->render('Admin:supplier/order_edit', [
            'items' => SupplierOrderItem::many($request->seg(3), 'order_id'),
            'order' => SupplierOrder::one($request->seg(3)),
            'status' => SupplierOrderStatus::all()
        ]);
    }
}