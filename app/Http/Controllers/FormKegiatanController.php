<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formkegiatan;
class FormKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tabelRapat()
    {
        $items = formkegiatan::paginate(10); // Mengambil semua data pengguna dari tabel tamus
        return view('notulensi.formKegiatan', compact('items'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notulensi.formKegiatan');
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

        ]);

        formkegiatan::create($request->all());
        return redirect()->route('formKegiatan')->with('success', 'Kegiatan Rapat Berhasil Ditambahkan!');
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
        $items = formkegiatan::find($id);

        return view('formKegiatan.edit', compact('items'));
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
        $data = FormKegiatan::find($id);
        // Validasi data yang diterima dari formulir
        // Simpan perubahan data ke dalam database
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->save();

        // Redirect ke halaman atau rute yang sesuai setelah berhasil mengupdate data
        return redirect()->route('formKegiatan.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $item = formkegiatan::find($id);

        if ($item) {
            $item->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', ' Data gagal dihapus');
        }
    }
}
