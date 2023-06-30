<?php

namespace App\Models;

use CodeIgniter\Model;

class BorrowModel extends Model
{
    protected $table = 'borrows';
    protected $primaryKey = 'id';
    protected $allowedFields = ['book_id', 'user_name', 'borrow_date', 'return_date'];
}
