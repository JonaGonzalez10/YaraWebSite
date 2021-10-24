$(document).ready(function() {
    $('#btnSend').click(function(){
        
        var errores = '';

        //VALIDANDO NOMBRE

        if( $('#names').val() == '' ){
            errores += '<p>El campo Nombre Completo no debe quedar vacío</p>';
            $('#names').css("border-bottom-color", "#F14B4B")
        } else{
            $('#names').css("border-bottom-color", "#d1d1d1")
        }

        //VALIDANDO CORREO

        if( $('#email').val() == '' ){
            errores += '<p>El campo Correo Electrónico no debe quedar vacío</p>';
            $('#email').css("border-bottom-color", "#F14B4B")
        } else{
            $('#email').css("border-bottom-color", "#d1d1d1")
        }

        //VALIDANDO APLICACION
        if( $('#aplicacion').val() == '' ){
            errores += '<p>El campo Nombre de la Aplicacion a solicitar no debe quedar vacío</p>';
            $('#aplicacion').css("border-bottom-color", "#F14B4B")
        } else{
            $('#aplicacion').css("border-bottom-color", "#d1d1d1")
        }

        //VALIDANDO MAC ADDRESS
        if( $('#macAddress').val() == '' ){
            errores += '<p>El campo MAC Address del dispositivo no debe quedar vacío</p>';
            $('#macAddress').css("border-bottom-color", "#F14B4B")
        } else{
            $('#macAddress').css("border-bottom-color", "#d1d1d1")
        }

        //VALIDANDO MAC ADDRESS
        if( $('#razones').val() == '' ){
            errores += '<p>El campo ¿Por qué razón quisieras la aplicación? no debe quedar vacío</p>';
            $('#razones').css("border-bottom-color", "#F14B4B")
        } else{
            $('#razones').css("border-bottom-color", "#d1d1d1")
        }

        //ENVIANDO MENSAJE
        if(errores == '' == false) {
            var mensajeModal = '<div class="modal_wrap">' + 
                                    '<div class="mensaje_modal">' +
                                        '<h3>Errores Encontrados</h3>' +
                                        errores +
                                        '<span id="btnClose">Cerrar</span>' +
                                    '</div>' +
                                '</div>'

            $('body').append(mensajeModal);
        }

        //CERRADO MODAL

        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });

    });
});