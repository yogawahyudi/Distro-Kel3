@extends('layouts.default')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fas arrow-left"></i></h1>
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
                <h3 class="card-title">Edit Product {{$item->product_name}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('product.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Barang</label>
                        <input type="text" name="product_name" Value="{{old('product_name') ? old('product_name') : $item->product_name}}" class="form-control @error('product_name') is-valid @enderror" />
                        @error('product_name') </div class="text-muted">{{$message}} </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori" class="form-control-label">Kategori</label>
                        <input type="text" name="kategori" Value="{{old('kategori') ? old('kategori') : $item->kategori}}" class="form-control @error('kategori') is-valid @enderror" />
                        @error('kategori') </div class="text-muted">{{$message}} </div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="desc" class="form-control-label">Deskripsi</label>
                        <textarea name="desc" class="form-control @error('desc') is-invalid @enderror">{{ old('desc') ? old('desc') : $item->desc }}</textarea>
                        @error('desc') </div class="text-muted">{{$message}}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-control-label">Harga Barang</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Rp</span>
                            </div>
                        <input type="number" name="price" value="{{old('price') ? old('price') : $item->price}}" class="form-control @error('price') is-invalid @enderror"/>
                        @error('price') </div class="text-muted">{{$message}}</div>@enderror
                        <div class="input-group-append">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="form-control-label">Stock</label>
                        <input type="number" name="quantity" value="{{old('quantity') ? old('quantity') : $item->quantity}}" class="form-control @error('quantity') is-invalid @enderror"/>
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
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Update Barang</button>

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

