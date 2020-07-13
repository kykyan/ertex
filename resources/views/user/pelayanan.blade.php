<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pelayanan RT 010 / 07</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('user/css/heroic-features.css') }}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">ErTe - X</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/keluar">Keluar
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="card mx-5 my-5">
    <div class="card-body">

      <h4 class="center d-flex justify-content-center">Pelayanan RT 010 / 07 Kel. Cawang</h4>

      @if (session('sukses'))
      <div class="my-5">
        <div class="alert alert-success center d-flex justify-content-center">
          {{ session('sukses') }}
        </div>
      </div>
      @endif
      @if (session('alert'))
      <div class="mx-5">
        <div class="alert alert-danger center d-flex justify-content-center">
          {{ session('alert') }}
        </div>
      </div>
      @endif

      <div class="m-5 pb-5">
        <form method="post" action="/pelayanan">
          @csrf
          <div class="form-row">
          <div class="form-group col-md-6">
                  <label>Jenis Surat</label>
                  <select class="form-control" name="jenis" required="required">
                      <option value="Surat Pengantar" selected>Surat Pengantar</option>
                      <option value="Surat Keterangan">Surat Keterangan</option>
                      <option value="Surat Pernyataan">Surat Pernyataan</option>
                      <option value="Surat Domisili">Surat Domisili</option>
                  </select>
              </div>
            <div class="form-group col-md-6">
              <label>NIK</label>
              <input type="text" name="nik" class="form-control" placeholder="Masukkan No KTP Anda" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat" rows="2" placeholder="Masukkan Alamat Lengkap Sesuai KTP" required></textarea>
            </div>
            <div class="form-group col-md-6">
              <label>Email</label>
              <input type="text" name="email" class="form-control" placeholder="Masukkan Alamat Email Aktif" required>
            </div>
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan" rows="3" placeholder="Jelaskan Secara Singkat Mengenai Surat Yang Ingin Anda Ajukan" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Proses</button>
        </form>
      </div>
    </div>
    <!-- /.card-body -->
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('user/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('user/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
