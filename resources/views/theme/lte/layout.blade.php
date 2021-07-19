<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Logics | Aster</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- icono -->
  <!-- <link rel="icon" type="image/png" href="/imágenes/mifavicon.png" > -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<!DOCTYPE html>
  <html style="height: auto;" class="" lang="en"><head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AdminLTE 3 | Fixed Sidebar</title>
    
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
    </head>
    <body class="sidebar-mini layout-fixed layout-navbar-fixed sidebar-collapse" style="height: auto;">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset("assets/$theme/dist/img/AdminLTELogo.png")}}" alt="AdminLTELogo" height="60" width="60">
      </div>
      <!-- Navbar -->
      @include("theme/$theme/navbar")
      <!-- /.navbar -->

    
      <!-- Menu lateral izquierdo -->
      @include("theme/$theme/aside")
      <!-- / Menu lateral izquierdo -->

    
      <!-- Content Wrapper. Contains page content -->
      @include("theme/$theme/wrapper")
      <!-- /.content-wrapper -->

    
      <!-- footer -->
      @include("theme/$theme/footer")
      <!-- /. footer -->

    
      <!-- Control Sidebar -->
      @include("theme/$theme/sidebar")
      <!-- /.control-sidebar -->
    <div id="sidebar-overlay"></div></div>
    <!-- ./wrapper -->
    
    <!-- jQuery -->
    <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset("assets/$theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>
    
    
    </body>
</html>