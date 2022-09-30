<?php

namespace App\Models;

use CodeIgniter\Model;

class Visitor_model extends Model
{

    protected $table = 'visitor_counter';
    protected $allowedFields = ['tanggal'];

    // tambah
    public function tambah($data)
    {
        $builder = $this->db->table('visitor_counter');
        $builder->insert($data);
    }
}
