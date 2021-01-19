$(document).ready(function() {
    $("#selectForm").modal({
        show: true,
        backdrop: false,
        keyboard: true
    });
    $("#dismissmodal").on("click", closeModal);
    listarFormulario();
    $("#formulario_id").on("change", mostrarData);
    $("#buildForm").on("click", crearFormulario);
    listarCoordinadores();
    $("#coordinador_id").on("change", filtrarOperador);
    $("#p_evaluar").on("click", guardarEvaluacion);
    
});
// FUNCIONALIDADES
// listar formularios
function listarFormulario() {
    $.ajax({
        url: uri + 'ajax/qltformulario/filter',
        type: 'POST',
        dataType: 'json',
        data: {
            estado: 1
        },
    }).done(function(result) {
        var item = result.data;
        var text = "<option>Selecciona una Opcion</option>";
        for (var i = item.length - 1; i >= 0; i--) {
            text += "<option value='" + item[i]['id'] + "'>" + item[i]['id'] + " - " + item[i].frm_nombre + "</option>";
        }
        document.getElementById("formulario_id").innerHTML = text;
        // console.log(result);
    }).fail(function(e) {
        //console.log(e)
        toastr.error(e.message, e.title);
    });
}

function mostrarData() {
    $.ajax({
        url: uri + 'ajax/qltformulario/readOne',
        type: 'POST',
        dataType: 'json',
        data: {
            "id": parseInt($("#formulario_id").val())
        },
    }).done(function(result) {
        var data = result.data[0];
        var txt = "<div class='card'><div class='card-body'>";
        txt += "<h5 class='card-title'>" + data.frm_nombre + "</h5>";
        txt += "<p class='card-text'>" + data.frm_descripcion + "</p>"
        txt += "</div></div>";
        document.getElementById("detalle_id").innerHTML = txt;
    }).fail(function(e) {
        toastr.error(e.message, e.title);
    });
}
// carga la informacion del formulario
function crearFormulario() {
    var dts = {
        formulario_id: $("#formulario_id").val()
    }
    $.ajax({
        url: uri + 'ajax/qltpreguntas/filter',
        type: 'POST',
        dataType: 'json',
        data: {
            formulario_id: $("#formulario_id").val()
        },
    }).done(function(result) {
        if (!result.data[0]) {
            var txt = "<div class='card border-warning'><div class='card-body text-warning'>";
            txt += "<h5 class='card-title'>Seleccione in formulario de la lista</h5>";
            txt += "</div></div>";
            document.getElementById("detalle_id").innerHTML = txt;
        } else {
            $("#selectForm").modal('hide');
            document.getElementById("c_title").innerHTML = result.data[0]['frm_nombre'];
            document.getElementById("c_descript").innerHTML = result.data[0]['frm_descripcion'];
            var preg_data = result.data;
            var p_input = "";
            for (var i = 0, length1 = preg_data.length; i < length1; i++) {
                var pid = i + 1;
                p_input += "<div class='form-group'><div class='row'><div class='col-md-8'><p data-toggle='collapse' href='#pr" + pid + "' role='button' aria-expanded='false' aria-controls='pr" + pid + "'>";
                p_input += "<i class='text-secondary'>" + pid + ") </i> " + preg_data[i]['pregunta'] + " <i class='text-primary'> ( " + preg_data[i]['valor'] + " pts. )</i>";
                p_input += "</p>";
                p_input += "<div class='collapse' id='pr" + pid + "'>";
                p_input += "<p class='d-flex text-muted justify-content-between'>" + preg_data[i]['detalle_pregunta'] + "</p>";
                p_input += "</div></div><div class='col-md-4'>";
                p_input += "<select class='form-control' id='preg_" + pid + "'>";
                p_input += "<option value='" + preg_data[i]['valor'] + "'>Cumplió</option><option value='0'>No Cumplió</option>";
                p_input += "</select></div></div></div>";
            }
            p_input += "<div class='form-group'><label for='notas'>Comentarios</label><textarea id='notas' name='notas' class='form-control' type='text'></textarea></div>";
            document.getElementById("preg_evaluacion").innerHTML = p_input;
            // var form_id = $("#formulario_id").val();    
            $("#inicio").val(moment().format('YYYY-MM-DD HH:mm:ss'));
            $("#form_id").val($("#formulario_id").val());
            // console.log(inicio);
            //console.log(result);
        }
    }).fail(function(e) {
        console.log(e);
    }).always(function() {
        console.log("complete");
    });
}

function listarCoordinadores() {
    $.ajax({
        url: uri + 'ajax/cfgjefe/readAll',
        type: 'POST',
        dataType: 'json',
        data: {
            cargo_id: 6
        },
    }).done(function(result) {
        var item = result.data;
        var text = "<option>Selecciona una Opcion</option>";
        for (var i = item.length - 1; i >= 0; i--) {
            text += "<option value='" + item[i]['id'] + "'>" + item[i].nombre + "</option>";
        }
        // console.log(text);
        document.getElementById("coordinador_id").innerHTML = text;
    }).fail(function(e) {
        toastr.error(e.message, e.title);
    });
}

