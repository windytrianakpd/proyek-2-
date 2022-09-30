<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use App\Models\Video_model;

class Video extends BaseController
{

	// mainpage
	public function index()
	{
		checklogin();
		$m_video = new Video_model();
		$video 	= $m_video->listing();
		$total 	= $m_video->total();

		// Start validasi
		$data = [
			'title'			=> 'Video Youtube (' . $total['total'] . ')',
			'video'			=> $video,
			'content'		=> 'user/video/index'
		];
		echo view('user/layout/wrapper', $data);
	}
}
