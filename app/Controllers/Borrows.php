<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\BorrowModel;
use CodeIgniter\Controller;

class Borrows extends Controller
{
    public function index()
    {
        $model = new BorrowModel();
        $data['borrows'] = $model->findAll();

        return view('borrows/index', $data);
    }

    public function create()
    {
        $bookModel = new BookModel();
        $data['books'] = $bookModel->where('available', 1)->findAll();

        return view('borrows/create', $data);
    }

    public function store()
    {
        $model = new BorrowModel();

        $data = [
            'book_id' => $this->request->getVar('book_id'),
            'user_name' => $this->request->getVar('user_name'),
            'borrow_date' => $this->request->getVar('borrow_date'),
            'return_date' => $this->request->getVar('return_date')
        ];

        $model->insert($data);

        $bookModel = new BookModel();
        $bookModel->update($data['book_id'], ['available' => 0]);

        return redirect()->to('peminjaman');
    }

    public function returnBook($id)
    {
        $model = new BorrowModel();
        $borrow = $model->find($id);

        $bookModel = new BookModel();
        $bookModel->update($borrow['book_id'], ['available' => 1]);

        $model->delete($id);

        return redirect()->to('peminjaman');
    }
}
