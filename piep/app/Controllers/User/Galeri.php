<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use App\Models\Galeri_model;
use App\Models\Kategori_galeri_model;

class Galeri extends BaseController
{

	// index
	public function index()
	{
		checklogin();
		$m_galeri 		= new Galeri_model();
		$m_kategori_galeri 	= new Kategori_galeri_model();
		$galeri 		= $m_galeri->listing();
		$total 			= $m_galeri->total();

		$data = [
			'title'			=> 'Galeri dan Banner (' . $total . ')',
			'galeri'		=> $galeri,
			'content'		=> 'user/galeri/index'
		];
		echo view('user/layout/wrapper', $data);
	}
}
