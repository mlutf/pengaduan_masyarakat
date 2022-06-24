@extends('layout.master')
@section('container')

<div class="row justify-items-center">
    <!-- Button trigger modal -->


<!-- Modal -->

    <div class="container-fluid">
        <div class="col-10">
            <div class="row">
                <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Nama Pelapor</th>
                        <th scope="col">Tanggal Pengaduan</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Isi Laporan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
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
                        <td>
                            
                            <a href="{{url('cetak/pengaduan',$pengaduan->id)}}" target="_blank" class="btn btn-primary">Cetak</a>
                        </td>
                       </tr>
                        <tr>
                    </tbody>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')

@endsection