@extends('template')

@section('content')
    <div class="container mt-4">
        <h3>Edit Data Kertas</h3>

        <form action="/kertas/update" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $kertas->ID }}">

            <div class="mb-3">
                <label for="merkkertas" class="form-label">Merk Kertas</label>
                <input type="text" class="form-control" name="merkkertas" value="{{ $kertas->merkkertas }}">
            </div>

            <div class="mb-3">
                <label for="hargakertas" class="form-label">Harga</label>
                <input type="number" class="form-control" name="hargakertas" value="{{ $kertas->hargakertas }}">
            </div>

            <div class="mb-3">
                <label for="tersedia" class="form-label">Tersedia</label>
                <select class="form-control" name="tersedia">
                    <option value="1" {{ $kertas->tersedia ? 'selected' : '' }}>Ya</option>
                    <option value="0" {{ !$kertas->tersedia ? 'selected' : '' }}>Tidak</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="berat" class="form-label">Berat (kg)</label>
                <input type="text" class="form-control" name="berat" value="{{ $kertas->berat }}">
            </div>

            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="/kertas" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
