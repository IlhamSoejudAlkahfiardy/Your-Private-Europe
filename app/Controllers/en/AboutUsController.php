<?php

namespace App\Controllers\en;

use App\Controllers\BaseController;

class AboutUsController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'About Us – Astrip';
        $data['language'] = 'en';

        echo view('pages/en/about_us', $data);
    }
}
