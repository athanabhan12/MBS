@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Table Pengguna</h1>
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin/index') }}">Home</a></li>
              <li class="breadcrumb-item active">Pengguna</li>
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
                <h3 class="card-title">Table Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('/pengguna/create') }}" class="btn btn-success mb-3"><i class="fa-solid fa-plus mr-2"></i>TAMBAH
                DATA</a>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th class="text-center">ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($penggunas as $item)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->password }}</td>
                    <td class="text-center">
                      <a href="{{ url('/pengguna/edit') }}/{{ $item->id }}">
                        <button type="button" class="btn btn-primary">Edit</button></a>
                        <a href="{{ url('/pengguna/delete') }}/{{ $item->id }}">
                        <button type="button" class="btn btn-danger">Delete</button>
                      </a> 
                  </td>
                  </tr>
                  @endforeach
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
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