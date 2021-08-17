@extends("theme.$theme.layout")
@section('TituloPrincipal')
    Gestion de Expediente
@endsection
@section('script')
<script type="text/javascript">
  Logics.ValidacionGeneral('form-general');
  Logics.ValidacionGeneral('form-Expediente');
  
</script>
@endsection

@section('Navegacion')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item active">Expedientes Gestion</li>
        <li class="breadcrumb-item"><a href="{{url('/expediente')}}">Regresar</a></li>
    </ol>
@endsection


@include('includes.mensajes.exito')
@include('includes.mensajes.error')

@section('CardPre')
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="card border-dark mb-3" style="border:solid 1px #1c375a !important;">
            <div class="card-header text-center text-white" style="background-color: #2765a3 !important;">
                <h5>Detalle del Expediente</h5>
            </div>
            @foreach ($ExpedientesListado as $Expedientes)
                
            @endforeach
            <div class="card-body">
                <input type="text" value="{{$CodExpediente}} ">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right">No. Expediente:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{str_pad($Expedientes->NumExpediente,5,"0",STR_PAD_LEFT)}}-{{$Expedientes->AnoExpediente}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">No. BL:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$Expedientes->NumBL}}">
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-right">No. Booking:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$Expedientes->NumBooking}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">No. BL Master:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
        
                <hr>
        
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label ">Embarcador:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  value="{{$Expedientes->Embarcador}}">
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label ">Consignatario:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$Expedientes->Consignatario}}">
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label ">Agente:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$Expedientes->Agente}}">
                            </div>
                        </div>
                    </div>
                </div>
        
        
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <br><br>
    </div>
</div>
@endsection


@section('Cards')
<div class="card card-primary card-tabs" >
    <div class="card-header p-0 pt-1 border-bottom-0" style="background-color: #2765a3 !important;">
      <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="VerExpediente-tab" data-toggle="pill" href="#VerExpediente" role="tab" aria-controls="VerExpediente" aria-selected="true">Ver Expediente</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="VerEquipos-tab" data-toggle="pill" href="#VerEquipos" role="tab" aria-controls="VerEquipos" aria-selected="true">Ver Equipos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="VerDatosCuscar-tab" data-toggle="pill" href="#VerDatosCuscar" role="tab" aria-controls="VerDatosCuscar" aria-selected="true">Ver Datos Cuscar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="VerGastos-tab" data-toggle="pill" href="#VerGastos" role="tab" aria-controls="VerGastos" aria-selected="true">Ver Gastos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="VerCargos-tab" data-toggle="pill" href="#VerCargos" role="tab" aria-controls="VerCargos" aria-selected="true">Ver Cargos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="VerCargosNaviera-tab" data-toggle="pill" href="#VerCargosNaviera" role="tab" aria-controls="VerCargosNaviera" aria-selected="true">Ver Cargos Naviera</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="VerDatosACuscar-tab" data-toggle="pill" href="#VerDatosACuscar" role="tab" aria-controls="VerDatosACuscar" aria-selected="true">Ver Datos a Cuscar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="AvisoDeArribo-tab" data-toggle="pill" href="#AvisoDeArribo" role="tab" aria-controls="AvisoDeArribo" aria-selected="true">Enviar Aviso de Arribo</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content" id="custom-tabs-four-tabContent">
        <div class="tab-pane fade active show" id="VerExpediente" role="tabpanel" aria-labelledby="VerExpediente-tab">
            @include('expedientesmod.pestanas.VerExpedientes')
            
        </div>
        <!-- **** -->
        <div class="tab-pane fade " id="VerEquipos" role="tabpanel" aria-labelledby="VerEquipos-tab">
            @include('expedientesmod.pestanas.VerEquipos')
        </div>
        <!-- **** -->
        <div class="tab-pane fade " id="VerDatosCuscar" role="tabpanel" aria-labelledby="VerDatosCuscar-tab">
            VerDatosCuscar
        </div>
        <!-- **** -->
        <div class="tab-pane fade " id="VerGastos" role="tabpanel" aria-labelledby="VerGastos-tab">
            VerGastos
        </div>
        <!-- **** -->
        <div class="tab-pane fade " id="VerCargos" role="tabpanel" aria-labelledby="VerCargos-tab">
            VerCargos
        </div>
        <!-- **** -->
        <div class="tab-pane fade " id="VerCargosNaviera" role="tabpanel" aria-labelledby="VerCargosNaviera-tab">
            VerCargosNaviera
        </div>
        <!-- **** -->
        <div class="tab-pane fade " id="VerDatosACuscar" role="tabpanel" aria-labelledby="VerDatosACuscar-tab">
            VerDatosACuscar
        </div>
        <!-- **** -->
        <div class="tab-pane fade " id="AvisoDeArribo" role="tabpanel" aria-labelledby="AvisoDeArribo-tab">
            AvisoDeArribo
        </div>

      </div>
    </div>
    <!-- /.card -->
  </div>
@endsection





