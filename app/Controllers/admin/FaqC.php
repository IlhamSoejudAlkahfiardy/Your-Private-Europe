<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\FAQCategoryModel;

class FaqC extends BaseController
{
    protected $faqCategoryModel;

    public function __construct()
    {
        $this->faqCategoryModel = new FAQCategoryModel();
    }

    public function index()
    {
        // Pengecekan apakah pengguna sudah login atau belum
        $faqcategory_model = new FAQCategoryModel();
        $all_data_faqcategory = $faqcategory_model->findAll();
        $validation = \Config\Services::validation();
        return view('admin/faqC/index', [
            'all_data_faqcategory' => $all_data_faqcategory,
            'validation' => $validation
        ]);
    }

    public function tambah()
{
    
    $faqcategory_model = new FAQCategoryModel();
    $all_data_faqcategory = $faqcategory_model->findAll();
    $validation = \Config\Services::validation();
    return view('admin/faqc/tambah', [
        'all_data_faqcategory' => $all_data_faqcategory,
        'validation' => $validation,
        'name_id' => '', 
        'name_en' => '', 
    ]);
}

public function proses_tambah()
{
    // Set default timezone
    date_default_timezone_set('Asia/Jakarta');

    // Retrieve file and form data
    $name_id = $this->request->getVar("name_id");
    $name_en = $this->request->getVar("name_en");
    
   
        $faqcategory_model = new FAQCategoryModel();
        $data = [
            'name_id' => $name_id,
            'name_en' => $name_en,
        ];
        $faqcategory_model->save($data);

        // Redirect with success message
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to(base_url('admin/faqC/index'));
}



public function edit($id)
{
    // Pengecekan apakah pengguna sudah login atau belum
    $faqc_model = new FAQCategoryModel();
    $faqcData = $faqc_model->find($id);
    $validation = \Config\Services::validation();

    return view('admin/faqC/edit', [
        'faqcData' => $faqcData,
        'validation' => $validation
    ]);
}


public function proses_edit($id = null)
{
    // Validasi ID
    if (!is_numeric($id)) {
        return redirect()->back();
    }

    $name_id = $this->request->getVar("name_id");
    $name_en = $this->request->getVar("name_en");

    // Validasi nama aktivitas Indonesia
    if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name_id)) {
        session()->setFlashdata('error', 'Nama Indonesia hanya boleh berisi huruf dan angka.');
        return redirect()->back()->withInput();
    }

    // Validasi nama aktivitas Inggris
    if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name_en)) {
        session()->setFlashdata('error', 'Nama Inggris hanya boleh berisi huruf dan angka.');
        return redirect()->back()->withInput();
    }

    $faqcModel = new FAQCategoryModel();

    try {
        // Memulai transaksi
        $faqcModel->transStart();

        // Update data
        $data = [
            'name_id' => $name_id,
            'name_en' => $name_en
        ];
        $faqcModel->update($id, $data);

        // Commit transaksi jika berhasil
        $faqcModel->transCommit();

        session()->setFlashdata('success', 'Data berhasil diperbarui');
        return redirect()->to(base_url('admin/faqC/index'));
    } catch (\Exception $e) {
        // Rollback transaksi jika terjadi kesalahan
        $faqcModel->transRollback();

        session()->setFlashdata('error', 'Gagal memperbarui data: ' . $e->getMessage());
        return redirect()->back()->withInput();
    }
}

public function delete($id = null)
{
    if (!$id) {
        return redirect()->back();
    }

    $faqcModel = new FAQCategoryModel();
    $faqcData = $faqcModel->find($id);

    if (!$faqcData) {
        session()->setFlashdata('error', 'Data FAQ Category tidak ditemukan.');
        return redirect()->back();
    }

    // Delete the FAQ from the database
    $faqcModel->delete($id);

    session()->setFlashdata('success', 'Data berhasil dihapus');
    return redirect()->to(base_url('admin/faqC/index'));
}


}


