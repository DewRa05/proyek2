@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pertumbuh Kembangan Anak</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Perkembangan Anak</li>
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
                            Tambah Data
                        </button>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Perkembangan Anak</h3>

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
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Umur</th>
                                            <th>No KK</th>
                                            <th>Alamat</th>
                                            <th>Nama Ibu</th>
                                            <th>Tinggi Badan</th>
                                            <th>Berat Badan</th>
                                            <th>Hasil</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $d )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->id }}</td>
                                            <td>{{ $d->namaLengkap }}</td>
                                            <td>{{ $d->jenisKelamin }}</td>
                                            <td>{{ $d->umur }}</td>
                                            <td>{{ $d->noKk }}</td>
                                            <td>{{ $d->alamat}}</td>
                                            <td>{{ $d->namaIbu }}</td>
                                            <td>{{ $d->tb }}</td>
                                            <td>{{ $d->bb }}</td>
                                            <td>{{ $d->hasil }}</td>
                                            <td>
                                                <button type="button "class="btn btn-danger" data-toggle="modal"
                                                    data-target="#modal-hapus">Hapus</button>
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#modal-update">Update</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
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

     <!-- tambah data -->
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('tambah.data') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-check-label" for="namaLengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" name="namaLengkap" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-check-label" for="umur">Umur</label>
                                <input type="number" class="form-control" name="umur" placeholder="Umur" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-check-label" for="jenisKelamin">Jenis Kelamin</label>
                                <select class="form-control" name="jenisKelamin">
                                    <option>-</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="noKK">No KK</label>
                                <input type="text" class="form-control" name="noKk" placeholder="Nomor KK" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="namaIbu">Nama Ibu</label>
                                <input type="text" class="form-control" name="namaIbu" placeholder="Nama Ibu" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="alamat">Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat" required></textarea>
                            </div>
                            <div class="col-md-4">
                                <label class="form-check-label" for="tinggiBadan">Tinggi Badan</label>
                                <input type="number" class="form-control"name="tb" placeholder="Tinggi Badan" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-check-label" for="beratBadan">Berat Badan</label>
                                <input type="number" class="form-control" name="bb" placeholder="Berat Badan"required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-check-label" for="hasil">Hasil</label>
                                <select class="form-control" name="hasil">
                                    <option>Normal</option>
                                    <option>Sedang</option>
                                    <option>Kurus</option>
                                    <option>Sangat Kurus</option>
                                </select>
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
    

    @foreach ($data as $d )
         <!-- update data -->
    <div class="modal fade" id="modal-update">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('update.data', $d->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-check-label" for="namaLengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" name="namaLengkap" placeholder="Nama Lengkap" value="{{ $d->namaLengkap }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-check-label" for="umur">Umur</label>
                                <input type="number" class="form-control" name="umur" placeholder="Umur" value="{{ $d->umur }}"required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-check-label" for="jenisKelamin">Jenis Kelamin</label>
                                <select class="form-control" name="jenisKelamin" value="{{ $d->jenisKelamin }}">
                                    <option>-</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="noKK">No KK</label>
                                <input type="text" class="form-control" name="noKk" placeholder="Nomor KK" value="{{ $d->noKk}}" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="namaIbu">Nama Ibu</label>
                                <input type="text" class="form-control" name="namaIbu" placeholder="Nama Ibu" value="{{ $d->namaIbu }}" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-check-label" for="alamat">Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat" required></textarea>
                            </div>
                            <div class="col-md-4">
                                <label class="form-check-label" for="tinggiBadan">Tinggi Badan</label>
                                <input type="number" class="form-control"name="tb" placeholder="Tinggi Badan" value="{{ $d->tb }}" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-check-label" for="beratBadan">Berat Badan</label>
                                <input type="number" class="form-control" name="bb" placeholder="Berat Badan" value="{{ $d->bb }}" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-check-label" for="hasil">Hasil</label>
                                <select class="form-control" name="hasil" value="{{ $d->hasil }}">
                                    <option>Normal</option>
                                    <option>Sedang</option>
                                    <option>Kurus</option>
                                    <option>Sangat Kurus</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endforeach

    @foreach ($data as $d)
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
                <form action="{{ route('hapus.data', $d->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <div class="row">
                            <p>Anda Yakin Ingin Menghapus Data ini?</p> <span>{{ $d->id }}</span>
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
