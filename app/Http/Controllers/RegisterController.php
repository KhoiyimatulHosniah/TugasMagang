<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\register;
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
        'nama' => 'required|string|max:255',
        'username' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:registers', // Pastikan validasi email unik merujuk ke tabel yang benar
        'jenis_kelamin' => 'required|string|max:255',
        'id_OPD' => 'required|string|max:255',
        'jabatan' => 'required|string|max:255',
        'notlp' => 'required|string|max:255',
        'password' => 'required|string|min:5',
    ]);
    
    $user = Register::create([
        'nama' => $request->nama,
        'username' => $request->username,
        'email' => $request->email, // Hanya satu kali penggunaan field 'email' yang diperlukan
        'jenis_kelamin' => $request->jenis_kelamin,
        'id_OPD' => $request->id_OPD,
        'jabatan' => $request->jabatan,
        'notlp' => $request->notlp, // Pastikan field 'notlp' juga disimpan jika diperlukan
        'password' => bcrypt($request->password), // Gunakan bcrypt() untuk menyimpan password yang dienkripsi
    ]);


    // Kemudian tambahkan logika untuk login di sini jika diperlukan

    return redirect('/loginRapat')->with('success', 'Registrasi Berhasil!');
}
}
