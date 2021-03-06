/**
 * Cliente de creacion de formularios
 */
// autocarga de funciones cuando la pagina esté lista
$(document).ready(function() {
    listar();
    listType();
    $("#estado").attr('checked', false);
    $("#estado").on("click", checked);
    $("#frm_process").on("click", procesar);
    $("#tblFomrs").on('click', '.btn-editar', cargarData);
    $("#tblFomrs").on('click', '.btn-eliminar', eliminarRegistro);
    $("#frm_reset").on("click", limpiarForm);
});

//FUNCIONALIDAES
// creacion de tabla
function listar() {
    $.ajax({
        url: uri + 'ajax/qltformulario/readAll',
        type: 'GET',
        dataType: 'json',
        //data: {param1: 'value1'},
        beforeSend: function() {
            $("table").waitMe({
                waitTime: 800
            });
        }
    }).done(function(result) {
        var item = result.data;
        var text = "<tr>";
        for (var i = item.length - 1; i >= 0; i--) {
            var est = item[i]['estado'] == 1 ? "Activo" : "Inactivo";
            text += "<td scope='row'>" + item[i]['id'] + "</td>";
            text += "<td>" + item[i]['frm_nombre'] + "</td>";
            text += "<td>" + item[i]['frm_descripcion'] + "</td>";
            text += "<td>" + item[i]['usuario'] + "</td>";
            text += "<td>" + item[i]['tipo'] + "</td>";
            text += "<td>" + item[i]['creacion'] + "</td>";
            text += "<td>" + est + "</td>";
            text += "<td><div class='btn-group' role='group' aria-label=''>";
            text += "<button type='button' class='btn btn-sm btn-success btn-editar' ><i class='far fa-edit'></i></button>";
            text += "<button type='button' class='btn  btn-sm btn-danger btn-eliminar'><i class='far fa-trash-alt'></i></button></div></tr>";
        }
        document.getElementById("tbl_form").innerHTML = text;
    }).fail(function(e) {
        toastr.error(e.message, e.title);
    });
}
// creacion de lista desplegable
function listType() {
    $.ajax({
        url: uri + 'ajax/cfgtipoform/readAll',
        type: 'GET',
        dataType: 'json',
        //data: {param1: 'value1'},
    }).done(function(result) {
        var item = result.data;
        var text = "<option>Selecciona una Opcion</option>";
        for (var i = item.length - 1; i >= 0; i--) {
            text += "<option value='" + item[i]['id'] + "'>" + item[i]['tipo'] + "</option>";
        }
        document.getElementById("tipo_form").innerHTML = text;
    }).fail(function(e) {
        toastr.error(e.message, e.title);
    });
}
//chequed
function checked(event) {
    if ($("#estado").prop('checked') === true) {
        document.getElementById("checkValue").innerHTML = "Habilitado";
    } else {
        document.getElementById("checkValue").innerHTML = "Deshabilitado";
    }
}


// FUNCIONES CARGADAS POR EVENTOS
// procesar datos -> modifica un registro existente o guarda uno nuevo
function procesar(event) {
    // creamos un array con los campos del formulario
    var data = {
        frm_nombre: $("#frm_nombre").val(),
        frm_descripcion: $("#frm_descripcion").val(),
        tipo_form: $("#tipo_form").val(),
        estado: $('#estado').prop('checked') ? 1 : 0,
    }
    //validamos si el campo id esta asignado
    if ($("#id").val()) {
        // de estar asignado, editamos el registro
        data.id = $("#id").val();
        $.ajax({
            url: uri + 'ajax/qltformulario/update',
            type: 'POST',
            dataType: 'json',
            data: data,
        }).done(function(result) {
            toastr.success(result.message, result.title);
            limpiarForm();
            listar();
        }).fail(function(e) {
            toastr.error(e.message, e.title);
        });
    } else {
        data.creador = uData.id;
        data.creacion = '';
        $.ajax({
            url: uri + 'ajax/qltformulario/create',
            type: 'POST',
            dataType: 'json',
            data: data,
        }).done(function(result) {
            toastr.success(result.message, result.title);
            limpiarForm()
            listar();
        }).fail(function(e) {
            toastr.error(e.message, e.title);
            console.log(e);
        });
    }
}


// Cargar datos ->llena el formulario con datos existentes para modificarlos
function cargarData() {
    var currentRow = $(this).closest("tr");
    var id = currentRow.find("td:eq(0)").text();
    $.ajax({
        url: uri + 'ajax/qltformulario/readOne',
        type: 'POST',
        dataType: 'json',
        data: {
            "id": parseInt(id)
        },
    }).done(function(result) {
        var frm = result.data[0];
        $("#id").val(frm.id);
        $("#frm_nombre").val(frm.frm_nombre);
        $("#frm_descripcion").val(frm.frm_descripcion);
        $("#tipo_form").val(frm.tipo_form);
        frm.estado == 0 ? $("#estado").attr('checked', false) : $("#estado").attr('checked', true);
    }).fail(function(e) {
        toastr.error(e.message, e.title);
    });
}
// elminar-> borra un registro de la base de datos
function eliminarRegistro() {
    var currentRow = $(this).closest("tr");
    var id = currentRow.find("td:eq(0)").text();
    swal({
        title: "Está seguro?",
        text: "Este proceso eliminará el registro permanentemente!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: uri + 'ajax/qltformulario/delete',
                type: 'POST',
                dataType: 'json',
                data: {
                    "id": parseInt(id)
                },
            }).done(function(r) {
                toastr.success(r.mensjae, r.title);
                listar();
            }).fail(function(e) {
                toastr.error(e.mensjae, e.title);
                console.log(e);
            })
        } else {
            swal("Your imaginary file is safe!");
        }
    });
}

function limpiarForm() {
    $('#qadmform').trigger('reset');
}
// limpiar-> vacía los datos del formulario
 
