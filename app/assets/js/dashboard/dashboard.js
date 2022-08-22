$(document).ready(function() {
    if ($('#hidTemporal').val()){

    (async () => {
        const {value: password} = await swal.fire({
            title: 'Ingresa tu nueva contraseña',
            input: 'password',
            confirmButtonText: '<span id="btnActualizar">Actualizar contraseña</span>',
            inputLabel: 'Es necesario que cambie la contraseña por motivos de seguridad',
            inputAttributes: {
                maxlength: 24,
                autocapitalize: 'off',
                autocorrect: 'off'
            }
        }) 
        if (password) {
            $('#hidPassword').val(password)
        }
    })  () 
    }

    $('.swal2-confirm').click(function(){
        changePass($('#hidPassword').val())
    })

    changePass=(password)=>{
        let parametros= {
            casoConsulta: 'changePass',
            valorConsulta: $('#hidIdMember').val(),
            password: password
        }
        $.ajax({
            url: '../app/inc_php/dashboard/datosDashboard.php',
            type: 'POST',
            async: true,
            dataType: 'json',
            data: parametros,
            success: function(response){
                swal.fire({
                    icon:'success',
                    title: 'Contraseña actualizada con exito',
                    confirmButtonText: 'Aceptar'
                })
            }
        })
    }

})