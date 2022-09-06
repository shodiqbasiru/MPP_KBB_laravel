@extends('auth.main')
    <div class="container-lg card-login ">
        <div class="row">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                   {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif         

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif       
            <div class="col-md text-center p-2">
                <h1>Login</h1>
            </div>
        </div>

        <div class="row justify-content-center p-3">
            <div class="col-md-5 text-center">
                <h3>Selamat Datang di MPP</h3>
                <p>Kabupaten Bandung Barat</p>
                <img src="{{asset('asset/img/logo.png')}}" alt="" width="250px" class="img-fluid">
            </div>
            <div class="col-md-7">
                <form action="/login" method="POST">
                    @csrf
                    {{-- <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" aria-label="Default select example" name="category">
                            <option selected>Pilih Kategori</option>
                            <option value="1">Pemohon</option>
                            <option value="2">Operator Tenant</option>
                            <option value="3">Administrator</option>
                          </select>
                    </div> --}}
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="name@example.com" autofocus required value={{ old('email') }}>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                        <label class="form-label d-flex justify-content-end"> 
                            <small>
                                <a href="/forgetpass" class="text-decoration-none text-dark">Lupa Password ?</a> 
                            </small>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-1">Masuk</button>
                    <p>Anda Belum Punya Akun MPP? <a href="/daftar">Daftar</a></p> 
                </form>
            </div> 
            
        </div>
    </div>
