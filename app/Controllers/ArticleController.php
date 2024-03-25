<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ArticleController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Article – Astrip';
        $data['language'] = 'id';

        echo view('pages/article', $data);
    }

    public function detail(): void
    {
        $data['title'] = 'Article – Astrip';
        $data['language'] = 'id';

        echo view('pages/detail_article', $data);
    }
}
