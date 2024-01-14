<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document; // Ganti dengan model yang sesuai dengan struktur database Anda
use App\Models\formnotulensi;

class DocumentController extends Controller
{
    public function getDocumentData()
    {
        // Ambil data dokumen dari database
        $documentData = formnotulensi::all(); // Ganti dengan logika pengambilan data dokumen yang sesuai dengan aplikasi Anda

        // Kirim data dalam format JSON sebagai respons
        return response()->json($documentData);
    }
}