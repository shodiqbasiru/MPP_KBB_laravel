<header class="navbar sticky-top bg-light flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/" style="color: #00B5D8; background-color: white;"><h5>Mal Pelayanan Publik</h5></a>
    <input class="form-control form-control-light w-100 rounded-0 border-0 bi bi-search" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap hover">
        <form action="/logout" method="POST">
          @csrf
          <button class="dropdown-item nav-link px-3 logout"><i class="bi bi-box-arrow-right"></i> logout</button>
        </form>
      </div>
    </div>
</header>