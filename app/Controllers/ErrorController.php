<?php

namespace App\Controllers;

class ErrorController extends BaseController
{
    public function show404()
    {
        $data['title'] = 'Astrip – Tour and Travel Agency';

        return view('pages/errors/error_404', $data);
    }
}
