<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use App\Models\Staff_model;
use App\Models\Kategori_staff_model;

class Staff extends BaseController
{

	// mainpage
	public function index()
	{
		checklogin();
		$m_staff 			= new Staff_model();
		$m_kategori_staff 	= new Kategori_staff_model();
		$staff 				= $m_staff->listing();
		$total 				= $m_staff->total();
		$kategori_staff 	= $m_kategori_staff->listing();

		$data = [
			'title'			=> 'Data Staff (' . $total . ')',
			'staff'			=> $staff,
			'kategori_staff' => $kategori_staff,
			'content'		=> 'user/staff/index'
		];
		echo view('user/layout/wrapper', $data);
	}
}
