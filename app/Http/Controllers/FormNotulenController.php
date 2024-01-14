<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formkegiatan;
use App\Models\formnotulensi;

class FormNotulenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tabelNotulensi()
    {
        $items = formnotulensi::paginate(5);
        return view('notulensi.formNotulen', compact('items'));
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
            'kegiatan_sidang'=>'required',
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('notulensi.formNotulen');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = formnotulensi::find($id);

        return view('formnotulensi.edit', compact('item'));
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
    public function hapus($id)
    {
        $item = formnotulensi::find($id);

        if ($item) {
            $item->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', ' Data gagal dihapus');
        }
    }
}
