<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
       
    <div class="position-sticky pt-3 sidebar-sticky" style="background-color: white">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-12 px-0 m-0">    
                <img src="{{ url('asset/img/profil.jpg') }}" class="mx-auto d-block r-img" alt="" width="50px" height="50px" style="border-radius: 50%; object-fit: cover; margin: 0;">
            </div>
            <div class="col-xl-8 col-lg-12 px-0 r-alignment">                  
                <h5>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h5>
                <p>pemohon</p>
            </div>
        </div>
      

      <ul class="nav flex-column">
        
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/bankdata">
            <span data-feather="file" class="align-text-bottom"></span>
            <i class="bi bi-house-door ms-2"></i> My Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/dokpribadi">
            <span data-feather="file" class="align-text-bottom"></span>
            <i class="bi bi-file-earmark-text ms-2"></i> Dokumen Pribadi
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            <i class="bi bi-file-earmark-text ms-2"></i> Dokumen Niaga
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users" class="align-text-bottom"></span>
            <i class="bi bi-file-earmark-text ms-2"></i> Dokumen Sejarah
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users" class="align-text-bottom"></span>
            <i class="bi bi-file-earmark-text ms-2"></i> Dokumen Pemerintah
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users" class="align-text-bottom"></span>
            <i class="bi bi-file-earmark-text ms-2"></i> Dokumen Perizinan
          </a>
        </li>
      </ul>

      <hr>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            <i class="bi bi-gear"></i> Settings
          </a>
        </li>
      </ul>
    </div>
  </nav>