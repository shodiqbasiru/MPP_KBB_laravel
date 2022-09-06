<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Profil</title>    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    
    <!-- Custom styles for this template -->
    <link href="{{ url('/asset/css/dashboard.css') }}" rel="stylesheet">
</head>
<body>

    <div class="container-fluid border-bottom">
        <div class="row pt-2 mb-1">
          <div class="col-md-3">
            <a href="/">
              <img src="{{asset('asset/img/logo.png')}}" class="mx-auto d-block" alt="" width="60px">
            </a>    
          </div>
          <div class="col-md-6 text-center t-color">
            <h4>Mal Pelayanan Publik</h4>
            <p>Kabupaten Bandung Barat</p>
          </div>
          <div class="col-md-3">
            <a href="/">
              <img src="{{asset('asset/img/logo.png')}}" class="mx-auto d-block" alt="" width="60px">
            </a>
          </div>
        </div>
    </div>

    <div class="container-fluid mt-2">
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
                    <div class="col-xl-6 col-lg-12">
                        <div class="card card-profil shadow pb-3 mb-3">
                            <h5 class="px-4 py-2">Biodata</h5>
                            <form action="/profil" method="POST">
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="nik" class="col-form-label px-4">NIK</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="text" id="nik" class="form-control" name="nik">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="first_name" class="col-form-label px-4">Nama Depan</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="text" id="first_name" class="form-control" name="first_name">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="last_name" class="col-form-label px-4">Nama Belakang</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="text" id="last_name" class="form-control" name="last_name">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="jenis_kelamin" class="col-form-label px-4">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="text" id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="alamat" class="col-form-label px-4">Alamat</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="text" id="alamat" class="form-control" name="alamat">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="kel_des" class="col-form-label px-4">Kel. /Desa</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="text" id="kel_des" class="form-control" name="kel_des">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="kecamatan" class="col-form-label px-4">Kecamatan</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="text" id="kecamatan" class="form-control" name="kecamatan">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="kota_kab" class="col-form-label px-4">Kota/ Kab.</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="text" id="kota_kab" class="form-control" name="kota_kab">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="provinsi" class="col-form-label px-4">Provinsi</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="text" id="provinsi" class="form-control" name="provinsi">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="email" class="col-form-label px-4">Alamat Email</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="email" id="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="no_telpon" class="col-form-label px-4">No Telpon</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="text" id="no_telpon" class="form-control" name="no_telpon">
                                    </div>
                                </div>
                                <div class="mt-2 p-4">
                                    <button type="submit" class="btn" style="background-color: #00B5D8; color: white;">Simpan</button>
                                </div>      
                            </form>
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
                                    <div class="col-6 mb-1">
                                      <input type="text" id="jabatan" class="form-control" name="jabatan">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="nama_perusahaan" class="col-form-label px-4">Nama Perusahaan</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="text" id="nama_perusahaan" class="form-control" name="nama_perusahaan">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="bidang_usaha" class="col-form-label px-4">Bidang Usaha</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="text" id="bidang_usaha" class="form-control" name="bidang_usaha">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                        <label for="alamat_perusahaan" class="col-form-label px-4">Alamat Perusahaan</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <input type="text" id="alamat_perusahaan" class="form-control" name="alamat_perusahaan">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                        <label for="kel_des" class="col-form-label px-4">Kel. /Desa</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <input type="text" id="kel_des" class="form-control" name="kel_des">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                        <label for="kecamatan" class="col-form-label px-4">Kecamatan</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <input type="text" id="kecamatan" class="form-control" name="kecamatan">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                        <label for="kota_kab" class="col-form-label px-4">Kota/ Kab.</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                        <input type="text" id="kota_kab" class="form-control" name="kota_kab">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-5 mb-1">
                                      <label for="provinsi" class="col-form-label px-4">Provinsi</label>
                                    </div>
                                    <div class="col-6 mb-1">
                                      <input type="text" id="provinsi" class="form-control" name="provinsi">
                                    </div>
                                </div>
                                <div class="mt-2 p-4">
                                    <button type="submit" class="btn" style="background-color: #00B5D8; color: white;">Simpan</button>
                                </div>      
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="dashboard.js"></script>
  </body>
</html>
