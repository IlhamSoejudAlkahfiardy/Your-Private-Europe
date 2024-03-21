<?php

namespace App\Controllers\en;

use App\Controllers\BaseController;

class DestinationController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Tour Destination – Astrip';
        $data['language'] = 'en';

        echo view('pages/en/destination', $data);
    }
}
