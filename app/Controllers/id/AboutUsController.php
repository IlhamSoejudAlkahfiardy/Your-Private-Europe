<?php

namespace App\Controllers\id;

use App\Controllers\BaseController;

class AboutUsController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'About Us – Astrip';
        $data['language'] = 'id';

        echo view('pages/id/about_us', $data);
    }
}
