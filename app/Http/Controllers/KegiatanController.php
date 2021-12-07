<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Carbon\Carbon as Carbon;

class KegiatanController extends Controller
{
    public function addkegiatanpage()
    {
        return view('tambahkegiatan');
    }

    public function mainpage()
    {
        $kegiatans = Kegiatan::all();
        return view('mainpage', compact('kegiatans'));
    }
    

    public function addKegiatan(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
        ]);

        Kegiatan::create([
            'nama_kegiatan' => $request->get('nama_kegiatan'),
            'deskripsi_kegiatan' => $request->get('deskripsi_kegiatan'),
            'tanggal_mulai' => Carbon::parse($request->get('tanggal_mulai'))->format('Y-m-d'),
            'tanggal_selesai' => Carbon::parse($request->get('tanggal_selesai'))->format('Y-m-d'),
            'status' => 1,
        ]);


        return redirect()->route('mainpage');
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
