@extends('template')

@section('content')
	<h3>Data Nilai</h3>

	<a href="/eas2025" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

    {{-- action mengarah ke penggaris/store untuk dilakukan routing --}}
	<form action="/eas2025/storenilai" method="post" class="form-horizontal">
        <!-- form-horizontal untuk membuat form menjadi horizontal, jadi labelnya di kiri, inputnya di kanan -->
		{{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" for="Normorinduksiswa">
                Normorinduksiswa
            </label>
            <div class="col-6">
                   <input class="form-control"
                   type="text"
                   id="Normorinduksiswa"
                   placeholder="Masukkan Normorinduksiswa"
                   name="Normorinduksiswa" required="required">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Nilaiangka ">
                Nilaiangka 
            </label>
            <div class="col-6">
                   <input class="form-control"
                   type="text"
                   id="Nilaiangka "
                   placeholder="Masukkan Nilaiangka "
                   name="Nilaiangka " required="required">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="Sks">
                Sks
            </label>
            <div class="col-6">
                   <input class="form-control"
                   type="text"
                   id="Sks"
                   placeholder="Masukkan Sks"
                   name="Sks" required="required">
                </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