function closeModal() {
    window.location.href = uri + "evaluaciones";
}

function filtrarOperador() {
    var id = parseInt($("#coordinador_id option:selected").val());
    $.ajax({
        url: uri + 'ajax/referencias/equipo',
        type: 'POST',
        dataType: 'json',
        data: {
            jefe_id: id
        },
    }).done(function(result) {
        var item = result.data;
        var text = "<option>Selecciona una Opcion</option>";
        for (var i = item.length - 1; i >= 0; i--) {
            text += "<option value='" + item[i]['id'] + "'>" + item[i].apellidop + ", " + item[i].nombres + "</option>";
        }
        // console.log(id);
        document.getElementById("opeador_id").innerHTML = text;
    }).fail(function(e) {
        toastr.error(e.message, e.title);
    });
}

function guardarEvaluacion(event) {
    //event.preventDefault();
    var data = {
        form_id: $("#form_id").val(),
        creacion_dt: $("#inicio").val(),
        creador_id: $("#creador").val(),
        operador_id: $("#opeador_id option:selected").val(),
        coordinador_di: $("#coordinador_id option:selected").val(),
        preg_1: $('#preg_1 option:selected').val() ? $('#preg_1 option:selected').val() : 0,
        preg_2: $('#preg_2 option:selected').val() ? $('#preg_2 option:selected').val() : 0,
        preg_3: $('#preg_3 option:selected').val() ? $('#preg_3 option:selected').val() : 0,
        preg_4: $('#preg_4 option:selected').val() ? $('#preg_4 option:selected').val() : 0,
        preg_5: $('#preg_5 option:selected').val() ? $('#preg_5 option:selected').val() : 0,
        preg_6: $('#preg_6 option:selected').val() ? $('#preg_6 option:selected').val() : 0,
        preg_7: $('#preg_7 option:selected').val() ? $('#preg_7 option:selected').val() : 0,
        preg_8: $('#preg_8 option:selected').val() ? $('#preg_8 option:selected').val() : 0,
        preg_9: $('#preg_9 option:selected').val() ? $('#preg_9 option:selected').val() : 0,
        preg_10: $('#preg_10 option:selected').val() ? $('#preg_10 option:selected').val() : 0,
        preg_11: $('#preg_11 option:selected').val() ? $('#preg_11 option:selected').val() : 0,
        preg_12: $('#preg_12 option:selected').val() ? $('#preg_12 option:selected').val() : 0,
        preg_13: $('#preg_13 option:selected').val() ? $('#preg_13 option:selected').val() : 0,
        preg_14: $('#preg_14 option:selected').val() ? $('#preg_14 option:selected').val() : 0,
        preg_15: $('#preg_15 option:selected').val() ? $('#preg_15 option:selected').val() : 0,
        preg_16: $('#preg_16 option:selected').val() ? $('#preg_16 option:selected').val() : 0,
        preg_17: $('#preg_17 option:selected').val() ? $('#preg_17 option:selected').val() : 0,
        preg_18: $('#preg_18 option:selected').val() ? $('#preg_18 option:selected').val() : 0,
        preg_19: $('#preg_1 9option:selected').val() ? $('#preg_19 option:selected').val() : 0,
        preg_20: $('#preg_20 option:selected').val() ? $('#preg_20 option:selected').val() : 0,
        preg_21: $('#preg_21 option:selected').val() ? $('#preg_21 option:selected').val() : 0,
        preg_22: $('#preg_22 option:selected').val() ? $('#preg_22 option:selected').val() : 0,
        preg_23: $('#preg_23 option:selected').val() ? $('#preg_23 option:selected').val() : 0,
        preg_24: $('#preg_24 option:selected').val() ? $('#preg_24 option:selected').val() : 0,
        preg_25: $('#preg_25 option:selected').val() ? $('#preg_25 option:selected').val() : 0,
        preg_26: $('#preg_26 option:selected').val() ? $('#preg_26 option:selected').val() : 0,
        preg_27: $('#preg_27 option:selected').val() ? $('#preg_27 option:selected').val() : 0,
        preg_28: $('#preg_28 option:selected').val() ? $('#preg_28 option:selected').val() : 0,
        preg_29: $('#preg_29 option:selected').val() ? $('#preg_29 option:selected').val() : 0,
        preg_30: $('#preg_30 option:selected').val() ? $('#preg_30 option:selected').val() : 0,
        comentario: $("#notas").val(),
        final_dt: moment().format('YYYY-MM-DD HH:mm:ss')
    }
    $.ajax({
        url: uri + 'ajax/qltevaluaciones/create',
        type: 'POST',
        dataType: 'json',
        data: data,
    }).done(function(result) {
        selectToastr(result.class, result.message, result.title);
        //console.log(result);
     window.location.href = uri + "evaluaciones/add_evaluacion";
    }).fail(function(error) {
        console.log(error);
    });
}