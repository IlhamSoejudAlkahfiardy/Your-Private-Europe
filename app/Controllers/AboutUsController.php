<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AboutUsController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'About Us – Astrip';
        $data['language'] = 'id';

        echo view('pages/about_us', $data);
    }
}
