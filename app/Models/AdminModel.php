<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'password'];

    public function get_data($email, $password)
    {
        return $this->where('email', $email)
            ->where('password', $password)
            ->first();
    }
}
