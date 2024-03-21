<?php

namespace App\Controllers\en;

use App\Controllers\BaseController;

class HomepageController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Astrip – Tour and Travel Agency';
        $data['language'] = 'en';

        echo view('pages/en/homepage', $data);
    }
}
