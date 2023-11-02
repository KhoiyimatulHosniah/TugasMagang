<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    
    {
        return view('login');
    }



    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
