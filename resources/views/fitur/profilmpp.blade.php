<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    {{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}

    <link rel="stylesheet" href="{{ url('/asset/css/style.css') }}">

    <style>
      .carousel-control-next-icon,
      .carousel-control-prev-icon {
        background-color: #00B5D8; 
        padding: 40px;
      }

      .r-image{
        max-width: 100%;
      }

    </style>

</head>
<body>
    <div class="container-fluid">
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
  </div>

  <div class="container-lg">
    <div class="row">
      <div class="col-md col-sm col-xs">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('asset/img/slider1.jpg')}}" class="d-block r-image mx-auto img-fluid rounded-4" height="300px" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('asset/img/slider2.jpg')}}" class="d-block r-image mx-auto img-fluid rounded-4" height="300px" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('asset/img/slider3.jpg')}}" class="d-block r-image mx-auto img-fluid rounded-4" height="300px" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

    <div class="container-lg">
      <div class="row">
        @foreach ($fitur as $fitur)
        <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <a href="#" class="fitur-mpp">
              <div class="card-mpp">
                  <div class=" d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill py-3 fs-3">{{ $fitur }}</h5>
                  </div>
              </div>
          </a>
        </div>
        @endforeach
      </div>  
  
      {{-- <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <a href="#" class="fitur-mpp">
              <div class="card-mpp">
                  <div class=" d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill py-3 fs-3">{{ $fitur[1] }}</h5>
                  </div>
              </div>
          </a>
      </div>
  
      <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <a href="#" class="fitur-mpp">
              <div class="card-mpp">
                  <div class=" d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill py-3 fs-3">{{ $fitur[2] }}</h5>
                  </div>
              </div>
          </a>
      </div>
  
      <div class="col-lg-3 col-md-6 col-sm-12 my-3">
          <a href="#" class="fitur-mpp">
              <div class="card-mpp">
                  <div class=" d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill py-3 fs-3">{{ $fitur[3] }}</h5>
                  </div>
              </div>
          </a>
      </div>
      </div>
    </div> --}}

  </div>

  <div class="container-lg">
    <div class="row">
      <div class="col-md px-5">
        <h2 class="text-center mt-5 mb-2">{{ $title }}</h2>
        {!! $body !!}
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>