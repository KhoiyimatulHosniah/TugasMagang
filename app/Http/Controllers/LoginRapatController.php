<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginRapatController extends Controller
{
    public function showLoginRapat()
    {
        return view('notulensi.loginrapat');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);


        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            $request->session()->regenerate();

            return redirect()->intended('/tampilRapat');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/loginrapat')->with('success', 'Anda telah berhasil logout.');
    }
}
