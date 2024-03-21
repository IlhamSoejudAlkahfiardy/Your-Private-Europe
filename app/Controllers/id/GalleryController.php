<?php

namespace App\Controllers\id;

use App\Controllers\BaseController;

class GalleryController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Gallery – Astrip';
        $data['language'] = 'id';

        echo view('pages/id/gallery', $data);
    }

    public function detail(): void
    {
        $data['title'] = 'Gallery – Astrip';
        $data['language'] = 'id';

        echo view('pages/id/detail_gallery', $data);
    }
}
