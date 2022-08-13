$(document).ready(function(){

$("#login").hide();

$("#forgotPassword").click(function(){
    if($("input[name='email']").val() == ""){
            swal.fire({
                type: 'error',
                title: '<center>Ha ocurrido un error</center>',
                icon: 'error',
                html: `<center>El campo del correo electrónico no puede estar vacio.</center>`,
                showConfirmButton: true,
                timer: 8000,

        });
        return false;
    }else{
        forgotPassword();
    }
});


forgotPassword = () => {

    var parametros = {
        casoConsulta: "forgotPassword",
        email: $("input[name=email]").val()
    };
    $.ajax({
        url: "../app/inc_php/acceso/datosAcceso.php",
        type: "POST",
        async: true,
        dataType: "json",
        data: parametros,
        beforeSend: function() {
            $('#forgotPassword').html('<i class="fa fa-spinner fa-spin"></i>');
        },
        success: function(response) {
            swal.fire({
                title: '<center>¡Exito!</center>',
                icon: 'success',
                html: `<center>Restablecimiento de contraseña realizado con exito, revisa tu correo electrónico y sigue los pasos.</center>`,
                showConfirmButton: true,
                timer: 8000,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                focusConfirm: false,
                showCloseButton: false,
                focusClose: false

            });
        },
        error: function(error) {
            console.log(error);
            swal.fire({
                type: 'error',
                title: '<center>Ha ocurrido un error</center>',
                icon: 'error',
                html: `<center>Ocurrió un error al restablecer la contraseña.</center>`,
                showConfirmButton: false,
                timer: 8000,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                focusConfirm: false,
                showCloseButton: false,
                focusClose: false

            });
        },
        complete: function() {
            $('#forgotPassword').hide();
            $('#login').show();
        }  
    });  

}

})