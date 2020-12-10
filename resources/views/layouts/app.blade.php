<!doctype html>
<!--html lang="{{ str_replace('_', '-', app()->getLocale()) }}"-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

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
