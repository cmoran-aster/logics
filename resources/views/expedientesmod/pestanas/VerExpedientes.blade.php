<form action="{{route('expedientes.update',$CodExpediente)}}" id="form-Expediente" method="POST">
    @csrf
    {{method_field('PATCH')}}
    <div class="row">
        <div class="col-md-12">
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Barco:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="NombreBarco" name="NombreBarco" value="{{$Expedientes->NombreBarco}} ">
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Viaje:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="NumViaje" name="NumViaje" value="{{$Expedientes->NumViaje}}">
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Naviera:</label>
                <div class="col-md-10">
                    <select name="CodNaviera" id="CodNaviera" class="form-control select2bs4 " >
                        <option value="">---</option>
                        @foreach ($ListadoNav as $Navieras)
                            @php
                                if ($Expedientes->CodNaviera  == $Navieras->CodNaviera){
                                    $Select = "SELECTED";
                                }else{
                                    $Select = "";
                                }
                            @endphp
                            <option value="{{ $Navieras->CodNaviera; }}" {{$Select}}>{{ $Navieras->Naviera; }}</option>
                        @endforeach
                    </select>  
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group row">
                <label class="col-md-6 col-form-label text-center">Tipo Expediente: </label>
                <div class="col-md-6">
                    <input type="text" class="form-control" value="Marítimo">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <br>
        </div>
    </div>
    <!------------------------------------------------------------ -->
    <div class="row">
        <div class="col-md-12 text-center text-danger">
            ORIGEN
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="">Pais Origen:</label>
            <select name="CodigoPaisOrigen" id="CodigoPaisOrigen" class="form-control select2bs4 " required>
                <option value="">---</option>
                @foreach ($ListadoPaises as $PaisesList)
                    @php
                        if ($Expedientes->CodigoPaisOrigen  == $PaisesList->CodigoPais){
                            $Select = "SELECTED";
                        }else{
                            $Select = "";
                        }
                    @endphp
                    <option value="{{ $PaisesList->CodigoPais; }}" {{$Select}}>{{ $PaisesList->Pais; }}</option>
                @endforeach
            </select>    
        </div>
        
        <div class="col-md-4">
            <label for="">Puerto Origen:</label>
            <select name="CodigoPuertoOrigen" id="CodigoPuertoOrigen" class="form-control select2bs4 "  required>
                <option value="">---</option>
                @foreach ($ListadoPuertos as $PuertosList)
                    @php
                        if ($Expedientes->CodigoPuertoOrigen  == $PuertosList->CodigoPuerto){
                            $Select = "SELECTED";
                        }else{
                            $Select = "";
                        }
                    @endphp
                    <option value="{{ $PuertosList->CodigoPuerto; }}" {{$Select}}>{{ $PuertosList->Puerto; }}</option>
                @endforeach
            </select>   
        </div>

        <div class="col-md-4">
            <label for="">Lugar Origen:</label>
            <input type="text" class="form-control " id="LugarOrigen" name="LugarOrigen" value="{{$Expedientes->LugarOrigen}}">  
        </div> 
    </div>

    <div class="row">
        <div class="col-md-12">
            <br>
        </div>
    </div>
    <!------------------------------------------------------------ -->
    <div class="row">
        <div class="col-md-12 text-center text-danger">
            DESTINO
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <label for="">Pais Destino:</label>
            <select name="CodigoPaisDestino" id="CodigoPaisDestino" class="form-control select2bs4 " required>
                <option value="">---</option>
                @foreach ($ListadoPaises as $PaisesList)
                    @php
                        if ($Expedientes->CodigoPaisDestino  == $PaisesList->CodigoPais){
                            $Select = "SELECTED";
                        }else{
                            $Select = "";
                        }
                    @endphp
                    <option value="{{ $PaisesList->CodigoPais; }}" {{$Select}}>{{ $PaisesList->Pais; }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label for="">Puerto Destino:</label>
            <select name="CodigoPuertoDestino" id="CodigoPuertoDestino" class="form-control select2bs4" required>
                <option value="">---</option>
                @foreach ($ListadoPuertos as $PuertosList)
                    @php
                        if ($Expedientes->CodigoPuertoDestino  == $PuertosList->CodigoPuerto){
                            $Select = "SELECTED";
                        }else{
                            $Select = "";
                        }
                    @endphp
                    <option value="{{ $PuertosList->CodigoPuerto; }}" {{$Select}}>{{ $PuertosList->Puerto; }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label for="">Lugar Destino:</label>
            <input type="text" class="form-control" id="LugarDestino" name="LugarDestino" value="{{$Expedientes->LugarDestino}}">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12"><br></div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <label for="">Commodity:</label>
            <input type="text" class="form-control" id="Commodity" name="Commodity" value="{{$Expedientes->Commodity}}">
        </div>
        <div class="col-md-4">
            <label for="">Peso:</label>
            <div class="row">
                <div class="col-md-10">
                    <input type="number" class="form-control" id="PesoBruto" name="PesoBruto" value="{{$Expedientes->PesoBruto}}"> 
                </div>
                <div class="col-md-2">Kgs.</div>
            </div>
        </div>
        <div class="col-md-4">
            <label for="">Cantidad Equipos:</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="number" class="form-control" id="CantEquipos" name="CantEquipos" value="{{$Expedientes->CantEquipos}}">
                </div>
                <div class="col-md-6">
                    <select name="CodigoDescripcionEquipo" id="CodigoDescripcionEquipo" class="form-control select2bs4" >
                        <option value="">---</option>
                        @foreach ($ListadoDescripEquip as $ListadoDescripEquipos)
                            @php
                                if ($Expedientes->CodigoDescripcionEquipo  == $ListadoDescripEquipos->CodigoDescripcionEquipo){
                                    $Select = "SELECTED";
                                }else{
                                    $Select = "";
                                }
                            @endphp
                            <option value="{{ $ListadoDescripEquipos->CodigoDescripcionEquipo; }}" {{$Select}}>{{ $ListadoDescripEquipos->DescripcionEquipo; }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>  
    </div>

    <div class="row">
        <div class="col-md-12">
            <br><br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label ">Fecha Venta:</label>
                <div class="col-sm-9">
                    @php
                        $FechaVenE = ($Expedientes->FechaVenta != "") ? date('Y-m-d',strtotime($Expedientes->FechaVenta)): "";
                    @endphp
                    <input type="date" class="form-control" id="FechaVenta" name="FechaVenta" value="{{$FechaVenE}}">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label ">Tarifa Válida Hasta:</label>
                <div class="col-sm-8">
                    @php
                        $FehcaVaH = ($Expedientes->FechaValidezTarifa != "") ? date('Y-m-d',strtotime($Expedientes->FechaValidezTarifa)): "";
                    @endphp
                    <input type="date" class="form-control" id="FechaValidezTarifa" name="FechaValidezTarifa" value="{{$FehcaVaH}}">
                </div>
            </div>
            
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <br><br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label ">Lugar Present. de BL:</label>
                <div class="col-sm-8">
                    <select name="CodigoLugarPresentacionBL" id="CodigoLugarPresentacionBL" class="form-control select2bs4" >
                        <option value="">---</option>
                        @foreach ($LugaresBL as $LugaresBLpre)
                            @php
                                if ($Expedientes->CodigoLugarPresentacionBL  == $LugaresBLpre->CodigoLugarPresentacionBL){
                                    $Select = "SELECTED";
                                }else{
                                    $Select = "";
                                }
                            @endphp
                            <option value="{{ $LugaresBLpre->CodigoLugarPresentacionBL }}" {{$Select}}>{{ $LugaresBLpre->LugarPresentacionBL }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label ">Fecha Present. de BL:</label>
                <div class="col-sm-8">
                    @php
                        $FechaPrBl = ($Expedientes->FechaPresentacionBL != "") ? date('Y-m-d',strtotime($Expedientes->FechaPresentacionBL)): "";
                    @endphp
                    <input type="date" class="form-control" id="FechaPresentacionBL" name="FechaPresentacionBL" value="{{$FechaPrBl}}">
                </div>
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <br><br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label ">Lugar Impresión de BL:</label>
                <div class="col-sm-8">
                    <select name="CodigoLugarImpresionBL" id="CodigoLugarImpresionBL" class="form-control select2bs4" >
                        <option value="">---</option>
                        @foreach ($LugaresBL as $LugaresBLim)
                            @php
                                if ($Expedientes->CodigoLugarImpresionBL  == $LugaresBLim->CodigoLugarPresentacionBL){
                                    $Select = "SELECTED";
                                }else{
                                    $Select = "";
                                }
                            @endphp
                            <option value="{{ $LugaresBLim->CodigoLugarPresentacionBL }}" {{$Select}}>{{ $LugaresBLim->LugarPresentacionBL }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label ">Fecha Impresión de BL:</label>
                <div class="col-sm-8">
                    @php
                        $FechaImBl = ($Expedientes->FechaImpresionBL != "") ? date('Y-m-d',strtotime($Expedientes->FechaImpresionBL)): "";
                    @endphp
                    <input type="date" class="form-control" id="FechaImpresionBL" name="FechaImpresionBL" value="{{$FechaImBl}}">
                </div>
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            @include('includes.botones.boton-crear')
        </div>
    </div>

</form>





