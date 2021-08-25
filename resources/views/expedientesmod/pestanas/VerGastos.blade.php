<div class="row">
    <div class="col-md-12">
        <br>
    </div>
</div>
<form id="form_costos_usd">
    <input type="hidden" id="CodExpediente" name="CodExpediente" value="{{$CodExpediente}}" required>
    @csrf
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
            <label for="">Proveedor</label>
                <select  class="form-control" name="CodProveedor" id="CodProveedor" required>
                    <option value="">---</option>
                    @foreach ($ListadoDeEmbarcador as $ListadoDeEmbarcadorOp)
                        <option value="{{ $ListadoDeEmbarcadorOp->CodCliente; }}" >{{ $ListadoDeEmbarcadorOp->Cliente; }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="">Fecha Factura</label>
                <input type="date" class="form-control" name="FechaGasto" id="FechaGasto">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="">No Factura</label>
                <input type="text" class="form-control" name="NumFactura" id="NumFactura">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Gasto</label>
                <select  class="form-control" id="CodigoTipoGasto" name="CodigoTipoGasto">
                    <option value="">---</option>
                    @foreach ($gastosTipo as $ListadogastosTipo)
                        <option value="{{ $ListadogastosTipo->CodigoTipoGasto; }}" >{{ $ListadogastosTipo->TipoGasto; }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="col-md-2">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="">Moneda</label>
                        <select name="Moneda" id="Moneda" class="form-control" >
                            <option value="">---</option>
                            @foreach ($MonedasL as $MonedasList)
                                <option value="{{ $MonedasList->CodigoMoneda; }}" >{{ $MonedasList->CodigoMoneda; }}</option>
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
    </div>
    <div class="row">
        <div class="col-md-12">
            
                <label for="">Descripción</label>
                <textarea  class="form-control" style="height: 45px;" id="Descripcion" name="Descripcion"></textarea>
            
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
    <div class="col-md-10">
            <table class="table table-sm table-bordered" id="table-costos-usd">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Proveedor</th>
                        <th>Fecha Factura</th>
                        <th>No Factura</th>
                        <th>Gasto</th>
                        <th>Descripción</th>
                        <th>Moneda</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
    </div>
</div>



