@extends('layout.main')
@section('body')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
      <div class="d-flex">
        <a class="btn btn-success" href="{{url('login')}}" >Masuk</a>
      </div>
    </div>
  </div>
</nav>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
            <p style="font-size: 50px; font-width: 100px;"><b> Pengaduan Masyarakat</b></p>
            <p style="width:500px; font-size: 20px;">Website Pengaduan Masyarakat , digunakan untuk anda yang ingin melakukan, menyampaikan pengaduan</p>
            </div>
            <div class="col-6">
                <img src="style/images/8a8db5ca-b2f3-4fda-af64-520e7f51d86e.jpg" width="500px" alt="">
            </div>
            <div class="col-6">
                <a href="{{url('laporan_pengaduan')}}" class="btn btn-lg btn-primary">Pengaduan</a>
                <a href="{{url('pengaduan/masyarakat')}}" class="btn btn-lg btn-success">Laporan Pengaduan</a>
            </div>
        </div>
    </div>
</section>

@endsection