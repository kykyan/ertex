@extends('admin.master')

@section('title', 'Berita | RT 010 / 07')

@section('konten')

<div class="d-flex justify-content-between">
	<div class="ml-2">
		<h3>Berita</h3>
	</div>
	<div class="">
		<a href="/announcement/tambah" class="btn btn-info">Tambah</a>
	</div>
</div>

@if (session('status'))
    <div class="alert alert-success d-flex justify-content-center">
        {{ session('status') }}
    </div>
@endif

	<div class="row text-center d-flex justify-content-center mt-3">
	@foreach($announces as $announce)
	@php
		$d = new DateTime($announce->created_at);
		$d = $d->format('d M Y');
	@endphp
		<div class="col-lg-3 col-md-6 mb-4">
			<div class="card h-100">
				<a href="">
					<img class="card-img-top" src="{{ asset('filesdat/'.$announce->gambar) }}" alt="Pengumuman">
				</a>
				<div class="card-body">
					<h4>{{ $announce->judul }}</h4>
					<p>{{ $d }}</p>
				</div>
				<div class="card-footer">
					@if($announce->publish == '0')
						<a href="/announcement/{{ $announce->announce_id }}/publish" class="btn btn-primary w-100 mt-1">Publish</a>
					@elseif($announce->publish == '1')
						<a href="/announcement/{{ $announce->announce_id }}/hide" class="btn btn-primary w-100 mt-1">Hide</a>
					@endif
					<a href="/announcement/{{ $announce->announce_id }}/edit" class="btn btn-primary w-100 mt-1">Edit</a>
					<form action="/announcement/{{ $announce->announce_id }}" method="post">
						@method('delete')
						@csrf
						<button type="submit" class="btn btn-danger w-100 mt-1">Delete</button>
					</form>
				</div>
			</div>
		</div>
	@endforeach
	</div>

@endsection