<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\FAQModel;
use App\Models\DestinationModel;
use App\Models\FAQCategoryModel;

class FAQController extends BaseController
{
    protected $destinationModel;
    protected $faqModel;
    protected $faqCategoryModel;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->faqModel = new FAQModel();
        $this->faqCategoryModel = new FAQCategoryModel();
    }

    public function index()
    {
        // Pengecekan apakah pengguna sudah login atau belum
        $data['faq'] = $this->faqModel->getAll();
        return view('admin/faq/index', $data);
    }

    public function tambah()
    {
        $data['faq_category'] = $this->faqCategoryModel->findAll();
        return view('admin/faq/tambah', $data);
    }

    public function proses_tambah()
    {
        $data = $this->request->getPost();
        $this->faqModel->insert($data);
        return redirect()->to('admin/faq/index')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        // Validasi ID
        if (!is_numeric($id) || $id <= 0) {
            throw new \InvalidArgumentException('Invalid FAQ ID');
        }
    
        // Temukan FAQ berdasarkan ID
        $faq = $this->faqModel->find($id);
    
        // Periksa apakah FAQ ditemukan
        if ($faq !== null) {
            // Jika FAQ ditemukan, siapkan data untuk view
            $data['faqData'] = $faq; // Change $faq to $faqData
            $data['faq_category'] = $this->faqCategoryModel->findAll();
    
            // Tampilkan view edit dengan data yang disiapkan
            return view('admin/faq/edit', $data);
        } else {
            // Jika FAQ tidak ditemukan, lempar PageNotFoundException
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }


public function proses_edit($id = null)
{
    $data = $this->request->getPost();
    $this->faqModel->update($id, $data);
    return redirect()->to('admin/faq/index')->with('success', 'Data Berhasil Diupdate');
}

public function delete($id = null)
{
    $this->faqModel->delete($id);
    return redirect()->to('admin/faq/index')->with('success', 'Data Berhasil Dihapus');
}


}



