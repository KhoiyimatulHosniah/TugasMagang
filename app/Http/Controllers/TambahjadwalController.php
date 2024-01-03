<?php

namespace App\Http\Controllers;
use App\Models\tambahjadwal;
use Illuminate\Http\Request;

class TambahjadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tabelJadwal()
    {
        $items = tambahjadwal::all();
        return view('Operator.tambahJadwal', compact('items'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Operator.formJadwalPegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validasi request
    $validatedData = $request->validate([
        'nama' => 'required',
        'bidang' => 'required',
        'tanggal_berangkat' => 'required|date',
        'tanggal_pulang' => 'required|date',
        'tujuan' => 'required',
        'notlp' => 'required',
    ]);

    // Simpan data ke dalam database
    $jadwalPegawai = new tambahjadwal();
    $jadwalPegawai->nama = $validatedData['nama'];
    $jadwalPegawai->bidang = $validatedData['bidang'];
    $jadwalPegawai->tanggal_berangkat = $validatedData['tanggal_berangkat'];
    $jadwalPegawai->tanggal_pulang = $validatedData['tanggal_pulang'];
    $jadwalPegawai->tujuan = $validatedData['tujuan'];
    $jadwalPegawai->notlp = $validatedData['notlp'];
    $jadwalPegawai->save();

        tambahjadwal::create($request->all());
        return redirect()->route('formJadwalPegawai')->with('success', 'Tamu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = tambahjadwal::find($id);

        return view('tambahJadwal.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $item = tambahjadwal::find($id);

        if ($item) {
            $item->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', ' Data tidak ditemukan');
        }
    }
}
