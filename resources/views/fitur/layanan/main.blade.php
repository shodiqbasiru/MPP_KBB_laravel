<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ url('/asset/css/style.css') }}">

    <style>
        .layanan {
            background-color: #eee;
            border-bottom: 2px solid #00B5D8;
        }

        .myCard {
            max-width: 400px;
            min-height: 10rem;
            padding: 15px;
            box-shadow: 0px 7px 15px 3px #00B5D8;
        }

        .myCard img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 3px;
        }

        .modal {
            width: 100%;
        }

        .responsive {
            width: 100%;
            height: auto;
        }

        /* responsive card layanan */
        @media (max-width: 992px) {
            .myCard {
                margin: 20px auto ;
                min-height: 10rem;
            }

            .myCard button {
                text-align: center;
            }

            .h3 {
                text-align: center;
            }
        }
        
    </style>

  </head>
<body>

    
    @include('fitur.layanan.header')


    <div class="jumbroton">
        @yield('container')
    </div>  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
