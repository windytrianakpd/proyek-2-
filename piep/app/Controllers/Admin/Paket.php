<?php

namespace App\Controllers\Admin;

use App\Models\Paket_model;
use App\Models\Kategori_paket_model;

class Paket extends BaseController
{

    // index
    public function index()
    {
        checklogin();
        $m_paket         = new Paket_model();
        $m_paket_kategori         = new Kategori_paket_model();
        $paket         = $m_paket->listing();
        $total         = $m_paket->total();
        $paket_kategori         = $m_paket_kategori->listing();

        $data = [
            'title'            => 'Paket Privat (' . $total . ')',
            'paket'        => $paket,
            'fasilitas'        => $paket_kategori,
            'content'        => 'admin/paket/index'
        ];
        echo view('admin/layout/wrapper', $data);
    }

    //tambah
    public function tambah()
    {
        checklogin();
        $m_paket         = new Paket_model();
        $m_paket_kategori         = new Kategori_paket_model();
        $kode         = $m_paket->kode_paket();
        $id = $kode[0]['kode'] + 1;

        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'kategori'     => 'required',
                'modul'         => 'required',
                'pendaftaran'     => 'required',
            ]
        )) {
            // masuk database
            if ($this->request->getPost('diskon') == "0%") {
                $harga = $this->request->getPost('modul') + $this->request->getPost('pendaftaran');
                $data = [
                    'id'        => $id,
                    'kategori'    => $this->request->getPost('kategori'),
                    'modul_pembelajaran'    => $this->request->getPost('modul'),
                    'pendaftaran'    => $this->request->getPost('pendaftaran'),
                    'diskon'    => $this->request->getPost('diskon'),
                    'harga'     => $harga,
                    'harga_diskon'  => $harga,
                    'status_paket'    => $this->request->getPost('publish'),
                    'status'    => $this->request->getPost('status')
                ];

                $m_paket->tambah($data);

                $fasilitas = $this->request->getPost('input_field');

                foreach ($fasilitas as $data_fasilitas) {
                    $m_paket_kategori->tambah($id, $data_fasilitas);
                }
                //masuk database
                $this->session->setFlashdata('sukses', 'Data telah ditambah');
                return redirect()->to(base_url('admin/Paket'));
            } else {
                $harga = $this->request->getPost('modul') + $this->request->getPost('pendaftaran');
                $diskon = 0;
                if ($this->request->getPost('diskon') == "100%") {
                    $diskon = $harga - (substr($this->request->getPost('diskon'), 0, 3) / 100 * $harga);
                } else {
                    $diskon = $harga - (substr($this->request->getPost('diskon'), 0, 2) / 100 * $harga);
                }

                $data = [
                    'id'        => $id,
                    'kategori'    => $this->request->getPost('kategori'),
                    'modul_pembelajaran'    => $this->request->getPost('modul'),
                    'pendaftaran'    => $this->request->getPost('pendaftaran'),
                    'diskon'    => $this->request->getPost('diskon'),
                    'harga'     => $harga,
                    'harga_diskon'  => $diskon,
                    'status_paket'    => $this->request->getPost('publish'),
                    'status'    => $this->request->getPost('status')
                ];

                $m_paket->tambah($data);

                $fasilitas = $this->request->getPost('input_field');

                foreach ($fasilitas as $data_fasilitas) {
                    $m_paket_kategori->tambah($id, $data_fasilitas);
                }
                // masuk database
                $this->session->setFlashdata('sukses', 'Data telah ditambah');
                return redirect()->to(base_url('admin/Paket'));
            }
        } else {
            $m_paket         = new Paket_model();
            $paket         = $m_paket->listing();

            $data = [
                'title'     => 'Tambah Paket',
                'paket'     => $paket,
                'content'   => 'admin/paket/tambah'
            ];
            echo view('admin/layout/wrapper', $data);
        }
    }

    //edit
    public function edit($id_paket)
    {
        checklogin();
        $m_paket            = new Paket_model();
        $m_paket_kategori         = new Kategori_paket_model();
        $dtl_paket         = $m_paket->detail_paket($id_paket);
        $paket_kategori         = $m_paket_kategori->detail_layanan($id_paket);

        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'kategori'     => 'required',
                'modul'         => 'required',
                'pendaftaran'     => 'required',
            ]
        )) {
            // masuk database
            if ($this->request->getPost('diskon') == "0%") {
                $harga = $this->request->getPost('modul') + $this->request->getPost('pendaftaran');
                $data = [
                    'id'        => $id_paket,
                    'kategori'    => $this->request->getPost('kategori'),
                    'modul_pembelajaran'    => $this->request->getPost('modul'),
                    'pendaftaran'    => $this->request->getPost('pendaftaran'),
                    'diskon'    => $this->request->getPost('diskon'),
                    'harga'     => $harga,
                    'harga_diskon'  => $harga,
                    'status_paket'    => $this->request->getPost('publish'),
                    'status'    => $this->request->getPost('status')
                ];

                $m_paket->edit($data);
                $m_paket_kategori->hapus($id_paket);

                $fasilitas = $this->request->getPost('input_field');
                foreach ($fasilitas as $data_fasilitas) {
                    $m_paket_kategori->tambah($id_paket, $data_fasilitas);
                }

                //masuk database
                $this->session->setFlashdata('sukses', 'Data telah diedit');
                return redirect()->to(base_url('admin/Paket'));
            } else {
                $harga = $this->request->getPost('modul') + $this->request->getPost('pendaftaran');
                $diskon = 0;
                if ($this->request->getPost('diskon') == "100%") {
                    $diskon = $harga - (substr($this->request->getPost('diskon'), 0, 3) / 100 * $harga);
                } else {
                    $diskon = $harga - (substr($this->request->getPost('diskon'), 0, 2) / 100 * $harga);
                }

                $data = [
                    'id'        => $id_paket,
                    'kategori'    => $this->request->getPost('kategori'),
                    'modul_pembelajaran'    => $this->request->getPost('modul'),
                    'pendaftaran'    => $this->request->getPost('pendaftaran'),
                    'diskon'    => $this->request->getPost('diskon'),
                    'harga'     => $harga,
                    'harga_diskon'  => $diskon,
                    'status_paket'    => $this->request->getPost('publish'),
                    'status'    => $this->request->getPost('status')
                ];

                $m_paket->edit($data);
                $m_paket_kategori->hapus($id_paket);

                $fasilitas = $this->request->getPost('input_field');
                foreach ($fasilitas as $data_fasilitas) {
                    $m_paket_kategori->tambah($id_paket, $data_fasilitas);
                }
                //masuk database
                $this->session->setFlashdata('sukses', 'Data telah diedit');
                return redirect()->to(base_url('admin/Paket'));
            }
        } else {
            $data = [
                'title'     => 'Edit Paket : ' . $dtl_paket['kategori'],
                'paket'        => $dtl_paket,
                'fasilitas'        => $paket_kategori,
                'jumlah_layanan'  => $m_paket_kategori->listing_layanan($id_paket),
                'content'   => 'admin/paket/edit'
            ];
            echo view('admin/layout/wrapper', $data);
        }
    }

    //delete
    public function delete($id_paket)
    {
        checklogin();
        $m_paket = new Paket_model();
        $data = ['id_paket'    => $id_paket];
        $m_paket->delete($data);
        // masuk database
        $this->session->setFlashdata('sukses', 'Data telah dihapus');
        return redirect()->to(base_url('admin/paket'));
    }
}
