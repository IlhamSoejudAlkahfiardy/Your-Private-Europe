<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Language extends BaseController
{
    public function __construct()
    {
        helper(['url']);
    }

    public function index()
    {
        // $uri = current_url(true);
        // $previousURL = $uri->getPreviousURL() ?? site_url('/');
        $session = session();
        $locale = $this->request->getLocale();
        $session->remove('lang');
        $session->set('lang', $locale);
        $url = base_url();
        return redirect()->to($url);
    }
}
