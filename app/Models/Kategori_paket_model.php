<?php

namespace App\Models;

use CodeIgniter\Model;

class Kategori_paket_model extends Model
{

    protected $table = 'dtl_paket';
    protected $allowedFields = [];

    // Listing
    public function listing()
    {
        $builder = $this->db->table('dtl_paket');
        $builder->select('dtl_paket.*');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function detail_layanan($id_paket)
    {
        $builder = $this->db->table('dtl_paket');
        $builder->select('dtl_paket.*');
        $builder->where('id_paket', $id_paket);
        $query = $builder->get();
        return $query->getResultArray();
    }

    function tambah($id, $data)
    {
        $query = $this->db->query("INSERT INTO dtl_paket VALUES('$id','$data')");
        return $query;
    }

    public function hapus($id)
    {
        $query = $this->db->query("DELETE FROM dtl_paket WHERE id_paket = '$id'");
        return $query;
    }

    public function edit($id, $data)
    {
        $query = $this->db->query("UPDATE dtl_paket SET fasilitas = '$data' WHERE id_paket = '$id'");
        return $query;
    }

    public function listing_layanan($id)
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM dtl_paket WHERE id_paket = '$id' ");
        $rows = $query->getResultArray();
        return $rows;
        if (isset($rows[0]->jumlah)) {
            return $rows[0]->jumlah;
        }
    }
}
