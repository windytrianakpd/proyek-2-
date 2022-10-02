<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\Dasbor_model;
use App\Models\Konfigurasi_model;


class Visitor_state extends BaseController
{
    public function index()
    {
        checklogin();
        $konfigurasi  = new Konfigurasi_model;
        $site         = $konfigurasi->listing();

        $data = [
            'title'            => 'Visitor State',
            'konfigurasi'    => $site,
            'content'        => 'admin/visitor_state/index'
        ];
        echo view('admin/layout/wrapper', $data);
    }
}
