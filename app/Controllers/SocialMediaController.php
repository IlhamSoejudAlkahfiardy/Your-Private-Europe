<?php

namespace App\Controllers;

use App\Models\HomepageModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SocialMediaController extends BaseController
{
    protected $homepageModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->homepageModel = new HomepageModel();
    }

    public function index()
    {
        $data = [
            'title' => $this->homepageModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->homepageModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language
        ];
    }
}
