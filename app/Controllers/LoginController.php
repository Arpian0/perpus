<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function doLogin()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = new AdminModel();
        $data = $user->where('email', $email)->first();
        if ($data) {
            $session = session();
            if (password_verify($password, $data['password'])) {
                //create session
                $login = [
                    'islogin' => true,
                    'email' => $data['email'],
                    'name' => $data['nama']
                ];
                $session->set($login);
                return redirect()->to('dashboard');
            } else {
                $session->setFlashdata('msg', 'Email/Password invalid');
                return redirect()->to('/login');
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
