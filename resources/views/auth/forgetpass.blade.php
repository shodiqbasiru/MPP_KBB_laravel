<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('/asset/css/style.css') }}">
</head>
<body class="signup">
    <div class="container-sm card-signup ">
        <div class="row justify-content-center py-5 ">
            <div class="col-md-5 text-center ps-5">
                <h3>Selamat Datang di MPP</h3>
                <p>Kabupaten Bandung Barat</p>
                <img src="{{asset('asset/img/logo.png')}}" alt="" width="250px" class="mx-auto d-block">
            </div>
            <div class="col-md-7 ps-5">
                <form class="row g-3">
                    <div class="col-12 text-center">
                        <img src="{{ url('/asset/img/profil.jpg') }}" alt="" class="img-thumnail f-profil" width="100px" height="100px">
                    </div>
                    <div class="col-12">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" placeholder="NIK">
                    </div>
                    <div class="col-md-12">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Kirim kata sandi baru</button>
                    </div>
                    <div class="col-12">
                      <p>Anda sudah punya akun MPP? <a href="/login">Masuk</a></p>
                    </div>
                </form>
            </div>    
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>