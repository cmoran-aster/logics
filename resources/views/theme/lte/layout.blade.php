<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Logics | Aster</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
       <!-- Select2 -->
       <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2/css/select2.min.css")}}">
       <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
      <!-- Toastr -->
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/toastr/toastr.min.css")}}">
        <!-- DataTables -->
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
      <link rel="stylesheet" href="{{asset("assets/$theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">
     <!-- confirm -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

      @yield('style')
      <style>
        label.requerido:after{
          content: " *";
          color: rgb(182, 24, 24);
        }
      </style>
    </head>
    <body class="sidebar-mini layout-fixed layout-navbar-fixed sidebar-collapse text-sm" style="height: auto;">

        <!-- Modal para mostrar cargando-->
      <div class="modal fade" id="modalCargando"  role="dialog" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Espere..!</h5>
            </div>
            <div class="modal-body text-center">
              <div class="spinner-border text-danger" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
          </div>
        </div>
      </div>

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
    
    <!-- jquery-validation -->
    <script src="{{asset("assets/$theme/plugins/jquery-validation/jquery.validate.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/jquery-validation/additional-methods.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/jquery-validation/localization/messages_es.min.js")}}"></script>
    <!-- Select2 -->
    <script src="{{asset("assets/$theme/plugins/select2/js/select2.full.min.js")}}"></script>
    <!-- Mis Funciones -->
    <script src="{{asset("assets/js/funciones.js")}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset("assets/$theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
    <!-- Toastr -->
    <script src="{{asset("assets/$theme/plugins/toastr/toastr.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset("assets/$theme/plugins/datatables/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}} "></script>
    <script src="{{asset("assets/$theme/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/datatables-buttons/js/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/jszip/jszip.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/pdfmake/pdfmake.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/pdfmake/vfs_fonts.js")}} "></script>
    <script src="{{asset("assets/$theme/plugins/datatables-buttons/js/buttons.html5.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/datatables-buttons/js/buttons.print.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/datatables-buttons/js/buttons.colVis.min.js")}}"></script>
    <!-- confirm -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

    
    <script>
      function alertar(msj,tipo){
        if (tipo == "v") {

          toastr.success(msj,'Logics',{
            "positionClass": "toast-top-center",
            "progressBar": true
          });
        }
        if (tipo == "r") {
          toastr.error(msj);
        }
        if (tipo == "a") {
          toastr.warning(msj);
        }
      }

      
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        });
      
      

    </script>
    @yield('script')
    
    </body>
</html>
