@extends('template')

@section('content')
    <div class="container mt-4">
        <h3>Data Kertas</h3>

        <a href="/kertas/tambah" class="btn btn-primary mb-3"> + Tambah Kertas Baru</a>

        <p>Cari Data Kertas:</p>
<form action="/kertas/cari" method="GET" class="mb-4">
    <input type="text" name="cari" placeholder="Cari Kertas .." value="{{ old('cari') }}">
    <input type="submit" value="CARI" class="btn btn-secondary">
</form>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Merk Kertas</th>
                    <th>Harga</th>
                    <th>Tersedia</th>
                    <th>Berat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kertas as $k)
                    <tr>
                        <td>{{ $k->merkkertas }}</td>
                        <td>{{ $k->hargakertas }}</td>
                        <td>{{ $k->tersedia ? 'Ya' : 'Tidak' }}</td>
                        <td>{{ $k->berat }}</td>
                        <td>
                            <a href="/kertas/edit/{{ $k->ID }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="/kertas/hapus/{{ $k->ID }}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Tampilkan Pagination Bootstrap 5 -->
        <div class="d-flex justify-content-center">
    {{ $kertas->appends(['cari' => request()->cari])->links('pagination::bootstrap-5') }}
</div>

    </div>
@endsection
