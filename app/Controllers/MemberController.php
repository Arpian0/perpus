<?php

namespace App\Controllers;

use App\Models\MemberModel;
use CodeIgniter\Controller;

class MemberController extends Controller
{
    public function create()
    {
        return view('members/create');
    }

    public function store()
    {
        $model = new MemberModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email')
        ];

        $model->insert($data);

        return redirect()->to('anggota');
    }
}
