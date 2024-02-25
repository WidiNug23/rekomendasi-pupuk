<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LandingPage extends BaseController
{
    public function index()
    {
        return view('landing_page');
    }
}
