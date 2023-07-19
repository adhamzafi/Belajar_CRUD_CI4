<?php

namespace App\Controllers;

use App\Models\TamuModel;

class Tamu extends BaseController
{
    // Fungsi ini menampilkan halaman utama "Buku Tamu" dengan semua data tamu yang ada.
    public function index()
    {
        $tamu_model = new TamuModel();
        $all_data_tamu = $tamu_model->findAll();
        return view('tamu', ['all_data_tamu' => $all_data_tamu]);
    }


    // Fungsi ini menampilkan halaman untuk menambah data tamu baru.
    public function add_data_tamu()
    {
        return view('add_data_tamu');
    }

    // Fungsi ini memproses penambahan data tamu baru ke dalam database.
    public function proses_add_tamu()
    {
        $tamu_model = new TamuModel();
        $tamu_model->insert($this->request->getPost());
        return redirect()->to(base_url('tamu'));
    }

    // Fungsi ini menampilkan halaman untuk mengedit data tamu berdasarkan ID tamu yang diberikan.
    public function edit_data_tamu($id = false)
    {
        $tamu_model = new TamuModel();
        $data_tamu = $tamu_model->find($id);
        return view('edit_data_tamu', ['data_tamu' => $data_tamu]);
    }

    // Fungsi ini memproses update data tamu ke dalam database berdasarkan data yang dikirimkan melalui POST request.
    public function proses_edit_tamu()
    {
        $tamu_model = new TamuModel();
        $tamu_model->update($this->request->getPost('id_tamu'), $this->request->getPost());
        return redirect()->to(base_url('tamu'));
    }

    // Fungsi ini menghapus data tamu dari database berdasarkan ID tamu yang diberikan.
    public function delete_data_tamu($id = false)
    {
        $tamu_model = new TamuModel();
        $tamu_model->delete($id);
        return redirect()->to(base_url('tamu'));
    }
}
