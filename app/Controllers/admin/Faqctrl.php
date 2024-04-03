<?php

namespace App\Controllers;

use App\Models\FAQModel;

use App\Models\DestinationModel;
use App\Models\FAQCategoryModel;
use App\Controllers\BaseController;

class Faqctrl extends BaseController
{
    protected $homepageModel;
    protected $destinationModel;
    protected $FAQModel;
    protected $FAQCategoryModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->FAQModel = new FAQModel();
        $this->FAQCategoryModel = new FAQCategoryModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
    }

    public function index(): void
    {
        // Pengecekan apakah pengguna sudah login atau belum
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login')); // Ubah 'login' sesuai dengan halaman login kamu
        }
        $faq_model = new FAQModel();
        $all_data_faq = $faq_model->findAll();
        $validation = \Config\Services::validation();
        return view('admin/faq/index', [
            'all_data_faq' => $all_data_faq,
            'validation' => $validation
        ]);
    }
    
    public function tambah(): void
    {
        // Anda mungkin ingin menambahkan logika otentikasi di sini

        // Mendapatkan data yang diperlukan dari model
        $data = [
            'title' => $this->FAQModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->FAQModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'navbarDestinations' => $this->destinationModel->select(['title', 'slug'])->findAll(),
            'faqs' => $this->FAQModel->findAll(),
            'faqCategories' => $this->FAQCategoryModel->findAll(),
        ];

        echo view('pages/faq', $data);
    }

    public function proses_tambah()
    {
        // Anda mungkin ingin menambahkan logika otentikasi di sini

        // Validasi input dari form tambah
        $validationRules = [
            // atur aturan validasi di sini
        ];

        if (!$this->validate($validationRules)) {
            // Jika validasi gagal, kembalikan ke halaman tambah dengan pesan kesalahan
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to(base_url('admin/faq/tambah'))->withInput();
        }

        // Proses penyimpanan data jika validasi berhasil
        // Perhatikan bahwa kode validasi dan logika penyimpanan akan berbeda tergantung pada kebutuhan aplikasi Anda

        // Contoh:
        // $data = $this->request->getPost(); // Mengambil semua data dari form
        // $this->FAQModel->insert($data); // Menyimpan data ke database

        // Sesuaikan dengan kebutuhan aplikasi Anda
        // Setelah penyimpanan berhasil, redirect ke halaman index dengan pesan sukses
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to(base_url('admin/faq'));
    }

}
