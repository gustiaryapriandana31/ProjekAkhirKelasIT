@extends('content.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Transaksi</h1>
</div>    

@if (session()->has('success'))
    <div class="alert alert-success col-lg-9" role="alert">
      {{ session('success') }}
    </div>
@endif

<div class="table-responsive col-lg-9">
    <a href="{{ route('create-transaction') }}" class="btn btn-primary mb-3">Tambah Transaksi Baru</a>

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Id Transaksi</th>
          <th scope="col">Nama Customer</th>
          <th scope="col">Jenis Barang</th>
          <th scope="col">Berat</th>
          <th scope="col">Harga</th>
          <th scope="col">Total Harga</th>
          <th scope="col">Tanggal Masuk</th>
          <th scope="col">Tanggal Keluar</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id_trx }}</td>
                <td>{{ $transaction->customer->nama_customer }}</td>
                <td>{{ $transaction->jenis_barang }}</td>
                <td>{{ $transaction->berat }}</td>
                <td>{{ $transaction->harga }}</td>
                <td>{{ $transaction->total_harga }}</td>
                <td>{{ $transaction->tanggal_masuk }}</td>
                <td>{{ $transaction->tanggal_keluar }}</td>
                <td>{{ $transaction->status }}</td>
                <td> ACTION
                  {{-- <a href="/dashboard/posts/{{ $customer->slug }}" class="badge bg-primary"><span data-feather="eye" ></span></a> --}}

                  {{-- <a href="{{ route('edit-customer', ['customer_id'=>$customer->id]) }}" class="badge bg-warning"><span data-feather="edit"></span>Update</a>

                  <form action={{ route('delete-customer', [$customer->id]) }}"  method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Apakah kamu yakin mau menghapus data ini???')"><span data-feather="x-circle" ></span>Delete</button>
                  </form> --}}
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection