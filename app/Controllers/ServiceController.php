<?php

namespace App\Controllers;

use App\Models\DestinationModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ServiceController extends BaseController
{
    protected $destinationModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
    }

    public function index()
    {
        $data = [
            'title' => [
                'seo_tag_title_id' => 'Our Services',
                'seo_tag_title_en' => 'Our Services',
            ],
            'description' => [
                'seo_description_id' => 'Our Services',
                'seo_description_en' => 'Our Services',
            ],
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'navbarDestinations' => $this->destinationModel->select(['title', 'slug'])->findAll(),
        ];

        echo view('pages/services', $data);
    }
}
