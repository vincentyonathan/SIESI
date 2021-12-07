<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    public function index()
    {
        // return view('kegiatan');
    }

    public function insertData(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
        ]);

        $kegiatan = new Kegiatan([
            'nama_kegiatan' => $request->get('nama_kegiatan'),
            'deskripsi_kegiatan' => $request->get('deskripsi_kegiatan'),
            'tanggal_mulai' => $request->get('tanggal_mulai'),
            'tanggal_selesai' => $request->get('tanggal_selesai'),
            'status' => 1,
        ]);

        // return redirect()->route('kegiatan');
    }

    public function editData(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
        ]);

        Kegiatan::where('id',$request->id)->update([
            'nama_kegiatan' => $request->get('nama_kegiatan'),
            'deskripsi_kegiatan' => $request->get('deskripsi_kegiatan'),
            'tanggal_mulai' => $request->get('tanggal_mulai'),
            'tanggal_selesai' => $request->get('tanggal_selesai'),
        ]);
        // return redirect()->route('kegiatan');
    }

    public function gantiStatus(Request $request){
        $request->validate([
            'id' => 'required',
        ]);

        $kegiatan = Kegiatan::where('id',$request->id)->first();
        if($kegiatan->status == 1){
            Kegiatan::where('id',$request->id)->update([
                'status' => 0,
            ]);
        }
        else{
            Kegiatan::where('id',$request->id)->update([
                'status' => 1,
            ]);
        }
        // return redirect()->route('kegiatan');
    }

    public function deleteData(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        Kegiatan::where('id',$request->id)->delete();
        // return redirect()->route('kegiatan');
    }
}
