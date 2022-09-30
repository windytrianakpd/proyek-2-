<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Konfigurasi_model;
use App\Models\Paket_model;
use App\Models\Kategori_paket_model;
use App\Models\Order_model;
use App\Models\Dtl_order_model;

class Order extends BaseController
{
    // Homepage
    public function index()
    {
        $m_konfigurasi     = new Konfigurasi_model();
        $m_paket     = new Paket_model();
        $konfigurasi     = $m_konfigurasi->listing();
        $paket     = $m_paket->detail_paket($this->request->getPost('id_paket'));

        $data = [
            'title'            => 'Order Paket',
            'description'    => 'Download File ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
            'keywords'        => 'Download File ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
            'konfigurasi'    => $konfigurasi,
            'paket'        => $paket,
            'content'        => 'order/index'
        ];
        echo view('layout/wrapper', $data);
    }

    public function sukses()
    {
        $m_konfigurasi     = new Konfigurasi_model();
        $m_paket_kategori         = new Kategori_paket_model();
        $m_order     = new Order_model();
        $m_dtl_order     = new Dtl_order_model();

        $konfigurasi     = $m_konfigurasi->listing();
        $layanan     = $m_paket_kategori->detail_layanan($this->request->getPost('idPaket'));
        $jumlah     = $m_paket_kategori->listing_layanan($this->request->getPost('idPaket'));
        $newId_order     = $m_order->newId();

        $data_pemesanan = [
            'id'            => $newId_order,
            'tanggal'       => date("Y-m-d h:i:s"),
            'pemesan'       => $this->request->getPost('pemesan'),
            'handphone'     => $this->request->getPost('handphone'),
            'alamat'        => $this->request->getPost('alamat'),
            'status'        => "Diproses"
        ];

        $dtl_pemesanan = [
            'id_order'            => $newId_order,
            'kategori'      => $this->request->getPost('kategori'),
            'harga'         => $this->request->getPost('harga'),
            'diskon'        => $this->request->getPost('diskon'),
            'total'  => $this->request->getPost('harga_diskon')
        ];

        $m_order->tambah($data_pemesanan);
        $m_dtl_order->tambah($dtl_pemesanan);

        $data_cetak = [
            'konfigurasi' => $konfigurasi,
            'tanggal'       => date("l jS \of F Y h:i:s A"),
            'now'           => date("j F Y"),
            'pemesan'       => $this->request->getPost('pemesan'),
            'kategori'      => $this->request->getPost('kategori'),
            'fasilitas'       =>  $layanan,
            'harga'         => $this->request->getPost('harga'),
            'diskon'        => $this->request->getPost('diskon'),
            'handphone'     => $this->request->getPost('handphone'),
            'alamat'        => $this->request->getPost('alamat'),
            'diskon_harga'  => $this->request->getPost('harga_diskon'),
            'jumlah_layanan'        => $jumlah
        ];

        $dompdf = new \Dompdf\Dompdf();
        $html = view('order/struk', $data_cetak);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $output = $dompdf->output();
        $file = date("Ymdhis") . ".pdf";
        file_put_contents('../assets/upload/file/struk/' . $file, $output);

        $data = [
            'title'            => 'Order Sukses',
            'description'    => 'Download File ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['tentang'],
            'keywords'        => 'Download File ' . $konfigurasi['namaweb'] . ', ' . $konfigurasi['keywords'],
            'konfigurasi'    => $konfigurasi,
            'file_bukti'    => $file,
            'content'        => 'order/sukses'
        ];

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

        $session = session();
        $session->setFlashdata('berhasil', 'berhasil');
        echo view('layout/wrapper', $data);
        // echo $html;
    }

    public function unduh($file)
    {
        return $this->response->download('../assets/upload/file/struk/' . $file, null);
    }
}
