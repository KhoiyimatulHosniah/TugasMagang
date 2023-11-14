<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landingpage1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landingpage1.landingpage1');
    }
    public function layanan()
    {
        return view('landingpage1.layanan');
    }

    public function tentang()
    {
        return view('landingpage1.tentang');
    }

    public function kontak()
    {
        return view('landingpage1.kontak');
    }

    public function submitKontak(Request $request)
    {
        // Logika untuk menghandle pengiriman pesan kontak
        // Misalnya, simpan pesan ke database atau kirim email
        // $request->input('name'), $request->input('email'), $request->input('message')

        // Redirect atau tampilkan pesan sukses ke halaman kontak
        return redirect()->route('kontak')->with('success', 'Pesan berhasil dikirim!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
