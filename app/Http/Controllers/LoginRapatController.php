<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginRapatController extends Controller
{
    public function showLoginRapat()
    {
        return view('notulensi.loginRapat');
    }


    public function loginRapat(Request $request)
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
            
            return redirect()->intended('/tampilRapat');
        }else{
            //jika gagal login 
            return redirect()->back()->withErrors([
                'email' => 'Email atau password salah.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/loginRapat')->with('success', 'Anda telah berhasil logout.');
    }
}
