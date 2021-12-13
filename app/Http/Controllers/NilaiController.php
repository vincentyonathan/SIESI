<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penilaian;
use App\Models\Pencapaian;
use App\Models\Kegiatan;
use Auth;

class NilaiController extends Controller
{
    public function isisurveypage($id)
    {
        $kegiatan = Kegiatan::find($id);
        
        if ($kegiatan == NULL) abort(404);
        
        $capaian = Pencapaian::where('id_kegiatan', $kegiatan->id)->get();
        
        $id_user = auth()->id();
        
        foreach($capaian as $cap){
            $nilai = Penilaian::where('id_pencapaian', $cap->id)->where('id_user', $id_user)->first();
            if($nilai){
                $cap->nilai = $nilai->nilai;
            }
            else {
                $cap->nilai = 0;
            }
        }
        return view('isisurvey', compact('kegiatan', 'capaian'));
    }
    
    public function addNilai(Request $request)
    {
        $request->validate([
            'id_capaian.*' => 'required|numeric|min:1',
            'nilai.*' => 'required|numeric|between:0,100',
        ]);
        $id_pencapaian = $request->id_capaian;
        $nilai = $request->nilai;
        $id_user = auth()->id();
        for($i = 0; $i < count($request->id_capaian); $i++)
        {
            Penilaian::create([
                'id_user' => $id_user,
                'id_pencapaian' => $id_pencapaian[$i],
                'nilai' => $nilai[$i],
                'komentar' => '',
            ]);
        }
        return redirect()->route('mainpage')->with('message', 'Data berhasil ditambahkan');
    }
}
