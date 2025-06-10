@extends('template')

@section('content')
    <h3>Tambah Data Kertas</h3>

    <a href="/kertas" class="btn btn-info">Kembali</a>

    <br/>
    <br/>

    <form action="/kertas/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group mb-3">
            <label class="control-label col-sm-2" for="merkkertas">Merk Kertas</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" name="merkkertas" placeholder="Masukkan Merk Kertas" required>
            </div>
        </div>

        <div class="form-group mb-3">
            <label class="control-label col-sm-2" for="hargakertas">Harga</label>
            <div class="col-sm-6">
                <input class="form-control" type="number" name="hargakertas" placeholder="Masukkan Harga" required>
            </div>
        </div>

        <div class="form-group mb-3">
            <label class="control-label col-sm-2" for="tersedia">Tersedia</label>
            <div class="col-sm-6">
                <select class="form-control" name="tersedia" required>
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                </select>
            </div>
        </div>

        <div class="form-group mb-3">
            <label class="control-label col-sm-2" for="berat">Berat (kg)</label>
            <div class="col-sm-6">
                <input class="form-control" type="text" name="berat" placeholder="Contoh: 0.75" required>
            </div>
        </div>

        <input class="btn btn-success" type="submit" value="Simpan Data">
    </form>
@endsection
