<?php

namespace App\Controllers;

use App\Models\DestinationModel;
use App\Models\SocialMediaModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ServiceController extends BaseController
{
    protected $destinationModel;
    protected $socmedModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
        $this->socmedModel = new SocialMediaModel();
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
            'socmeds' => $this->socmedModel->findAll(),
        ];

        echo view('pages/services', $data);
    }
}
