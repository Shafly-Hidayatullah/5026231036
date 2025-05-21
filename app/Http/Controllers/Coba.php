<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Coba extends Controller
{
    //
    public function helloword() {
        return view('blog');
    }

    public function index(){
        $nama = "Diki Alfarabi Hadi";
        $umur = 20 ;
        $alamat = "Kebumen" ;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

    	return view('biodata',['nama' => $nama, 'usia' => $umur , 'alamat' => $alamat , 'matkul' => $pelajatan]);
    }
}