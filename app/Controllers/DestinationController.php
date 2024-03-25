<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DestinationController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Tour Destination – Astrip';
        $data['language'] = 'id';

        echo view('pages/destination', $data);
    }
}
