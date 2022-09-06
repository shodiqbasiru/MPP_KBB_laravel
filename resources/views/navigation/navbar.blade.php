<nav class="navbar navbar-expand-lg navbar-light p-0 pt-1">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="{{asset('asset/img/logo.png')}}" alt="" width="60px">
        <p style="float: right" class="fs-5">
          Mall Pelayanan Publik <br>
          <span style="color: #00B5D8;"> Bandung Barat </span>
        </p>
  
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto ms-5 mb-2 ">
          <li class="nav-item">
            <a class="nav-link " href="/profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/dashboard/bankdata">Bank Data</a>
          </li>

            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->first_name }}
                </a>
                <ul class="dropdown-menu text-center py-0 logout">
                  <form action="/logout" method="POST">
                    @csrf
                    <button class="dropdown-item ">
                      <li class="bi bi-box-arrow-right py-2">
                        logout
                      </li>
                    </button>
                  </form>
                </ul>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link btn" style="
                width: 80px;
                height: 40px;
                background-color: #00B5D8;
                color: #fff;
                border-radius: 8px;
                border: none;
                " href="/login">
                Login</a>
              </li>
            @endauth
            
        </ul>
      </div>
    </div>
  </nav>