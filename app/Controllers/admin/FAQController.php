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
        $faq_model = new FAQModel();
        $all_data_faq = $faq_model->findAll();
        $validation = \Config\Services::validation();
        return view('admin/faq/index', [
            'all_data_faq' => $all_data_faq,
            'validation' => $validation
        ]);
    }

    public function tambah()
{
    
    $faq_model = new FAQModel();
    $all_data_faq = $faq_model->findAll();
    $validation = \Config\Services::validation();
    return view('admin/faq/tambah', [
        'all_data_faq' => $all_data_faq,
        'validation' => $validation,
        'seo_tag_title_id' => '', // Set parameter dengan nilai default kosong
        'seo_tag_title_en' => '', // Set parameter dengan nilai default kosong
        'seo_description_id' => '', // Set parameter dengan nilai default kosong
        'seo_description_en' => '', // Set parameter dengan nilai default kosong
        'faq_section_id' => '', // Set parameter dengan nilai default kosong
        'faq_section_en' => '', // Set parameter dengan nilai default kosong
        'faq_title_id' => '', // Set parameter dengan nilai default kosong
        'faq_title_en' => '', // Set parameter dengan nilai default kosong
        'faq_category_id' => '' // Set parameter dengan nilai default kosong
    ]);
}

public function proses_tambah()
{
    // Set default timezone
    date_default_timezone_set('Asia/Jakarta');

    // Retrieve file and form data
    $seo_tag_title_id = $this->request->getVar("seo_tag_title_id");
    $seo_tag_title_en = $this->request->getVar("seo_tag_title_en");
    $seo_description_id = $this->request->getVar("seo_description_id");
    $seo_description_en = $this->request->getVar("seo_description_en");
    $faq_section_id = $this->request->getVar("faq_section_id");
    $faq_section_en = $this->request->getVar("faq_section_en");
    $faq_title_id = $this->request->getVar("faq_title_id");
    $faq_title_en = $this->request->getVar("faq_title_en");
    $faq_category_name_id = $this->request->getVar("faq_category_id"); // Changed variable name

    // Pastikan faq_category_id tidak kosong
    if (!empty($faq_category_name_id)) {
        // Ambil id dari nama kategori FAQ yang dipilih
        $db = \Config\Database::connect();
        $builder = $db->table('faq_category');
        $category_id_query = $builder->select('id')->where('name_id', $faq_category_name_id)->get()->getRowArray();
        $faq_category_id = $category_id_query['id'];

        // Siapkan data untuk disimpan ke dalam database
        $data = [
            'seo_tag_title_id' => $seo_tag_title_id,
            'seo_tag_title_en' => $seo_tag_title_en,
            'seo_description_id' => $seo_description_id,
            'seo_description_en' => $seo_description_en,
            'faq_section_id' => $faq_section_id,
            'faq_section_en' => $faq_section_en,
            'faq_title_id' => $faq_title_id,
            'faq_title_en' => $faq_title_en,
            'faq_category_id' => $faq_category_id, // Use the retrieved id
        ];

        // Simpan data ke dalam database
        $faq_model = new FAQModel();
        $faq_model->save($data);

        // Redirect dengan pesan sukses
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to(base_url('admin/faq/index'));
    } else {
        // Jika faq_category_id kosong, tampilkan pesan error
        session()->setFlashdata('error', 'FAQ Category tidak boleh kosong');
        return redirect()->back();
    }
}





public function edit($id)
{
    // Pengecekan apakah pengguna sudah login atau belum
    $faq_model = new FAQModel();
    $faqData = $faq_model->find($id);
    $validation = \Config\Services::validation();

    return view('admin/faq/edit', [
        'faqData' => $faqData,
        'validation' => $validation
    ]);
}


public function proses_edit($id = null)
{
    if (!$id) {
        return redirect()->back();
    }

    $faqModel = new FAQModel();
    $faqData = $faqModel->find($id);

    if (!$faqData) {
        session()->setFlashdata('error', 'Data FAQ tidak ditemukan.');
        return redirect()->back();
    }

    $seo_tag_title_id = $this->request->getVar("seo_tag_title_id");
    $seo_tag_title_en = $this->request->getVar("seo_tag_title_en");
    $seo_description_id = $this->request->getVar("seo_description_id");
    $seo_description_en = $this->request->getVar("seo_description_en");
    $faq_section_id = $this->request->getVar("faq_section_id");
    $faq_section_en = $this->request->getVar("faq_section_en");
    $faq_title_id = $this->request->getVar("faq_title_id");
    $faq_title_en = $this->request->getVar("faq_title_en");
    $faq_category_id = $this->request->getVar("faq_category_id");

    // Update the FAQ data
    $data = [
        'seo_tag_title_id' => $seo_tag_title_id,
        'seo_tag_title_en' => $seo_tag_title_en,
        'seo_description_id' => $seo_description_id,
        'seo_description_en' => $seo_description_en,
        'faq_section_id' => $faq_section_id,
        'faq_section_en' => $faq_section_en,
        'faq_title_id' => $faq_title_id,
        'faq_title_en' => $faq_title_en,
        'faq_category_id' => $faq_category_id
    ];

    // Update the FAQ data in the database
    $faqModel->update($id, $data);

    session()->setFlashdata('success', 'Data berhasil diperbarui');
    return redirect()->to(base_url('admin/faq/index'));
}

public function delete($id = null)
{
    if (!$id) {
        return redirect()->back();
    }

    $faqModel = new FAQModel();
    $faqData = $faqModel->find($id);

    if (!$faqData) {
        session()->setFlashdata('error', 'Data FAQ tidak ditemukan.');
        return redirect()->back();
    }

    // Delete the FAQ from the database
    $faqModel->delete($id);

    session()->setFlashdata('success', 'Data berhasil dihapus');
    return redirect()->to(base_url('admin/faq/index'));
}


}


