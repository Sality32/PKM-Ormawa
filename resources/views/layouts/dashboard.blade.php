<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Pengajuan Program Ormawa @yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link rel="apple-touch-icon" href="{{asset('assets/img/apple-touch-icon.png')}}" />
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}">
    <!-- Bootstrap Core -->
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}"/>

    <!-- Material Dashboard CSS -->
    <link rel="stylesheet"  href="{{asset('assets/lib/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets
    /lib/bootstrap-fileupload/bootstrap-fileupload.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap-datepicker/css/datepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap-timepicker/compiled/timepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/bootstrap-datetimepicker/css/datetimepicker.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/table-responsive.css')}}">
    
  </head>
  	<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{asset('assets/img/FOTO_kosong.png')}}" class="img-circle" width="150"></a></p>
          <h5 class="centered">NAMA ANGGOTA</h5>
          <h5 class="centered">JABATAN</h5>
          <h5 class="centered"><a href="" class="btn btn-primary" ><i class="fa fa-user"></i><span> PROFILE</span></a> <a class="btn  btn-danger " href=""><i class="fa fa-sign-out"></i><span> LOGOUT</span></a></h5>
          <li class="nav-item">
            <a class="{{Request::is('ormawa/listProposal')?'active':''}}" href="/ormawa/listProposal">
              <i class="fa fa-home"></i>
              <span>Home</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="{{Request::is('bem/listPengajuan')?'active':''}}" href="/bem/listPengajuan">
              <i class="fa fa-home"></i>
              <span>Home BEM PENGAJUAN</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="{{Request::is('bem/listKegiatan')?'active':''}}" href="/bem/listKegiatan">
              <i class="fa fa-home"></i>
              <span>Home BEM PELAKSANAAN ORMAWA</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="{{Request::is('menejemen/listPengajuan')?'active':''}}" href="/manajemen/listPengajuan">
              <i class="fa fa-home"></i>
              <span>Home Pengajuan Kegiatan</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="{{Request::is('menejemen/listPengajuan')?'active':''}}" href="/manajemen/listPengajuan">
              <i class="fa fa-home"></i>
              <span>Home Pelaksanaan Kegiatan</span>
              </a>
          </li>
          <li class="nav-item">
            <a href="/ormawa/formPengajuanProker" class="{{Request::is('ormawa/formPengajuanProker')?'active':''}}">
              <i class="fa fa-tasks"></i>
              <span>Form Pengajuan Proker</span>
            </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
</section>
<div class="content py-5">
      <div class="container-fluid">
        @yield('content')
      </div>
</div>
<script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('assets/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('assets/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('assets/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('assets/lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  <script src="{{asset('assets/lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/lib/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/lib/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/lib/bootstrap-daterangepicker/date.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/lib/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/lib/bootstrap-daterangepicker/moment.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/lib/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
  <script src="{{asset('assets/lib/advanced-form-components.js')}}"></script>


  </body>
</html>
