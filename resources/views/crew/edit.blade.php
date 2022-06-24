@extends('layout.master')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="row">
                <div class="col-12">
                <form action="{{route('crew.update',$crew->id)}}" method="post">
            @csrf 
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="col-form-label">Nama Petugas</label>
                <input type="text" name="nama_petugas" class="form-control" id="nama" value="{{$crew->nama_petugas}}">
            </div>
            <div class="mb-3">
                <label for="username" class="col-form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" value="{{$crew->username}}">
            </div>
            <div class="mb-3">
                <label for="password" class="col-form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" value="{{$crew->password}}">
            </div>
            <div class="mb-3">
                <label for="telp" class="col-form-label">No Telpon</label>
                <input type="text" name="telp" class="form-control" id="telp" value="{{$crew->telp}}">
            </div>
            <div class="mb-3">
                <label for="level" class="col-form-label">Level</label>
                <select name="level" id="level" class="form-control">
                    <option disabled selected>{{$crew->level}}</option>
                    <option value="admin">Administrator</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit"  class="btn btn-primary">Update</button>
      </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection