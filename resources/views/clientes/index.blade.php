@extends("theme.$theme.layout")
@section('TituloPrincipal')
    Clientes
@endsection
@section('script')
<script type="text/javascript">
  Logics.ValidacionGeneral('form-general');
</script>
@endsection

@section('Navegacion')
    <div class="row">
      <div class="col-md-12 text-right">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#NuevoClienteModal">
          Nuevo Cliente
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
        <li class="nav-item">
          <a class="nav-link" id="Listado-tab" data-toggle="pill" href="#Listado" role="tab" aria-controls="Listado" aria-selected="false">Reporte</a>
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
                <div class="table-responsive">
                  <table class="table table-sm table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Nit</th>
                        <th>EmailPlanta</th>
                        <th>DirOficina</th>
                        <th>CodigoPais</th>
                        <th>CodigoLugar</th>
                        <th>DiasCredito</th>
                        <th>TelPlanta</th>
                        <th>Agente</th>
                        <th>Proveedor</th>
                        <th>Creado</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($ClientesListado as $Listado)
                        <tr>
                            <td>{{$Listado->CodCliente}}</td>
                            <td>{{$Listado->Cliente}}</td>
                            <td>{{$Listado->Nit}}</td>
                            <td>{{$Listado->EmailPlanta}}</td>
                            <td>{{$Listado->DirOficina}}</td>
                            <td>{{$Listado->CodigoPais}}</td>
                            <td>{{$Listado->CodigoLugar}}</td>
                            <td>{{$Listado->DiasCredito}}</td>
                            <td>{{$Listado->TelPlanta}}</td>
                            <td>{{$Listado->Agente}}</td>
                            <td>{{$Listado->Proveedor}}</td>
                            <td>{{date("d/m/Y",strtotime($Listado->created_at))}}</td>
                            <td>
                                <a href="{{route('clientes.edit',encrypt($Listado->CodCliente))}} " class="btn btn-warning">Editar</a>
                                <a  class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
        </div>
        <div class="tab-pane fade" id="Listado" role="tabpanel" aria-labelledby="Listado-tab">
          b
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>
@endsection


<!-- esta es el area del modal-->
@extends('includes.modal', array('IdModal'=>'NuevoClienteModal','TamanoModal' => 'xl'))
@section('TituloModal')
    Nuevo Cliente
@endsection
@section('BodyModal')

    <form class="form-horizontal" action="{{route('clientes.store')}}" id="form-general" method="POST">
        @csrf
        <div class="card-body">
        @include('clientes.form')
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
