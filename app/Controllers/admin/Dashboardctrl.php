<?php

namespace App\Controllers\admin;

use App\Controllers\admin\BaseController;

class Dashboardctrl extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Contact Us – Astrip';
        $data['language'] = 'id';

        echo view('pages/dasboard', $data);
    }
}
