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
                case 'Resepsionis':
                    return redirect('dashboardAdmin');
                    break;

                case 'Operator':
                    return redirect('landing1');
                    break;

                case 'Notulensi':
                    return redirect('dashboardNotulen');
                    break;

                default:
                    return redirect('landing1');
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
