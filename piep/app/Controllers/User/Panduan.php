<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use App\Models\Download_model;


class Panduan extends BaseController
{
	public function index()
	{
		checklogin();
		$m_download = new Download_model();
		$download 	= $m_download->jenis_download('Panduan');

		$data = [
			'title'			=> 'Panduan Penggunaan Website',
			'download'		=> $download,
			'content'		=> 'user/panduan/index'
		];
		echo view('user/layout/wrapper', $data);
	}
}
