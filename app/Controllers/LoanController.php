<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\LoanModel;
use App\Models\MemberModel;
use CodeIgniter\Controller;

class LoanController extends Controller
{
    public function index()
    {
        $model = new LoanModel();
        $data['loans'] = $model->findAll();

        return view('loans/index', $data);
    }

    public function create()
    {
        // Get members and books data to be displayed in the view
        $memberModel = new MemberModel();
        $bookModel = new BookModel();

        $data['members'] = $memberModel->findAll();
        $data['books'] = $bookModel->findAll();

        return view('loans/create', $data);
    }

    public function store()
    {
        $model = new LoanModel();

        $data = [
            'member_id' => $this->request->getPost('member_id'),
            'book_id' => $this->request->getPost('book_id'),
            'loan_date' => $this->request->getPost('loan_date'),
            'return_date' => $this->request->getPost('return_date'),
            'status' => $this->request->getPost('status'),
            'denda' => $this->request->getPost('denda')
        ];

        $model->insert($data);

        return redirect()->to('pengembalian');
    }

    public function edit($id)
    {
        $model = new LoanModel();
        $data['loan'] = $model->find($id);

        if (empty($data['loan'])) {
            // Redirect or show error page, as loan with the given ID was not found
        }

        $memberModel = new MemberModel();
        $bookModel = new BookModel();

        $data['members'] = $memberModel->findAll();
        $data['books'] = $bookModel->findAll();

        return view('loans/edit', $data);
    }

    public function update()
    {
        $model = new LoanModel();

        $loanId = $this->request->getPost('loan_id');

        $data = [
            'member_id' => $this->request->getPost('member_id'),
            'book_id' => $this->request->getPost('book_id'),
            'loan_date' => $this->request->getPost('loan_date'),
            'status' => $this->request->getPost('status'),
            'denda' => $this->request->getPost('denda')
        ];

        $model->update($loanId, $data);

        return redirect()->to('pengembalian');
    }

    public function delete($id)
    {
        $model = new LoanModel();

        $model->delete($id);

        return redirect()->to('pengembalian');
    }
}
