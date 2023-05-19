@extends('backend/layouts.template')

@section('content')

@include('backend/layouts.header')
@include('backend/layouts.sidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Data Tiket</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Riwayat</a></li>
        <li class="breadcrumb-item active">Tambah Data Tiket</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data Tiket</h5>

              <!-- Horizontal Form -->
              {{-- <form id="pengalaman_kerja_form" method="POST" 
              action="{{ isset($les) ? route('les.update', $les->id) : 
              route('les.store') }}"> --}}
              <form id="pengalaman_kerja_form" method="POST" 
              action="{{ isset($les) ? route('les.update', $les->id) : route('les.store') }}">
                {!! csrf_field() !!}
                {!! isset($les) ? method_field('PUT') : '' !!}
                <input type="hidden" name="id" value=""><br>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" 
                    value="{{ isset($les) ? $les->nama : '' }}" required />
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" 
                    value="{{ isset($les) ? $les->alamat : '' }}" required />
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">bahasa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="bahasa" name="bahasa" 
                    value="{{ isset($les) ? $les->bahasa : '' }}" required />
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="harga" name="harga" 
                    value="{{ isset($les) ? $les->harga : '' }}" required />
                    {{-- <input type="text" class="form-control" id="jumlah_tiket" name="jumlah_tiket" 
                    value="" required /> --}}
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a href="{{ route('les.index') }}" class="btn btn-secondary">
                  {{-- <a href="" class="btn btn-secondary"> --}}
                    Cancel
                  </a>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

      </div>
    </div>

  </div>
</section>

</main><!-- End #main -->

@endsection
