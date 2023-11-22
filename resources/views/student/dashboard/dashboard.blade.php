@extends('student.partials.studentMain')
@section('title')
  Dashboard Siswa
@endsection

@section('studentContent')
<main class="container py-5">
  <div class="row">

    <div class="col-12 col-sm-12 col-md-3 col-lg-3 order-1 order-md-0">
      <aside class="card p-3">
          <img src="{{ auth()->user()->profile_photo_path }}" alt="{{ auth()->user()->nisn }}" class="rounded-circle" style="width: 100px; align-self: center">

          <div class="overflow-x-auto mt-3">
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">Nama</th>
                  <td>{{ ucwords(strtolower(auth()->user()->firstname . " " . auth()->user()->middlename . " " . auth()->user()->lastname)) }}</td>
                </tr>
                <tr>
                  <th scope="row">NISN</th>
                  <td>{{ auth()->user()->nisn }}</td>
                </tr>
                <tr>
                  <th scope="row">Email</th>
                  <td colspan="2">{{ auth()->user()->email }}</td>
                </tr>
              </tbody>
            </table>
          </div>


      </aside>
    </div>

    <div class="col-12 col-sm-12 col-md-9 col-lg-9 bg-success order-0">
      <header class="text-center p-3">
        <p class="h3 fw-semibold">Selamat Datang, {{ ucwords(strtolower(auth()->user()->firstname))}}</p>
        <p class="h6 text-warning">Silahkan lengkapi berkas pendaftaranmu!</p>
      </header>

    </div>
  </div>
</main>
@endsection
@push('logout')
<script>
  $(document).ready(function(){
    $('#logOutButton').click(function(){
      alert('ook');
      // $('#logout-form').submit()
    });
  });
</script>
@endpush
