<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class LogoutController extends BaseController
{
    public function index()
    {
        //destroy session
        session()->destroy();

        //redirect to login page
        return redirect()->to('/');
    }
}
