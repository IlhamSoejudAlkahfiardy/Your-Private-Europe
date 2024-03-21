<?php

namespace App\Controllers\en;

use App\Controllers\BaseController;

class FAQController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Questions – Astrip';
        $data['language'] = 'en';

        echo view('pages/en/faq', $data);
    }
}
