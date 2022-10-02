<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use App\Models\Download_model;
use App\Models\Kategori_download_model;

class Download extends BaseController
{

	// index
	public function index()
	{
		checklogin();
		$m_download 			= new Download_model();
		$m_kategori_download 	= new Kategori_download_model();
		$download 				= $m_download->listing();
		$total 					= $m_download->total();

		$data = [
			'title'			=> 'Data File Download (' . $total . ')',
			'download'		=> $download,
			'content'		=> 'user/download/index'
		];
		echo view('user/layout/wrapper', $data);
	}
}
