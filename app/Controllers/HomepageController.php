<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HomepageModel;

class HomepageController extends BaseController
{
    protected $homepageModel;
    public function __construct()
    {
        $this->homepageModel = new HomepageModel();
    }
    public function index(): void
    {
        // $data['title'] = 'Your Private Europe';
        // $data['language'] = 'id';
        $data = [
            'title' => 'Your Private Europe',
            'language' => 'id',
            'homepage' => $this->homepageModel->findAll(),
            'language' => session()->get('lang')
        ];

        // d($data['language']);

        echo view('pages/homepage', $data);
    }
}
