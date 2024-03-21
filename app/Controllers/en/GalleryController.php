<?php

namespace App\Controllers\en;

use App\Controllers\BaseController;

class GalleryController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Gallery – Astrip';
        $data['language'] = 'en';

        echo view('pages/en/gallery', $data);
    }

    public function detail(): void
    {
        $data['title'] = 'Gallery – Astrip';
        $data['language'] = 'en';

        echo view('pages/en/detail_gallery', $data);
    }
}
