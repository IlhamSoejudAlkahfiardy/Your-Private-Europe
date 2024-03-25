<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ContactUsController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Contact Us – Astrip';
        $data['language'] = 'id';

        echo view('pages/contact_us', $data);
    }
}
