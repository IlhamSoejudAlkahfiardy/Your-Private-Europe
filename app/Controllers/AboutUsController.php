<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DestinationModel;

class AboutUsController extends BaseController
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

    public function index(): void
    {
        $data = [
            'title' => [
                'seo_tag_title_id' => 'Tentang Kami',
                'seo_tag_title_en' => 'About Us'
            ],
            'description' => [
                'seo_description_id' => 'Hubungi kami untuk informasi lebih lanjut',
                'seo_description_en' => 'Contact us for more information'
            ],
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'navbarDestinations' => $this->destinationModel->select(['title', 'slug'])->findAll(),
        ];

        echo view('pages/about_us', $data);
    }
}
