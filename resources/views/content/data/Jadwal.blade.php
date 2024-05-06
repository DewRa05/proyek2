@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Jadwal Posyandu</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Jadwal Posyandu</li>
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
                                <h3 class="card-title">Jadwal Posyandu</h3>

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
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Acara</th>
                                            <th>Tempat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jadwal as $j)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $j->id }}</td>
                                                <td>{{ $j->tanggal }}</td>
                                                <td>{{ $j->jam }}</td>
                                                <td>{{ $j->acara }}</td>
                                                <td>{{ $j->tempat }}</td>
                                                <td>
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

    <!-- tambah jadwal-->
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Jadwal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('tambah.jadwal') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-check-label" for="waktu">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" placeholder="tanggal/bulan/tahun"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="waktu">Waktu</label>
                                <input type="time" name="jam" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="acara">Acara</label>
                                <input type="text" class="form-control" name="acara" placeholder="Masukan Acara"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="tempat">Tempat</label>
                                <input type="text" class="form-control" name="tempat" placeholder="Masukan Tempat"
                                    required>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    @foreach ($jadwal as $j)
        <!-- update jadwal-->
        <div class="modal fade" id="modal-update">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Jadwal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('update.jadwal', $j->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-check-label" for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal"
                                        placeholder="tanggal/bulan/tahun" value="{{ $j->tanggal }}" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-check-label" for="waktu">Waktu</label>
                                    <input type="time" class="form-control" name="jam"
                                        value="{{ $j->jam }}" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-check-label" for="acara">Acara</label>
                                    <input type="text" class="form-control" name="acara"
                                        value="{{ $j->acara }}" placeholder="Masukan Acara" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-check-label" for="tempat">Tempat</label>
                                    <input type="text" class="form-control" name="tempat"
                                        value="{{ $j->tempat }}" placeholder="Masukan Tempat" required>
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

    @foreach ($jadwal as $j)
        <!-- hapus jadwal-->
        <div class="modal fade" id="modal-hapus">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hapus Jadwal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('hapus.jadwal', $j->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                            <div class="row">
                                <p>Anda Yakin Ingin Menghapus Jadwal ini?</p><span>{{ $j->id }}</span>
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
