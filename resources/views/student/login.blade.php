@extends('partials.main')

@section('jquery')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
@endsection

@section('title')
  Login Siswa
@endsection

@section('index')
  <main class="container py-5 mt-4">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 px-5 px-sm-5 px-md-0">

        <form action="{{ route('login') }}" method="POST" class="me-md-5 card p-4 shadow">
          <p class="h5 fw-bold mb-4">LOGIN AKUN</p>
          @csrf

          @error('email')
            <p class="text-danger" style="font-size: 12px">{{ $message }}</p>
          @enderror
          <div class="mb-3">
            <div class="input-group">
              <label for="email" class="input-group-text">
                <i class="bi bi-envelope-open"></i>
              </label>
              <input id="email" name="email" type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('email') }}">
              @error('email')
              <span class="input-group-text text-danger">
                <i class="bi bi-exclamation-octagon"></i>
              </span>
              @enderror
            </div>
          </div>

          <div class="mb-3">
            <div class="input-group position-relative">
              <label for="password" class="input-group-text">
                <i class="bi bi-key"></i>
              </label>
              <input id="password" name="password" type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1" placeholder="Password">
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

          <button type="submit" class="btn btn-primary w-100 d-flex gap-2 align-items-center justify-content-center py-2">
            <i class="bi bi-box-arrow-in-right"></i>
            Login
          </button>
          <hr>
          <a href="" class="text-center">Lupa kata sandi?</a>
        </form>

      </div>

      <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-none d-md-block my-auto">
        <p class="h3 fw-bold">SISTEM ADMINISTRASI SMKTI</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad praesentium quo voluptates exercitationem doloremque fugit, sint soluta explicabo illo quos, facere asperiores, corrupti quis officia laboriosam consectetur magnam impedit et.</p>
      </div>
    </div>
  </main>
  <script>
    $(document).ready(function(){
      let showPasswordButton = $('#showPassword');
      let showPasswordIcon = $('#showPasswordIcon');
      let passwordForm = $('#password');

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
    });
  </script>
@endsection
