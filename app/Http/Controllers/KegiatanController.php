<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Pencapaian;
use Carbon\Carbon as Carbon;
use Auth;

class KegiatanController extends Controller
{
    public function addkegiatanpage()
    {
        return view('tambahkegiatan');
    }

    public function editkegiatanpage($id)
    {
        $kegiatan = Kegiatan::find($id);
        $capaian = Pencapaian::where('id_kegiatan', $id)->get();
        return view('editkegiatan',compact('kegiatan','capaian'));
    }

    public function mainpage()
    {
        $kegiatans = Kegiatan::all();
        return view('mainpage', compact('kegiatans'));
    }
    

    public function addKegiatan(Request $request)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
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

    public function editkegiatan(Request $request)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
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
            'tanggal_mulai' => Carbon::parse($request->get('tanggal_mulai'))->format('Y-m-d'),
            'tanggal_selesai' => Carbon::parse($request->get('tanggal_selesai'))->format('Y-m-d'),
        ]);

        return redirect()->route('editkegiatan',$request->id);
    }

    public function gantiStatus($id){

        if(!Auth::check()){
            return redirect('/login');
        }
        $kegiatan = Kegiatan::where('id',$id)->first();
        if($kegiatan->status == 1){
            Kegiatan::where('id',$id)->update([
                'status' => 0,
            ]);
        }
        else{
            Kegiatan::where('id',$id)->update([
                'status' => 1,
            ]);
        }
        return redirect()->route('editkegiatan',$id);
    }

    public function deleteKegiatan($id)
    {

        if(!Auth::check()){
            return redirect('/login');
        }
        Kegiatan::where('id',$id)->delete();
        return redirect()->route('mainpage');
    }
}
