<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\Konfigurasi_model;
use App\Models\User_model;

class Login extends BaseController
{

	public function __construct()
	{
		helper('form');
	}

	// Homepage
	public function index()
	{
		$session = \Config\Services::session();
		$m_konfigurasi 	= new Konfigurasi_model();
		$m_user 		= new User_model();
		$konfigurasi 	= $m_konfigurasi->listing();

		// Start validasi
		if ($this->request->getMethod() === 'post' && $this->validate(
			[
				'username' 	=> 'required|min_length[3]',
				'password'  => 'required|min_length[3]',
			]
		)) {
			$username 	= $this->request->getPost('username');
			$password 	= encrypt_decrypt('encrypt', $this->request->getPost('password'));
			$user 		= $m_user->login($username, $password);

			// Proses login
			if ($user) {
				if ($user['akses_level'] == "Admin") {
					// Jika username password benar
					$this->session->set('username', $username);
					$this->session->set('id_user', $user['id_user']);
					$this->session->set('akses_level', $user['akses_level']);
					$this->session->set('nama', $user['nama']);
					$this->session->setFlashdata('sukses', 'Hai ' . $user['nama'] . ', Anda berhasil login');
					return redirect()->to(base_url('admin/dasbor'));
				} else if ($user['akses_level'] == "User") {
					$this->session->set('username', $username);
					$this->session->set('id_user', $user['id_user']);
					$this->session->set('akses_level', $user['akses_level']);
					$this->session->set('nama', $user['nama']);
					$this->session->setFlashdata('sukses', 'Hai ' . $user['nama'] . ', Anda berhasil login');
					return redirect()->to(base_url('user/dasbor'));
				}
			} else {
				// jika username password salah
				$this->session->setFlashdata('warning', 'Username atau password salah');
				return redirect()->to(base_url('login'));
			}
		} else {
			// End validasi
			$data = [
				'title'			=> 'Login Administrator',
				'description'	=> $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
				'keywords'		=> $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
				'session'		=> $session
			];
			echo view('login/index', $data);
		}
		// End proses
	}

	// lupa
	public function lupa()
	{
		$session = \Config\Services::session();
		$m_konfigurasi 	= new Konfigurasi_model();
		$m_user 		= new User_model();
		$konfigurasi 	= $m_konfigurasi->listing();

		$data = [
			'title'			=> 'Lupa Password',
			'description'	=> $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
			'keywords'		=> $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
			'session'		=> $session
		];
		echo view('login/lupa', $data);
	}

	// Logout
	public function logout()
	{
		$this->session->destroy();
		return redirect()->to(base_url('login?logout=sukses'));
	}
}

//enkripsi password
function encrypt_decrypt($action, $string)
{
	$output = false;
	$encrypt_method = "AES-256-CBC";
	$secret_key = 'key_one';
	$secret_iv = 'key_two';
	// hash
	$key = hash('sha256', $secret_key);
	// iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
	$iv = substr(hash('sha256', $secret_iv), 0, 16);
	if ($action == 'encrypt') {
		$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
		$output = base64_encode($output);
	} else if ($action == 'decrypt') {
		$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	}
	return $output;
}