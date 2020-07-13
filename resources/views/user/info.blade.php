@extends('user.master')

@section('title', 'Sistem Informasi RT 010 / 07')

@section('isi')

<section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5 w-75">
            <img class="img-fluid rounded" src="{{ asset('user/img/candi.jpg') }}" alt="Monumen RT 010">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h1 class="display-4"><b>Profil RT 010 / 07</b></h1>
            <p>RT 010 / 07 merupakan Rukun Tetangga (RT) yang terletak di Kelurahan Cawang, Kecamatan Kramatjati, Jakarta Timur.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5 w-75">
            <img class="img-fluid rounded" src="{{ asset('user/img/PakRT.jpg') }}" alt="Ketua RT 010 / 07">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h1 class="display-4"><b>Ketua RT 010 / 07</b></h1>
            <p>RT 010 / 07 dibina dan diketuai oleh Bapak Puji Purnomo selaku Ketua RT 010 / 07.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5 w-75">
            <img class="img-fluid rounded" src="{{ asset('user/img/denah.png') }}" alt="Denah RT 010 / 07">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h1 class="display-4"><b>Denah Wilayah RT 010 / 07</b></h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection