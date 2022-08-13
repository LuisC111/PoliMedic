$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    
    setProgressBar(current);
    
    $("#next_cuenta").click(function(){

    if($("input[name='email']").val() == "" || $("input[name='pwd']").val() == "" || $("input[name='cpwd']").val() == "" || $("input[name='pwd']").val() != $("input[name='cpwd']").val()){
        swal.fire({
                title: '<center>Ha ocurrido un error</center>',
                icon: 'error',
                html: `<center>Aún hay campos vacios o las contraseña no coinciden.</center>`,
                showConfirmButton: true,
                timer: 8000,
        });

        return false;
    }

    mailDuplicity()

    if($("#mailDuplicity").val() == "false"){
        return false;
    }else{
        $("#correo").text($("input[name='email']").val())
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;
        
        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        next_fs.css({'opacity': opacity});
        },
        duration: 500
        });
        setProgressBar(++current);
    }
    


    });

    $("#next_personal").click(function(){

        verifyUser();
        
        $("#correo").text($("input[name='email']").val())
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;
        
        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        next_fs.css({'opacity': opacity});
        },
        duration: 500
        });
        setProgressBar(++current);
        });


        $("#next_verificacion").click(function(){

            if($("input[name=code]").val() == $("#hidCode").val()){
                registerUser();
            }else{
                swal.fire({
                    title: '<center>Ha ocurrido un error</center>',
                    icon: 'error',
                    html: `<center>El código ingresado es incorrecto, revisa el código enviado a tu correo electrónico.</center>`,
                    showConfirmButton: true,
                    timer: 8000,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    focusConfirm: false,
                    showCloseButton: false,    
                });
                return false;
            }
            
            $("#correo").text($("input[name='email']").val())
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            
            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            
            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
            step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;
            
            current_fs.css({
            'display': 'none',
            'position': 'relative'
            });
            next_fs.css({'opacity': opacity});
            },
            duration: 500
            });
            setProgressBar(++current);
            });
    
    $(".previous").click(function(){
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show();
    
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(--current);
    });
    
    function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
    .css("width",percent+"%")
    }
    
    $(".submit").click(function(){
    return false;
    })

    mailDuplicity = () => {

        var parametros = {
            casoConsulta: "mailDuplicity",
            email: $("input[name=email]").val(),
        };
        $.ajax({
            url: "../app/inc_php/acceso/datosAcceso.php",
            type: "POST",
            async: true,
            dataType: "json",
            data: parametros,
            beforeSend: function() {
                $('#next_personal').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function(response) {

                console.log(response.combos);

                if(response.combos == false){
                    $("#mailDuplicity").val("false");
                    swal.fire({
                        title: '<center>Ha ocurrido un error</center>',
                        icon: 'error',
                        html: `<center>La dirección de correo electrónico ya se encuentra registrada.</center>`,
                        showConfirmButton: true,
                        timer: 8000,
                });
            
                
                }else{
                    $("#mailDuplicity").val("true");
                }
                
            },
            error: function(error) {
                console.log(error);
                swal.fire({
                    type: 'error',
                    title: '<center>Ha ocurrido un error</center>',
                    icon: 'error',
                    html: `<center>Ocurrió un error al control la duplicidad de correos.</center>`,
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
                $('#next_verificacion').html('<i class="fa fa-arrow-right"></i>');
            }  
        });  

    }


    verifyUser = () => {

        var parametros = {
            casoConsulta: "verificar",
            email: $("input[name=email]").val(),
            identification_number: $("input[name=identification_number]").val(),
            firstname: $("input[name=firstname]").val(),
            lastname: $("input[name=lastname]").val()

        };
        $.ajax({
            url: "../app/inc_php/acceso/datosAcceso.php",
            type: "POST",
            async: true,
            dataType: "json",
            data: parametros,
            beforeSend: function() {
                $('#next_personal').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function(response) {
                atributosInput = { type: 'hidden', id: 'hidCode', name: 'hidCode', value: response.code };
                $('<input>').attr(atributosInput).appendTo('#formulario');   
            },
            error: function(error) {
                console.log(error);
                swal.fire({
                    type: 'error',
                    title: '<center>Ha ocurrido un error</center>',
                    icon: 'error',
                    html: `<center>Ocurrió un error al registrarse.</center>`,
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
                $('#next_verificacion').html('<i class="fa fa-arrow-right"></i>');
            }  
        });  

    }


    registerUser = () => {

        var parametros = {
            casoConsulta: "registro",
            email: $("input[name=email]").val(),
            password: $("input[name=pwd]").val(),
            identification_type: $("select[name=identification_type]").val(),
            identification_number: $("input[name=identification_number]").val(),
            firstname: $("input[name=firstname]").val(),
            lastname: $("input[name=lastname]").val(),
            gender: $("select[name=gender]").val(),
            birthdate: $("input[name=birthdate]").val()
        };
        $.ajax({
            url: "../app/inc_php/acceso/datosAcceso.php",
            type: "POST",
            async: true,
            dataType: "json",
            data: parametros,
            beforeSend: function() {
                $('#next_verificacion').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function(response) {
                console.log(response.combos);
            },
            error: function(error) {
                console.log(error);
                swal.fire({
                    type: 'error',
                    title: '<center>Ha ocurrido un error</center>',
                    icon: 'error',
                    html: `<center>Ocurrió un error al registrarse.</center>`,
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

            }  
        });  

    }
    
    
});