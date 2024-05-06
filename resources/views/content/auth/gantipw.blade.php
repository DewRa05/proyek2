@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ganti Password</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Ganti Password</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid d-flex justify-content-center">
                <div class="login-box">
                    <div class="login-logo">
                      <a href="../../index2.html"><b>Admin</b>Posdu</a>
                    </div>
                    <!-- /.login-logo -->
                    <div class="card">
                      <div class="card-body login-card-body">
                        <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                  
                        <form action="recover-password.html" method="post">
                          <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                            </div>
                            <!-- /.col -->
                          </div> 
                        </form>
                  
                        <p class="mt-3 mb-1">
                          <a href="login.html">Login</a>
                        </p>
                        <p class="mb-0">
                          <a href="register.html" class="text-center">Register a new membership</a>
                        </p>
                      </div>
                      <!-- /.login-card-body -->
                    </div>
                  </div>
            </div>
        </section>
    </div>
    @endsection