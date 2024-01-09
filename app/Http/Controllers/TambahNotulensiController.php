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

    public function table()
    {
        $notulen = formnotulensi::all();
        return view('notulensi.tambahNotulensi', compact('notulen'));
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
            'acara' => 'required',
            'ketua' => 'required',
            'sekretaris' => 'required',

        ]);

        formnotulensi::create($request->only(['sidang_rapat', 'hari', 'tanggal', 'acara', 'ketua', 'sekretaris']));
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
