
var Logics = function () {
    return{
        ValidacionGeneral: function (id, reglas, mensajes) {
            const formulario = $('#'+id);
            formulario.validate({
                rules: reglas,
                messages: mensajes,
                errorElement: 'span',
                errorClass: 'error invalid-feedback',
                focusInvalid: false,
                ignore: "",

                /*errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },*/

                success: function (label){
                    label.closest('.form-group').removeClass('has-error');
                },
                errorPlacement: function(error, element){
                    if ($(element).is('select') && element.hasClass('bs-select')) {
                        error.insertAfter(element);
                    } else if($(element).is('select') && element.hasClass('select2-hidden-accessible')){
                        element.next().after(error);
                    } else if(element.attr("data-error-container")){
                        error.appendTo(element.attr("data-error-container"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element){
                    $(element).removeClass('is-invalid');
                },

                invalidHandler: function (event, validator){

                },
                submitHandler: function (form){
                    return true;
                }
            });
        },
        alertar(mensaje,color){
            if(color == "v"){
                toastr.success(mensaje);
            }
            if(color == "r"){
                toastr.error(mensaje);
            }
            if(color == "c"){
                toastr.info(mensaje);
            }
            if(color == "a"){
                toastr.warning(mensaje);
            }
            
        },
        confirmacion(mensaje,funcion,Cod){
            $.confirm({
                title: 'Confirmación!',
                type: 'orange',
                theme: 'material',
                escapeKey: true,
                content: mensaje,
                buttons: {
                    confirmar:{
                        btnClass: 'btn-success',
                        action: function(){
                            Eliminar(funcion,Cod);
                        }
                    },
                    cancelar:{
                        btnClass: 'btn-danger',
                        action: function(){
                            
                        }
                    }
                }
            });
        }
    }
}();

$('select').select2({}).on("change", function (e) {
    $(this).valid()
  });

