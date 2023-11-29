<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginBukuTamuController extends Controller
{
    public function showLoginAdmin()
    {
        return view('buku_tamu.loginbuku');
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


        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            switch ($user->role) {
                case 'admin':
                    return redirect('dashboardAdmin');
                    break;

                case 'operator':
                    return redirect('');
                    break;

                case 'notulen':
                    return redirect('dashboardNotu');
                    break;

                default:
                    return redirect('landingpage1'); 
            }
      
        }else {
            return redirect()->back()->withErrors('Username atau Password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
