@extends('layouts.base_admin.base_dashboard')
@section('judul', 'Halaman Dashboard')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Isikan Data Pemilik Hewan!') }}

                         <!-- Slide 1 -->
                         <div class="slide" id="slide1">
                                <center><Strong>
                                        <font size="6px">Data Pemilik</font>
                                    </strong></center>
                                <br>
                                <div class="row mb-3">
                                    <label for="nama_lengkap"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Nama Lengkap:') }}</label>
                                    <div class="col-md-9">
                                        <input id="nama_lengkap" type="text"
                                            class="form-control @error('nama_lengkap') is-invalid @enderror"
                                            name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                                            autocomplete="nama_lengkap" placeholder="Masukkan nama lengkap anda" required>
                                        @error('nama_lengkap')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="tempat_lahir"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Tempat Lahir:') }}</label>
                                    <div class="col-md-3">
                                        <input id="tempat_lahir" type="text"
                                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                                            name="tempat_lahir" value="{{ old('tempat_lahir') }}"
                                            autocomplete="tempat_lahir" placeholder="Masukkan tempat lahir anda" required>
                                        @error('tempat_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label for="tanggal_lahir"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Tanggal Lahir:') }}</label>
                                    <div class="col-md-3">
                                        <input id="tanggal_lahir" type="date"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                            autocomplete="tanggal_lahir"  autofocus>
                                        @error('tanggal_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <label for="jenis_kelamin"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Jenis Kelamin:') }}</label>
                                    <div class="col-md-3">
                                        <select id="jenis_kelamin"
                                            class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                            name="jenis_kelamin" required autocomplete="jenis_kelamin" autofocus required>
                                            <option value="Belum_memilih">Belum Memilih</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Email anda:') }}</label>
                                    <div class="col-md-3">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" autocomplete="email"
                                            placeholder="Masukkan email anda" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label for="no_hp"
                                        class="col-md-3 col-form-label text-md-end">{{ __('No hp anda :') }}</label>
                                    <div class="col-md-3">
                                        <input id="no_hp" type="number"
                                            class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                                            value="{{ old('no_hp') }}" placeholder="Masukkan nomor hp" autocomplete="no_hp" autofocus>
                                        @error('no_hp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="alamat"
                                        class="col-md-3 col-form-label text-md-end">{{ __('Alamat Lengkap:') }}</label>
                                    <div class="col-md-9">
                                        <textarea id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                            value="{{ old('alamat') }}" required autocomplete="alamat" placeholder="Masukkan alamat" autofocus required></textarea>
                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary" id="next1">Lanjut</button>
                            </div>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
