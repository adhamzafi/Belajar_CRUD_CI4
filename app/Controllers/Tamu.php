<?php

namespace App\Controllers;

use App\Models\TamuModel;

class Tamu extends BaseController
{
    public function index()
    {
        $tamu_model = new TamuModel();
        $all_data_tamu = $tamu_model->findAll();
        return view('tamu', ['all_data_tamu' => $all_data_tamu]);
    }

    public function add_data_tamu()
    {
        return view('add_data_tamu');
    }

    public function proses_add_tamu()
    {
        $tamu_model = new TamuModel();
        $tamu_model->insert($this->request->getPost());
        return redirect()->to(base_url('tamu'));
    }

    public function edit_data_tamu($id = false)
    {
        $tamu_model = new TamuModel();
        $data_tamu = $tamu_model->find($id);
        return view('edit_data_tamu', ['data_tamu' => $data_tamu]);
    }

    public function proses_edit_tamu()
    {
        $tamu_model = new TamuModel();
        $tamu_model->update($this->request->getPost('id_tamu'), $this->request->getPost());
        return redirect()->to(base_url('tamu'));
    }

    public function delete_data_tamu($id = false)
    {
        $tamu_model = new TamuModel();
        $tamu_model->delete($id);
        return redirect()->to(base_url('tamu'));
    }
}
