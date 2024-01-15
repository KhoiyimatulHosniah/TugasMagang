<?php
  
namespace App\Http\Controllers;

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
    public function index()
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
            'nam_instansi' => 'required',
            'jabatan' => 'required',
            'no_telp' => 'required',
            
        ]);

        daftarhadir::create($request->all());
        return redirect()->route('signaturepad')->with('success', 'Anda Menghadiri Rapat Ditambahkan!');
    }
    public function show($id)
    {
        return view('notulensi.signaturePad');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function upload(Request $request)
{
    $folderPath = public_path('upload/');
    
    $image_parts = explode(";base64,", $request->signed);
          
    $image_type_aux = explode("image/", $image_parts[0]);
       
    $image_type = $image_type_aux[1];
       
    $image_base64 = base64_decode($image_parts[1]);
       
    $file = $folderPath . uniqid() . '.'.$image_type;
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
    
    return redirect()->route('daftarhadir')->with('success', 'Anda Menghadiri Rapat Ditambahkan!');
}
}