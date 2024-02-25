<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class SplashScreen extends BaseController
{
    public function index()
    {
        return view('splash_screen');
    }
}
