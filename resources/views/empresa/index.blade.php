@extends("theme.$theme.layout")
@section('TituloPrincipal')
    Empresas
@endsection
@section('script')
<script type="text/javascript">
  Logics.ValidacionGeneral('form-general');
</script>
@endsection
@section('Cards')
<div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
      <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="NuevaEmpresa-tab" data-toggle="pill" href="#NuevaEmpresa" role="tab" aria-controls="NuevaEmpresa" aria-selected="true">Nueva Empresa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="Listado-tab" data-toggle="pill" href="#Listado" role="tab" aria-controls="Listado" aria-selected="false">Listado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="Reporte-tab" data-toggle="pill" href="#Reporte" role="tab" aria-controls="Reporte" aria-selected="false">Reportes</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content" id="custom-tabs-four-tabContent">
        <div class="tab-pane fade active show" id="NuevaEmpresa" role="tabpanel" aria-labelledby="NuevaEmpresa-tab">
            @include('includes.mensajes.exito')
            @include('includes.mensajes.error')
            <form class="form-horizontal" action="{{route('GuardarEmpresa')}}" id="form-general" method="POST">
                @csrf
                <div class="card-body">
                  @include('empresa.form')
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <div class="row">
                      <div class="col-md-12 text-center">
                          @include('includes.botones.boton-crear')
                        <!--<button type="submit" class="btn btn-info">Guardar</button>-->
                      </div>
                  </div>
                </div>
                <!-- /.card-footer -->
              </form>
        </div>
        <div class="tab-pane fade" id="Listado" role="tabpanel" aria-labelledby="Listado-tab">
          b
        </div>
        <div class="tab-pane fade" id="Reporte" role="tabpanel" aria-labelledby="Reporte-tab">
          c                    
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>
@endsection