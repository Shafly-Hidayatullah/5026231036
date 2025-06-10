<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KertasController extends Controller
{
    public function index()
{
    $kertas = DB::table('kertas')->paginate(5); 
    return view('kertas', ['kertas' => $kertas]);
}

public function edit($id)
{
    $kertas = DB::table('kertas')->where('ID', $id)->first();
    return view('editkertas', ['kertas' => $kertas]);
}

public function update(Request $request)
{
    DB::table('kertas')->where('ID', $request->id)->update([
        'merkkertas' => $request->merkkertas,
        'hargakertas' => $request->hargakertas,
        'tersedia' => $request->tersedia,
        'berat' => $request->berat
    ]);

    return redirect('/kertas')->with('success', 'Data berhasil diupdate');
}
public function hapus($id)
{
    DB::table('kertas')->where('ID', $id)->delete();
    return redirect('/kertas')->with('success', 'Data berhasil dihapus');
}
public function tambah()
{
    return view('tambahkertas');
}

public function store(Request $request)
{
    DB::table('kertas')->insert([
        'merkkertas' => $request->merkkertas,
        'hargakertas' => $request->hargakertas,
        'tersedia' => $request->tersedia,
        'berat' => $request->berat
    ]);

    return redirect('/kertas')->with('success', 'Data berhasil ditambahkan');
}
public function cari(Request $request)
{
    $cari = $request->cari;

    $kertas = DB::table('kertas')
        ->where('merkkertas', 'like', '%' . $cari . '%')
        ->orWhere('hargakertas', 'like', '%' . $cari . '%')
        ->orWhere('berat', 'like', '%' . $cari . '%')
        ->paginate(10);

    return view('kertas', ['kertas' => $kertas]);
}

}
