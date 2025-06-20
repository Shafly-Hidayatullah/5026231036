@extends('template')

@section('content')
	<h3>Nilai</h3>

	<br/>

	<table class="table table-striped">
		<tr>
			<th>ID </th>
            <th>NRP </th>
			<th>Nilai Angka </th>
			<th>SKS </th>
			<th>Nilai Huruf </th>
            <th>Bobot</th>
		</tr>
		@foreach($nilai as $item)
		<tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->normorinduksiswa  }}</td>
			<td>{{ number_format($item->nilaiangka , 0, ',', '.') }}</td>
			<td>{{ number_format($item->sks, 0, ',', '.') }}</td>
			<td>{{ number_format($item->nilaiangka * $item->sks, 0, ',', '.') }}</td>
			<td>
				<a href="/eas2025/belinilai/{{ $item->id }}" class="btn btn-success">Tambah Data</a>
			
				</form>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $nilai->links() }} <!-- ini untuk pagination, jadi nanti di bawah tabel ada paginationnya -->

@endsection
