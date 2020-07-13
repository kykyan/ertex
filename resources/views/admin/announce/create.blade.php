@extends('admin.master')

@section('title', 'Berita | RT 010 / 07')

@section('konten')

<form method="POST" action="/announcement" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Isi</label>
    <textarea class="form-control" id="konten" name="isi" rows="5" required></textarea>
  </div>
  <div class="input-group">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroupFileAddon01">Thumbnail</span>
    </div>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="customFile" name="gambar">
      <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
  </div>
</div>
  <button type="submit" class="btn btn-info" style="width:100%">Simpan</button>
</form>

@endsection