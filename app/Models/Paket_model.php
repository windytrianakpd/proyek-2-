<?php

namespace App\Models;

use CodeIgniter\Model;

class Paket_model extends Model
{

    protected $table = 'paket';
    protected $primaryKey = 'id';
    protected $allowedFields = [];

    // Listing
    public function listing()
    {
        $builder = $this->db->table('paket');
        $builder->select('paket.*');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function listing_home()
    {
        $builder = $this->db->table('paket');
        $builder->select('paket.*');
        $builder->orderBy('status', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function detail_paket($id_paket)
    {
        $builder = $this->db->table('paket');
        $builder->select('paket.*');
        $builder->where('id', $id_paket);
        $query = $builder->get();
        return $query->getRowArray();
    }

    function terbaik()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM paket WHERE STATUS = 'Terbaik'");
        $rows = $query->getResultArray();
        return $rows;
        if (isset($rows[0]->jumlah)) {
            return $rows[0]->jumlah;
        }
    }

    function kode_paket()
    {
        $query = $this->db->query("SELECT MAX(id) AS kode FROM paket");
        $rows = $query->getResultArray();
        return $rows;
    }

    public function tambah($data)
    {
        $builder = $this->db->table('paket');
        $builder->insert($data);
    }

    public function edit($data)
    {
        $builder = $this->db->table('paket');
        $builder->where('id', $data['id']);
        $builder->update($data);
    }

    public function total()
    {
        $builder = $this->db->table('paket');
        $query = $builder->get();
        return $query->getNumRows();
    }
}
