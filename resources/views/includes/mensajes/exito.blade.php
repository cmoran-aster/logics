
@if (session("mensaje"))
    <div class="alert alert-success alert-dismissible" id="alertaExito">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fas fa-check"></i> Exito!</h4>
        <ul>
            <li>{{session("mensaje")}}</li>
        </ul>
    </div>
@endif

