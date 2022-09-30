<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\User_model;

class User extends BaseController
{

	// mainpage
	public function index()
	{
		checklogin();
		$m_user = new User_model();
		$user 	= $m_user->listing();
		$total 	= $m_user->total();

		for ($i = 0; $i < count($user); $i++) {
			$user[$i]['password'] = encrypt_decrypt('decrypt', $user[$i]['password']);
		}

		$data = [
			'title'			=> 'Pengguna Website (' . $total['total'] . ')',
			'user'			=> $user,
			'content'		=> 'admin/user/index'
		];
		echo view('admin/layout/wrapper', $data);
	}

	//tambah
	public function tambah()
	{
		checklogin();
		$m_user = new User_model();

		// Start validasi
		if ($this->request->getMethod() === 'post' && $this->validate(
			[
				'nama' 		=> 'required',
				'username' 	=> 'required|min_length[3]|is_unique[users.username]',
			]
		)) {
			// masuk database
			$data = [
				'nama'			=> $this->request->getPost('nama'),
				'email'			=> $this->request->getPost('email'),
				'username'		=> $this->request->getPost('username'),
				'password'		=> encrypt_decrypt('encrypt', $this->request->getPost('password')),
				'akses_level'	=> $this->request->getPost('akses_level'),
				'gambar'		=> "profil.png",
				'tanggal_post'	=> date('Y-m-d H:i:s')
			];
			$m_user->save($data);
			// masuk database
			$this->session->setFlashdata('sukses', 'Data telah ditambah');
			return redirect()->to(base_url('admin/user'));
		} else {
			$data = [
				'title'			=> 'Tambah Pengguna',
				'content'		=> 'admin/user/tambah'
			];
			echo view('admin/layout/wrapper', $data);
		}
	}

	// edit
	public function edit($id_user)
	{
		checklogin();
		$m_user = new User_model();
		$user 	= $m_user->detail($id_user);

		// Start validasi
		if ($this->request->getMethod() === 'post' && $this->validate(
			[
				'nama' 	=> 'required|min_length[3]',
			]
		)) {
			// masuk database
			if (strlen($this->request->getPost('password')) >= 6 && strlen($this->request->getPost('password')) <= 32) {
				$data = [
					'nama'			=> $this->request->getPost('nama'),
					'email'			=> $this->request->getPost('email'),
					'username'		=> $this->request->getPost('username'),
					'password'		=> encrypt_decrypt('encrypt', $this->request->getPost('password')),
					'akses_level'	=> $this->request->getPost('akses_level')
				];
			} else {
				$data = [
					'nama'			=> $this->request->getPost('nama'),
					'email'			=> $this->request->getPost('email'),
					'username'		=> $this->request->getPost('username'),
					'akses_level'	=> $this->request->getPost('akses_level')
				];
			}
			$m_user->update($id_user, $data);
			// masuk database
			$this->session->setFlashdata('sukses', 'Data telah diedit');
			return redirect()->to(base_url('admin/user'));
		} else {
			$user['password'] = encrypt_decrypt('decrypt', $user['password']);

			$data = [
				'title'			=> 'Edit Pengguna : ' . $user['nama'],
				'user'			=> $user,
				'content'		=> 'admin/user/edit'
			];
			echo view('admin/layout/wrapper', $data);
		}
	}

	// delete
	public function delete($id_user)
	{
		checklogin();
		$m_user = new User_model();
		$data = ['id_user'	=> $id_user];
		$m_user->delete($data);
		// masuk database
		$this->session->setFlashdata('sukses', 'Data telah dihapus');
		return redirect()->to(base_url('admin/user'));
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
