<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formkegiatan;

class EditkegiatanController extends Controller
{
    public function index()
    {
        return view('notulensi.editkegiatan');
    }
    public function edit($id)
    {
        $item = formkegiatan::find($id);

        return view('notulensi.edit', compact('item'));
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
        $item = formkegiatan::find($id);
        
        $item->kegiatan = $request->input('kegiatan');
        $item->hari = $request->input('hari');
        $item->tanggal = $request->input('tanggal');
        $item->pukul = $request->input('pukul');
        $item->tempat = $request->input('tempat');
        
        $item->save();

        // Redirect ke halaman atau rute yang sesuai setelah berhasil mengupdate data
        return redirect()->route('formKegiatan')->with ('success', 'Data Kegiatas Berhasil Diperbaharui');
    
    }

}
