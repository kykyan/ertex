@extends('admin.master')

@section('title', 'Data Warga | RT 010 / 07')

@section('konten')

<div class="d-flex justify-content-between">
	<div class="ml-2">
		<h3>{{$judul}}</h3>
	</div>
</div>

@if (session('status'))
	<div class="d-flex justify-content-center">
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	</div>
@endif
@if (session('error'))
	<div class="d-flex justify-content-center">
		<div class="alert alert-danger">
			{{ session('error') }}
		</div>
    </div>
@endif

<div class="table-responsive">
	<table class="table table-bordred table-striped" id='myTable'>
		<thead>
			<tr>
				<th>No KK</th>
				<th>NAMA</th>
				<th>NIK</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lahir</th>
				<th>Agama</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($citizens as $w)
			<tr>
				<td>{{ $w->nokk }}</td>
				<td>{{ $w->nama }}</td>
				<td>{{ $w->nik }}</td>
				<td>{{ $w->jkel }}</td>
				<td>{{ $w->tgllhr }}</td>
				<td>{{ $w->agama }}</td>
				<td><a href="/warga/{{ $w->id }}" class="badge badge-info">Detail</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection

