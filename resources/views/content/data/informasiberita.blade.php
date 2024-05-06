@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Informasi Berita</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Informasi Berita</li>
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
                            Tambah Informasi Berita
                        </button>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Informasi Beita</h3>

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
                                            <th>Tempat</th>
                                            <th>Penulis</th>
                                            <th>Berita</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($info as $i)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $i->id }}</td>
                                                <td>{{ $i->tanggal }}</td>
                                                <td>{{ $i->jam }}</td>
                                                <td>{{ $i->tempat }}</td>
                                                <td>{{ $i->penulis }}</td>
                                                <td>{{ $i->berita }}</td>
                                                <td><img src="{{ asset('img/' . $i->gambar) }}" alt="Gambar Berita" style="max-width: 100px;"></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary">Lihat</button>
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

    <!-- tambah informasi-->
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Informasi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('tambah.informasi') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-check-label" for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" placeholder="tanggal/bulan/tahun"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="jam">Waktu</label>
                                <input type="time" name="jam" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="tempat">Tempat</label>
                                <input type="text" class="form-control" name="tempat" placeholder="Masukan Tempat"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="penulis">Penulis</label>
                                <input type="text" class="form-control" name="penulis" placeholder="Masukan Acara"
                                    required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="berita">Berita</label>
                                <textarea class="form-control" rows="3" name="berita" placeholder="masukan berita" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="gambar">Gambar</label>
                                <input type="file" class="form-control" name="gambar"
                                    placeholder="Masukan Gambar" required>
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
@endsection
