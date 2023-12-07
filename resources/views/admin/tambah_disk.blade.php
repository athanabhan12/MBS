@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Produk (Storage)</h1>
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
            <h3 class="card-title">Tambah Data Produk (Storage)</h3>

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
            <form action="{{ url('/disk/store_disk') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Storage</label>
                  <input type="text" name="nama_produk" class="form-control" placeholder="Nama Storage">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" rows="5"></textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label>Gambar 1</label>
                    <input type="file" class="form-control" name="image" id="image">
                  </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Spesifikasi</label>
                  <textarea class="form-control" name="spesifikasi" rows="5"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label>Gambar 2</label>
                    <input type="file" class="form-control" name="image1" id="image">
                  </div>
                </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label>Gambar 3</label>
                    <input type="file" class="form-control" name="image2" id="image">
                  </div>
                </div>
              <div class="col-md-12">
                <div class="form-group">
                    <label>Kategori Barang</label>
                    <select name="id_categories" class="form-control">
                      @foreach ($produk as $item)
                          <option value="{{ $item->id }}">{{ $item->category }}</option>
                      @endforeach
                    </select>
                  </div>
              </div>
              <div class="float-right mt-3">
                <button type="submit" class="btn btn-primary rounded-pill">Simpan</button>
            </form>
            <a href="{{ route('admin/disk') }}">
                <button type="button" class="btn btn-danger rounded-pill">Kembali</button>
            </a>
        </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection