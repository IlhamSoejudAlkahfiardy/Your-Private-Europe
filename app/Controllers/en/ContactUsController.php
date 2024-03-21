<?php

namespace App\Controllers\en;

use App\Controllers\BaseController;

class ContactUsController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Contact Us – Astrip';
        $data['language'] = 'en';

        echo view('pages/en/contact_us', $data);
    }
}
