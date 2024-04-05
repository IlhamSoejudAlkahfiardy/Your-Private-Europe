<?php

namespace App\Controllers;

use App\Models\DestinationModel;
use App\Models\SocialMediaModel;
use App\Controllers\BaseController;

class ContactUsController extends BaseController
{
    protected $destinationModel;
    protected $socmedModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->socmedModel = new SocialMediaModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
    }

    public function index(): void
    {
        $data = [
            'title' => [
                'seo_tag_title_id' => 'Hubungi Kami',
                'seo_tag_title_en' => 'Contact Us'
            ],
            'description' => [
                'seo_description_id' => 'Hubungi kami untuk informasi lebih lanjut',
                'seo_description_en' => 'Contact us for more information'
            ],
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'navbarDestinations' => $this->destinationModel->select(['title', 'slug'])->findAll(),
            'socmeds' => $this->socmedModel->findAll(),
        ];

        echo view('pages/contact_us', $data);
    }
}
