<?php

namespace App\Http\Controllers;
use App\Models\daftarhadir;
use App\Models\opd;
use Illuminate\Http\Request;

class DaftarhadirController extends Controller 
{
    public function tabelDaftarhadir()
    {
        $items = daftarhadir::paginate(5); // Mengambil semua data pengguna dari tabel daftar hadir
        return view('notulensi.daftarHadir', compact('items'));
     }
     public function create()
     {
         return view('notulensi.daftarHadir');
     }
     public function store(Request $request)
     {
         $request->validate([
             'nama' => 'required',
             'jenis_kelamin' => 'required',
             'nama_instansi' => 'required',
             'jabatan' => 'required',
             'no_telp' => 'required',
         ]);
 
         daftarhadir::create($request->all());
         return redirect()->route('tampilRapat')->with('success', 'Anda Berhasil Menghadiri Tamu!');
     }
     public function show($id, Request $request)
     {
         $items = opd::findOrdfail($id);
         return view('notulensi.daftarHadir', compact('items'));
     }
    
}