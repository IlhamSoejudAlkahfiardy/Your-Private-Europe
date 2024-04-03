<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\FAQModel;


class Dashboardctrl extends BaseController
{
    public function index()
    {
        // Pengecekan apakah pengguna sudah login atau belum
        // if (!session()->get('logged_in')) {
        //     return redirect()->to(base_url('login')); // Ubah 'login' sesuai dengan halaman login kamu
        // }
        // $faqModel = new FAQModel();
       

        // $data['faqCount'] = $faqModel->countAll();
       
        return view('admin/dashboard/index');
    }
}