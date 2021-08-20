<div class="row">
    <div class="col-md-12">
        <br>
    </div>
</div>
<form id="form_equipos">
    @csrf
<div class="row">
    <div class="col-md-2">
        <label for="">No. Equipo</label>
        <input type="text" class="form-control requerido" id="Identificacion" name="Identificacion" required>
        <input type="hidden" id="CodExpediente" value="{{$CodExpediente}}" required>
    </div>
    <div class="col-md-3">
        <label for="">Tipo</label>
        <select name="CodigoDescripcionEquipo" id="CodigoDescripcionEquipo" class="form-control select2bs4" >
            <option value="">---</option>
            @foreach ($ListadoDescripEquip as $ListadoDescripEquipos)
                <option value="{{ $ListadoDescripEquipos->CodigoDescripcionEquipo; }}" >{{ $ListadoDescripEquipos->DescripcionEquipo; }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2">
        <label for="">Marchamo 1</label>
        <input type="text" class="form-control" name="NumMarchamo1" id="NumMarchamo1">
    </div>
    <div class="col-md-2">
        <label for="">Marchamo 2</label>
        <input type="text" class="form-control" name="NumMarchamo2" id="NumMarchamo2">
    </div>
    <div class="col-md-2">
        <label for="">Peso</label>
        <input type="number" class="form-control requerido" name="Peso" id="Peso" required>
    </div>
    <div class="col-md-1">
        <label for="">OP</label><br>
        <button type="submit" class="btn btn-success">Guardar</button>
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
    <div class="col-md-12">
            <table class="table table-sm table-bordered" id="table-equipos">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No. Equipo</th>
                        <th>Tipo</th>
                        <th>Marchamo 1</th>
                        <th>Marchamo 2</th>
                        <th>Peso</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
    </div>
</div>



