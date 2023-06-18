<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        return view('dashboard/index');
    }

    public function body()
    {
        echo view('dashboard/body');
    }

    public function admin()
    {
        echo view('dashboard/admin');
    }

    public function anggota()
    {
        echo view('dashboard/anggota');
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
        echo view('dashboard/peminjaman');
    }

    public function pengembalian()
    {
        echo view('dashboard/pengembalian');
    }
}
