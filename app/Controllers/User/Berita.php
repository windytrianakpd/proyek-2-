<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use App\Models\Berita_model;
use App\Models\Kategori_model;
use App\Models\User_model;

class Berita extends BaseController
{

	// index
	public function index()
	{
		checklogin();
		$m_berita 		= new Berita_model();
		$berita 		= $m_berita->listing();
		$total 			= $m_berita->total();

		$data = [
			'title'			=> 'Berita, Profil dan Layanan (' . $total . ')',
			'berita'		=> $berita,
			'content'		=> 'user/berita/index'
		];
		echo view('user/layout/wrapper', $data);
	}

	// kategori
	public function kategori($id_kategori)
	{
		checklogin();
		$m_berita 		= new Berita_model();
		$m_kategori 	= new Kategori_model();
		$kategori 		= $m_kategori->detail($id_kategori);
		$berita 		= $m_berita->kategori_all($id_kategori);
		$total 			= $m_berita->total_kategori($id_kategori);

		$data = [
			'title'			=> $kategori['nama_kategori'] . ' (' . $total . ')',
			'berita'		=> $berita,
			'content'		=> 'user/berita/index'
		];
		echo view('user/layout/wrapper', $data);
	}

	// jenis_berita
	public function jenis_berita($jenis_berita)
	{
		checklogin();
		$m_berita 		= new Berita_model();
		$m_kategori 	= new Kategori_model();
		$berita 		= $m_berita->jenis_berita_all($jenis_berita);
		$total 			= $m_berita->total_jenis_berita($jenis_berita);

		$data = [
			'title'			=> $jenis_berita . ' (' . $total . ')',
			'berita'		=> $berita,
			'content'		=> 'user/berita/index'
		];
		echo view('user/layout/wrapper', $data);
	}

	// status_berita
	public function status_berita($status_berita)
	{
		checklogin();
		$m_berita 		= new Berita_model();
		$m_kategori 	= new Kategori_model();
		$kategori 		= $m_kategori->detail($status_berita);
		$berita 		= $m_berita->status_berita_all($status_berita);
		$total 			= $m_berita->total_status_berita($status_berita);

		$data = [
			'title'			=> $status_berita . ' (' . $total . ')',
			'berita'		=> $berita,
			'content'		=> 'user/berita/index'
		];
		echo view('user/layout/wrapper', $data);
	}

	// author
	public function author($id_user)
	{
		checklogin();
		$m_berita 		= new Berita_model();
		$m_kategori 	= new Kategori_model();
		$m_user 		= new User_model();
		$user 			= $m_user->detail($id_user);
		$berita 		= $m_berita->author_all($id_user);
		$total 			= $m_berita->total_author($id_user);

		$data = [
			'title'			=> $user['nama'] . ' (' . $total . ')',
			'berita'		=> $berita,
			'content'		=> 'user/berita/index'
		];
		echo view('user/layout/wrapper', $data);
	}
}
