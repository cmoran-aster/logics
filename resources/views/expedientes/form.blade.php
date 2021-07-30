<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Embarcador</label>
    <div class="col-sm-10">
        <input type="text" class="form-control " id="Empresa" name="Empresa" placeholder="Nombre de la empresa" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label ">Consignatario</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="FormaPago" name="FormaPago" placeholder="Forma de pago" maxlength="300">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Agente</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="CodigoDomestico" name="CodigoDomestico" placeholder="Codigo Domestico" maxlength="3" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Tipo de Expediente</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="GLN" name="GLN" placeholder="GLN" maxlength="13" required>
    </div>
</div>
<hr style="border-top: 3px solid rgba(0,0,0,.5)">
<!------------------------------------------------------------ -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label ">Pais Origen</label>
    <div class="col-sm-10">
        <select name="PaisOrigen" id="PaisOrigen" class="form-control select2bs4" required>
            <option value="">---</option>
            @foreach ($ListadoPaises as $PaisesList)
                <option value="{{ $PaisesList->CodigoPais; }}">{{ $PaisesList->Pais; }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Puerto Origen</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="CodigoDomestico" name="CodigoDomestico" placeholder="Codigo Domestico" maxlength="3" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Lugar Origen</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="GLN" name="GLN" placeholder="GLN" maxlength="13" required>
    </div>
</div>
<hr style="border-top: 3px solid rgba(0,0,0,.5)">
<!------------------------------------------------------------ -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label ">Pais Destino</label>
    <div class="col-sm-10">
        <select name="PaisDestino" id="PaisDestino" class="form-control select2bs4" required>
            <option value="">---</option>
            @foreach ($ListadoPaises as $PaisesList)
                <option value="{{ $PaisesList->CodigoPais; }}">{{ $PaisesList->Pais; }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Puerto Destino</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="CodigoDomestico" name="CodigoDomestico" placeholder="Codigo Domestico" maxlength="3" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Lugar Destino</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="GLN" name="GLN" placeholder="GLN" maxlength="13" required>
    </div>
</div>
<hr style="border-top: 3px solid rgba(0,0,0,.5)">
<!------------------------------------------------------------ -->
<div class="form-group row">
    <label class="col-sm-2 col-form-label ">Commodity</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="FormaPago" name="FormaPago" placeholder="Forma de pago" maxlength="300">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Peso</label>
    <div class="col-sm-10">
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" id="CodigoDomestico" name="CodigoDomestico" placeholder="Codigo Domestico" maxlength="3" required> 
            </div>
            <div class="col-md-6">Kgs.</div>
        </div>
        
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Cantidad Equipos</label>
    <div class="col-sm-10">
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" id="GLN" name="GLN" placeholder="GLN" maxlength="13" required>
            </div>
            <div class="col-md-6">
                <select name="" id="" class="form-control">
                    <option value="">---</option>
                    <option value="">asdfasd</option>
                </select>
            </div>
        </div>
    </div>
</div>
<hr>