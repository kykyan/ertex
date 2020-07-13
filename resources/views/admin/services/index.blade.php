@extends('admin.master')

@section('title', 'Permintaan')

@section('konten')

<div class="d-flex justify-content-between">
	<div class="ml-2">
		<h3>Pelayanan Warga</h3>
	</div>
	<!-- <div class="float-right">
		<form action="/warga/cari" method="GET">
			<input type="text" name="cari" placeholder="Nama .." value="{{ old('cari') }}">
			<input type="submit" class="btn btn-primary btn-sm mb-2" value="CARI">
		</form>
	</div> -->
</div>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@if (session('hapus'))
    <div class="alert alert-danger">
        {{ session('hapus') }}
    </div>
@endif

<div class="table-responsive">
	<table class="table table-bordred table-striped" id='myTable'>
		<thead>
			<tr>
				<th>Jenis Permintaan</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>Tanggal</th>
				<th>Opsi</th>
			</tr>
		</thead>
		@foreach($services as $s)
		<tbody>
		@php
			$d = new DateTime($s->created_at);
			$d = $d->format('d-m-Y');
		@endphp
			<tr>
				<td>{{ $s->jenis }}</td>
				<td>{{ $s->nik }}</td>
				<td>{{ $s->nama }}</td>
				<td>{{ $d }}</td>
				<td><a href="/permintaan/{{ $s->pel_id }}" class="badge badge-info">Detail</a></td>
			</tr>
		</tbody>
		@endforeach
	</table>
</div>


@endsection