@extends('template.main')

@section('container')
<div class="content-wrapper">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Data Customer</h1>
  </div>    
  
  @if (session()->has('success'))
      <div class="alert alert-success col-lg-9" role="alert">
        {{ session('success') }}
      </div>
  @endif
  
  <div class="table-responsive col-lg-9">
      <a href="{{ route('create-customer') }}" class="btn btn-primary mb-3">Tambah Customer Baru</a>
  
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Id Customer</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Nomor Telepon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($customers as $customer)
              <tr>
                  <td>{{ $customer->id_customer }}</td>
                  <td>{{ $customer->nama_customer }}</td>
                  <td>{{ $customer->jenis_kelamin }}</td>
                  <td>{{ $customer->no_telp }}</td>
                  <td>{{ $customer->alamat }}</td>
                  <td>
                    <a href="{{ route('create-transaction', [$customer->id_customer]) }}" class="badge bg-success"><span data-feather="eye" ></span>Tambah Transaksi</a>
  
                    <a href="{{ route('edit-customer', [$customer->id_customer]) }}" class="badge bg-warning"><span data-feather="edit"></span>Update</a>
  
                    <form action="{{ route('delete-customer', [$customer->id_customer]) }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Apakah kamu yakin mau menghapus data ini???')"><span data-feather="x-circle" ></span>Delete</button>
                    </form>
                  </td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection