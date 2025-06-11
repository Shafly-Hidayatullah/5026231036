@extends('template')

@section('content')
<h3>Tambah Data Karyawan</h3>

<form action="/karyawan/store" method="POST" class="form-horizontal">
    @csrf

    <div class="form-group mb-3">
        <label>Kode Pegawai</label>
        <input type="text" name="kodepegawai" class="form-control" maxlength="5" required>
    </div>

    <div class="form-group mb-3">
        <label>Nama Lengkap</label>
        <input type="text" name="namalengkap" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label>Divisi</label>
        <input type="text" name="divisi" class="form-control" maxlength="5" required>
    </div>

    <div class="form-group mb-3">
        <label>Departemen</label>
        <input type="text" name="departemen" class="form-control" maxlength="10" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="/karyawan" class="btn btn-secondary">Kembali</a>
</form>
@endsection
