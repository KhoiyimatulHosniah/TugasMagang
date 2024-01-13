<?php

namespace App\Http\Controllers;

use App\Models\opd;
use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{

    public function index()
    {

        $tamu= opd::all(); // Mengambil semua data pengguna dari tabel opds
        return view('buku_tamu.tamu', compact('tamu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('buku_tamu.tamu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal' => 'required',
            'tujuan' => 'required',
            'id_OPD' => 'required',
            'no_telp' => 'required|numeric',

        ]);


        tamu::create($request->all());
        return redirect()->route('form')->with('success', 'Tamu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

