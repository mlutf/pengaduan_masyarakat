@extends('layout.master')
@section('container')

<div class="row justify-items-center">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary my-3 ml-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('crew.store')}}" method="post">
            @csrf 
            <div class="mb-3">
                <label for="nama" class="col-form-label">Nama Petugas</label>
                <input type="text" name="nama_petugas" class="form-control" id="nama">
            </div>
            <div class="mb-3">
                <label for="username" class="col-form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="col-form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="telp" class="col-form-label">No Telpon</label>
                <input type="text" name="telp" class="form-control" id="telp">
            </div>
            <div class="mb-3">
                <label for="level" class="col-form-label">Level</label>
                <select name="level" id="level" class="form-control">
                    <option disabled selected>--Pilih Lavel--</option>
                    <option value="admin">Administrator</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cencle</button>
        <button type="submit"  class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
</div>
    <div class="container-fluid">
        <div class="col-10">
            <div class="row">
                <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id Petudgas</th>
                        <th scope="col">Nama Petugas</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Telpon</th>
                        <th scope="col">Level</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @foreach($crew as $crew)
                    <tbody>
                        <tr>
                        <td>{{$crew->id}}</td>
                        <td>{{$crew->nama_petugas}}</td>
                        <td>{{$crew->username}}</td>
                        <td>{{$crew->password}}</td>
                        <td>{{$crew->telp}}</td>
                        <td>{{$crew->level}}</td>
                        <td>
                            <a href="{{route('crew.edit',$crew->id)}}" class="btn btn-secondary rounded"> Edit</a>
                            <div type="submit" class="btn btn-danger rounded" onclick="fcthapus('{{$crew->id}}')"> Delete
                                <i class="bi bi-trash"></i>
                            </div>
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
            title: 'Anda Ingin Menghapus Data Ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = "{{url('hapus/')}}" + "/" + id;
            }
        })
    }
</script>

@endsection