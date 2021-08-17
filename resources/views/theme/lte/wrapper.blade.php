<div class="content-wrapper" style="min-height: 371px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('TituloPrincipal','Sin titulo')</h1>
          </div>
          <div class="col-sm-6">
            @yield('Navegacion')
            <!--<ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>-->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            @yield('CardPre')
            @yield('Cards')
            @yield('CardPost')
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>