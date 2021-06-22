@extends('layouts.default')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Buat Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Buat Transaksi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Buat Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <form action="{{route('transaction.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Customer</label>
                        <input type="text" name="name_cust" Value="{{old('name_cust')}}" class="form-control @error('name_cust') is-valid @enderror" />
                        @error('name_cust') </div class="text-muted">{{$message}} </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="No_hp" class="form-control-label">Nomor Handphone</label>
                        <input type="text" name="No_hp" Value="{{old('No_hp')}}" class="form-control @error('No_hp') is-valid @enderror" />
                        @error('No_hp') </div class="text-muted">{{$message}} </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="form-control-label">Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
                        @error('alamat') </div class="text-muted">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Buat Transaksi Barang</button>

                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection

