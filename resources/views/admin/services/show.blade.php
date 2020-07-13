@extends('admin.master')

@section('title', 'Detail Surat Permohonan')

@section('konten')

<h3>Detail Warga</h3>

@foreach($services as $services)
<div class="d-flex justify-content-center">
    <div class="card col-8">
        <div class="card-body">
            <h2>{{ $services->jenis }}</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>NIK</label>
                    <p>{{ $services->nik }}</p>
                </div>
                <div class="form-group col-md-6">
                    <label>Nama</label>
                    <p>{{ $services->nama }}</p>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Tempat Lahir</label>
                    <p>{{ $services->tmptlhr }}</p>
                </div>
                <div class="form-group col-md-6">
                    <label>Tanggal Lahir</label>
                    <p>{{ date('d-m-Y', strtotime($services->tgllhr)) }}</p>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Pekerjaan</label>
                    <p>{{ $services->pekerjaan }}</p>
                </div>
                <div class="form-group col-md-6">
                    <label>Alamat</label>
                    <p>{{ $services->alamat }}</p>
                </div>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <p>{{ $services->keterangan }}</p>
            </div>
            <div class="form-group">
                <label>Teks</label>
                <p>{{ $services->teks }}</p>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    @if($services->jenis == 'Surat Pengantar')
                        <button type="button" class="btn btn-primary" disabled>Edit</button>
                        <button type="button" class="btn btn-primary" disabled>Cetak</button>
                    @else
                        <a href="{{ $services->pel_id }}/edit" class="btn btn-primary">Edit</a>
                        <a href="{{ $services->pel_id }}/cetak" class="btn btn-primary">Cetak</a>
                    @endif
                    <a href="{{ $services->pel_id }}/selesai" class="btn btn-primary"><i class="fa fa-envelope"></i></a>
                    
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
                            <form action="{{ $services->pel_id }}" method="post" class="d-inline">
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

@endforeach

@endsection