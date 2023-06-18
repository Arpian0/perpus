<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        return view('dashboard/index');
    }

    public function admin()
    {
        return view('dashboard/admin');
    }

    public function anggota()
    {
        return view('dashboard/anggota');
    }

    public function buku()
    {
        return view('dashboard/buku');
    }

    public function kategori()
    {
        return view('dashboard/kategori');
    }

    public function peminjaman()
    {
        return view('dashboard/peminjaman');
    }

    public function pengembalian()
    {
        return view('dashboard/pengembalian');
    }
}
