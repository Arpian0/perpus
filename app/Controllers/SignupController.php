<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class SignupController extends Controller
{
    public function signup()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]',
            'agreement' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Proses penyimpanan data ke database atau tindakan lainnya
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];
        $adminModel = new AdminModel();
        $adminModel->insert($data);

        return redirect()->to('signup_success');
    }

    public function signupForm()
    {
        return view('signup_form');
    }

    public function signupSuccess()
    {
        return view('dashboard/index');
    }
}
