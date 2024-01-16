<?php
  
namespace App\Http\Controllers;
use App\Models\opd;
use App\Models\daftarhadir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
  
class SignaturePadController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function daftarHarian()
    {
        $datas = daftarhadir::where('id', Auth::id())->get();
        return view('notulensi.signaturePad', compact('datas'));
    }
    public function create()
    {
        return view('notulensi.signaturePad');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'id_OPD' => 'required',
            'jabatan' => 'required',
            'no_telp' => 'required',
        ]);

        daftarhadir::create($request->all());
        return redirect()->route('tampilRapat')->with('success', 'Anda Menghadiri Rapat!');
    }
    public function index()
    {
        $tamu= opd::all(); // Mengambil semua data pengguna dari tabel opds
    
        return view('notulensi.signaturePad', compact('tamu'));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    
}