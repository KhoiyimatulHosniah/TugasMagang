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
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'Nama_instansi' => 'required',
        'jabatan' => 'required',
        'telepon' => 'required',
    ]);
        // Simpan data ke database atau lakukan tindakan lain sesuai kebutuhan

        return redirect('/daftarhadir')->with('success', 'Formulir berhasil disubmit!');
    }
}