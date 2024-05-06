@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Akun User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Akun User</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                @if (session('create'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('create') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session('update'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('update') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session('delete'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('delete') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#modal-tambah">
                            Tambah Jadwal
                        </button>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Akun User</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id</th>
                                            <th>Nama Lengkap</th>
                                            <th>Username</th>
                                            <th>NIK</th>
                                            <th>No KK</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($akun as $a )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $a->id }}</td>
                                            <td>{{ $a->namaLengkap }}</td>
                                            <td>{{ $a->username }}</td>
                                            <td>{{ $a->nik }}</td>
                                            <td>{{ $a->noKK }}</td>
                                            <td>{{ $a->email }}</td>
                                            <td>{{ $a->password }}</td>
                                            <td>
                                                <button type="button "class="btn btn-primary" data-toggle="modal"
                                                    data-target="#moda-gp">Ganti Password</button>
                                                <button type="button "class="btn btn-danger" data-toggle="modal"
                                                    data-target="#modal-hapus">Hapus</button>
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#modal-update">Update</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- tambah Akun User-->
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Akun User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('tambah.akunuser') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-check-label" for="NamaLengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" name="namaLengkap" placeholder="Masukan Nama Lengkap"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="username">Username</label>
                                <input type="text" name="username" class="form-control"  placeholder="Masukan Username" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor Induk" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="nokk">No KK</label>
                                <input type="text" name="noKK" class="form-control" placeholder="Masukan Nomor Kartu Keluarga" required >
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="emailS">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukan Email"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukan Password"
                                    required>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    @foreach ($akun as $a )
       <!-- Update Akun User-->
    <div class="modal fade" id="modal-update">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Akun User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('update.akunuser', $a->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-check-label" for="NamaLengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" name="namaLengkap" placeholder="Masukan Nama Lengkap"
                                    value="{{ $a->namaLengkap }}" required >
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="username">Username</label>
                                <input type="text" name="username" class="form-control"  placeholder="Masukan Username" value="{{ $a->username }}" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor Induk" value="{{ $a->nik }}" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="nokk">No KK</label>
                                <input type="text" name="noKK" class="form-control" placeholder="Masukan Nomor Kartu Keluarga" value="{{ $a->noKK }}" required >
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="emailS">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukan Email" value="{{ $a->email }}"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukan Password" value="{{ $a->password }}" required>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div> 
    @endforeach

    @foreach ($akun as $a)
    <!-- hapus data-->
    <div class="modal fade" id="modal-hapus">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('hapus.akunuser', $a->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <div class="row">
                            <p>Anda Yakin Ingin Menghapus Akun ini?</p> <span>{{ $a->id }}</span>
                        </div>
                    </div>
                    <!-- /.modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endforeach
    
@endsection
