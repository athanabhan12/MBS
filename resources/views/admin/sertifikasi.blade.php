@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Table Sertifikasi MBS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin/index') }}">Home</a></li>
              <li class="breadcrumb-item active">Sertifikasi</li>
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
                <h3 class="card-title">Table Sertifikasi MBS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('/sertifikasi/create_sertifikasi') }}" class="btn btn-success mb-3"><i class="fa-solid fa-plus mr-2"></i>TAMBAH
                DATA</a>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Sertifikasi</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($sertifikasi as $item)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_sertifikat }}</td>
                    <td class="text-center"><img src="{{ asset('storage/' . $item->image) }}" width="70px" alt=""></td>
                    <td class="text-center">
                      <a href="{{ url('/sertifikasi/edit_sertifikasi') }}/{{ $item->id }}">
                        <button type="button" class="btn btn-primary">Edit</button>
                      </a>
                      <a href="{{ url('/sertifikasi/delete_sertifikasi') }}/{{ $item->id }}">
                        <button type="button" class="btn btn-danger">Delete</button>
                      </a>
                  </td>
                  </tr>
                  @endforeach
                  <tfoot>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Sertifikasi</th>
                    <th class="text-center">Gambar</th>
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