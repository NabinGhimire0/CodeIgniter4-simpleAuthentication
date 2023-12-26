<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\Message;

class LoginController extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new User();
    }
    public function index()
    {
        return view('auth/login');
    }
    public function login()
    {
        if ($this->request->getPost()) {
            //validation
            $validation = $this->validate([
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]',
            ]);
            //check validation
            if (!$validation) {
                return redirect()->back()->withInput()->with('errors', implode('<br>', $this->validator->getErrors()));
            }
            // check user credentials 
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            // check user credentials in database
            $user = $this->userModel->where('email', $email)->first();

            //
            if ($user['email'] == $email && $user['password'] == $password) {
                //create session
                session()->set([
                    'isLoggedIn' => true,
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'email' => $user['email'],
                ]);
                // redirect to dashboard
                return redirect()->to('/dashboard');
            } else {
                //invalid credentials
                return redirect()->back()->withInput()->with('errors', 'Invalid credentials');
            }
        }
    }
}
