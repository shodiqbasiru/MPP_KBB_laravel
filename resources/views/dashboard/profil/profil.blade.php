@extends('dashboard.profil.layouts.main')

@section('container')
  <div class="row justify-content-center">
      <div class="col-xl-3">
          <div class="col-lg-12">
              
              <div class="card card-profil shadow text-center pb-3">
                  <img src="{{ url('asset/img/profil.jpg') }}" class="rounded-4 mx-auto d-block mt-4 mb-2" alt="" width="191px" height="199px" alt="..." style="object-fit: cover;">
                  <h5>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h5>
                  <p>{{ auth()->user()->nik }}</p>
                  <p>user</p>
              </div>
          </div>
          <div class="col-lg-12">

              <div class="card card-profil shadow mt-3 pb-3">
                  <h5 class="px-4 py-2">Akun Mpp</h5>
                  <form action="/profil" method="POST">
                      <div class="mb-1 px-4">
                          <label for="newPassword" class="form-label">Kata sandi baru</label>
                          <input type="password" class="form-control" id="newPassword" name="newPassword">
                      </div>
                      <div class="mb-2 px-4">
                          <label for="repeatNewPassword" class="form-label">Ulang kata sandi baru</label>
                          <input type="password" class="form-control" id="repeatNewPassword" name="repeatNewPassword">
                      </div>
                      <div class="mb- px-4">
                          <button type="submit" class="btn" style="background-color: #00B5D8; color: white;">Simpan</button>
                      </div>      
                  </form>
              </div>
          </div>
      </div>
      
      <div class="col-xl-8">
          <h2 class="r-alignment mt-2 mb-1">Profil</h2>
          @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                   {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
          @endif
          <div class="py-2">
            <a href="/profil/{{ $slug }}/edit" class="btn col-xl-2 col-12" style="background-color: #00B5D8; color: white;">Edit Data</a>
          </div>       
          <div class="row">
              <div class="col-xl-6 col-lg-12">
                  <div class="card card-profil shadow pb-3 mb-3">
                      <h5 class="px-4 py-2">Biodata</h5>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="nik" class="col-form-label px-4">NIK</label>
                              </div>
                              <div class="col-6 mb-1">: 
                                @foreach ($users as $user)
                                  {{ $user->nik }}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="first_name" class="col-form-label px-4">Nama Depan</label>
                              </div>
                              <div class="col-6 mb-1">: 
                                @foreach ($users as $user)
                                  {{ $user->first_name }}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="last_name" class="col-form-label px-4">Nama Belakang</label>
                              </div>
                              <div class="col-6 mb-1">: 
                                @foreach ($users as $user)
                                  {{ $user->last_name }}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="jenis_kelamin" class="col-form-label px-4">Jenis Kelamin</label>
                              </div>
                              <div class="col-6 mb-1">: 
                                @foreach ($users as $user)
                                  {{ $user->jenis_kelamin }}   
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="alamat" class="col-form-label px-4">Alamat</label>
                              </div>
                              <div class="col-6 mb-1">: 
                                @foreach ($users as $user)
                                  {{ $user->alamat }}     
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="kel_des" class="col-form-label px-4">Kel. /Desa</label>
                              </div>
                              <div class="col-6 mb-1">: 
                                @foreach ($users as $user)   
                                  {{ $user->kel_des}}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="kecamatan" class="col-form-label px-4">Kecamatan</label> 
                              </div>
                              <div class="col-6 mb-1">: 
                                @foreach ($users as $user)
                                  {{ $user->kecamatan }}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="kota_kab" class="col-form-label px-4">Kota/ Kab.</label>
                              </div>
                              <div class="col-6 mb-1">: 
                                @foreach ($users as $user)
                                  {{ $user->kota_kab}}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="provinsi" class="col-form-label px-4">Provinsi</label>
                              </div>
                              <div class="col-6 mb-1">: 
                                @foreach ($users as $user)
                                  {{ $user->provinsi }}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="email" class="col-form-label px-4">Alamat Email</label>
                              </div>
                              <div class="col-6 mb-1">: 
                                @foreach ($users as $user)
                                  {{ $user->email }}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="no_telpon" class="col-form-label px-4">No Telpon</label>
                              </div>
                              <div class="col-6 mb-1">: 
                                @foreach ($users as $user)
                                  {{ $user->no_telpon }}
                                @endforeach
                              </div>
                          </div>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-12">
                  <div class="card card-profil shadow pb-3">
                      <h5 class="px-4 py-2">Pekerjaan</h5>
                      <form action="/profil" method="POST">
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="jabatan" class="col-form-label px-4">Jabatan</label>
                              </div>
                              <div class="col-6 mb-1">:
                                @foreach ($users as $user)
                                  {{ $user->jabatan }}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="nama_perusahaan" class="col-form-label px-4">Nama Perusahaan</label>
                              </div>
                              <div class="col-6 mb-1">:
                                @foreach ($users as $user)
                                  {{ $user->nama_perusahaan}}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="bidang_usaha" class="col-form-label px-4">Bidang Usaha</label>
                              </div>
                              <div class="col-6 mb-1">:
                                @foreach ($users as $user)
                                  {{ $user->bidang_usaha }}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                  <label for="alamat_perusahaan" class="col-form-label px-4">Alamat Perusahaan</label>
                              </div>
                              <div class="col-6 mb-1">:
                                @foreach ($users as $user)
                                  {{ $user->alamat_perusahaan }}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                  <label for="kel_des_perusahaan" class="col-form-label px-4">Kel. /Desa</label>
                              </div>
                              <div class="col-6 mb-1">:
                                @foreach ($users as $user)
                                  {{ $user->kel_des_perusahaan }}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                  <label for="kecamatan_perusahaan" class="col-form-label px-4">Kecamatan</label>
                              </div>
                              <div class="col-6 mb-1">:
                                @foreach ($users as $user)
                                  {{ $user->kecamatan_perusahaan }}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                  <label for="kot_kab_perusahaan" class="col-form-label px-4">Kota/ Kab.</label>
                              </div>
                              <div class="col-6 mb-1">:
                                @foreach ($users as $user)
                                  {{ $user->kot_kab_perusahaan }}
                                @endforeach
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="provinsi_perusahaan" class="col-form-label px-4">Provinsi</label>
                              </div>
                              <div class="col-6 mb-1">:
                                @foreach ($users as $user)
                                  {{ $user->provinsi_perusahaan }}
                                @endforeach 
                              </div>
                          </div>  
                      </form>
                  </div>

              </div>
          </div>
      </div>
  </div>
@endsection



    
        