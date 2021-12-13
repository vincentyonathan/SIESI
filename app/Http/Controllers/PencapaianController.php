<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pencapaian;
use Auth;


class PencapaianController extends Controller
{
    public function index()
    {
        // return view('pencapaian.index');
    }
 
    public function addCapaian(Request $request)
    {
        $request->validate([
            'id_kegiatan' => 'required|numeric|min:1',
            'nama_pokok' => 'required|string|max:256',
            'deskripsi' => 'required|string|max:2048',
            'bobot' => 'required|numeric|min:1',
        ]);

        Pencapaian::create([
            'id_kegiatan' => $request->get('id_kegiatan'),
            'nama_pokok' => $request->get('nama_pokok'),
            'deskripsi' => $request->get('deskripsi'),
            'bobot' => $request->get('bobot'),
        ]);

        return redirect()->route('editkegiatan',$request->id_kegiatan)->with('message', 'Data Pencapaian berhasil ditambahkan');
    }


    public function deleteCapaian($id,$keg)
    {
        $pencapaian = Pencapaian::find($id);
        
        if ($pencapaian == NULL) abort(404);

        $pencapaian->delete();

        return redirect()->route('editkegiatan',$keg)->with('message', 'Data Pencapaian berhasil dihapus');
    }

}
