<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ url('/asset/css/style.css') }}">


    <title>Mal Pelayan Publik | Bandung Barat</title>
  </head> 
  <body style="background-color: #EFFFFD">

    @include('navigation.navbar')
      
      <div class="jumbroton text-center text-white" style="
      background-image: url('{{asset('asset/img/bg_home.jpg')}}');
      background-size: cover;
      height: 440px;
      /* margin-top: -130px; */
      ">
          @yield('jumbroton')
      </div>

      <div class="container-fluid mt-4">
          @yield('container')
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  </body>
</html>

