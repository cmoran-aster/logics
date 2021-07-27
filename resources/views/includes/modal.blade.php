

<div class="modal fade" id="{{$IdModal}}" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-{{$TamanoModal}}">
      <div class="modal-content"> 
        <div class="modal-header" style="background-color:#1c375a !important; border-top-left-radius: 3px; border-top-right-radius: 3px; ">
          <h4 class="modal-title text-white">@yield('TituloModal')</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          @yield('BodyModal')
        </div>
        <div class="modal-footer justify-content-between">
          @yield('PieModal')
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>