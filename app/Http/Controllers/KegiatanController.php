<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\Pencapaian;
use App\Models\Penilaian as Nilai;
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
        // Jika ID tidak numerik, maka 403
        if (!is_numeric($id)) abort(403);

        $kegiatan = Kegiatan::find($id);

        // Jika kegiatan tidak ada di database, maka 404
        if ($kegiatan == NULL) abort(404);

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
        $request->validate([
            'nama_kegiatan' => 'required|string|max:256',
            'deskripsi_kegiatan' => 'required|string|max:2048',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
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
        $request->validate([
            'id' => 'required|numeric|min:1',
            'nama_kegiatan' => 'required|string|max:256',
            'deskripsi_kegiatan' => 'required|string|max:1024',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        $kegiatan = Kegiatan::find($request->id);

        // Jika kegiatan tidak ada di database, maka 404
        if ($kegiatan == NULL) abort(404);

        $kegiatan->update([
            'nama_kegiatan' => $request->get('nama_kegiatan'),
            'deskripsi_kegiatan' => $request->get('deskripsi_kegiatan'),
            'tanggal_mulai' => Carbon::parse($request->get('tanggal_mulai'))->format('Y-m-d'),
            'tanggal_selesai' => Carbon::parse($request->get('tanggal_selesai'))->format('Y-m-d'),
        ]);

        return redirect()->route('editkegiatan',$request->id);
    }

    public function gantiStatus($id) 
    {
        // Jika ID tidak valid, maka 403
        if (!is_numeric($id)) abort(403);

        $kegiatan = Kegiatan::find($id);

        // Jika kegiatan tidak ada, maka 404
        if ($kegiatan == NULL) abort(404);

        $message = NULL;

        if($kegiatan->status == 1){
            $kegiatan->update([
                'status' => 0,
            ]);

            $message = "Survey kegiatan tidak aktif.";
        }
        else{
            $kegiatan->update([
                'status' => 1,
            ]);

            $message = "Survey kegiatan aktif";
        }
        return redirect()->route('editkegiatan',$id)->with('message', $message);
    }

    public function deleteKegiatan($id)
    {
        $kegiatan = Kegiatan::find($id);

        if ($kegiatan == NULL) abort(404);
        
        $kegiatan->delete();
        return redirect()->route('mainpage');
    }

    public function hasilsurveypage($id){
        $kegiatan = Kegiatan::find($id);
        
        if ($kegiatan == NULL) abort(404);

        $capaian = Pencapaian::where('id_kegiatan',$id)->get();
        
        $total = 0;
        foreach($capaian as $c){
            $nilai = Nilai::where('id_pencapaian',$c->id)->get();
            foreach($nilai as $n){
                $c->totalNilai = $c->totalNilai + $n->nilai;
            }
            // Division by zero avoidance
            if ($nilai->count() == 0) $c->totalNilai = 0;
            else $c->totalNilai = $c->totalNilai / $nilai->count() * $c->bobot;
            $total = $total + $c->totalNilai;
        }
        return view('lihathasilsurvey',compact('kegiatan','capaian','total'));
    }
}
