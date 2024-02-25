<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LoginAdmin extends BaseController
{
    public function index()
    {
        return view('login_admin');
    }
}
