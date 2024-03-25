<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FAQController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Questions – Astrip';
        $data['language'] = 'id';

        echo view('pages/faq', $data);
    }
}
