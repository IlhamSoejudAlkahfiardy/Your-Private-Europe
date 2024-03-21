<?php

namespace App\Controllers\id;

use App\Controllers\BaseController;

class ArticleController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Article – Astrip';
        $data['language'] = 'id';

        echo view('pages/id/article', $data);
    }
}
