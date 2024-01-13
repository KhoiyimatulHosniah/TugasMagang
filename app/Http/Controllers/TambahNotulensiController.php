<?php

namespace App\Http\Controllers;

use App\Models\formnotulensi;
use Illuminate\Http\Request;

class TambahNotulensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notulensi.tambahNotulensi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notulensi.tambahNotulensi');
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
            'kegiatan_sidang'=> 'required',
            'kata_pembuka' => 'required',
            'pembahasan' => 'required',
            'keputusan' => 'required',

        ]);

        formnotulensi::create($request->all());
        return redirect()->route('formNotulen')->with('success', 'Notulensi Berhasil Ditambahkan!');
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
