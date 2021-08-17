@extends("theme.$theme.layout")
@section('TituloPrincipal')
    Editar Cliente
@endsection
@section('script')
<script type="text/javascript">
  Logics.ValidacionGeneral('form-general');
</script>
@endsection

@section('Navegacion')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item active">Edición de clientes</li>
        <li class="breadcrumb-item"><a href="{{url('/clientes')}}">Regresar</a></li>
    </ol>
@endsection



@section('Cards')
<div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
      <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="NuevaEmpresa-tab" data-toggle="pill" href="#NuevaEmpresa" role="tab" aria-controls="NuevaEmpresa" aria-selected="true">Listado</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content" id="custom-tabs-four-tabContent">
        <div class="tab-pane fade active show" id="NuevaEmpresa" role="tabpanel" aria-labelledby="NuevaEmpresa-tab">
            @include('includes.mensajes.exito')
            @include('includes.mensajes.error')
            
            <div class="row">
              <div class="col-md-12">
                <br>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  
                <form class="form-horizontal" action="{{route('clientes.update',$ClientesR->CodCliente)}}" id="form-general" method="POST">
                    @csrf
                    {{method_field('PATCH')}}
                    <div class="card-body">
                    @include('clientes.formEdit')
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
            </div>
            
        </div>

      </div>
    </div>
    <!-- /.card -->
  </div>
  
@endsection




