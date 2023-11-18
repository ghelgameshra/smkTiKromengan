<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="icon" href="icon_path" type="image/icon type">
    <link rel="stylesheet" href="/css/style.css">
    @yield('icon')
    @vite('resources/js/app.js')
</head>
<body style="font-family: sans-serif">

  @include('partials.navbar')
  @yield('index')
  @include('partials.visiMisiModal')


  @include('partials.footer')

</body>
</html>
