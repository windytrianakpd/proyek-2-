<?php

namespace App\Controllers\Admin;

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
			'content'		=> 'admin/client/index'
		];
		echo view('admin/layout/wrapper', $data);
	}

	//tambah
	public function tambah()
	{
		checklogin();
		$m_client = new Client_model();

		// Start validasi
		if ($this->request->getMethod() === 'post' && $this->validate(
			[
				'nama' 		=> 'required',
				'gambar'	 	=> [
					'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
					'max_size[gambar,4096]',
				],
			]
		)) {
			if (!empty($_FILES['gambar']['name'])) {
				// Image upload
				$avatar  	= $this->request->getFile('gambar');
				$namabaru 	= str_replace(' ', '-', $avatar->getName());
				$avatar->move(WRITEPATH . '../assets/upload/client/', $namabaru);
				// Create thumb
				$image = \Config\Services::image()
					->withFile(WRITEPATH . '../assets/upload/client/' . $namabaru)
					->fit(100, 100, 'center')
					->save(WRITEPATH . '../assets/upload/client/thumbs/' . $namabaru);
				// masuk database
				// masuk database
				$data = [
					'id_user'		=> $this->session->get('id_user'),
					'jenis_client'	=> $this->request->getPost('jenis_client'),
					'nama'			=> $this->request->getPost('nama'),
					'instansi'		=> $this->request->getPost('instansi'),
					'alamat'		=> $this->request->getPost('alamat'),
					'telepon'		=> $this->request->getPost('telepon'),
					'email'			=> $this->request->getPost('email'),
					'isi_testimoni'	=> $this->request->getPost('isi_testimoni'),
					'gambar'		=> $namabaru,
					'status_client'	=> $this->request->getPost('status_client'),
					'tanggal_post'	=> date('Y-m-d H:i:s')
				];
				$m_client->tambah($data);
				// masuk database
				$this->session->setFlashdata('sukses', 'Data telah ditambah');
				return redirect()->to(base_url('admin/client'));
			} else {
				// masuk database
				$data = [
					'id_user'		=> $this->session->get('id_user'),
					'jenis_client'	=> $this->request->getPost('jenis_client'),
					'nama'			=> $this->request->getPost('nama'),
					'instansi'		=> $this->request->getPost('instansi'),
					'alamat'		=> $this->request->getPost('alamat'),
					'telepon'		=> $this->request->getPost('telepon'),
					'email'			=> $this->request->getPost('email'),
					'isi_testimoni'	=> $this->request->getPost('isi_testimoni'),
					// 'gambar'		=> $namabaru,
					'status_client'	=> $this->request->getPost('status_client'),
					'tanggal_post'	=> date('Y-m-d H:i:s')
				];
				$m_client->tambah($data);
				// masuk database
				$this->session->setFlashdata('sukses', 'Data telah ditambah');
				return redirect()->to(base_url('admin/client'));
			}
		} else {
			$data = [
				'title'			=> 'Tambah Testimoni',
				'content'		=> 'admin/client/tambah'
			];
			echo view('admin/layout/wrapper', $data);
		}
	}

	// edit
	public function edit($id_client)
	{
		checklogin();
		$m_client 	= new Client_model();
		$client 	= $m_client->detail($id_client);

		// Start validasi
		if ($this->request->getMethod() === 'post' && $this->validate(
			[
				'nama' 		=> 'required',
				'gambar'	 	=> [
					'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
					'max_size[gambar,4096]',
				],
			]
		)) {
			if (!empty($_FILES['gambar']['name'])) {
				// Image upload
				$avatar  	= $this->request->getFile('gambar');
				$namabaru 	= str_replace(' ', '-', $avatar->getName());
				$avatar->move(WRITEPATH . '../assets/upload/client/', $namabaru);
				// Create thumb
				$image = \Config\Services::image()
					->withFile(WRITEPATH . '../assets/upload/client/' . $namabaru)
					->fit(100, 100, 'center')
					->save(WRITEPATH . '../assets/upload/client/thumbs/' . $namabaru);
				// masuk database
				// masuk database
				$data = [
					'id_client'		=> $id_client,
					'id_user'		=> $this->session->get('id_user'),
					'jenis_client'	=> $this->request->getPost('jenis_client'),
					'nama'			=> $this->request->getPost('nama'),
					'instansi'		=> $this->request->getPost('instansi'),
					'alamat'		=> $this->request->getPost('alamat'),
					'telepon'		=> $this->request->getPost('telepon'),
					'email'			=> $this->request->getPost('email'),
					'isi_testimoni'	=> $this->request->getPost('isi_testimoni'),
					'gambar'		=> $namabaru,
					'status_client'	=> $this->request->getPost('status_client'),
				];
				$m_client->edit($data);
				// masuk database
				$this->session->setFlashdata('sukses', 'Data telah disimpan');
				return redirect()->to(base_url('admin/client'));
			} else {
				// masuk database
				$data = [
					'id_client'		=> $id_client,
					'id_user'		=> $this->session->get('id_user'),
					'jenis_client'	=> $this->request->getPost('jenis_client'),
					'nama'			=> $this->request->getPost('nama'),
					'instansi'		=> $this->request->getPost('instansi'),
					'alamat'		=> $this->request->getPost('alamat'),
					'telepon'		=> $this->request->getPost('telepon'),
					'email'			=> $this->request->getPost('email'),
					'isi_testimoni'	=> $this->request->getPost('isi_testimoni'),
					// 'gambar'		=> $namabaru,
					'status_client'	=> $this->request->getPost('status_client'),
				];
				$m_client->edit($data);
				// masuk database
				$this->session->setFlashdata('sukses', 'Data telah disimpan');
				return redirect()->to(base_url('admin/client'));
			}
		} else {
			$data = [
				'title'			=> 'Edit Data Testimoni : ' . $client['nama'],
				'client'		=> $client,
				'content'		=> 'admin/client/edit'
			];
			echo view('admin/layout/wrapper', $data);
		}
	}

	// delete
	public function delete($id_client)
	{
		checklogin();
		$m_client = new Client_model();
		$data = ['id_client'	=> $id_client];
		$m_client->delete($data);
		// masuk database
		$this->session->setFlashdata('sukses', 'Data telah dihapus');
		return redirect()->to(base_url('admin/client'));
	}
}
