
@php
    if ($ClientesR->Agente == 1){
        $AgenteSi = "Selected";
        $AgenteNo = "";
    }else{
        $AgenteSi = "";
        $AgenteNo = "Selected";
    }

    if ($ClientesR->Proveedor == 1){
        $ProveedorSi = "Selected";
        $ProveedorNo = "";
    }else{
        $ProveedorSi = "";
        $ProveedorNo = "Selected";
    }
@endphp


<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Nombre</label>
    <div class="col-sm-10">
        <input type="text" class="form-control " id="Cliente" name="Cliente" placeholder="Nombre del cliente" value="{{$ClientesR->Cliente}}" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label ">Direccion Oficina</label>
    <div class="col-sm-10">
        <textarea name="DirOficina" id="DirOficina" cols="2" rows="2" class="form-control" maxlength="175">{{$ClientesR->DirOficina}}</textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido ">Pais</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="CodigoPais" name="CodigoPais" placeholder="Codigo Pais" maxlength="3"  value="{{$ClientesR->CodigoPais}}" required >
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label ">NIT</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="Nit" name="Nit" placeholder="Ingrese NIT" maxlength="20" value="{{$ClientesR->Nit}}" >
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Email</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="EmailPlanta" name="EmailPlanta" placeholder="Email Planta" maxlength="50" value="{{$ClientesR->EmailPlanta}}" required>
    </div>
</div>


<div class="form-group row">
    <label class="col-sm-2 col-form-label ">Telefono</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="TelPlanta" name="TelPlanta" placeholder="Telefono Planta" value="{{$ClientesR->TelPlanta}}" maxlength="20">
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Dias Crédito</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="DiasCredito" name="DiasCredito"  value="{{$ClientesR->DiasCredito}}" required>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Agente</label>
    <div class="col-sm-10">
        <select name="Agente" id="Agente" class="form-control" required>
            <option value="0" {{$AgenteNo}}>No</option>
            <option value="1" {{$AgenteSi}}>Si</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label requerido">Proveedor</label>
    <div class="col-sm-10">
        <select name="Proveedor" id="Proveedor" class="form-control" required>
            <option value="0" {{$ProveedorNo}}>No</option>
            <option value="1" {{$ProveedorSi}}>Si</option>
        </select>
    </div>
</div>

<input type="hidden" name="Estado" id="Estado" value="1">
<input type="hidden" name="UsuarioMod" id="UsuarioMod" value="{{auth()->user()->usuario}}">
<input type="hidden" name="CodEmpresa" id="CodEmpresa" value="{{session('CodEmpresa')}}">
