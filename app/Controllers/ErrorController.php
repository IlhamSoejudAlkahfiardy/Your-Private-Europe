<?php

namespace App\Controllers;

class ErrorController extends BaseController
{
    public function show404()
    {
        $data['title'] = 'Astrip – Tour and Travel Agency';
        $data['language'] = service('uri')->getSegment(1);

        return view('pages/errors/error_404', $data);
    }
}
