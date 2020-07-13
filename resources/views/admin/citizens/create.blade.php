@extends('admin.master')

@section('title', 'Tambah Data Warga')

@section('konten')

<h3>Tambah Data Warga</h3>

@if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif

<form method="post" action="/warga">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>No KK</label>
            <input type="text" class="form-control" name="nokk" placeholder="No KK" maxlength="16" required="required">
        </div>
        <div class="form-group col-md-6">
            <label>NIK</label>
            <input type="text" class="form-control" name="nik" placeholder="NIK" maxlength="16" required="required">
        </div>
    </div>
    <div class="form row">
        <div class="form-group col-md-8">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama" required="required">
        </div>
        <div class="form-group col-md-4">
            <label>Keterangan</label>
            <select class="form-control" name="ket" required="required">
                <option value="Warga Asli" selected>Warga Asli</option>
                <option value="Warga Luar">Warga Luar</option>
                <option value="Warga Pendatang">Warga Pendatang</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jkel" required="required">
                <option value="Laki-laki" selected>Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label>Agama</label>
            <select class="form-control" name="agama" required="required">
                <option value="Islam" selected>Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katholik">Katholik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="KongHuCu">KongHuCu</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Tempat Lahir</label>
            <input type="text" class="form-control" name="tmptlhr" placeholder="Tempat Lahir" required="required">
        </div>
        <div class="form-group col-md-6">
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgllhr" placeholder="Tanggal Lahir" required="required">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Pendidikan</label>
            <select class="form-control" name="pendidikan" required="required">
                <option value="Tidak / Belum Sekolah" selected>Tidak / Belum Sekolah</option>
                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                <option value="Diploma I/II">Diploma I/II</option>
                <option value="Akademi/Diploma III/S.Muda">Akademi/Diploma III/S.Muda</option>
                <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                <option value="Strata II">Strata II</option>
                <option value="Strata III">Strata III</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label>Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" required="required">
        </div>
        <div class="form-group col-md-4">
            <label>Kewarganegaraan</label>
            <select class="form-control" name="kwrgngran" required="required">
                <option value="WNI" selected>WNI</option>
                <option value="WNA">WNA</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Status Pernikahan</label>
            <select class="form-control" name="status" required="required">
                <option value="Belum Kawin" selected>Belum Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Cerai Hidup">Cerai Hidup</option>
                <option value="Cerai Mati">Cerai Mati</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label>Hubungan Keluarga</label>
            <select class="form-control" name="hubkel" required="required">
                <option value="Kepala Keluarga" selected>Kepala Keluarga</option>
                <option value="Suami">Suami</option>
                <option value="Isteri">Isteri</option>
                <option value="Anak">Anak</option>
                <option value="Orang Tua">Orang Tua</option>
                <option value="Cucu">Cucu</option>
                <option value="Menantu">Menantu</option>
                <option value="Mertua">Mertua</option>
                <option value="Famili Lain">Famili Lain</option>
                <option value="Pembantu">Pembantu</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
</form>

@endsection