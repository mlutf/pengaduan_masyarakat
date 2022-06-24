@extends('layout.main')
@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 text-center mt-5">
            <h1>Laporan <br>Pengaduan Masyarakat <br> {{$data->tgl_pengaduan}}</h1>
        </div>
        <div class="col-6 mt-5">
            <div class="row">
                <div class="col-5 "><h5>Nama Pelapor</h5></div>
                <div class="col-1 text-center"><h5>:</h5></div>
                <div class="col-6 text-center"><h5>{{$data->nama_pelapor}}</h5></div>
                <div class="col-5 "><h5>NIK</h5></div>
                <div class="col-1 text-center"><h5>:</h5></div>
                <div class="col-6 text-center"><h5>{{$data->nik}}</h5></div>
                <div class="col-12 text-center mt-5">
      <p class="col-16" style="margin-left:50px"><img src="/post-images/{{$data->foto}}"  width="300px"></p></div>
            </div>
        </div>
    </div>
</div>
<script>
    window.print();
</script>
@endsection