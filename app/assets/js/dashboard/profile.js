$(document).ready(function() {

    $('#btnModalCerrar').click(function() {
        $('#hidIdSolicitud').remove();
        $("#modal-detalleSolicitud").modal('hide')
    });

    $("#btnModalInactivar").click(function() {
        inactiveUser($('#hidIdSolicitud').val());
    });


    $("input[type='checkbox']").change(function() {
        $(this).val(this.checked ? "1" : "0");
    });

    loadUser($("#hidIdMember").val());

    $("#tblSolicitudes").on('click', function() {
        if ($("input:radio[name='rdSol[]']").is(':checked')) {
            var solicitud = $('input[type="radio"]:checked');
            detallarSolicitud(solicitud);
            $("#divModalSeguimientoP").hide();
        }
    });

    $('#btnModalCerrar').click(function() {
        $('#hidIdSolicitud').remove();
        $("#divModalSeguimientoP").hide();
    });



});

function calcularEdad(fecha) {
    var hoy = new Date();
    var cumpleanos = new Date(fecha);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();
    var y = hoy.getFullYear();
    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    return ", "+edad;
}


function loadUser(id){
    var parametros = {
        casoConsulta: 'loadUser',
        valorConsulta: id
    };
    $.ajax({
        url: "../app/inc_php/dashboard/datosDashboard.php",
        type: "POST",
        async: true,
        dataType: "json",
        data: parametros,
        success: function(response) {
            console.log(response.combos[0].name);
            $("#firstname").val(response.combos[0].firstname);
            $("#lastname").val(response.combos[0].lastname);
            $("#email").val(response.combos[0].email);
            $("#gender").val(response.combos[0].gender);
            $("#identification_type").val(response.combos[0].identification_type);
            $("#identification_number").val(response.combos[0].identification_number);
            $("#birthdate").val(response.combos[0].birthdate);
            $("#type").val(response.combos[0].type);
            $("#user").val(response.combos[0].user);
            $("#creation_date").val(response.combos[0].creation_date);
            $("#modification_date").val(response.combos[0].modification_date);
            $("#family_core").val(response.combos[0].name);
            $("#name").html(response.combos[0].firstname);
            let edad = calcularEdad(response.combos[0].birthdate);
            $("#edad").html(edad);
            $("#rol").html(response.combos[0].type);
            $("#cd").html(response.combos[0].creation_date);

            

        },
        error: function(jqXHR, textStatus, errorThrown) {
            //alert("Error en solicitud Ajax de | "+jqXHR.responseText + " | " + textStatus + " | " + errorThrown);
            var msgError = "Error en solicitud Ajax de consulta | " + jqXHR.responseText + " | " + textStatus + " | " + errorThrown;
            $('#divAlert').show();
            $('#spmError').html(msgError);
        }
    });
}
