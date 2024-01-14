<?php

namespace App\Http\Controllers;
use App\Models\daftarhadir;
use Illuminate\Http\Request;

class DaftarhadirController extends Controller 
{
    public function tabelDaftarhadir()
    {
        $items = daftarhadir::paginate(5); // Mengambil semua data pengguna dari tabel daftar hadir
        return view('notulensi.daftarHadir', compact('items'));
     }

public function store(Request $request)
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