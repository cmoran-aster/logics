<div class="row">
    <div class="col-md-12">
        <br>
    </div>
</div>
<form id="form_ingreso_usd">
    <input type="hidden" id="CodExpediente" name="CodExpediente" value="{{$CodExpediente}}" required>
    @csrf
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
            <label for="">Fecha Cargo</label>
                <input type="date" class="form-control" name="FechaCargo" id="FechaCargo">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Tipo Ingreso</label>
                <select  class="form-control select2bs4" id="CodigoTipoCargo" name="CodigoTipoCargo">
                    <option value="">---</option>
                    @foreach ($cargosTipo as $ListadogastosTipo)
                        <option value="{{ $ListadogastosTipo->CodigoTipoCargo; }}" >{{ $ListadogastosTipo->TipoCargo; }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Descripción</label>
                <input type="text" class="form-control form-control" id="Descripcion" name="Descripcion">
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
                        <input type="number" class="form-control" id="Cargo" name="Cargo">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-1">
            <div class="form-group">
                <label for="">Op</label><br>
                <button type="submit" class="btn btn-success"><i class="far fa-save"></i> Guardar</button>
            </div>
            
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