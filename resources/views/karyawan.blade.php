@extends('template')

@section('content')
<h3>Data Karyawan</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($karyawan as $k)
        <tr>
            <td>{{ $k->kodepegawai }}</td>
            <td>{{ strtoupper($k->namalengkap) }}</td>
            <td>{{ $k->divisi }}</td>
            <td>{{ strtolower($k->departemen) }}</td>
            <td>
                <a href="/karyawan/edit/{{ $k->kodepegawai }}" class="btn btn-success btn-sm">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                    <i class="fas fa-trash"></i> Hapus
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="/karyawan/tambah" class="btn btn-primary">+ Tambah Data</a>
@endsection
