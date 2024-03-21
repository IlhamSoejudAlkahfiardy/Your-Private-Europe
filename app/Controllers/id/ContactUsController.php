<?php

namespace App\Controllers\id;

use App\Controllers\BaseController;

class ContactUsController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Contact Us – Astrip';
        $data['language'] = 'id';

        echo view('pages/id/contact_us', $data);
    }
}
