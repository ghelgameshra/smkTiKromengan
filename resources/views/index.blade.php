@extends('partials.main')
@section('icon')
  <link rel="icon" href="/storage/assets/logo-smkti.png" type="image/icon type">
@endsection
@section('title')
  {{ $sekolah->name }}
@endsection

@section('index')
  <main class="container">
    @include('partials.backToTop')
    <div class="row mx-auto align-items-center">
      <section class="col-md-4 text-center py-5">
        <img src="/assets/logo-smkti.png" alt="" height="300px">
      </section>
      <aside class="col-md-8 mx-auto py-5">
        <h1 class="h1 fw-bold">{{ $sekolah->name }}</h1>
        <div style="text-align: justify">
          <p>{{ $sekolah->about }}</p>
        </div>
      </aside>
    </div>

    {{-- card fasilitas --}}
  </main>
  <section class="sekolah-color-secondary py-5 rounded-4 rounded-bottom-0 position-relative">
    <span class="position-absolute top-0 start-50 translate-middle fw-semibold fs-5 bg-warning px-4 py-1 rounded">FASILITAS</span>
    <div class="container row justify-content-center mx-auto">
      @foreach ($fasilitas as $data)
      <div class="col-md-3 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold">{{ $data->facility_name }}</h5>
            <p class="card-text">{{ $data->facility_description }}</p>
            <button type="button" id="" class="btn btn-dark">Detail</button>
          </div>
        </div>
        <hr class="border-white">
      </div>
      @endforeach
    </div>

  </section>
  {{-- akhir card fasilitas --}}

  {{-- jurusan --}}
  <div class="accordion container mt-5 py-3 position-relative" id="accordionExample">
    <span class="position-absolute top-0 start-50 translate-middle fw-semibold fs-5 bg-warning px-4 py-1 rounded">JURUSAN</span>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          {{ $jurusanPertama->major_name }}
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <h6 class="fst-italic">Bidang Studi: {{ $jurusanPertama->study }}</h6>
          <p>{{ $jurusanPertama->major_description }}</p>
        </div>
      </div>
    </div>

    @foreach ($jurusan as $data)
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          {{ $data->major_name }}
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <h6 class="fst-italic">Bidang Studi: {{ $data->study }}</h6>
          <p>{{ $data->major_description }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  {{-- akhir jurusan --}}

@endsection
