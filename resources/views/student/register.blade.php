@extends('partials.main')
@section('jquery')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
@endsection

@section('title')
Pendaftaran
@endsection

@section('index')
@include('student.panduanPendaftaranModal')
<main class="py-5">

  <header class="container">
    <h1 class="fw-semibold fs-4">PENDAFTARAN SISWA BARU</h1>
    <!-- Button trigger modal -->
    <button type="button" class="sekolah-color px-2 py-1 rounded text-white border-0" data-bs-toggle="modal" data-bs-target="#panduanPendaftaranModal">
      Lihat Panduan Pendaftaran
    </button>
  </header>

  <form action="{{ route('register') }}" method="POST" class="container py-4 mt-3 card mb-5">
  @csrf

    <div class="mb-4">
      <h1 class="fs-5 fw-semibold" style="color: #191D88; margin-bottom: ">Pendaftaran Akun</h1>
      <small class="text-wrap"><span class="text-danger">*</span>Pastikan menggunakan akun email yang sudah terdaftar dan nomor telephone yang aktif</small>
    </div>

    <div class="row">

      {{-- image --}}
      <div class="col-12 col-sm-12 col-md-6 col-lg-4 d-none d-lg-block order-md-last">
        <img src="/assets/logo-smk-bisa.png" alt="logo-smk-bisa" style="margin-top: 30px" class="img-fluid">
      </div>

      <div class="col-12 col-sm-12 col-md-6 col-lg-4">
        <div class="mb-3">
          <div class="input-group">
            <input id="namaDepan" name="firstname" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('firstname') }}" placeholder="Nama Depan Siswa">
            @error('firstname')
            <span class="input-group-text text-danger">
              <i class="bi bi-exclamation-octagon"></i>
            </span>
            @enderror
          </div>
          @error('firstname')
          <p class="text-end text-danger" style="font-size: 12px">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-3">
          <div class="input-group">
            <input id="namaTengah" name="middlename" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('middlename') }}" placeholder="Nama Tengah Siswa">
            @error('middlename')
            <span class="input-group-text text-danger">
              <i class="bi bi-exclamation-octagon"></i>
            </span>
            @enderror
          </div>
          @error('middlename')
          <p class="text-end text-danger" style="font-size: 12px">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-3">
          <div class="input-group position-relative">
            <input id="namaAkhir" name="lastname" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('lastname') }}" placeholder="Nama Akhir Siswa">
            @error('lastname')
            <span class="input-group-text text-danger">
              <i class="bi bi-exclamation-octagon"></i>
            </span>
            @enderror
          </div>
          @error('lastname')
          <p class="text-end text-danger" style="font-size: 12px">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-3">
          <div class="input-group">
            <input id="nisn" name="nisn" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('nisn') }}" placeholder="Nomor Induk Siswa Nasional">
            @error('nisn')
            <span class="input-group-text text-danger">
              <i class="bi bi-exclamation-octagon"></i>
            </span>
            @enderror
          </div>
          @error('nisn')
          <p class="text-end text-danger" style="font-size: 12px">{{ $message }}</p>
          @enderror
        </div>

      </div>

      <div class="col-12 col-sm-12 col-md-6 col-lg-4">

        <div class="mb-3">
          <div class="input-group position-relative">
            <input id="password" name="password" type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Password Baru">
            <button class="input-group-text" type="button" id="showPassword">
              <i class="bi bi-eye-slash" id="showPasswordIcon"></i>
            </button>
            @error('password')
            <span class="input-group-text text-danger">
              <i class="bi bi-exclamation-octagon"></i>
            </span>
            @enderror
          </div>
        </div>

        <div class="mb-3">
          <div class="input-group position-relative">
            <input id="confirmPassword" name="password_confirmation" type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Konfirmasi Kata Sandi">
            <button class="input-group-text" type="button" id="showConfirmPassword">
              <i class="bi bi-eye-slash" id="showConfirmPasswordIcon"></i>
            </button>
            @error('password')
            <span class="input-group-text text-danger">
              <i class="bi bi-exclamation-octagon"></i>
            </span>
            @enderror
          </div>
          @error('password')
          <p class="text-end text-danger" style="font-size: 12px">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-3">
          <div class="input-group">
            <input id="email" name="email" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('email') }}" placeholder="Email Siswa">
            @error('email')
            <span class="input-group-text text-danger">
              <i class="bi bi-exclamation-octagon"></i>
            </span>
            @enderror
          </div>
          @error('email')
          <p class="text-end text-danger" style="font-size: 12px">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-3">
          <div class="input-group">
            <input id="telephone" name="telephone" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('telephone') }}" placeholder="Nomor Telephone Siswa">
            @error('telephone')
            <span class="input-group-text text-danger">
              <i class="bi bi-exclamation-octagon"></i>
            </span>
            @enderror
          </div>
          @error('telephone')
          <p class="text-end text-danger" style="font-size: 12px">{{ $message }}</p>
          @enderror
        </div>

      </div>


    </div>

    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-8">
        <button type="submit" class="btn btn-success w-100">
          <i class="bi bi-send"></i>
          Daftar Akun</button>
      </div>
    </div>

  </form>


</main>
@push('script')
<script>
  $(document).ready(function(){
    let showPasswordButton = $('#showPassword');
    let showPasswordIcon = $('#showPasswordIcon');
    let passwordForm = $('#password');

    let showConfirmPasswordButton = $('#showConfirmPassword');
    let showConfirmPasswordIcon = $('#showConfirmPasswordIcon');
    let passwordConfirmForm = $('#confirmPassword');

    showPasswordButton.click(function(){
      if( 'password' == passwordForm.attr('type') ){
        passwordForm.prop('type', 'text');
        showPasswordIcon.removeClass('bi-eye-slash');
        showPasswordIcon.addClass('bi-eye');
      } else {
        passwordForm.prop('type', 'password');
        showPasswordIcon.removeClass('bi-eye');
        showPasswordIcon.addClass('bi-eye-slash');
      }
    });

    showConfirmPasswordButton.click(function(){
      if( 'password' == passwordConfirmForm.attr('type') ){
        passwordConfirmForm.prop('type', 'text');
        showConfirmPasswordIcon.removeClass('bi-eye-slash');
        showConfirmPasswordIcon.addClass('bi-eye');
      } else {
        passwordConfirmForm.prop('type', 'password');
        showConfirmPasswordIcon.removeClass('bi-eye');
        showConfirmPasswordIcon.addClass('bi-eye-slash');
      }
    });
  });
</script>
@endpush
@endsection
