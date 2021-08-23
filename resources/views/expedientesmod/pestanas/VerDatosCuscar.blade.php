<div class="row">
    <div class="col-md-12">
        <br>
    </div>
</div>
<form id="form-Data-Cuscar" action="{{route('expedientes.update',$CodExpediente)}}" method="POST">
    <input type="hidden" name="_token" id="tokenCuscar" value="{{ csrf_token() }}" />
    {{method_field('PATCH')}}
    <div class="row">
        <div class="col-md-4">
            <div class="row ">
                <div class="col-md-12 text-center">
                    <button class="btn btn-sm btn-warning" type="button" onclick="importar('embarcador',{{$Expedientes->CodEmbarcador}},{{$CodExpediente}})">importar</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <br>
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label ">Embarcador:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" maxlength="35" name="Embarcador1" id="Embarcador1" value="{{$Expedientes->Embarcador1}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label "></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" maxlength="35" name="Embarcador2" id="Embarcador2" value="{{$Expedientes->Embarcador2}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label ">Dirección:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Embarcador3" id="Embarcador3" value="{{$Expedientes->Embarcador3}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label "></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Embarcador4" id="Embarcador4" value="{{$Expedientes->Embarcador4}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label "></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Embarcador5" id="Embarcador5" value="{{$Expedientes->Embarcador5}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <button class="btn btn-sm btn-warning" type="button" onclick="importar('consigantario',{{$Expedientes->CodConsignatario}},{{$CodExpediente}})">importar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label ">Consignatario:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="Consignatario1" id="Consignatario1" maxlength="35" value="{{$Expedientes->Consignatario1}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label "></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="Consignatario2" id="Consignatario2" maxlength="35" value="{{$Expedientes->Consignatario2}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label ">Dirección:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="Consignatario3" id="Consignatario3" value="{{$Expedientes->Consignatario3}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label "></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="Consignatario4" id="Consignatario4" value="{{$Expedientes->Consignatario4}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label "></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="Consignatario5" id="Consignatario5" value="{{$Expedientes->Consignatario5}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label ">NIT:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="NitConsignatario" id="NitConsignatario" value="{{$Expedientes->NitConsignatario}}">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <br>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Cantidad:</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="Cantidad" id="Cantidad" value="{{$Expedientes->Cantidad}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Embalaje:</label>
                        <div class="col-sm-8" >
                            
                            <select name="CodigoTipoEmbalaje" id="CodigoTipoEmbalaje" class="form-control">
                                <option value="">---</option>
                                @foreach ($embalajeList as $ListEmbalaje)
                                    @php
                                        if ($Expedientes->CodigoTipoEmbalaje  == $ListEmbalaje->CodigoTipoEmbalaje){
                                            $Select = "SELECTED";
                                        }else{
                                            $Select = "";
                                        }
                                    @endphp
                                    <option value="{{ $ListEmbalaje->CodigoTipoEmbalaje; }}" {{$Select}}>{{ $ListEmbalaje->TipoEmbalaje; }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Peso:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="PesoBruto" name="PesoBruto" value="{{$Expedientes->PesoBruto}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label ">Temperatura:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="Temperatura" name="Temperatura" value="{{$Expedientes->Temperatura}}">
                        </div>
                        <div class="col-sm-2">
                            <h6><b>&deg;C</b></h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Descripción:</label>
                <div class="col-sm-8">
                    <textarea name="Descripcion" id="Descripcion" class="form-control">{{$Expedientes->Descripcion}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Marcas:</label>
                <div class="col-sm-8">
                    <textarea name="Marcas" id="Marcas" class="form-control">{{$Expedientes->Marcas}}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </div>
</form>