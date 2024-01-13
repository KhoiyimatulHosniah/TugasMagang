<?php

namespace App\Http\Controllers;

use App\Models\tambahjadwal;
use Illuminate\Http\Request;

class JadwalPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jadwal()
    {
        return view('buku_tamu.jadwalPegawai');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = tambahjadwal::all();
        return view('buku_tamu.jadwalPegawai', compact('items'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku_tamu.jadwalPegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'bidang' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_pulang' => 'required',
            'tujuan' => 'required',
            'notlp' => 'required|numeric',
        ]);
        tambahjadwal::create($request->all());
        return redirect()->route('jadwalPegawai')->with('success', 'Tamu berhasil ditambahkan!');

    }

    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }


}

