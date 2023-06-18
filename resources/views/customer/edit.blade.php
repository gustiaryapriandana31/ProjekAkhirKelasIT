@extends('template.main')

@section('container')
<div class="content-wrapper">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom bg-info">
      <h1 class="h2">Update Data Customer</h1>
  </div>   
  
  <div class="col-lg-8">
      <form method="post" action="/customers/update/{{ $customer->id_customer }}" class="mb-5" enctype="multipart/form-data">
          @method('patch')
          @csrf
  
          <div class="mb-3">
            <label for="id_customer" class="form-label">Id Customer</label>
            <input type="text" class="form-control @error('id_customer') is-invalid @enderror" id="id_customer" name="id_customer" autocomplete="on" required autofocus value="{{ old('nama', $customer->id_customer) }}">
            @error('id_customer')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
  
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Customer</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autocomplete="on" required autofocus value="{{ old('nama', $customer->nama_customer) }}">
            @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
  
          <div class="mb-3">
            <label for="notelp" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control @error('notelp') is-invalid @enderror" id="notelp" name="notelp" required value="{{ old('notelp', $customer->no_telp) }}">
            @error('notelp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror 
          </div>
  
          <div class="mb-3">
              <label for="jenkel" class="form-label">Jenis Kelamin</label>
              <input type="text" class="form-control @error('jenkel') is-invalid @enderror" id="jenkel" name="jenkel" required value="{{ old('jenkel', $customer->jenis_kelamin) }}">
              @error('jenkel')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror 
          </div>
            
          <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat', $customer->alamat) }}">
              @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror 
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection