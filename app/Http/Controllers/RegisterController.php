<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\opd;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $opd = OPD::all();

        return view('notulensi.register', ['opd' => $opd]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'jenis_kelamin' => 'required|string|max:255',
            'nama_instansi' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'notlp' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_instansi' => $request->nama_instansi,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // You might add login logic here or redirect as needed

        return redirect('/loginNotulensi')->with('success', 'Registrasi Berhasil!');
    }

}
