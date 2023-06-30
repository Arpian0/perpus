<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Controller;

class Books extends Controller
{
    public function index()
    {
        $model = new BookModel();
        $data['books'] = $model->findAll();

        return view('books/index', $data);
    }

    public function create()
    {
        return view('books/create');
    }

    public function store()
    {
        $model = new BookModel();

        $data = [
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author'),
            'available' => 1
        ];

        $model->insert($data);

        return redirect()->to('buku');
    }

    public function edit($id)
    {
        $model = new BookModel();
        $data['book'] = $model->find($id);

        return view('books/edit', $data);
    }

    public function update($id)
    {
        $model = new BookModel();

        $data = [
            'title' => $this->request->getVar('title'),
            'author' => $this->request->getVar('author')
        ];

        $model->update($id, $data);

        return redirect()->to('buku');
    }

    public function delete($id)
    {
        $model = new BookModel();
        $model->delete($id);

        return redirect()->to('buku');
    }
}
