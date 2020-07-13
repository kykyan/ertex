@extends('user.master')

@section('title', 'Berita | RT 010 / 07')

@section('isi')

	<div class="row text-center d-flex justify-content-center mt-3 mx-5">
    @foreach($announces as $announce)
		<div class="col-lg-6 col-md-6 mb-4">
			<div class="card h-100">
				<a href="/pengumuman/{{ $announce->announce_id }}">
					<img class="card-img-top" src="{{ asset('filesdat/'.$announce->gambar) }}" alt="Pengumuman">
				</a>
				<div class="card-body">
					<h4>{{ $announce->judul }}</h4>
				</div>
				<div class="card-footer">
					<a href="/pengumuman/{{ $announce->announce_id }}" class="btn btn-primary w-100 mt-1">Baca</a>
				</div>
			</div>
		</div>
    @endforeach
	</div>

<!-- Footer -->
<footer class="py-5 bg-dark fixed-height">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; ErTe-X 2020</p>
  </div>
</footer>

@endsection