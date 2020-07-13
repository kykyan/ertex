@extends('user.master')

@section('title', 'Pengumuman RT 010 / 07')

@section('isi')

<!-- Default box -->
<div class="card mx-5">
  <div class="card-body">
    <div class="mx-5">
      <div>
        <div style="text-align:center;">
          <img style="margin-top:2%; margin-bottom:2%;" width="50%" src="{{ asset('filesdat/'.$announces->gambar) }}" alt="Pengumuman">
        </div>
        <h2 style="text-align:center;">{{ $announces->judul }}</h2>
        <br/>
        {!! $announces->isi !!}
      </div>
    </div>
  </div>
  <!-- /.card-body -->
</div>

<!-- Footer -->
<footer class="py-5 bg-dark fixed-height">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; ErTe-X 2020</p>
  </div>
</footer>

@endsection