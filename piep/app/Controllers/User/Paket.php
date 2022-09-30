<?php

namespace App\Controllers\User;

use App\Models\Paket_model;
use App\Models\Kategori_paket_model;

class Paket extends BaseController
{

    // index
    public function index()
    {
        checklogin();
        $m_paket         = new Paket_model();
        $m_paket_kategori         = new Kategori_paket_model();
        $paket         = $m_paket->listing();
        $total         = $m_paket->total();
        $paket_kategori         = $m_paket_kategori->listing();

        $data = [
            'title'            => 'Paket Privat (' . $total . ')',
            'paket'        => $paket,
            'fasilitas'        => $paket_kategori,
            'content'        => 'user/paket/index'
        ];
        echo view('user/layout/wrapper', $data);
    }
}
