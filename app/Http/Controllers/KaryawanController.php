<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->get();
        return view('karyawan', ['karyawan' => $karyawan]);

    }

    public function tambah()
    {
        return view('karyawan.tambah');
    }

    public function store(Request $request)
    {
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/karyawan')->with('success', 'Data berhasil ditambahkan');
    }

    public function hapus($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
        return redirect('/karyawan')->with('success', 'Data berhasil dihapus');
    }

    public function edit($kodepegawai)
{
    $karyawan = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->first();
    return view('karyawan.edit', ['karyawan' => $karyawan]);
}

public function update(Request $request)
{
    DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->update([
        'namalengkap' => $request->namalengkap,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen
    ]);

    return redirect('/karyawan')->with('success', 'Data berhasil diupdate');
}

}
