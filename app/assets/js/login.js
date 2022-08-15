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

	$("#login").click(function(evento){
    evento.preventDefault();
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
          var atributosInput;
          atributosInput = { type: 'hidden', id: 'id', name: 'id', value: response.combos['id'] };
          $('<input>').attr(atributosInput).appendTo('#formulario');
          atributosInput = { type: 'hidden', id: 'id_number', name: 'id_number', value: response.combos['id_number'] };
          $('<input>').attr(atributosInput).appendTo('#formulario');
          atributosInput = { type: 'hidden', id: 'firstname', name: 'firstname', value: response.combos['firstname'] };
          $('<input>').attr(atributosInput).appendTo('#formulario');
          atributosInput = { type: 'hidden', id: 'lastname', name: 'lastname', value: response.combos['lastname'] };
          $('<input>').attr(atributosInput).appendTo('#formulario');
          atributosInput = { type: 'hidden', id: 'email', name: 'email', value: response.combos['email'] };
          $('<input>').attr(atributosInput).appendTo('#formulario');
          atributosInput = { type: 'hidden', id: 'role', name: 'role', value: response.combos['role'] };
          $('<input>').attr(atributosInput).appendTo('#formulario');
          atributosInput = { type: 'hidden', id: 'familycore_id', name: 'familycore_id', value: response.combos['familycore_id'] };
          $('<input>').attr(atributosInput).appendTo('#formulario');
          atributosInput = { type: 'hidden', id: 'temporal_password', name: 'temporal_password', value: response.combos['temporal_password'] };
          $('<input>').attr(atributosInput).appendTo('#formulario');
          atributosInput = { type: 'hidden', id: 'users', name: 'users', value: response.combos['users'] };
          $('<input>').attr(atributosInput).appendTo('#formulario');
          atributosInput = { type: 'hidden', id: 'users_today', name: 'users_today', value: response.combos['users_today'] };
          $('<input>').attr(atributosInput).appendTo('#formulario');
          atributosInput = { type: 'hidden', id: 'families', name: 'families', value: response.combos['families'] };
          $('<input>').attr(atributosInput).appendTo('#formulario');
          atributosInput = { type: 'hidden', id: 'roles', name: 'roles', value: response.combos['roles'] };
          $('<input>').attr(atributosInput).appendTo('#formulario');

          $('#formulario').submit();

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
});

