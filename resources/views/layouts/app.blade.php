<!doctype html>
<!--html lang="{{ str_replace('_', '-', app()->getLocale()) }}"-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Jquery JS-->
  <script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" ></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  @include('themes.head')
</head>

<body class="animsition">
  <div class="page-wrapper">
    @include('layouts.navbar_mobile')
    @include('layouts.sidebar')
    <div class="page-container">
      @include('layouts.navbar')
      <div class="main-content">
        @yield('content')
      </div>
    </div>
  </div>
  @include('themes.script')
</body>

</html>
