<?php

namespace App\Models;

use CodeIgniter\Model;

class Dtl_order_model extends Model
{
    protected $table = 'dtl_order';
    protected $allowedFields = [];

    public function tambah($data)
    {
        $builder = $this->db->table('dtl_order');
        $builder->insert($data);
    }
}
