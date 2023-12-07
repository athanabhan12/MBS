@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Table Produk Software</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
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
                <h3 class="card-title">Table Produk Software</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('/software/create_software') }}" class="btn btn-success mb-3"><i class="fa-solid fa-plus mr-2"></i>TAMBAH
                DATA</a>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Software</th>
                    <th>Deskripsi</th>
                    <th>Spesifikasi</th>
                    <th>Gambar</th>
                    <th class="text-center">ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($products_software as $item)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_produk }}</td>
                    <td style="font-size: 15px">{{ Str::limit($item->deskripsi, 20) }}</td>
                    <td style="font-size: 15px">{{ Str::limit($item->spesifikasi, 20) }}</td>
                    <td class="text-center"><img src="{{ asset('storage/' . $item->image) }}" width="70px" alt=""></td>
                    <td class="text-center">
                      <a href="{{ url('/software/edit_software') }}/{{ $item->id }}">
                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-pencil m-2"></i></button></a>
                        <a href="{{ url('/software/hapus_software') }}/{{ $item->id }}">
                        <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash m-2"></i></button>
                      </a> 
                        <a href="{{ url('/software/detail_software') }}/{{ $item->id }}">
                        <button type="button" class="btn btn-success"><i class="fa-regular fa-bookmark m-2"></i></button>
                      </a> 
                  </td>
                  </tr>
                  @endforeach
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Software</th>
                    <th>Deskripsi</th>
                    <th>Spesifikasi</th>
                    <th>Gambar</th>
                    <th class="text-center">ACTION</th>
                  </tr>
                </tbody>
                  </tfoot>
                </table>
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