@extends("theme.$theme.layout")
@section('TituloPrincipal')
    Empresas
@endsection
@section('script')
<script type="text/javascript">
  Logics.ValidacionGeneral('form-general');
</script>
@endsection

@section('Navegacion')
    <div class="row">
      <div class="col-md-12 text-right">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#NuevaEmpresaModal">
          Nueva Empresa
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
                        <th>Nombre</th>
                        <th>Forma Pago</th>
                        <th>Codigo Domestico</th>
                        <th>GNL</th>
                        <th>Creado</th>
                        <th>Modificado</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($EmpresasList as $EmpresaItem)
                          <tr>
                            <th>{{$EmpresaItem -> id}}</th>
                            <td>{{$EmpresaItem -> Empresa}}</td>
                            <td>{{$EmpresaItem -> FormaPago}}</td>
                            <td>{{$EmpresaItem -> CodigoDomestico}}</td>
                            <td>{{$EmpresaItem -> GLN}}</td>
                            <td>{{$EmpresaItem -> created_ad}}</td>
                            <td>{{$EmpresaItem -> updated_ad}}</td>
                            <td>
                              <div class="btn-group">
                                <a class="btn btn-sm btn-warning" href="{{route('Empresa.edit',$EmpresaItem->id)}} ">Editar</a>
                                <a class="btn btn-sm btn-delete" href="">Eliminar</a>
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


<!-- esta es el area del modal-->
@extends('includes.modal', array('IdModal'=>'NuevaEmpresaModal','TamanoModal' => 'xl'))
@section('TituloModal')
    Nueva Empresa
@endsection
@section('BodyModal')
  <form class="form-horizontal" action="{{route('clientes.store')}}" id="form-general" method="POST">
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
@endsection

