<div class="row">
    <div class="col-md-12">
        <br>
    </div>
</div>
<form id="form_gastos-exp">
    @csrf
<div class="row">
    <div class="col-md-3">
        <label for="">Proveedor</label>
        <select  class="form-control">
            <option value="">1</option>
            <option value="">2</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="">Fecha Factura</label>
        <input type="date" class="form-control">
    </div>
    <div class="col-md-2">
        <label for="">No Factura</label>
        <input type="text" class="form-control">
    </div>
    <div class="col-md-3">
        <label for="">Gasto</label>
        <select  class="form-control">
            <option value="">1</option>
            <option value="">2</option>
        </select>
    </div>
    
    <div class="col-md-2">
        <div class="row">
            <div class="col-md-5">
                <label for="">Moneda</label><br>
                <select  class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                </select>
            </div>
            <div class="col-md-7">
                <label for="">Total</label>
                <input type="number" class="form-control">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        
            <label for="">Descripción</label>
            <textarea  class="form-control" style="height: 45px;"></textarea>
        
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
            <table class="table table-sm table-bordered" id="table-gastos">
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



