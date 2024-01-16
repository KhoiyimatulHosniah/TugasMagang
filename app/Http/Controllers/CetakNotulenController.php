<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formnotulensi;
use App\Models\formkegiatan;
class CetakNotulenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = formnotulensi::all();
        return view('notulensi.cetaknotulen', compact('items'));    }

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
        $items = formkegiatan::find();
        $items = formnotulensi::find();

        $items->sidang_rapat = $request->input('sidang_rapat');
        $items->hari = $request->input('hari');
        $items->tanggal = $request->input('tanggal');
        $items->jam_panggilan = $request->input('jam_panggilan');
        $items->jam_sidang_rapat = $request->input('jam_sidang_rapat');
        $items->acara = $request->input('acara');
        $items->ketua = $request->input('ketua');
        $items->sekretaris = $request->input('sekretaris');
        $items->pencatat = $request->input('pencatat');
        $items->peserta_sidang = $request->input('peserta_sidang');
        $items->kegiatan_sidang = $request->input('kegiatan_sidang');
        $items->kata_pembuka = $request->input('kata_pembuka');
        $items->pembahasan = $request->input('pembahasan');
        $items->keputusan = $request->input('keputusan');

        $items->save();

        // Redirect ke halaman atau rute yang sesuai setelah berhasil mengupdate data

        return redirect()->route('formKegiatan')->with ('success', 'Data Kegiatan Berhasil Diperbaharui');

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
    public function print(Request $request, $id)
    {
        $items = formnotulensi::find($id);
        return view('notulensi.printnotulen', compact('items'));

        return redirect()->route('formNotulen')->with ('success', 'Data Kegiatas Berhasil Diperbaharui');
    
    }
    public function generateCetakPendaftaran($id)
    {
        // Mengambil data pendaftaran dari database berdasarkan ID
        $items = formnotulensi::all()->find($id);

        // Jika data pendaftaran tidak ditemukan, maka kembalikan ke halaman sebelumnya
        if (!$items) {
            return redirect()->back()->with('error', 'Data pendaftaran tidak ditemukan.');
        }

        // Mengirim data pendaftaran ke halaman cetak pendaftaran
        return view('notulensi.cetaknotulen', compact('items'));
    }
}
