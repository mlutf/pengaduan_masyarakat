@extends('layout.main')
@section('body')
<?php

use App\Models\Pengaduan;
$pengaduan = Pengaduan::all();
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8 text-center">
            <h1><b>Laporan <br> Pengaduan Masyarakat</b></h1>
        </div>
        <div class="col-8">
        <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Nama Pelapor</th>
                        <th scope="col">Tanggal Pengaduan</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Isi Laporan</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    @foreach($pengaduan as $pengaduan)
                    <tbody>
                        <tr>
                        <td>{{$pengaduan->nama_pelapor}}</td>
                        <td>{{$pengaduan->tgl_pengaduan}}</td>
                        <td>{{$pengaduan->nik}}</td>
                        <td>{{$pengaduan->isi_laporan}}</td>
                        <td>{{$pengaduan->status}}</td>
                        
                       </tr>
                        <tr>
                    </tbody>
                    @endforeach
                </table>
        </div>
        <div class="col-8">
            <a href="{{url('/')}}" class="btn btn-primary"><- Back</a>
        </div>
    </div>
</div>
@endsection