<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DestinationModel;

class DestinationController extends BaseController
{
    protected $destinationModel;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
    }

    public function index(): void
    {
        // $data['title'] = 'Tour Destination – Astrip';
        $data = [
            'title' => 'Tour Destination – Your Private Europe',
            'language' => session()->get('lang'),
            'destinations' => $this->destinationModel->select([
                'destination.*',
                'MIN(image_destination.image) as image',
                'MIN(image_destination.image_name_id) as image_name_id',
                'MIN(image_destination.image_name_en) as image_name_en'
            ])->join('image_destination', 'image_destination.destination_id = destination.id', 'left')->groupBy('destination.id')->findAll(),
        ];

        echo view('pages/destination', $data);
    }
}
