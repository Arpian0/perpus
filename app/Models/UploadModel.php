<?php

namespace App\Models;

use CodeIgniter\Model;

class UploadModel extends Model
{
    protected $table = 'image';

    public function getGambar()
    {
        return $this->findAll();
    }
    public function image($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
    public function deleteImage($id)
    {
        return $this->where('id', $id)->delete();
    }
}
