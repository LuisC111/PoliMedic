$(document).ready(function() {

    $('#btnModalCerrar').click(function() {
        $('#hidIdSolicitud').remove();
        $("#modal-detalleSolicitud").modal('hide')
    });

    $('#btnModalClose').click(function() {
        $('#modal-agregar').modal('hide');
        $("input[name=email]").val('')
        $("input[name=identification_number]").val('')
        $("input[name=firstname]").val('')
        $("input[name=lastname]").val('')
        $("input[name=birthdate]").val('')
});

    $("#btnModalAgregar").click(function() {
        $("#modal-agregar").modal('show')
    });

    $("#btnModalInactivar").click(function() {
        inactiveRole($('#hidIdSolicitud').val());
    });

    $("#btnModalAdd").click(function() {
        if($("input[name=email]").val() == '' || $("input[name=identification_number]").val() == '' || $("input[name=firstname]").val() == '' || $("input[name=lastname]").val() == '' || $("input[name=birthdate]").val() == ''){
            swal.fire({
                title: '<center>¡Ha ocurrido un error!</center>',
                icon: 'error',
                html: `<center>Aún hay campos vacios.</center>`,
                showConfirmButton: true,
                timer: 8000,
            })
        }else{
            addMember();
        }
    });


    $("input[type='checkbox']").change(function() {
        $(this).val(this.checked ? "1" : "0");
    });


    listarSolicitudes($('#divTblSolicitudes'), $('#tblSolicitudes'));

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



function addMember(){
    var parametros = {
        casoConsulta: 'addMember',
        valorConsulta: $('#familycore_id').val(),
        email: $("input[name=email]").val(),
        identification_type: $("select[name=identification_type]").val(),
        identification_number: $("input[name=identification_number]").val(),
        firstname: $("input[name=firstname]").val(),
        lastname: $("input[name=lastname]").val(),
        gender: $("select[name=gender]").val(),
        birthdate: $("input[name=birthdate]").val()

    };
    $.ajax({
        url: "../app/inc_php/dashboard/datosDashboard.php",
        type: "POST",
        async: true,
        dataType: "json",
        data: parametros,
        beforeSend: function() {
            $('#btnModalAdd').html('<i class="fa fa-spinner fa-spin"></i>');
        },
        success: function(response) {
                swal.fire({
                    title: '<center>¡Has creado un nuevo miembro!</center>',
                    icon: 'success',
                    html: `<center>¡Es momento de que tu familiar <b>revise su correo electrónico</b> en donde encontrara el <b>usuario</b> y <b>contraseña</b> para acceder!</center>`,
                    showConfirmButton: true,
                    timer: 8000,
                }).then(function() {
                    $('#modal-agregar').modal('hide');
                    $("input[name=email]").val('')
                    $("input[name=identification_number]").val('')
                    $("input[name=firstname]").val('')
                    $("input[name=lastname]").val('')
                    $("input[name=birthdate]").val('')
                    listarSolicitudes($('#divTblSolicitudes'), $('#tblSolicitudes'));
                });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            //alert("Error en solicitud Ajax de | "+jqXHR.responseText + " | " + textStatus + " | " + errorThrown);
            var msgError = "Error en solicitud Ajax de consulta | " + jqXHR.responseText + " | " + textStatus + " | " + errorThrown;
            $('#divAlert').show();
            $('#spmError').html(msgError);
        }
    });
}


function detallarSolicitud(solicitud) {
    $('#txtModalObservacionesUGC').val('');
    $('#divAlertModal').hide();
    var parametros = {
        casoConsulta: 'detalleTblFamilyUser',
        valorConsulta: solicitud.val()
    };
    $.ajax({
        url: "../app/inc_php/dashboard/datosDashboard.php",
        type: "POST",
        async: true,
        dataType: "json",
        data: parametros,
        success: function(response) {
            if (response.success) {
                if (response.combos) {
                    var arrayNombresColumnas = [];
                        $.each(response.combos[0], function(nombre) {
                            arrayNombresColumnas.push(nombre);
                        });
                        generarOpciones($('#slcModalEstadoSolicitud'), solicitud);
                        $('#tblDetalleSolicitud').empty();
                        creaFilasTabla(response.combos, $('#tblDetalleSolicitud'));
                        $('#tblObservacionesSolicitud').empty();
                        creaCabezeraTabla(arrayNombresColumnas, $('#tblObservacionesSolicitud'));

                        creaFilasTabla(response.observaciones, $('#tblObservacionesSolicitud'));
                        $('#hidIdSolicitud').remove();
                        var atributosInput = { type: 'hidden', id: 'hidIdSolicitud', name: 'hidIdSolicitud', value: solicitud.attr('value') };
                        $('<input>').attr(atributosInput).appendTo('#modal-detalleSolicitud');
                        $('#modal-detalleSolicitud').modal('show');
                        solicitud.prop('checked', false);

                } else {
                    solicitud.prop('checked', false);
                }

            } else {
                var msgError = "\nError en creaci\u00F3n de tabla din\u00E1mica, por favor intentelo en otro momento. \n";
                msgError = response.error ? msgError + response.error : '';
                $('#divAlert').show();
                $('#spmError').html(msgError);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            //alert("Error en solicitud Ajax de | "+jqXHR.responseText + " | " + textStatus + " | " + errorThrown);
            var msgError = "Error en solicitud Ajax de listado de solicitudes | " + jqXHR.responseText + " | " + textStatus + " | " + errorThrown;
            $('#divAlert').show();
            $('#spmError').html(msgError);
        }
    });
}


function listarSolicitudes(divControl, control) {

    var parametros = {
        casoConsulta: "tblFamilyUser",
        valorConsulta: $('#familycore_id').val()
        };
    $.ajax({
        url: "../app/inc_php/dashboard/datosDashboard.php",
        type: "POST",
        //async: true,
        async: false,
        dataType: "json",
        data: parametros,
        success: function(response) {
            if (response.success) {
                    $(control).empty();
                    var arrayNombresColumnas = [];
                    arrayNombresColumnas.push(' # ');
                    $.each(response.combos[0], function(nombre) {
                        arrayNombresColumnas.push(nombre);
                    });
                    creaCabezeraTabla(arrayNombresColumnas, $(control));
                    creaFilasTabla(response.combos, $(control));

                    $('#tblSolicitudes').dataTable({

                        "language": {
                            "sProcessing": "Procesando...",
                            "sLengthMenu": "Mostrar _MENU_ registros",
                            "sZeroRecords": "No se encontraron solicitudes",
                            "sEmptyTable": "Ningún dato disponible en esta tabla",
                            "sInfo": "Mostrando _END_ de un total de _TOTAL_ solicitudes",
                            "sInfoEmpty": "Mostrando 0 resultados",
                            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                            "sInfoPostFix": "",
                            "sSearch": "Buscar:",
                            "sUrl": "",
                            "sInfoThousands": ",",
                            "sLoadingRecords": "Cargando...",
                            "oPaginate": {
                                "sFirst": "Primero",
                                "sLast": "Último",
                                "sNext": "Siguiente",
                                "sPrevious": "Anterior"
                            },

                        },
                        "lengthMenu": [
                            [10, 50, 100, -1],
                            [10, 50, 100, "Todo"]
                        ],
                        responsive: true,
                        "bDestroy": true,
                        //search
                        "searching": true,
                    });

                    $(divControl).show();
                    $('#modal-BusquedaSolicitudes').modal('hide');
                    $(control).trigger('updateAll');
               
            } else {
                var msgError = "\nError en creaci\u00F3n de tabla din\u00E1mica, por favor intentelo en otro momento. \n";
                msgError = response.error ? msgError + response.error : '';
                $('#divAlert').show();
                $('#spmError').html(msgError);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            //alert("Error en solicitud Ajax de | "+jqXHR.responseText + " | " + textStatus + " | " + errorThrown);
            var msgError = "Error en solicitud Ajax de listado de solicitudes | " + jqXHR.responseText + " | " + textStatus + " | " + errorThrown;
            $('#divAlert').show();
            $('#spmError').html(msgError);
        }
    });
}

function generarOpciones(control, opcion) {
    var parametros = {
        casoConsulta: control.attr('id'),
        valorConsulta: opcion ? opcion.val() : null
    };
    $.ajax({
        url: "../app/inc_php/dashboard/datosDashboard.php",
        type: "POST",
        async: true,
        dataType: "json",
        data: parametros,
        success: function(response) {
            if (response.success) {
                if (response.combos) {
                    $(control).empty();
                    var atributosOption = { value: '' };
                    var textoOption = '<< Seleccione >>';
                    $('<option>').attr(atributosOption).text(textoOption).appendTo(control);
                    for (var i = 0; i < (response.combos).length; i++) {
                        atributosOption = { value: response.combos[i].CODIGO };
                        textoOption = response.combos[i].NOMBRE;
                        $('<option>').attr(atributosOption).text(textoOption).appendTo(control);
                    }
                    $(control).change();
                } else {
                    //$(control).val('');
                    $(control).empty();
                    $(control).change();
                }
            } else {
                var msgError = "\nError en combinaci\u00F3n de combos, por favor intentelo en otro momento. \n";
                msgError = response.error ? msgError + response.error : '';
                $('#divAlert').show();
                $('#spmError').html(msgError);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            //alert("Error en solicitud Ajax de | "+jqXHR.responseText + " | " + textStatus + " | " + errorThrown);
            var msgError = "Error en solicitud Ajax de consulta | " + jqXHR.responseText + " | " + textStatus + " | " + errorThrown;
            $('#divAlert').show();
            $('#spmError').html(msgError);
        }
    });
}


function atributosFechas() {
    var objFecha = new Date();
    var fechaAnterior = objFecha.getDate() - 1 + '-' + objFecha.getMonth() + '-' + objFecha.getFullYear();
    var fechaActual = (objFecha.getDate()) + '-' + (objFecha.getMonth() + 1) + '-' + objFecha.getFullYear();
    //$("#dteFechaInicio").attr({placeholder: fechaAnterior, value: fechaAnterior});
    //$("#dteFechaFin").attr({placeholder: fechaActual, value: fechaActual});
    $("#dteFechaInicio").attr({ placeholder: fechaAnterior });
    $("#dteFechaFin").attr({ placeholder: fechaActual });

    var fechaAnteriorT = objFecha.getDate() - 1 + '-' + objFecha.getMonth() + '-' + objFecha.getFullYear();
    var fechaActualT = (objFecha.getDate()) + '-' + (objFecha.getMonth() + 1) + '-' + objFecha.getFullYear();
    //$("#dteFechaInicio").attr({placeholder: fechaAnterior, value: fechaAnterior});
    //$("#dteFechaFin").attr({placeholder: fechaActual, value: fechaActual});
    $("#dteFechaInicioT").attr({ placeholder: fechaAnteriorT });
    $("#dteFechaFinT").attr({ placeholder: fechaActualT });
}

function creaCabezeraTabla(nombresColumnas, tabla) {
    var tableHead = $('<thead>');
    var nuevaFila = $('<tr>');
    for (var i = 0; i < nombresColumnas.length; i++) {
        nuevaFila.append($('<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" id="' + i + '">').text(nombresColumnas[i]));
        tableHead.append(nuevaFila);
    }
    tabla.append(tableHead);
    $("#0").text('');
    //Upload an image
    $("#0").append($('<img alt="image" src="../app/assets/img/tijera.png" style="max-width: 30px;max-height:30px" />'));


}

function modificaCabezeraTabla(nombresColumnas, tableHead) {
    //var tableHead = $('<thead>');
    var nuevaFila = $('<tr>');
    for (var i = 0; i < nombresColumnas.length; i++) {
        nuevaFila.append($('<th>').text(nombresColumnas[i]));
        tableHead.append(nuevaFila);
    }
    //tabla.append(tableHead);
}

function modificaCuerpoTabla(filas, tableBody) {
    //var tableBody = $('<tbody id = "bTblSolicitudes">');
    //tblSolicitudes DATA TABLE

    for (var i = 0; i < filas.length; i++) {
        var nuevaFila = $('<tr>');
        var atributosInputRadio = { type: 'radio', id: 'rdSol' + filas[i]['ID'], name: 'rdSol[]', value: filas[i]['ID'] };
        var nuevoInput = $('<td>').append(($('<input>').attr(atributosInputRadio)));
        nuevaFila.append(nuevoInput);
        $.each(filas[i], function(nombre, valor) {
            nuevaFila.append($('<td>').text(valor));
        });
        tableBody.append(nuevaFila);
    }

    //tabla.append(tableBody);
}

function creaFilasTabla(filas, tabla) {
    var idTabla = tabla.attr('id');

    switch (idTabla) {

        case 'tblSolicitudes':
            var tableBody = $('<tbody id = "bTblSolicitudes">');

            for (var i = 0; i < filas.length; i++) {
                var nuevaFila = $('<tr>');
                var atributosInputRadio = { type: 'radio', id: 'rdSol' + filas[i]['ID'], name: 'rdSol[]', value: filas[i]['ID'] };
                var nuevoInput = $('<td>').append(($('<input>').attr(atributosInputRadio)));
                nuevaFila.append(nuevoInput);
                $.each(filas[i], function(nombre, valor) {
                    if (valor == 'Activo') {
                        nuevaFila.append($('<td class="si">').text('1'));
                    }else if (valor == 'Inactivo') {
                        nuevaFila.append($('<td class="no">').text('0'));
                    }else{
                        nuevaFila.append($('<td>').text(valor));
                    }
                });
                tableBody.append(nuevaFila);

            }

            tabla.append(tableBody);
            $(".si").text('');
            $(".si").append($('<span class="badge badge-sm bg-gradient-success">Activo</span>'));
            $(".no").text('');
            $(".no").append($('<span class="badge badge-sm bg-gradient-danger">Inactivo</span>'));

            break;


        case 'tblDetalleSolicitud':
            var tableBody = $('<tbody id = "bTblDetalleSolicitud">');
            var titulos = [];
            var campos = [];
            var contador = 0;
            var nuevaFila = null;

            for (var i = 0; i < filas.length; i++) {
                $.each(filas[i], function(nombre, valor) {
                    if (nombre === 'ID SOLICITUD') {
                        var headTabla = $('<thead class="th_UGC">');
                        var fila = $('<tr>');
                        var campo = $('<th colspan="3" >');
                        var filaHeadInner = fila.append(campo.append($('<strong>').text(nombre + ':   ' + valor)));
                        //headTabla.append(fila.append(filaHeadInner));
                        tabla.append(headTabla.append(fila.append(filaHeadInner)));
                    } else {
                        if (contador < 2) {
                            titulos[contador] = nombre;
                            campos[contador] = valor;
                            contador++;
                        } else {
                            titulos[contador] = nombre;
                            campos[contador] = valor;

                            nuevaFila = $('<tr class="success">');
                            for (var j = 0; j < titulos.length; j++) {

                                nuevaFila.append($('<td>').append($('<strong>').text(titulos[j])));
                            }
                            tableBody.append(nuevaFila);

                            nuevaFila = $('<tr>');
                            for (var k = 0; k < campos.length; k++) {
                                nuevaFila.append($('<td id=valor' + titulos[k] + '>').text(campos[k]));
                            }
                            
                            tableBody.append(nuevaFila);

                            titulos = [];
                            campos = [];
                            contador = 0;
                        }
                    }
                });
            }
            tabla.append(tableBody);

            break;

    }


}