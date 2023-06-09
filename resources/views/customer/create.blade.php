@extends('template.main')

@section('container')
<div class="content-wrapper">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom bg-info">
      <h1 class="h2">Tambah Data Customer</h1>
  </div>   
  
  <div class="col-lg-8">
      <form method="post" action="{{ route('store-customer') }}" class="mb-5" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="id_customer" class="form-label">Id Customer</label>
            <input type="text" class="form-control @error('id_customer') is-invalid @enderror" id="id_customer" name="id_customer" autocomplete="on" required autofocus value="{{ old('id_customer') }}">
            @error('id_customer')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
  
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Customer</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" autocomplete="on" required autofocus value="{{ old('nama') }}">
            @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
  
          <div class="mb-3">
            <label for="notelp" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control @error('notelp') is-invalid @enderror" id="notelp" name="notelp" required value="{{ old('notelp') }}">
            @error('notelp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror 
          </div>
  
          <div class="mb-3">
              <label for="jenkel" class="form-label">Jenis Kelamin</label>
              <input type="text" class="form-control @error('jenkel') is-invalid @enderror" id="jenkel" name="jenkel" required value="{{ old('jenkel') }}">
              @error('jenkel')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror 
          </div>
            
          <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat') }}">
              @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror 
          </div>
  
  
          {{-- <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="hidden" id="alamat" name="alamat" value="{{ old('alamat') }}">
            <trix-editor input="alamat"></trix-editor>
            @error('alamat')
              <p class="text-danger">{{ $message }}</p>  
            @enderror
          </div> --}}
          <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
  </div>
</div>
@endsection