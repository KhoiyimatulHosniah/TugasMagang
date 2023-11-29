<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function showForm()
    {
        return view('buku_tamu.tamu');
    }
    
}
