<div class="row">
    <div class="col-md-12">
        <br>
    </div>
</div>
<form id="form_costos_gt">
    <input type="hidden" id="CodExpediente" name="CodExpediente" value="{{$CodExpediente}}" required>
    <input type="hidden" id="Dolares" name="Dolares" value="0">
    @csrf
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                    <label for="">Proveedor</label>
                        <select  class="form-control select2bs4" name="CodProveedor" id="CodProveedor" required>
                            <option value="">---</option>
                            @foreach ($ListadoDeEmbarcador as $ListadoDeEmbarcadorOp)
                                <option value="{{ $ListadoDeEmbarcadorOp->CodCliente; }}" >{{ $ListadoDeEmbarcadorOp->Cliente; }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="">Costo</label>
                        <select  class="form-control select2bs4" id="CodigoTipoGasto" name="CodigoTipoGasto">
                            <option value="">---</option>
                            @foreach ($gastosTipo as $ListadogastosTipo)
                                <option value="{{ $ListadogastosTipo->CodigoTipoGasto; }}" >{{ $ListadogastosTipo->TipoGasto; }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                
                <div class="col-md-2">
                    <label for="">Tipo Costo</label>
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="CtAjena" value="0" checked="">
                          <label class="form-check-label">Normal</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="CtAjena" value="1">
                          <label class="form-check-label">Cuenta Ajena</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="CtAjena" value="2">
                            <label class="form-check-label">Sin Factura</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="">Fecha Factura</label>
                        <input type="date" class="form-control" name="FechaGasto" id="FechaGasto">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">No Factura</label>
                        <input type="text" class="form-control" name="NumFactura" id="NumFactura">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Moneda</label>
                                <select name="Moneda" id="Moneda" class="form-control" >
                                    <option value="">---</option>
                                    @foreach ($MonedasL as $MonedasList)
                                     @php
                                            if ($MonedasList->CodigoMoneda == "USD"){
                                                $selected = "SELECTED";
                                            }else{
                                                $selected = "";
                                            }
                                        @endphp
                                        <option value="{{ $MonedasList->CodigoMoneda; }}" {{$selected}} >{{ $MonedasList->CodigoMoneda; }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="">Total</label>
                                <input type="number" class="form-control" id="Gasto" name="Gasto">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="">Tipo Cambio</label>
                    <input type="number" class="form-control" id="TipoCambio" name="TipoCambio">
                </div>
                
                
                
            </div>





        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <label for="">Descripción</label>
                    <textarea  class="form-control" rows="4" id="Descripcion" name="Descripcion"></textarea>
                </div>
            </div>

        </div>
    </div>
 
    <div class="row">
        <div class="col-md-12"><br></div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success btn-sm"><i class="far fa-save"></i> Guardar</button>
        </div>
    </div>
</form>
<div class="row">
    <div class="col-md-12"><br><br></div>
</div>
<div class="row">
    <div class="col-md-12 text-center text-danger">
        <h6>Agregados:</h6>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <br>
    </div>
</div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10" id="CostoDivGT">
            
    </div>
</div>



