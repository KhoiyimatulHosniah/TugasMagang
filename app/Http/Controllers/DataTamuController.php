<?php

namespace App\Http\Controllers;

use App\Models\opd;
use App\Models\tamu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DataTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tabelTamu()
    {
        $items = tamu::paginate(5); // Mengambil semua data pengguna dari tabel tamus
        return view('buku_tamu.dataTamu', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // create data
    public function create()
    {
        return view('buku_tamu.dataTamu');
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
            'nama_instansi' => 'required',
            'no_telp' => 'required',
        ]);

        tamu::create($request->all());
        return redirect()->route('datatamu')->with('success', 'Tamu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $items = opd::findOrdfail($id);
        return view('buku_tamu.dataTamu', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = tamu::find($id);

        return view('tamu.edit', compact('item'));
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
    public function hapus($id)
    {
        $item = tamu::find($id);

        if ($item) {
            $item->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', ' Data tidak ditemukan');
        }
    }


}

