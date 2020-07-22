@extends('user.master')

@section('title', 'Sistem Informasi RT 010 / 07')

@section('isi')

<!-- My CSS -->
<link href="user/css/style.css" rel="stylesheet">

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid animate__animated animate__fadeIn">
  <div class="container">
    <h5 class="display-1 animate__animated animate__slideInDown">Selamat Datang</h5>
    <p class="display-2 animate__animated animate__slideInDown">Di Website RT 010 / 07</p>
    <p class="display-2 animate__animated animate__slideInDown">Kel. Cawang Kec. Kramatjati</p>
  </div>
</div>
<!-- Akhir Jumbotron -->

<!-- Page Content -->
<div class="container">

<!-- Page Features -->
<div class="row text-center d-flex justify-content-center animate__animated animate__backInUp" style="margin-top:10%; margin-bottom:10%">

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <a href="/loginservice">
        <img class="card-img-top" src="{{ asset('user/img/pelayanan.png') }}" alt="Pelayanan">
      </a>
      <div class="card-body">
        <h4 class="card-title">Pelayanan</h4>
        <p class="card-text">Pembuatan Surat Pengantar, Surat Keterangan, Surat Pernyataan secara Online</p>
      </div>
      <div class="card-footer">
        <a href="/loginservice" class="btn btn-primary">Kunjungi</a>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <a href="/pengumuman">
        <img class="card-img-top" src="{{ asset('user/img/pengumuman.png') }}" alt="Pengumuman">
      </a>  
      <div class="card-body">
        <h4 class="card-title">Berita</h4>
        <p class="card-text">Berita terkini mengenai RT 010 / 07 Kel. Cawang</p>
      </div>
      <div class="card-footer">
        <a href="/pengumuman" class="btn btn-primary">Kunjungi</a>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <a href="/info">
        <img class="card-img-top" src="{{ asset('user/img/informasi.png') }}" alt="Informasi">
      </a>
      <div class="card-body">
        <h4 class="card-title">Informasi</h4>
        <p class="card-text">Informasi seputar RT 010 / 07 Kel. Cawang</p>
      </div>
      <div class="card-footer">
        <a href="/info" class="btn btn-primary">Kunjungi</a>
      </div>
    </div>
  </div>
</div>
  
<!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark fixed-height">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Erte-X 2020</p>
  </div>
</footer>

@endsection