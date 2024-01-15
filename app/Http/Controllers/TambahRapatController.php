<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\formkegiatan;

class TambahRapatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rapat= formkegiatan::all();
        return view('notulensi.tambahRapat', compact('rapat'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notulensi.tambahRapat');
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
            'kegiatan' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'pukul' => 'required',
            'tempat' => 'required',

        ]);

        formkegiatan::create($request->all());
        return redirect()->route('formKegiatan')->with('success', 'Kegiatan Rapat Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('notulensi.tambahRapat');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = formkegiatan::find($id);

        return view('notulensi.editkegiatan', compact('item'));
    
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
        $items = formkegiatan::find($id);

        $items->kegiatan = $request->input('kegiatan');
        $items->hari = $request->input('hari');
        $items->tanggal = $request->input('tanggal');
        $items->pukul = $request->input('pukul');
        $items->tempat = $request->input('tempat');

        $items->save();

        return redirect('formKegiatan')->with('success', 'Data Rapat berhasil diperbarui.');
    
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
