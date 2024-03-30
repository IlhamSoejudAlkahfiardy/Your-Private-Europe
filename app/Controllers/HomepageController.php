<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CommitmentModel;
use App\Models\HomepageModel;
use App\Models\ThreePillarsModel;
use App\Models\HowItWorksModel;
use App\Models\InstagramPartnersModel;
use App\Models\TestimonialModel;
use App\Models\DestinationModel;
use App\Models\ImageDestinationModel;
use CodeIgniter\HTTP\URI;

class HomepageController extends BaseController
{
    protected $homepageModel;
    protected $commitmentModel;
    protected $threePillarsModel;
    protected $howItWorksModel;
    protected $testimonialModel;
    protected $instagramPartnersModel;
    protected $destinationModel;
    protected $imageDestinationModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->homepageModel = new HomepageModel();
        $this->commitmentModel = new CommitmentModel();
        $this->threePillarsModel = new ThreePillarsModel();
        $this->howItWorksModel = new HowItWorksModel();
        $this->testimonialModel = new TestimonialModel();
        $this->instagramPartnersModel = new InstagramPartnersModel();
        $this->destinationModel = new DestinationModel();
        $this->imageDestinationModel = new ImageDestinationModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
    }

    public function index(): void
    {
        $data = [
            'title' => $this->homepageModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->homepageModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'homepage' => $this->homepageModel->first(),
            'commitments' => $this->commitmentModel->findAll(),
            'threePillars' => $this->threePillarsModel->findAll(),
            'howItWorks' => $this->howItWorksModel->findAll(),
            'testimonials' => $this->testimonialModel->findAll(),
            'instagramPartners' => $this->instagramPartnersModel->findAll(),
            'destinations' => $this->destinationModel->select([
                'destination.title',
                'destination.slug',
                'destination.duration_id',
                'destination.duration_en',
                'MIN(image_destination.image) as image',
                'MIN(image_destination.image_name_id) as image_name_id',
                'MIN(image_destination.image_name_en) as image_name_en'
            ])->join('image_destination', 'image_destination.destination_id = destination.id', 'left')->groupBy('destination.id')->findAll(),

        ];

        // dd($data['title']);

        echo view('pages/homepage', $data);
    }
}
