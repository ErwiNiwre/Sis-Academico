<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <title>Incos - El Alto</title> --}}
  <title>@yield('titulo')</title>

  {{-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> --}}
  {{-- Boostrap 3.3.7 --}}
  <link rel="stylesheet" href="{!! asset('/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}">
  {{-- Font Awesome --}}
  <link rel="stylesheet" href="{!! asset('/adminLTE/bower_components/font-awesome/css/font-awesome.min.css') !!}">
  {{-- Ionicons --}}
  <link rel="stylesheet" href="{!! asset('/adminLTE/bower_components/Ionicons/css/ionicons.min.css') !!}">
  {{-- Theme style --}}
  <link rel="stylesheet" href="{!! asset('/adminLTE/css/AdminLTE.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('/adminLTE/css/skins/skin-green.min.css') !!}">

  {{-- DataTables --}}
  <link rel="stylesheet" href="{!! asset('/adminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}">
  
  {{--  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>  --}}
  {{--  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  --}}

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  @include('layouts.header')
  
  <!-- sidebar -->
  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section> --}}

    <!-- Main content -->
    <section class="content container-fluid">
      {{-- <!-------------------------- --}}
        {{-- | Your Page Content Here | --}}
          @yield('content')  
      {{-- --------------------------> --}}

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('layouts.footer') 

 
  <div class="control-sidebar-bg">
    
  </div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{!! asset('/adminLTE/bower_components/jquery/dist/jquery.min.js') !!}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{!! asset('/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('/adminLTE/js/adminlte.min.js') !!}"></script>

</body>
</html>