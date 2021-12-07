<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pencapaian;

class PencapaianController extends Controller
{
    public function index()
    {
        // return view('pencapaian.index');
    }
 
    public function addData(Request $request)
    {
        $request->validate([
            'id_kegiatan' => 'required',
            'nama_pokok' => 'required',
            'deskripsi' => 'required',
            'bobot' => 'required',
        ]);

        Pencapaian::create([
            'id_kegiatan' => $request->get('id_kegiatan'),
            'nama_pokok' => $request->get('nama_pokok'),
            'deskripsi' => $request->get('deskripsi'),
            'bobot' => $request->get('bobot'),
        ]);

        // return redirect()->route()->with('success', 'Data Pencapaian berhasil ditambahkan');
    }

    public function editData(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'id_kegiatan' => 'required',
            'nama_pokok' => 'required',
            'deskripsi' => 'required',
            'bobot' => 'required',
        ]);

        Pencapaian::where('id', $request->get('id'))->update([
                'id_kegiatan' => $request->get('id_kegiatan'),
                'nama_pokok' => $request->get('nama_pokok'),
                'deskripsi' => $request->get('deskripsi'),
                'bobot' => $request->get('bobot'),
            ]);

        //  return redirect()->route('')->with('success', 'Data Pencapaian berhasil diubah');
    }

    public function deleteData(Request $request)
    {
        $request->validate([
            id => 'required',
        ]);

        Pencapaian::where('id', $request->get('id'))->delete();

        // return redirect()->route()->with('success', 'Data Pencapaian berhasil dihapus');
    }

}
