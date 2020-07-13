@extends('admin.master')

@section('title', 'Detail Data Warga')

@section('konten')

<h3>Detail Warga</h3>

<div class="d-flex justify-content-center">
    <div class="card col-8">
        <div class="card-body">
            <h2>{{ $citizen->nama }}</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>NIK</label>
                    <p>{{ $citizen->nik }}</p>
                </div>
                <div class="form-group col-md-6">
                    <label>Nomor KK</label>
                    <p>{{ $citizen->nokk }}</p>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Agama</label>
                    <p>{{ $citizen->agama }}</p>
                </div>
                <div class="form-group col-md-6">
                    <label>Jenis Kelamin</label>
                    <p>{{ $citizen->jkel }}</p>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Tempat Lahir</label>
                    <p>{{ $citizen->tmptlhr }}</p>
                </div>
                <div class="form-group col-md-6">
                    <label>Tanggal Lahir</label>
                    <p>{{ date('d-m-Y', strtotime($citizen->tgllhr)) }}</p>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Pendidikan</label>
                    <p>{{ $citizen->pendidikan }}</p>
                </div>
                <div class="form-group col-md-6">
                    <label>Pekerjaan</label>
                    <p>{{ $citizen->pekerjaan }}</p>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Status Perkawinan</label>
                    <p>{{ $citizen->status }}</p>
                </div>
                <div class="form-group col-md-6">
                    <label>Status Dalam Keluarga</label>
                    <p>{{ $citizen->hubkel }}</p>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>kewarganegaraan</label>
                    <p>{{ $citizen->kwrgngran }}</p>
                </div>
                <div class="form-group col-md-6">
                    <a href="{{ $citizen->id }}/edit" class="btn btn-primary">Edit</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                    Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin ingin menghapus data?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <form action="{{ $citizen->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection