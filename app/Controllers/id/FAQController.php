<?php

namespace App\Controllers\id;

use App\Controllers\BaseController;

class FAQController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Questions – Astrip';
        $data['language'] = 'id';

        echo view('pages/id/faq', $data);
    }
}
