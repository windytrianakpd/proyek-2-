<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Konfigurasi_model;
use App\Models\Galeri_model;
use App\Models\Client_model;
use App\Models\Berita_model;
use App\Models\Paket_model;
use App\Models\Kategori_paket_model;
use App\Models\Visitor_model;


class Home extends BaseController
{

	// public function index()
	// {
	// 	echo view('dynamic');
	// }

	// Homepage
	public function index()
	{
		$m_konfigurasi 	= new Konfigurasi_model();
		$m_galeri		= new Galeri_model();
		$m_client		= new Client_model();
		$m_berita		= new Berita_model();
		$m_paket         = new Paket_model();
		$m_paket_kategori         = new Kategori_paket_model();
		$m_visitor         = new Visitor_model();
		$konfigurasi 	= $m_konfigurasi->listing();
		$slider 		= $m_galeri->slider();
		$client 		= $m_client->testimoni();
		$berita2 		= $m_berita->beranda();
		$paket        	= $m_paket->listing_home();
		$paket_kategori = $m_paket_kategori->listing();
		$terbaik        = $m_paket->terbaik();

		$data = [
			'title'			=> $konfigurasi['namaweb'] . ' | ' . $konfigurasi['tagline'],
			'description'	=> $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
			'keywords'		=> $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
			'slider'		=> $slider,
			'konfigurasi'	=> $konfigurasi,
			'client'		=> $client,
			'berita2'		=> $berita2,
			'paket'        	=> $paket,
			'terbaik'       => $terbaik,
			'fasilitas'     => $paket_kategori,
			'content'		=> 'home/index'
		];

		$visite = array(
			'tanggal'	=> date('Y-m-d H:i:s')
		);

		$m_visitor->tambah($visite);

		$options = array(
			'cluster' => 'mt1',
			'useTLS' => true
		);

		$pusher = new \Pusher\Pusher(
			'e0e7df3e1f83c54f63c2',
			'895cc3dfb741534df766',
			'1413338',
			$options
		);

		$notif['message'] = "pengunjung";
		$pusher->trigger('my-channel', 'my-event', $notif);

		echo view('layout/wrapper', $data);
	}
}
