<?php

namespace App\Http\Controllers;
use App\Models\tampilrapat;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\formkegiatan;
use App\Models\daftarhadir;
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
        $request->validate([
            'kegiatan' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'pukul' => 'required',
            'tempat' => 'required',

        ]);

        formkegiatan::create($request->all());
        return redirect()->route('tampilRapat')->with('success', 'Kegiatan Rapat Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = tampilrapat::find($id);
        return view('notulensi.tampilRapat', compact('items'));
    }
    public function upload(Request $request)
{
    $folderPath = public_path('upload/');

    if ($request->has('signed')) {
        $image_parts = explode(";base64,", $request->signed);

        if (count($image_parts) > 1) {
            $image_type_aux = explode("image/", $image_parts[0]);

            if (count($image_type_aux) > 1) {
                $image_type = $image_type_aux[1];

                $image_base64 = base64_decode($image_parts[1]);

                $file = $folderPath . uniqid() . '.' . $image_type;
                file_put_contents($file, $image_base64);

                $data = [
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'nama_instansi' => $request->nama_instansi,
                    'jabatan' => $request->jabatan,
                    'no_telp' => $request->no_telp,
                    'tanda_tangan' => $file
                ];

                daftarhadir::create($data);

                return redirect()->route('tampilRapat')->with('success', 'Anda Menghadiri Rapat Ditambahkan!');
            }
        }
    }

    return redirect()->route('tampilRapat')->with('error', 'Terjadi kesalahan saat mengunggah gambar!');
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
