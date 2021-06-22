@extends('layouts.default')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Product</h3>

          <div class="card-tools">
                  <a href="{{route('product.create')}}" class="nav-link"><p><i class="fas fa-plus"></i> Add Product</p></a>
          </div>
        </div>
@forelse ($items as $item)

<div class="container d-flex justify-content-center" style="margin: 25px 0 0 0";>
    <div class="row">
        <div class="col" style="margin: auto; width: 957px">
            <div class="card card-body">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="{{asset('storage/product/'.$item->file_path)}}" width="150" height="150" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">{{$item->product_name}}</a> </h6>
                        <p class="mb-3">{{$item->kategori}}</p>
                        <p class="mb-3">{{$item->desc}} </p>
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-3 font-weight-semibold">Rp. {{$item->price}}</h3>
                        <a  class="btn btn-info btn-sm" href="{{route('product.edit', $item->id)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <form action="{{route('product.destroy', $item->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm " >
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@empty
    <span><h1 class="text-center">Data tidak ditemukan</h1></span>
@endforelse

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

@endsection
