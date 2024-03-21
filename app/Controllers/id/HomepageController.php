<?php

namespace App\Controllers\id;

use App\Controllers\BaseController;

class HomepageController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Astrip – Tour and Travel Agency';
        $data['language'] = 'id';

        echo view('pages/id/homepage', $data);
    }
}
