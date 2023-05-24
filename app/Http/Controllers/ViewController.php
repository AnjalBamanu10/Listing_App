<?php

namespace App\Http\Controllers;
use App\Models\AppUser;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function loginView()
    {
        return view('login');
    }
    public function signupUser()
    {
        return view('signup');
    }
}
