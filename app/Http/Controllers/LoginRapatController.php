<?php

namespace App\Http\Controllers;
use App\Models\register;
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
        $credentials = $request->only('username', 'password');

        $register = register::where('username', $credentials['username'])->first();

        if (!$register || !password_verify($credentials['password'], $register->password)) {
            return redirect()->route('tampilRapat')->back()->withErrors(['error' => 'Username atau password salah']);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('register')->logout();
        return redirect('/loginRapat')->with('success', 'Anda telah berhasil logout.');
    }
}
