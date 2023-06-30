<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\BorrowModel;
use App\Models\MemberModel;
use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        return view('dashboard/index');
    }

    public function admin()
    {
        echo view('dashboard/admin');
    }

    public function anggota()
    {
        $model = new MemberModel();
        $data['members'] = $model->findAll();

        return view('dashboard/anggota', $data);
    }

    public function buku()
    {
        echo view('dashboard/buku');
    }

    public function kategori()
    {
        echo view('dashboard/kategori');
    }

    public function peminjaman()
    {
        $model = new BookModel();
        $data['books'] = $model->findAll();

        echo view('dashboard/peminjaman', $data);
    }

    public function pengembalian()
    {
        $model = new BorrowModel();
        $data['borrows'] = $model->findAll();

        echo view('dashboard/pengembalian', $data);
    }
}
