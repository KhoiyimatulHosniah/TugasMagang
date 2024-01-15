<?php

namespace App\Http\Controllers;

use App\Models\opd;
use Illuminate\Http\Request;

class FormOpdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tabelOpd()
    {
        $items = opd::paginate(5); // Mengambil semua data pengguna dari tabel tamus
        return view('Operator.formOpd', compact('items'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Operator.formOpd');
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
            'nama_instansi' => 'required',
        ]);
        opd::create($request->all());
        return redirect()->route('formopd')->with('success', 'Instansi berhasil ditambahkan!');
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
    public function edit(Request $request, $id)
{
    $items = opd::find($id);
    $opd = opd::all();
        return view('Operator.editOpd', compact('items'));
    
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
        $items = opd::find($id);
        $items->nama_instansi = $request->input('nama_instansi');
        
        $items->save();

        // Redirect ke halaman atau rute yang sesuai setelah berhasil mengupdate data
        return redirect()->route('formopd')->with ('success', 'Nama Instansi Berhasil Diperbaharui');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $item = opd::find($id);

        if ($item) {
            $item->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', ' Data tidak ditemukan');
        }
    }
    
}
