@extends('template.main')

@section('container')
<div class="content-wrapper">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom bg-info">
        <h1 class="h2">Detail Data Transaksi</h1>
    </div>   
    
    <a href="{{ route('all-transactions') }}" class="btn btn-primary mb-3">Kembali </a>

    <div class="col-lg-8">
        <h1>Id Transaksi : {{ $transaction->id_trx }}</h1>
        <h1>Id Customer : {{ $transaction->customer_id }}</h1>
        <h1>Nama Customer : {{ $transaction->customer->nama_customer }}</h1>
        <h1>Nomor Telepon : {{ $transaction->customer->no_telp }}</h1>
        <h1>Jenis Kelamin : {{ $transaction->customer->jenis_kelamin }}</h1>
        <h1>Alamat : {{ $transaction->customer->alamat }}</h1>
        <h1>Jenis Barang : {{ $transaction->jenis_barang }}</h1>
        <h1>Berat : {{ $transaction->berat }}</h1>
        <h1>Harga : {{ $transaction->harga }}</h1>
        <h1>Total Harga : {{ $transaction->total_harga }}</h1>
        <h1>Tanggal Masuk : {{ $transaction->tanggal_masuk }}</h1>
        <h1>Tanggal Keluar : {{ $transaction->tanggal_keluar }}</h1>
        <h1>Status : {{ $transaction->status }}</h1>
    </div>
</div>
@endsection