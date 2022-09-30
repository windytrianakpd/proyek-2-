<?php

namespace App\Controllers\Admin;

use App\Models\Kategori_paket_model;
use App\Models\Paket_model;

class Kategori_paket extends BaseController
{

    // index
    public function index()
    {
        checklogin();
        $m_paket         = new Kategori_paket_model();
        $m_paket_model         = new Paket_model();
        $paket_model         = $m_paket_model->listing();
        $paket         = $m_paket->listing();

        $data = [
            'title'            => 'Kategori Paket',
            'paket'        => $paket,
            'paket_kategori' => $paket_model,
            'content'        => 'admin/kategori_paket/index'
        ];
        echo view('admin/layout/wrapper', $data);
    }

    //tambah

    //edit

    //delete
}
