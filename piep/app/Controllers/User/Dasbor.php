<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use App\Models\Dasbor_model;
use App\Models\Konfigurasi_model;


class Dasbor extends BaseController
{
	public function index()
	{
		checklogin();
		$konfigurasi  = new Konfigurasi_model;
		$site         = $konfigurasi->listing();

		$data = [
			'title'			=> 'Dashboard Aplikasi',
			'konfigurasi'	=> $site,
			'content'		=> 'user/dasbor/index'
		];
		echo view('user/layout/wrapper', $data);
	}
}
