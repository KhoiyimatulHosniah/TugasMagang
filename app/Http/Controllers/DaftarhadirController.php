<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarhadirController extends Controller 
{
    public function showForm()
    {
        return view('daftarhadir');
    }

public function submitForm(Request $request)
{
    // Validasi form jika diperlukan
    $request->validate([
        'nama' => 'required|string',
        'jenis_kelamin' => 'required|string',
        'nama_instansi' => 'required|string',
        'jabatan' => 'required|string',
        'no_telp' => 'required|string',
    ]);
        // Simpan data ke database atau lakukan tindakan lain sesuai kebutuhan

        return redirect('/daftar-hadir')->with('success', 'Formulir berhasil disubmit!');
    }
}