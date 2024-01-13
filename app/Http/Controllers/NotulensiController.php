<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formnotulensi;
class NotulensiController extends Controller
{
    public function printNotulen($id)
{
    $notulensi = formnotulensi::find($id);
    return view('printNotulen', compact('notulensi'));
}
public function store(Request $request)
    {
        $request->validate([
            'sidang_rapat' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'jam_panggilan' => 'required',
            'jam_sidang_rapat' => 'required',
            'acara' => 'required',
            'ketua' => 'required',
            'sekretaris' => 'required',
            'pencatat' => 'required',
            'peserta_sidang' => 'required',
            'kegiatan_sidang'=>'required',
            'kata_pembuka' => 'required',
            'pembahasan' => 'required',
            'keputusan' => 'required',
        ]);

        formnotulensi::create($request->all());
        return redirect()->route('printnotulen')->with('success', 'Notulensi Berhasil DiCetak!');
    }
}

