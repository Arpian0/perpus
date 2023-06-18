<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UploadModel;

class UploadController extends BaseController
{
    public function index()
    {
        helper('form');
        $model = new UploadModel();
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['gambar'] = $model->getGambar();
            echo view('view_list', $data);
        }
    }
    public function proses()
    {
        $model = new UploadModel();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('upload');
        }
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        if ($validation == FALSE) {

            return $this->index();
        } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/images/');
            $data = array(
                'judul'  => $this->request->getPost('judul'),
                'gambar' => $upload->getName()
            );
            $model->image($data);
            return redirect()->to('./upload')->with('berhasil', 'Data Berhasil di Simpan');
        }
    }

    public function delete($id)
    {
        if ($this->request->getMethod() === 'post' && $this->request->getVar('_method') === 'DELETE') {
            $model = new UploadModel();
            $gambar = $model->find($id);

            if ($gambar) {
                $model->deleteImage($id);

                // Hapus juga file gambar dari direktori
                $gambarPath = WRITEPATH . '../public/assets/images/' . $gambar['gambar'];
                if (is_file($gambarPath)) {
                    unlink($gambarPath);
                }

                return redirect()->to('upload')->with('berhasil', 'Data Berhasil di Hapus');
            }
        }

        return redirect()->to('upload');
    }
}
