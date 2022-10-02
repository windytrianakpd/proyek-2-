<?php

namespace App\Models;

use CodeIgniter\Model;

class Order_model extends Model
{
    protected $table = 'order_paket';
    protected $primaryKey = 'id';
    protected $allowedFields = [];

    function newId()
    {
        $query = $this->db->query("SELECT MAX(id) AS id FROM order_paket");
        $rows = $query->getResult();
        if (isset($rows[0]->id)) {
            return $rows[0]->id + 1;
        } else {
            return "1";
        }
    }

    public function tambah($data)
    {
        $builder = $this->db->table('order_paket');
        $builder->insert($data);
    }

    public function listing_keranjang()
    {
        $builder = $this->db->table('order_paket');
        $builder->join('dtl_order', 'ordeR_paket.id = dtl_order.id_order');
        $builder->where('status', "Diproses");
        $builder->orderBy('tanggal', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function listing_pesanan()
    {
        $builder = $this->db->table('order_paket');
        $builder->join('dtl_order', 'ordeR_paket.id = dtl_order.id_order');
        $builder->where('status', "Lunas");
        $builder->orderBy('tanggal', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function prosesOrder($data)
    {
        $builder = $this->db->table('order_paket');
        $builder->where('id', $data['id']);
        $builder->update($data);
    }

    function notification()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM order_paket WHERE STATUS = 'Diproses'");
        $rows = $query->getResult();
        if (isset($rows[0])) {
            return $rows[0];
        } else {
            return "0";
        }
    }

    public function dtl_notification()
    {
        $builder = $this->db->table('order_paket');
        $builder->select('*');
        $builder->where('status', "Diproses");
        $builder->orderBy('tanggal', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function total()
    {
        $builder = $this->db->table('order_paket');
        $builder->where('status', "Diproses");
        $query = $builder->get();
        return $query->getNumRows();
    }

    public function total_pesanan()
    {
        $builder = $this->db->table('order_paket');
        $builder->where('status', "Lunas");
        $query = $builder->get();
        return $query->getNumRows();
    }
}
