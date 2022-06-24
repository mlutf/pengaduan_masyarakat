@extends('layout.main')

@section('body')
<div class="container">
    <center>
    <div class="col-8 mt-5">
        <div class="row ">
            <div class="col-12 ">
            <div class="card" style="width: 35rem;">
            <div class="card-body">
                <h3 class="card-title">Pengaduan</h3>
                <div class="login-form">
                    <form action="{{route('pengaduan.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Nama Pelapor</label>
                    <input type="text" name="nama_pelapor" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">NIK</label>
                    <input type="text" name="nik" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Tanggal Pengaduan</label>
                    <input type="date" name="tgl_pengaduan" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Isi Laporan</label>
                    <textarea name="isi_laporan" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Foto</label>
                    <input type="file" name="foto" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                   <input type="hidden" name="status" class="form-control" id="recipient-name" value="belum di proses">
                </div>
                <button type="submit" class="btn btn-primary">Laporkan</button>
                </form>
            </div>
                
            </div>
            </div>
            </center>
        </div>
    </div>
</div>

@endsection