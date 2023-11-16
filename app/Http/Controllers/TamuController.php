<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function showForm()
    {
        return view('buku_tamu.tamu');
    }

    public function processForm(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal' => 'required|date',
            'tujuan' => 'required',
            'nama_instansi' => 'required',
            'no_telp' => 'required',
        ]);

        // Simpan data tamu ke database atau lakukan tindakan lain sesuai kebutuhan

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('form')->with('success', 'Terima kasih, formulir Anda telah disubmit!');
    }
}
