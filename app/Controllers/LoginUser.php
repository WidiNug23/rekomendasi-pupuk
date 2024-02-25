<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LoginUser extends BaseController
{
    public function index()
    {
        return view('login_user');
    }
}
