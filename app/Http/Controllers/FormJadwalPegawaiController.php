<?php

namespace App\Http\Controllers;
use App\Models\tambahjadwal;
use Illuminate\Http\Request;

class FormJadwalPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = tambahjadwal::paginate(5);
        return view('operator.formJadwalPegawai', compact('items'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Operator.formJadwalPegawai');
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
            'nama' => 'required',
            'bidang' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_pulang' => 'required',
            'tujuan' => 'required',
            'notlp' => 'required',
        ]);
        tambahjadwal::create($request->all());
        return redirect()->route('formJadwalPegawai')->with('success', 'Jadwal Pegawai berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Operator.formJadwalPegawai');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = tambahjadwal::find($id);

        return view('Operator.editJadwal', compact('items'));
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
        $items = tambahjadwal::find($id);

        $items->nama = $request->input('nama');
        $items->bidang = $request->input('bidang');
        $items->tanggal_berangkat = $request->input('tanggal_berangkat');
        $items->tanggal_pulang = $request->input('tanggal_pulang');
        $items->tujuan = $request->input('tujuan');
        $items->notlp = $request->input('notlp');

        $items->save();
        

        return redirect('formJadwalPegawai')->with('success', 'Data tamu berhasil diperbarui.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $item = tambahjadwal::find($id);

        if ($item) {
            $item->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', ' Data tidak ditemukan');
        }
    }
}
