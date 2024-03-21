<?php

namespace App\Controllers\en;

use App\Controllers\BaseController;

class ArticleController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Article – Astrip';
        $data['language'] = 'en';

        echo view('pages/en/article', $data);
    }

    public function detail(): void
    {
        $data['title'] = 'Article – Astrip';
        $data['language'] = 'en';

        echo view('pages/en/detail_article', $data);
    }
}
