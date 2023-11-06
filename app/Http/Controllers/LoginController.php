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

    public function login()
    {
        $credentials = $request->validate([
            'username' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed
            if (Auth::user()->lvl != 3) {
                return view('/Landingpage2');
            } else {
                return view('/Landingpage3');
            }
        } else {
            return back()->withErrors(['username' => 'Invalid username or password.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
