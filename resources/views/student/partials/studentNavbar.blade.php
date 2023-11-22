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
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        </li>

        <li class="nav-item">
          <button type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#panduanPendaftaranModal">
            Panduan Pendaftaran
          </button>
        </li>

      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
            {{ auth()->user()->nisn }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-white" href="#">Profile</a></li>
            <li><a class="dropdown-item text-white" href="#">Setting</a></li>
            <li><hr class="dropdown-divider"></li>
              <form action="{{ route('logout') }}" method="post" id="logout-form">
                @csrf
                <button class="dropdown-item text-white btn" type="submit">Logout</button>
              </form>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>
