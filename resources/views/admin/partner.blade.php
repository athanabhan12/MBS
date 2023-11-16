@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Table Team MBS</h1>
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
                <h3 class="card-title">Table Team MBS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('/team/create') }}" class="btn btn-success mb-3"><i class="fa-solid fa-plus mr-2"></i>TAMBAH
                DATA</a>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Whatsapp</th>
                    <th>Instagram</th>
                    <th>Profile</th>
                    <th class="text-center">ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($partners as $item)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->whatsapp }}</td>
                    <td>{{ $item->instagram }}</td>
                    <td class="text-center">{{ $item->profile }}</td>
                    <td class="text-center">
                      <a href="{{ url('/team/edit-team') }}/{{ $item->id }}">
                        <button type="button" class="btn btn-primary">Edit</button></a>
                        <a href="{{ url('/team/hapus') }}/{{ $item->id }}">
                        <button type="button" class="btn btn-danger">Delete</button>
                      </a> 
                        <a href="{{ url('/team/detail') }}/{{ $item->id }}">
                        <button type="button" class="btn btn-success">Detail</button>
                      </a> 
                  </td>
                  </tr>
                  @endforeach
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Whatsapp</th>
                    <th>Instagram</th>
                    <th>Profile</th>
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