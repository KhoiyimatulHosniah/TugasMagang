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
            $user = Auth::user();

            switch ($user->role) {
                case 'Resepsionis':
                    return redirect('dashboardTamu')->with('success', 'Login berhasil. Selamat datang, ' . $user->role);
                    break;

                case 'Operator':
                    return redirect('dashboardOperator')->with('success', 'Login berhasil. Selamat datang, ' . $user->role);
                    break;

                case 'Notulensi':
                    return redirect('dashboardNotulen')->with('success', 'Login berhasil. Selamat datang, ' . $user->role);
                    break;

                default:
                    return redirect('landing1');
            }

        }else {
            return redirect()->back()->withErrors(['error' => 'Username atau Password yang dimasukkan tidak sesuai'])->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/loginrapat')->with('success', 'Anda telah berhasil logout.');
    }
}
