<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        // return view('nilai.index');
    }
    
    public function addData(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'id_user' => 'required',
            'id_pencapaian' => 'required',
            'nilai' => 'required',
            'komentar' => 'required',
        ]);
        Nilai::create([
            'id' => $request->id,
            'id_user' => $request->id_user,
            'id_pencapaian' => $request->id_pencapaian,
            'nilai' => $request->nilai,
            'komentar' => $request->komentar,
        ]);

        // return redirect()->route()->with('success', 'Data berhasil ditambahkan');
    }
}
