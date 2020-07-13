@extends('admin.master')

@section('title', 'Dashboard | RT 010 / 07')

@section('konten')

<h1 style="text-align:center;">Selamat Datang Di Website Pelayanan RT 010 / 07</h1>

<div class="row text-center d-flex justify-content-center" style="margin-top:10%; margin-bottom:13%">

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <a href="/warga">
        <img class="card-img-top" src="{{ asset('user/img/warga.png') }}" alt="Warga">
      </a>
      <div class="card-footer">
        <a href="/warga" class="btn btn-primary w-100">Data Warga</a>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <a href="/permintaan">
        <img class="card-img-top" src="{{ asset('user/img/pelayanan.png') }}" alt="Pelayanan">
      </a>
      <div class="card-footer">
        <a href="/permintaan" class="btn btn-primary w-100">Pelayanan</a>
      </div>
    </div>
  </div>
  
  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <a href="/announcement">
        <img class="card-img-top" src="{{ asset('user/img/pengumuman.png') }}" alt="Berita">
      </a>
      <div class="card-footer">
        <a href="/announcement" class="btn btn-primary w-100">Berita</a>
      </div>
    </div>
  </div>

</div>

@endsection