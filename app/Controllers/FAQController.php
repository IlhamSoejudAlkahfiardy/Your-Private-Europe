<?php

namespace App\Controllers;

use App\Models\FAQModel;

use App\Models\DestinationModel;
use App\Models\FAQCategoryModel;
use App\Controllers\BaseController;

class FAQController extends BaseController
{
    protected $homepageModel;
    protected $destinationModel;
    protected $FAQModel;
    protected $FAQCategoryModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->FAQModel = new FAQModel();
        $this->FAQCategoryModel = new FAQCategoryModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
    }

    public function index(): void
    {
        $data = [
            'title' => $this->FAQModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->FAQModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'navbarDestinations' => $this->destinationModel->select(['title', 'slug'])->findAll(),
            'faqs' => $this->FAQModel->findAll(),
            'faqCategories' => $this->FAQCategoryModel->findAll(),
        ];

        // dd($data['faqCategories']);

        echo view('pages/faq', $data);
    }
}
