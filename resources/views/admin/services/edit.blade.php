@extends('admin.master')

@section('title', 'Edit | Data Pelayanan')

@section('konten')

<h3>Edit Teks Pada Surat</h3>

<form method="post" action="/permintaan/{{ $services->pel_id }}">
    @method('patch')
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Keterangan</label>
            <p>{{ $services->keterangan }}</p>
        </div>
        <div class="form-group">
            <label>Teks pada surat</label>
            <p>{{ $keterangan }}</p>
        </div>
        <div class="form-group">
            <label>Teks Pada Surat</label>
            <textarea class="form-control" name="teks" rows="3" placeholder="Masukkan Teks Yang Akan Ditampilkan Pada Keterangan Surat" required></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan Data</button>
</form>

@endsection