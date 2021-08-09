<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Embarcador:</label>
    <div class="col-sm-10">
        <select name="CodEmbarcador" id="CodEmbarcador" class="form-control  select2bs4" required>
            <option value="">---</option>
            @foreach ($ListadoDeEmbarcador as $EmbarcadorList)
                <option value="{{ $EmbarcadorList->id; }}">{{ $EmbarcadorList->Cliente; }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Consignatario:</label>
    <div class="col-sm-10">
        <select name="CodConsignatario" id="CodConsignatario" class="form-control select2bs4" required>
            <option value="">---</option>
            @foreach ($ListadoDeEmbarcador as $EmbarcadorList)
                <option value="{{ $EmbarcadorList->id; }}">{{ $EmbarcadorList->Cliente; }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido ">Agente:</label>
    <div class="col-sm-10">
        <select name="CodAgente" id="CodAgente" class="form-control select2bs4" required>
            <option value="">---</option>
            @foreach ($ListadoDeAgentes as $AgentesList)
                <option value="{{ $AgentesList->id; }}">{{ $AgentesList->Cliente; }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Tipo de Expediente:</label>
    <div class="col-sm-10">
        <p>Marítimo</p>
        <input type="hidden" name="CodigoTipoServicio" id="CodigoTipoServicio" value="M">
    </div>
</div>
<hr style="border-top: 3px solid rgba(0,0,0,.5)">
<!------------------------------------------------------------ -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Pais Origen:</label>
    <div class="col-sm-10">
        <select name="CodigoPaisOrigen" id="CodigoPaisOrigen" class="form-control select2bs4 " required>
            <option value="">---</option>
            @foreach ($ListadoPaises as $PaisesList)
                <option value="{{ $PaisesList->CodigoPais; }}">{{ $PaisesList->Pais; }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Puerto Origen:</label>
    <div class="col-sm-10">
        <select name="CodigoPuertoOrigen" id="CodigoPuertoOrigen" class="form-control select2bs4 "  required>
            <option value="">---</option>
            @foreach ($ListadoPuertos as $PuertosList)
                <option value="{{ $PuertosList->CodigoPuerto; }}">{{ $PuertosList->Puerto; }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label ">Lugar Origen:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control " id="LugarOrigen" name="LugarOrigen" >
    </div>
</div>
<hr style="border-top: 3px solid rgba(0,0,0,.5)">
<!------------------------------------------------------------ -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Pais Destino:</label>
    <div class="col-sm-10">
        <select name="PaisDestino" id="PaisDestino" class="form-control select2bs4 " required>
            <option value="">---</option>
            @foreach ($ListadoPaises as $PaisesList)
                <option value="{{ $PaisesList->CodigoPais; }}">{{ $PaisesList->Pais; }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Puerto Destino:</label>
    <div class="col-sm-10">
        <select name="CodigoPuertoDestino" id="CodigoPuertoDestino" class="form-control select2bs4" required>
            <option value="">---</option>
            @foreach ($ListadoPuertos as $PuertosList)
                <option value="{{ $PuertosList->CodigoPuerto; }}">{{ $PuertosList->Puerto; }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label ">Lugar Destino:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="LugarDestino" name="LugarDestino" >
    </div>
</div>
<hr style="border-top: 3px solid rgba(0,0,0,.5)">
<!------------------------------------------------------------ -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label ">Commodity:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="Commodity" name="Commodity" >
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label ">Peso:</label>
    <div class="col-sm-10">
        <div class="row">
            <div class="col-md-6">
                <input type="number" class="form-control" id="PesoBruto" name="PesoBruto" > 
            </div>
            <div class="col-md-6">Kgs.</div>
        </div>
        
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label ">Cantidad Equipos:</label>
    <div class="col-sm-10">
        <div class="row">
            <div class="col-md-6">
                <input type="number" class="form-control" id="CantEquipos" name="CantEquipos" >
            </div>
            <div class="col-md-6">
                <select name="CodigoDescripcionEquipo" id="CodigoDescripcionEquipo" class="form-control select2bs4" >
                    <option value="">---</option>
                    @foreach ($ListadoDescripEquip as $ListadoDescripEquipos)
                        <option value="{{ $ListadoDescripEquipos->CodigoDescripcionEquipo; }}">{{ $ListadoDescripEquipos->DescripcionEquipo; }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<input type="hidden" name="Estado" id="Estado" value="1">
<input type="hidden" name="UsuarioCrea" id="UsuarioCrea" value="{{auth()->user()->usuario}}">
<input type="hidden" name="CodEmpresa" id="CodEmpresa" value="{{session('CodEmpresa')}}">

<hr>