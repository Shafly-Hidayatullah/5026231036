@extends('template')

@section('content')
<h3>Edit Data Karyawan</h3>

<form action="/karyawan/update" method="POST" class="form-horizontal">
    @csrf

    <input type="hidden" name="kodepegawai" value="{{ $karyawan->kodepegawai }}">

    <div class="form-group mb-3">
        <label>Nama Lengkap</label>
        <input type="text" name="namalengkap" class="form-control" value="{{ $karyawan->namalengkap }}" required>
    </div>

    <div class="form-group mb-3">
        <label>Divisi</label>
        <input type="text" name="divisi" class="form-control" value="{{ $karyawan->divisi }}" maxlength="5" required>
    </div>

    <div class="form-group mb-3">
        <label>Departemen</label>
        <input type="text" name="departemen" class="form-control" value="{{ $karyawan->departemen }}" maxlength="10" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    <a href="/karyawan" class="btn btn-secondary">Kembali</a>
</form>
@endsection
