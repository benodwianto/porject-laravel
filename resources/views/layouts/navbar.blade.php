<header style="background-color: $gray-400;">
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container-fluid fs-5">
      <a class="navbar-brand" href="/"><h3 class="d-inline">GegePedia</h3></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kategori">Promo</a>
          </li>

          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kategori
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach ($barang as $brg)
                <li><a class="dropdown-item" href="/belis?kategori={{ $brg->kategori->nama_kategori }}">{{ $brg->kategori->nama_kategori }}</a></li>
              @endforeach
            </ul> --}}
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/belis">Belanja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">| <i class="bi bi-shop"></i> <small>toko</small></a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Selamat Datang, {{ auth()->user()->username }} 
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#"><i class="bi bi-person-square"></i> Profil</a></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <form action="/logout" method="POST">
                      @csrf
                      <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i> Keluar</button>
                  </form>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/login">| <i class="bi bi-bell-fill"> |</i></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/login"><i class="bi bi-cart3"> |</i></a>
          </li>
          @else
          <li class="nav-item">
              <a class="nav-link" href="/login"><i class="bi bi-bell-fill"></i> |</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/login"><i class="bi bi-cart3"></i> |</a>
          </li>
          <li class="nav-item">
              <a class="nav-link btn" href="/login"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
          </li>
          <li class="nav-item">
              <a class="nav-link btn btn-info" href="/register"><i class="bi bi-incognito"></i> Daftar</a>
          </li>
          @endauth
      </ul>
      
      </div>
    </div>
  </nav>
</header>