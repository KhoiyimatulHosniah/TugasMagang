<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginOperatorController extends Controller
{

    public function showLoginOperator()
    {
        return view('operator.loginOperator');
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
                    return redirect('dashboardOperator');
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
