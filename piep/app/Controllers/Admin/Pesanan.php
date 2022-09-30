<?php

namespace App\Controllers\Admin;

use App\Models\Order_model;

class Pesanan extends BaseController
{

    // index
    public function index()
    {
        checklogin();
        $m_order        = new Order_model();
        $order         = $m_order->listing_pesanan();
        $total         = $m_order->total_pesanan();

        $data = [
            'title'             => 'Data Order (' . $total . ')',
            'pesanan'           =>  $order,
            'content'           => 'admin/pesanan/index'
        ];
        echo view('admin/layout/wrapper', $data);
    }

    //edit

    //delete
}
