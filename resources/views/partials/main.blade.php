<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/storage/assets/logo-smkti.png" type="image/icon type">
    @yield('jquery')
    @vite('resources/js/app.js')
</head>
<body style="font-family: sans-serif" class="position-relative">

  @include('partials.backToTop')
  @include('partials.navbar')
  @yield('index')
  @include('partials.visiMisiModal')


  @include('partials.footer')

  @stack('script')

</body>
</html>
