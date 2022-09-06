@extends('auth.main')
    <div class="container-sm card-signup ">

        <div class="row">
            <div class="col-md text-center p-2">
                <h1>Registrasi</h1>
            </div>
        </div>

        <div class="row justify-content-center p-3">
            <div class="col-md-5 col-sm-12 text-center py-1">
                <h3>Selamat Datang di MPP</h3>
                <p>Kabupaten Bandung Barat</p>
                <img src="{{asset('asset/img/logo.png')}}" alt="" width="250px" class="img-fluid">
            </div>
            <div class="col-md-7 col-sm-12">
                <form class="row g-3" action="/daftar" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label for="first_name" class="form-label" >Nama depan</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="Nama depan" name="first_name" required value="{{ old('first_name') }}">
                        @error('first_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label">Nama belakang</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name"  placeholder="Nama belakang" name="last_name" required value="{{ old('last_name') }}">
                        @error('last_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="NIK" name="nik" required value="{{ old('nik') }}">
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="no_telpon" class="form-label">No Telpon</label>
                        <input type="text" class="form-control @error('no_telpon') is-invalid @enderror" id="no_telpon" placeholder="+62852123456" name="no_telpon" required value="{{ old('no_telpon') }}">
                        @error('no_telpon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
                      @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" name="password" required>
                      @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                    <div class="col-12">
                      <p>Anda sudah punya akun MPP? <a href="/login">Masuk</a></p>
                    </div>
                </form>
            </div>    
        </div>
    </div>
