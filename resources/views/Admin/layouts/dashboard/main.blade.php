<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('pageTitle')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset(ASSET.'bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset(ASSET.'bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset(ASSET.'bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset(ASSET.'dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset(ASSET.'dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset(ASSET.'bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset(ASSET.'bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset(ASSET.'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset(ASSET.'bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  
  <script src="{{asset(ASSET.'bower_components/jquery/dist/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
  @yield('headLink')
 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <style>
    .has-error{
/*        border: 2px solid red;
        border-radius: 5px;*/
    }
    .alert{
        display: none;
    }
</style>
<script type="text/javascript">
    var admin = {};
    var BASE_URL = "{{ url('/') }}";
    var ADMIN = "{{ ADMIN }}";
    var ASSET = "{{ ASSET }}";
    var LANGUAGE = $('#language').val();
</script>
</head>
  
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <input type="hidden" value="{{ csrf_token() }}" name='csrf-token' id='csrf-token'>
    
    <!-- Navbar -->
     @include('Admin.layouts.dashboard.navbar')
    <!-- EndNavbar -->
    
    <!-- Main Sidebar Container -->
    @include('Admin.layouts.dashboard.sidebar_menu')
    <!-- End Main Sidebar Container -->
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @yield('pageHeadTitle')
            <small></small>
          </h1>
        </section>
            
            @yield('content')
     </div>
    
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset(ASSET.'bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset(ASSET.'bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{asset(ASSET.'bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>


<!-- Bootstrap 3.3.7 -->
<script src="{{asset(ASSET.'bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset(ASSET.'bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset(ASSET.'bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset(ASSET.'bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset(ASSET.'bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset(ASSET.'bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset(ASSET.'bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset(ASSET.'bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset(ASSET.'bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset(ASSET.'dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset(ASSET.'dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset(ASSET.'dist/js/demo.js')}}"></script>
<!--<script src="{{asset('js/scripts.js')}}"></script>-->
<script src="{{asset(ASSET.'js/common.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        admin.common.initialize();
    });
</script>


@yield('bottomscript')
</body>
</html>
