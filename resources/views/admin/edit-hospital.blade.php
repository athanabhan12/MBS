@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Data Client (Hospital)</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Ubah Data Client (Hospital)</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ url('/hospital/update') }}/{{ $hospital->id }}" method="POST">
              @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Klien</label>
                  <input type="text" name="nama_hospital" class="form-control" placeholder="Nama Client" value="{{ $hospital->nama_hospital }}">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ $hospital->alamat }}">
                </div> 
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-primary rounded-pill">Simpan</button>
              </div>
            </form>
            <a href="{{ route('admin/hospital') }}">
              <button type="button" class="btn btn-danger mt-3 rounded-pill ml-3">Kembali</button>
            </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection