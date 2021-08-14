<form action="{{route('expedientes.index')}}" method="GET">
    
    <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <label>No. Expediente</label>
            <div class="row">
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="Correlativo" id="CorrelativoBusqueda" name="CorrelativoBusqueda">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Año" id="AnoBusqueda" name="AnoBusqueda">
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Embarcador</label>
                      <select name="CodEmbarcadorBusqueda" id="CodEmbarcadorBusqueda" class="form-control  select2bs4" >
                          <option value="">---</option>
                          @foreach ($ListadoDeEmbarcador as $EmbarcadorList)
                              <option value="{{ $EmbarcadorList->CodCliente; }}">{{ $EmbarcadorList->Cliente; }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="form-group">
                        <label>Embarcador</label>
                        <select name="CodConsignatarioBusqueda" id="CodConsignatarioBusqueda" class="form-control select2bs4" >
                          <option value="">---</option>
                          @foreach ($ListadoDeEmbarcador as $EmbarcadorList)
                              <option value="{{ $EmbarcadorList->CodCliente; }}">{{ $EmbarcadorList->Cliente; }}</option>
                          @endforeach
                      </select>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="form-group">
                        <label>Agente</label>
                        <select name="CodAgenteBusqueda" id="CodAgenteBusqueda" class="form-control select2bs4" >
                          <option value="">---</option>
                          @foreach ($ListadoDeAgentes as $AgentesList)
                              <option value="{{ $AgentesList->CodCliente; }}">{{ $AgentesList->Cliente; }}</option>
                          @endforeach
                      </select>
                      </div>
                  </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
              <label>Pais Origen</label>
                <select name="CodigoPaisOrigenBusqueda" id="CodigoPaisOrigenBusqueda" class="form-control select2bs4 " >
                    <option value="">---</option>
                    @foreach ($ListadoPaises as $PaisesList)
                        <option value="{{ $PaisesList->CodigoPais; }}">{{ $PaisesList->Pais; }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
              <label>Pais Destino</label>
                <select name="PaisDestinoBusqueda" id="PaisDestinoBusqueda" class="form-control select2bs4 " >
                    <option value="">---</option>
                    @foreach ($ListadoPaises as $PaisesList)
                        <option value="{{ $PaisesList->CodigoPais; }}">{{ $PaisesList->Pais; }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
              <label>No. Booking</label>
                <input type="text" class="form-control" id="BookingBusqueda" name="BookingBusqueda">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
              <label>No. BL</label>
              <input type="text" class="form-control" id="BlBusqueda" name="BlBusqueda">
            </div>
        </div>

        <div class="col-sm-2">
            <div class="form-group">
                <label>No. Equipo</label>
                <input type="text" class="form-control" id="EquipoBusqueda" name="EquipoBusqueda">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <input type="submit"  class="btn btn-primary" value="Buscar">
        </div>
    </div>
</form>