@extends('layout.main')

@section('body')
<div class="container">
    <center>
    <div class="col-8 mt-5">
        <div class="row ">
            <div class="col-12 ">
            <div class="card" style="width: 35rem;">
            <div class="card-body">
                <h5 class="card-title">Login</h5>
                @if (session('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session ('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="login-form">
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        
                    </form>
            </div>
                
            </div>
            </div>
            </center>
        </div>
    </div>
</div>
@endsection