@extends('user.master')

@section('title', 'Sistem Informasi RT 010 / 07')

@section('isi')

<!-- Page Content -->
<div class="container">

<!-- Jumbotron Header -->
<div class="d-flex justify-content-center">
  <div id="carouselExampleIndicators" class="carousel slide my-4 w-75" data-ride="carousel">
    <!-- <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol> -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('user/img/welcome.jpg') }}" alt="Selamat Datang">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Ini Judul</h5>
          <p>Ini Caption</p> -->
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Page Features -->
<div class="row text-center d-flex justify-content-center" style="margin-top:6%; margin-bottom:6%">

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