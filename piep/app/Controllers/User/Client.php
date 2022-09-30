<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use App\Models\Client_model;

class Client extends BaseController
{

	// mainpage
	public function index()
	{
		checklogin();
		$m_client = new Client_model();
		$client 	= $m_client->listing();
		$total 	= $m_client->total();

		$data = [
			'title'			=> 'Data Testimoni (' . $total['total'] . ')',
			'client'			=> $client,
			'content'		=> 'user/client/index'
		];
		echo view('user/layout/wrapper', $data);
	}
}
