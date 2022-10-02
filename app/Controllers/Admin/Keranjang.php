<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\Order_model;

class Keranjang extends BaseController
{

    // index
    public function index()
    {
        checklogin();
        $m_order        = new Order_model();
        $order         = $m_order->listing_keranjang();
        $total         = $m_order->total();


        $data = [
            'title'            => 'Keranjang (' . $total . ')',
            'pesanan'           =>  $order,
            'content'        => 'admin/keranjang/index'
        ];
        echo view('admin/layout/wrapper', $data);
    }

    //tambah

    //edit
    public function edit($id)
    {
        checklogin();
        $m_order        = new Order_model();

        $data = [
            'id'        => $id,
            'status'   => "Lunas"
        ];

        $m_order->prosesOrder($data);
        $this->session->setFlashdata('sukses', 'Data telah diproses');
        return redirect()->to(base_url('admin/Keranjang'));
    }

    //delete
}
