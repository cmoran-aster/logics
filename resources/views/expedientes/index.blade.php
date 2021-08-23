@extends("theme.$theme.layout")
@section('TituloPrincipal')
    Expedientes
@endsection
@section('script')
<script type="text/javascript">
  Logics.ValidacionGeneral('form-general');
</script>
@endsection

@section('Navegacion')
    <div class="row">
      <div class="col-md-12 text-right">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#NuevoExpediente">
          Nueva Expediente
        </button>
      </div>
    </div>
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
              <div class="col-md-12 text-center">
                  <p>Paramaetros de busqueda:</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                @include('expedientes.form-busqueda')
                
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <br>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-sm table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>No Expediente</th>
                        <th>Embarcador </th>
                        <th>Consignatario </th>
                        <th>Agente</th>
                        <th>Fecha</th>
                        <th>op</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($ExpedientesListado as $ExpedienteItem)
                          <tr>
                            <th></th>
                            <td>{{$ExpedienteItem->NumExpediente}}-{{$ExpedienteItem->AnoExpediente}}</td>
                            <td>{{$ExpedienteItem->Embarcador}}</td>
                            <td>{{$ExpedienteItem->Consignatario}}</td>
                            <td>{{$ExpedienteItem->Agente}}</td>
                            <td>{{$ExpedienteItem->FechaVentaEsp}}</td>
                            <td>
                              <div class="btn-group">
                                <a class="btn btn-sm btn-info" href="{{route('ModExpedientes',$ExpedienteItem->CodExpediente)}} ">Ver</a>
                                <a class="btn btn-sm btn-danger" href="">Eliminar</a>
                              </div>
                            </td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>
@endsection


<!-- esta es el area del modal-->
@extends('includes.modal', array('IdModal'=>'NuevoExpediente','TamanoModal' => 'xl'))
@section('TituloModal')
    Nuevo Expediente
@endsection
@section('BodyModal')
  <form class="form-horizontal" action="{{route('expedientes.store')}}" id="form-general" method="POST">
    @csrf
    <div class="card-body">
      @include('expedientes.form')
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
@endsection

