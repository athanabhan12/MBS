@extends('layouts.template')

@section('content')

<style>
    
    .profile
    {
       width: 200px;
	   height: 200px;
	   background: #dac52c;
	   border-radius: 100%;
       text-align: center;
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
            <img class="profile" src="{{ asset('storage/' . $tims->image) }}" alt="">
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
                <h2 class="card-title" style="font-weight: bold">Detail Team MBS</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h4 class="text-center" style="text-transform: capitalize">{{ $tims->nama }}</h4>
                <p class="text-center text-bold">{{ $tims->jabatan }}</p>
                <p class="text-center text-bold; text-transform: capitalize">{{ $tims->whatsapp }}</p>
                <p class="text-center text-bold">@ {{ $tims->instagram }}</p>
                <a href="{{ route('admin/team') }}"><button type="button" class="btn btn-danger">Kembali</button></a>
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