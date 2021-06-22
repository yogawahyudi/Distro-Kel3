@extends('layouts.default')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Tambah Product</li>
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
                <h3 class="card-title">Tambah Product</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Barang</label>
                        <input type="text" name="product_name" Value="{{old('product_name')}}" class="form-control @error('product_name') is-valid @enderror" />
                        @error('product_name') </div class="text-muted">{{$message}} </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori" class="form-control-label">Kategori</label>
                        <input type="text" name="kategori" Value="{{old('kategori')}}" class="form-control @error('kategori') is-valid @enderror" />
                        @error('kategori') </div class="text-muted">{{$message}} </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="desc" class="form-control-label">Deskripsi</label>
                        <textarea name="desc" class="form-control @error('desc') is-invalid @enderror">{{ old('desc') }}</textarea>
                        @error('desc') </div class="text-muted">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-control-label">Harga Barang</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Rp</span>
                            </div>
                        <input type="number" name="price" value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror"/>
                        @error('price') </div class="text-muted">{{$message}}</div>@enderror
                        <div class="input-group-append">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="form-control-label">Stock</label>
                        <input type="number" name="quantity" value="{{old('quantity')}}" class="form-control @error('quantity') is-invalid @enderror"/>
                        @error('quantity') </div class="text-muted">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="file" class="form-control-label">image</label>
                        <div class="custom-file">
                            <label for="file" class="custom-file-label"></label>
                            <input type="file" name="file"  class="custom-file-input @error('file') is-invalid @enderror"/>
                            @error('file') </div class="text-muted">{{$message}}</div>@enderror
                        </div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Tambah Barang</button>

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

