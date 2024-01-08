<?php

namespace App\Http\Controllers;
use App\Models\tampilrapat;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TampilRapatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilrapat()
    {
        $items = tampilrapat::all();
        return view('notulensi.tampilRapat', compact('items'));
    }
    public function searchRapat(Request $request)
    {
        $search = $request->input('search');
        $items = tampilrapat::where('nama', 'LIKE', "%$search%")
            ->orWhere('tanggal', 'LIKE', "%$search%")
            ->orWhere('waktu', 'LIKE', "%$search%")
            ->orWhere('tempat', 'LIKE', "%$search%")
            ->get();
    
        return view('notulensi.tampilRapat')->with('items', $items);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notulensi.tampilRapat');
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
        $items = tampilrapat::findOrdfail($id);
        return view('notulensi.tampilRapat', compact('items'));
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
