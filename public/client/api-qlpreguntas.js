// autocarga de funciones
$(document).ready(function() {
    //listar();
    //  listar();
    listarPreguntas();
    listForms();
    $("#frm_process").on("click", procesar);
    $("#tbl_preg").on("click", ".btn-editar", cargarDatos);
    $("#tbl_preg").on("click", ".btn-eliminar", eliminarRegistro);
    //$("#tbl_preguntas").dataTable();
});
//FUNCIONALIDAES
function listar() {
    $.ajax({
        url: uri + 'ajax/qltpreguntas/readAll',
        type: 'GET',
        dataType: 'json',
        // data: {param1: 'value1'},
        beforeSend: function() {
            $("table").waitMe({
                waitTime: 800
            });
        }
    }).done(function(result) {
        var item = result.data;
        var text = "<tr>";
        for (var i = item.length - 1; i >= 0; i--) {
            text += "<td scope='row'>" + item[i].id + "</td>";
            text += "<td>" + item[i].frm_nombre + "</td>";
            text += "<td>" + item[i].pregunta + "</td>";
            text += "<td>" + item[i].detalle_pregunta + "</td>";
            text += "<td>" + item[i].valor + "</td>";
            text += "<td><div class='btn-group' role='group' aria-label=''>";
            text += "<button type='button' class='btn btn-sm btn-success btn-editar' ><i class='far fa-edit'></i></button>";
            text += "<button type='button' class='btn  btn-sm btn-danger btn-eliminar'><i class='far fa-trash-alt'></i></button></div></tr>";
        }
        document.getElementById("tbl_preg").innerHTML = text;
    }).fail(function(e) {
        console.log(e);
        toastr.error(e.message, e.title);
    });;
}

function listarPreguntas() {
    $("#tbl_preguntas").dataTable({
        ajax: uri + 'ajax/qltpreguntas/readAll',
        columnDefs: [{
            targets: 5,
            data: null,
            defaultContent: "<div class='btn-group' role='group'><button type='button' class='btn btn-sm btn-success btn-editar' ><i class='far fa-edit'></i></button><button type='button' class='btn  btn-sm btn-danger btn-eliminar'><i class='far fa-trash-alt'></i></button></div>"
        }],
        columns: [{
            data: 'id'
        }, {
            data: 'frm_nombre'
        }, {
            data: 'pregunta'
        }, {
            data: 'detalle_pregunta'
        }, {
            data: 'valor'
        }],
    });
}

function listForms() {
    $.ajax({
        url: uri + 'ajax/qltformulario/readAll',
        type: 'GET',
        dataType: 'json',
        //data: {param1: 'value1'},
    }).done(function(result) {
        var item = result.data;
        var text = "<option>Selecciona una Opcion</option>";
        for (var i = item.length - 1; i >= 0; i--) {
            text += "<option value='" + item[i]['id'] + "'>" + item[i]['id'] + " - " + item[i].frm_nombre + "</option>";
        }
        document.getElementById("formulario_id").innerHTML = text;
    }).fail(function(e) {
        console.log(e)
        toastr.error(e.message, e.title);
    });
}

function procesar(event) {
    var data = {
        formulario_id: $("#formulario_id option:selected").val(),
        detalle_pregunta: $("#detalle_pregunta").val(),
        pregunta: $("#pregunta").val(),
        valor: $("#valor").val(),
    }
    if ($("#id").val()) {
        data.id = $("#id").val();
        data.formulario_id = $("#formulario_id").val()
        $.ajax({
            url: uri + 'ajax/qltpreguntas/update',
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
        $.ajax({
            url: uri + 'ajax/qltpreguntas/create',
            type: 'POST',
            dataType: 'json',
            data: data,
        }).done(function(result) {
            toastr.success(result.message, result.title);
            console.log(data);
            limpiarForm()
            listar();
        }).fail(function(e) {
            toastr.error(e.message, e.title);
            console.log(e);
        });
    }
}

function cargarDatos() {
    var currentRow = $(this).closest("tr");
    var id = currentRow.find("td:eq(0)").text();
    $.ajax({
        url: uri + 'ajax/qltpreguntas/readOne',
        type: 'POST',
        dataType: 'json',
        data: {
            "id": parseInt(id)
        },
    }).done(function(result) {
        var frm = result.data[0];
        $("#id").val(frm.id);
        $("#formulario_id").val(frm.formulario_id);
        $("#detalle_pregunta").val(frm.detalle_pregunta);
        $("#pregunta").val(frm.pregunta);
        $("#valor").val(frm.valor);
    }).fail(function(e) {
        toastr.error(e.message, e.title);
    });
}

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
                url: uri + 'ajax/qltpreguntas/delete',
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
    $('#frm_regunta').trigger('reset');
}