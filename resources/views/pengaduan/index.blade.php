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
                            @if($pengaduan->status == 'sudah di proses')
                            <div type="submit" class="btn btn-success rounded" disabled>Done</div>
                            @elseif($pengaduan->status == 'proses')
                            <div type="submit" class="btn btn-danger rounded" onclick="fcthapus('{{$pengaduan->id}}')"> Validasi</div>
                            @else
                            <div type="submit" class="btn btn-danger rounded" onclick="fcveri('{{$pengaduan->id}}')"> Verifikasi</div>
                            @endif
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function fcthapus(id) {
        Swal.fire({
            title: 'Proses Data Ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, do it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = "{{url('status/update/')}}" + "/" + id;
            }
        })
    }
    function fcveri(id) {
        Swal.fire({
            title: 'Proses Data Ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, do it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = "{{url('fcveri/update/')}}" + "/" + id;
            }
        })
    }
</script>

@endsection