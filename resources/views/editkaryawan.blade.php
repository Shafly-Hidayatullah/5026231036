@extends('template')

@section('content')
<div class="container mt-4">
    <h3>Edit Data Karyawan</h3>

    <form action="/karyawan/update" method="POST">
        @csrf
        <input type="hidden" name="kodepegawai" value="{{ $karyawan->kodepegawai }}">


        <div class="mb-3">
            <label for="namalengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="namalengkap" value="{{ $karyawan->namalengkap }}" required>
        </div>

        <div class="mb-3">
            <label for="divisi" class="form-label">Divisi</label>
            <input type="text" class="form-control" name="divisi" value="{{ $karyawan->divisi }}" required>
        </div>

        <div class="mb-3">
            <label for="departemen" class="form-label">Departemen</label>
            <input type="text" class="form-control" name="departemen" value="{{ $karyawan->departemen }}" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="/karyawan" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
