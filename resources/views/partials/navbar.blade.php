<nav class="navbar navbar-expand-lg sekolah-color shadow-sm navbar-dark">
  <div class="container">
    <a class="navbar-brand fw-bold text-white d-flex align-items-center gap-2" href="/">
      <img src="/assets/logo-smkti.png" alt="logo-smkti" height="40px">
      {{ $sekolah->name }}</a>
    <button class="navbar-toggler focus-ring-[0px]" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang Kami</a>
        </li>
        {{-- extra --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ekstrakulikuler
          </a>
          <ul class="dropdown-menu">
            @foreach ($ekskul as $data)
            <li><a class="dropdown-item" href="#" style="color: rgb(230, 230, 230)">{{ $data->name }}</a></li>
            @endforeach
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">BKK</a>
        </li>

        <li class="nav-item">
          <button type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#visiMisiModal">
            Visi & Misi
          </button>
        </li>

      </ul>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
        <li class="nav-item border border-warning rounded me-auto">
          <a class="nav-link text-warning fw-bold px-2" href="/pendaftaran-siswa-baru">PPDB {{ now()->format('Y') }}</a>
        </li>

        <li class="nav-item border border-warning rounded me-auto">
          <a class="nav-link text-warning fw-bold px-2 d-flex align-items-center gap-1" href="/login-siswa">
            <i class="bi bi-person-circle"></i>
            <span>Login</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
