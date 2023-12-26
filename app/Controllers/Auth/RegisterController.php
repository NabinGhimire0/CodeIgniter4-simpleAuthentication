<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\User;

class RegisterController extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new User();
    }
    public function index()
    {
        return view('auth/register');
    }
    public function register()
    {
        if ($this->request->getPost()) {
            // validation here
            $validation = $this->validate([
                'username' => 'required',
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]',
                'confirmPassword' => 'required|matches[password]',
            ]);

            // if validation fails 
            if (!$validation) {
                return redirect()->back()->withInput()->with('errors', implode('<br>', $this->validator->getErrors()));
            }
            // If validation passes
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash((string)$this->request->getPost('password'), PASSWORD_DEFAULT),
                'role' => 'user',
            ];
            // Save user data to the database
            $this->userModel->save($data);
            // 
            session()->set([
                'isLoggedIn' => true,
                'username' => $this->request->getPost('username'),
                'role' => 'user',
                'email' => $this->request->getPost('email'),
                ]);

            return redirect()->to('/dashboard');
        }

        return view('auth/register');
    }
}
