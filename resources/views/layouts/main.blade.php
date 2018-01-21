<!DOCTYPE html>
<html lang="@yield('lang', config('app.locale', 'en'))">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>@yield('title', config('app.name', 'AdminLTE'))</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Styles -->
  @section('styles')
  <link href="{{ mix('/css/admin-lte.css') }}" rel="stylesheet">
  @show

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  @stack('head')
</head>

<body class="hold-transition skin-{{ config('admin-lte.skin', 'blue') }} {{ config('admin-lte.layout', 'sidebar-mini') }}">
  <div id="app" class="wrapper">

    <!-- Main Header -->
    @include('admin-lte::layouts.main-header.main')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin-lte::layouts.main-sidebar.main')

    <!-- Content Wrapper. Contains page content -->
    @include('admin-lte::layouts.content-wrapper.main')

    <!-- Main Footer -->
    @include('admin-lte::layouts.main-footer.main')

    <!-- Control Sidebar -->
    {{-- @include('admin-lte::layouts.control-sidebar.main') --}}
  </div>
  @section('scripts')
  <script src="{{ mix('/js/manifest.js') }}" charset="utf-8"></script>
  <script src="{{ mix('/js/vendor.js') }}" charset="utf-8"></script>
  <script src="{{ mix('/js/admin-lte.js') }}" charset="utf-8"></script>
  @show
  @stack('body')
</body>
</html>
