@extends('template.main')

@section('container')
<div class="content-wrapper">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom bg-info">
      <h1 class="h2">Tambah Data Transaksi</h1>
  </div>   
  
  <div class="col-lg-8">
      <h1>{{ $customer->id_customer }}</h1>
      <h1>{{ $customer->nama_customer }}</h1>
      <h1>{{ $customer->no_telp }}</h1>
      <h1>{{ $customer->jenis_kelamin }}</h1>
      <h1>{{ $customer->alamat }}</h1>
      <form method="post" action="{{ route('store-transaction', [$customer->id_customer]) }}" class="mb-5" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="id_trx" class="form-label">Id Transaksi</label>
            <input type="text" class="form-control @error('id_trx') is-invalid @enderror" id="id_trx" name="id_trx" autocomplete="on" required autofocus value="{{ old('id_trx') }}">
            @error('id_trx')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
  
          <div class="mb-3">
            <label for="jenis_barang" class="form-label">Jenis Barang</label>
            <input type="text" class="form-control @error('jenis_barang') is-invalid @enderror" id="jenis_barang" name="jenis_barang" required value="{{ old('jenis_barang') }}">
            @error('jenis_barang')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror 
          </div>
  
          <div class="mb-3">
              <label for="berat" class="form-label">Berat</label>
              <input type="text" class="form-control @error('berat') is-invalid @enderror" id="berat" name="berat" required value="{{ old('berat') }}">
              @error('berat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror 
          </div>
            
          <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required value="{{ old('harga') }}">
              @error('harga')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror 
          </div>
  
          <div class="mb-3">
              <label for="total_harga" class="form-label">Total Harga</label>
              <input type="text" class="form-control @error('total_harga') is-invalid @enderror" id="total_harga" name="total_harga" required value="{{ old('total_harga') }}">
              @error('total_harga')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror 
          </div>
  
          <div class="mb-3">
              <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
              <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" id="tanggal_masuk" name="tanggal_masuk" required value="{{ old('tanggal_masuk') }}">
              @error('tanggal_masuk')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror 
          </div>
  
          <div class="mb-3">
              <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
              <input type="date" class="form-control @error('tanggal_keluar') is-invalid @enderror" id="tanggal_keluar" name="tanggal_keluar" value="{{ old('tanggal_keluar') }}">
              @error('tanggal_keluar')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror 
          </div>
  
          <div class="mb-3">
              <label for="status" class="form-label">Status</label>
              <select class="form-select" name="status">
                  <option value="Belum Lunas" selected>Belum Lunas</option>     
                  <option value="Lunas">Lunas</option>
              </select>
            </div>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
  </div>
</div>
@endsection