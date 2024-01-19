@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Client (Non Goverment)</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin/index') }}">Home</a></li>
              <li class="breadcrumb-item active">Tambah Non Goverment</li>
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
            <h3 class="card-title">Tambah Data Client (Non Goverment)</h3>

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
            <form action="{{ url('/non_goverment/store_non_goverment') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nama Client</label>
                  <input type="text" name="nama_klien" class="form-control" placeholder="Nama Client">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                    <label>Jenis Client</label>
                    <select name="id_tipes" class="form-control">
                      @foreach ($project as $item)
                          <option value="{{ $item->id }}">{{ $item->jenis_klien }}</option>
                      @endforeach
                    </select>
                  </div>
              </div>
              <div class="float-right mt-3">
                <button type="submit" class="btn btn-primary rounded-pill">Simpan</button>
            </form>
            <a href="route{{ 'admin/non_goverment' }}"><button type="button" class="btn btn-danger rounded-pill">Kembali</button></a>
        </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection