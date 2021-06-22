@extends('layouts.default')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Transaksi</h3>

          <div class="card-tools">
                <a href="{{route('transaction.create')}}" class="nav-link"><p><i class="fas fa-plus"></i> Buat </p></a>
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Tanggal Transaksi</th>
                <th>Jumlah Produk</th>
                <th>Total Harga</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($items as $item )

                <tr>
                    <td>{{$item->name_cust}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->No_hp}}</td>
                    <td>{{$item->created_at}}</td>
                    <td colspan="2">@if ($item->product ==0)
                        <a class="nav-item" href="{{route('transaction.show', $item->id)}}">
                            <i class="fa fa eye">Belum ada product Klik untuk tambah product</i></a>
                    @endif</td>
                </tr>
                @empty
                <tr><td class="text-center">Data tidak ditemukan</td></tr>
                @endforelse
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</section>
<!-- /.content -->
</div>


@endsection
