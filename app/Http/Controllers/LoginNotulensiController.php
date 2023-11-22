<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginNotulensiController extends Controller
{

    public function showLoginNotulensi()
    {
        return view('notulensi.loginnotulen');
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
                    return redirect('landingpage1');
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

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
