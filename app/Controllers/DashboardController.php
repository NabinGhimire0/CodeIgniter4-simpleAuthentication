<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    protected $beforeFillters = ['auth'];
    public function index()
    {
        $data = [
            'username' => session()->get('username'),
            'role' => session()->get('role'),
        ];
        return view('pages/dashboard', $data);
    }
}