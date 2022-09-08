@extends('dashboard.profil.layouts.main')

@section('container')
  <div class="row justify-content-center">
      <div class="col-xl-3">
          <div class="col-lg-12">
              
              <div class="card card-profil shadow text-center pb-3">
                  <img src="{{ url('asset/img/profil.jpg') }}" class="rounded-4 mx-auto d-block mt-4 mb-2" alt="" width="191px" height="199px" alt="..." style="object-fit: cover;">
                  <h5>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h5>
                  <p>{{ auth()->user()->nik }}</p>
                  <p>Pemohon</p>
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
          <h2 class=" my-4 r-alignment">Profil</h2>
          <div class="row">
              <div class="col-xl-12 col-12">
                  <div class="card card-profil shadow mb-3">
                      <h5 class="px-4 py-2">Biodata</h5>
                      <form action="/profil/{{ $slug }}" method="POST">
                        @method('put')
                        @csrf                            
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="nik" class="col-form-label px-4">NIK</label>
                              </div>
                              <div class="col-6 mb-1">   
                                  <input type="text" class="form-control" id="nik" name="nik" 
                                  @foreach ($users as $user)
                                    value="{{ old('nik', $user->nik) }}"
                                  @endforeach>
                              </div>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-5 mb-1">
                                    <label for="first_name" class="col-form-label px-4">Nama Depan</label>
                                </div>
                                <div class="col-6 mb-1">
                                    <input type="text" class="form-control" id="first_name" name="first_name"  @foreach ($users as $user)
                                        value="{{ old('first_name', $user->first_name) }}"
                                    @endforeach>
                                </div>
                            </div>
                            <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="last_name" class="col-form-label px-4">Nama Belakang</label>
                            </div>
                            <div class="col-6 mb-1">
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                @foreach ($users as $user)
                                    value="{{ old('last_name', $user->last_name) }}"
                                @endforeach>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-5 mb-1">
                                <label for="jenis_kelamin" class="col-form-label px-4">Jenis Kelamin</label>
                            </div>
                            <div class="col-6 mb-1">
                                <input type="text" id="jenis_kelamin" class="form-control" name="jenis_kelamin"
                                @foreach ($users as $user)
                                    value="{{ old('jenis_kelamin', $user->jenis_kelamin) }}"
                                @endforeach>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-5 mb-1">
                                <label for="alamat" class="col-form-label px-4">Alamat</label>
                            </div>
                            <div class="col-6 mb-1">
                                <input type="text" id="alamat" class="form-control" name="alamat"
                                @foreach ($users as $user)
                                    value="{{ old('alamat', $user->alamat) }}"
                                @endforeach>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-5 mb-1">
                                <label for="kel_des" class="col-form-label px-4">Kel. /Desa</label>
                            </div>
                            <div class="col-6 mb-1">
                                <input type="text" id="kel_des" class="form-control" name="kel_des"
                                @foreach ($users as $user)
                                    value="{{ old('kel_des', $user->kel_des) }}"
                                @endforeach>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-5 mb-1">
                                <label for="kecamatan" class="col-form-label px-4">Kecamatan</label>
                            </div>
                            <div class="col-6 mb-1">
                                <input type="text" id="kecamatan" class="form-control" name="kecamatan"
                                @foreach ($users as $user)
                                    value="{{ old('kecamatan', $user->kecamatan) }}"
                                @endforeach>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-5 mb-1">
                                <label for="kota_kab" class="col-form-label px-4">Kota/ Kab.</label>
                            </div>
                            <div class="col-6 mb-1">
                                <input type="text" id="kota_kab" class="form-control" name="kota_kab"
                                @foreach ($users as $user)
                                    value="{{ old('kota_kab', $user->kota_kab) }}"
                                @endforeach>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-5 mb-1">
                                <label for="provinsi" class="col-form-label px-4">Provinsi</label>
                            </div>
                            <div class="col-6 mb-1">
                                <input type="text" id="provinsi" class="form-control" name="provinsi"
                                @foreach ($users as $user)
                                    value="{{ old('provinsi', $user->provinsi) }}"
                                @endforeach>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-5 mb-1">
                                <label for="email" class="col-form-label px-4">Alamat Email</label>
                            </div>
                            <div class="col-6 mb-1">
                                <input type="text" class="form-control" id="email" name="email" 
                                @foreach ($users as $user)
                                    value="{{ old('email', $user->email) }}"
                                @endforeach>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-5 mb-1">
                                <label for="no_telpon" class="col-form-label px-4">No Telpon</label>
                            </div>
                            <div class="col-6 mb-1">
                                <input type="text" class="form-control" id="no_telpon" name="no_telpon"
                                @foreach ($users as $user)
                                    value="{{ old('no_telpon', $user->no_telpon) }}"
                                @endforeach>
                            </div>
                        </div>
                            
                    </form>
                      <h5 class="px-4 py-2">Pekerjaan</h5>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="jabatan" class="col-form-label px-4">Jabatan</label>
                              </div>
                              <div class="col-6 mb-1">
                                <input type="text" id="jabatan" class="form-control" name="jabatan"
                                @foreach ($users as $user)
                                    value="{{ old('jabatan', $user->jabatan) }}"
                                @endforeach>
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="nama_perusahaan" class="col-form-label px-4">Nama Perusahaan</label>
                              </div>
                              <div class="col-6 mb-1">
                                <input type="text" id="nama_perusahaan" class="form-control" name="nama_perusahaan"
                                @foreach ($users as $user)
                                    value="{{ old('nama_perusahaan', $user->nama_perusahaan) }}"
                                @endforeach>
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="bidang_usaha" class="col-form-label px-4">Bidang Usaha</label>
                              </div>
                              <div class="col-6 mb-1">
                                <input type="text" id="bidang_usaha" class="form-control" name="bidang_usaha"
                                @foreach ($users as $user)
                                    value="{{ old('bidang_usaha', $user->bidang_usaha) }}"
                                @endforeach>
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                  <label for="alamat_perusahaan" class="col-form-label px-4">Alamat Perusahaan</label>
                              </div>
                              <div class="col-6 mb-1">
                                  <input type="text" id="alamat_perusahaan" class="form-control" name="alamat_perusahaan"
                                @foreach ($users as $user)
                                    value="{{ old('alamat_perusahaan', $user->alamat_perusahaan) }}"
                                @endforeach>
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                  <label for="kel_des_perusahaan" class="col-form-label px-4">Kel. /Desa</label>
                              </div>
                              <div class="col-6 mb-1">
                                  <input type="text" id="kel_des_perusahaan" class="form-control" name="kel_des_perusahaan"
                                  @foreach ($users as $user)
                                    value="{{ old('kel_des_perusahaan', $user->kel_des_perusahaan) }}"
                                    @endforeach>
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                  <label for="kecamatan_perusahaan" class="col-form-label px-4">Kecamatan</label>
                              </div>
                              <div class="col-6 mb-1">
                                  <input type="text" id="kecamatan_perusahaan" class="form-control" name="kecamatan_perusahaan"
                                  @foreach ($users as $user)
                                    value="{{ old('kecamatan_perusahaan', $user->kecamatan_perusahaan) }}"
                                    @endforeach>
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                  <label for="kot_kab_perusahaan" class="col-form-label px-4">Kota/ Kab.</label>
                              </div>
                              <div class="col-6 mb-1">
                                  <input type="text" id="kot_kab_perusahaan" class="form-control" name="kot_kab_perusahaan"
                                  @foreach ($users as $user)
                                    value="{{ old('kot_kab_perusahaan', $user->kot_kab_perusahaan) }}"
                                    @endforeach>
                              </div>
                          </div>
                          <div class="row g-3 align-items-center">
                              <div class="col-5 mb-1">
                                <label for="provinsi_perusahaan" class="col-form-label px-4">Provinsi</label>
                              </div>
                              <div class="col-6 mb-1">
                                <input type="text" id="provinsi_perusahaan" class="form-control" name="provinsi_perusahaan"
                                @foreach ($users as $user)
                                    value="{{ old('provinsi_perusahaan', $user->provinsi_perusahaan) }}"
                                @endforeach>
                              </div>
                          </div>
                          <button type="submit" class="btn m-2" style="background-color: #00B5D8; color:white;border: none;">Simpan Perubahan</button>
                        </div>

              </div>
          </div>
      </div>
  </div>
@endsection
