<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\tambahrapat;
use App\Models\opd;

class TambahRapatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notulensi.tambahRapat');    }

        public function showTable()
    {
        $opd = OPD::all();

        return view('notulensi.tambahRapat', ['opd' => $opd]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notulensi.formNotulen');
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
        'kegiatan' => 'required',
        'hari' => 'required',
        'tanggal' => 'required',
        'pukul' => 'required',
        'tempat' => 'required',
        'undangan_rapat' => 'required',

    ]);

    tambahrapat::create($request->all());
    return redirect()->route('tambahRapat')->with('success', 'Kegiatan Rapat Berhasil Ditambahkan!');
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('notulensi.formKegiatan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
