@extends('layouts.default')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
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
          <h3 class="card-title">Pilih Barang</h3>

          <div class="card-tools">
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
                <th>ID</th>
                <th>{{}}</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Tanggal Transaksi</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($items as $item )
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name_cust}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->No_hp}}</td>
                  <td>{{$item->jumlah_product}}</td>
                  <td>{{$item->subtotal}}</td>
                  <td>{{$item->created_at}}</td>
                </tr>
                @empty
                    <tr><td>Data Tidak Ditemukan</td></tr>
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
