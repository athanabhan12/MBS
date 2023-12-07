@extends('layouts.template')

@section('content')

<style>
    
    .profile
    {
       width: 150px;
       margin-left: auto;
       margin-right: auto;
       display: block;
    } 
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <img class="profile" src="{{ asset('storage/' . $produk->image) }}" alt="">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title" style="font-weight: bold">Detail Produk Printer</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <h4 class="text-center" style="text-transform: capitalize">{{ $produk->nama_produk }}</h4>
                    </div>
                </div>
               
               <div class="row">
                <div class="col-12 col-lg-6">
                    <h3 class="text-center">Deskripsi</h3>
                    <p class="text-center">{{ $produk->deskripsi }}</p>
                </div>
                <div class="col-12 col-lg-6">
                    <h3 class="text-center">Fungsi</h3>
                    <p class="text-center">{{ $produk->spesifikasi }}</p>
                </div>
               </div>
                <a href="{{ route('admin/printer') }}"><button type="button" class="btn btn-danger mt-4">Kembali</button></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection