<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kel3Distro</title>
    @stack('before-stack')
    @include('includes.stylesheet')
    @stack('after-stack')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
      <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>
    @include('includes.navbar')
    @include('includes.sidebar')
    @yield('content')
    @include('includes.footer')
</div>
@stack('before-stack')
@include('includes.script')
@stack('after-stack')
</body>
</html>
