<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\FAQCategoryModel;
use App\Models\FAQModel;
use App\Models\TestimonialModel;
use App\Models\USPModel;


class Dashboardctrl extends BaseController
{
    public function index()
    {
        $faqModel = new FAQModel();
        $faqCModel = new FAQCategoryModel();
        $TestimonialModel = new TestimonialModel();
        $UspModel = new USPModel();


        $data['faqCount'] = $faqModel->countAll();
        $data['faqCCount'] = $faqCModel->countAll();
        $data['testimonialCount'] = $TestimonialModel->countAll();
        $data['uspCount'] = $UspModel->countAll();

       
        return view('admin/dashboard/index', $data);
    }
}