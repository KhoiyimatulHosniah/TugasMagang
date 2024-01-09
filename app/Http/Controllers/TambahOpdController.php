<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\opd;

class TambahOpdController extends Controller
{
    public function tabelOpd()
    {
        $items = opd::all();
        return view('Operator.tambahopd', compact('items'));
    }

    public function create()
    {
        return view('Operator.tambahopd');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_instansi' => 'required',
        ]);

        opd::create($request->all());
        return redirect()->route('formopd')->with('success', 'Instansi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $item = opd::find($id);

        return view('formopd.edit', compact('item'));
    }
}
