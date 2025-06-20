<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function indexnilai(){

        $nilai = DB::table('nilai')->paginate(10);

    	return view('indexnilai',['nilai' => $nilai]);
    }

    // method untuk menampilkan view form tambah nilai
    public function belinilai()
    {

        // memanggil view tambah
        return view('belinilai');

    }
    // method untuk insert data ke table nilai
    public function storenilai(Request $request)
    {

        DB::table('nilai')->insert([
            'normorinduksiswa ' => $request->normorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);

        return redirect('/eas2025');
    }

    // update data nilai
    public function updatenilai(Request $request)
    {
        // update data nilai
        DB::table('nilai')->where('id',$request->id)->update([
            'normorinduksiswa ' => $request->normorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);
        // alihkan halaman ke halaman nilai
        return redirect('/eas2025');
    }


    public function batalnilai($id)
    {
        DB::table('nilai')->where('id',$id)->delete();

        return redirect('/eas2025');
    }

}
