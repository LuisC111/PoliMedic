$(document).ready(function(){

	$(function() {
		'use strict';
		
	  $('.form-control').on('input', function() {
		  var $field = $(this).closest('.form-group');
		  if (this.value) {
			$field.addClass('field--not-empty');
		  } else {
			$field.removeClass('field--not-empty');
		  }
		});
	
	});

	$("#login").click(function(){
		if($("#username").val() == "" || $("#password").val() == ""){
			swal.fire({
                title: '<center>Ha ocurrido un error</center>',
                icon: 'error',
                html: `<center>Aún hay campos vacios.</center>`,
                showConfirmButton: true,
                timer: 8000,
        });
		}else{
			verifyAccess();
		}
	});

	verifyAccess = () => {
		var parametros = {
            casoConsulta: "validaAcceso",
            username: $("input[name=user]").val(),
			password: $("input[name=password]").val(),
        };
        $.ajax({
            url: "../app/inc_php/acceso/datosAcceso.php",
            type: "POST",
            async: true,
            dataType: "json",
            data: parametros,
            beforeSend: function() {
                $('#login').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function(response) {
				if(response.combos != false){
					// window.location.href = "../app/inc_php/acceso/datosAcceso.php";
					console.log(response.combos);
				}else{
					swal.fire({
						title: '<center>Ha ocurrido un error</center>',
						icon: 'error',
						html: `<center>Usuario o contraseña incorrectos.</center>`,
						showConfirmButton: true,
						timer: 8000,
					});
				}
            },
            error: function(error) {
                console.log(error);
                swal.fire({
                    type: 'error',
                    title: '<center>Ha ocurrido un error</center>',
                    icon: 'error',
                    html: `<center>Ocurrió un error al iniciar sesión.</center>`,
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
                $('#login').html('<i class="fa fa-arrow-right"></i>');
            }  
        });  
	}

})