$(document).ready(function() {
    $("#selectForm").modal({
        show: true,
        backdrop: false,
        keyboard: true
    });
    listarFormulario();
    $("#formulario_id").on("change", mostrarData);
    $("#buildForm").on("click", crearFormulario);
});
// FUNCIONALIDADES
// listar formularios
function listarFormulario() {
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
    	$("#selectForm").modal('hide');
    	document.getElementById("c_title").innerHTML = result.data[0]['frm_nombre'];
    	document.getElementById("c_descript").innerHTML = result.data[0]['frm_descripcion'];

    	var preg_data = result.data;
    	var p_input = "";
    	for(var i = 0, length1 = preg_data.length; i < length1; i++){
    		p_input += "<div class='form-group'><div class='row'><div class='col-md-8'><p>";
    		p_input += preg_data[i]['pregunta'];
    		p_input += "</p></div><div class='col-md-4'>";
    		var pid = i + 1;
    		p_input += "<select class='form-control' id='preg_"+pid+"'>";
    		p_input += "<option value='1'>Cumplió</option><option value='0'>No Cumplió</option>";
    		p_input += "</select></div></div></div>";
    	}

    	p_input += "<button type='button' class='btn btn-raised btn-secondary btn-block' id='p_evaluar'>Procesar evaluación</button>";	

    	document.getElementById("preg_evaluacion").innerHTML = p_input;
        console.log(result);
    }).fail(function() {
        console.log("error");
    }).always(function() {
        console.log("complete");
    });
}

/**
 * <div class='form-group'>
                     <div class='row'>
                        <div class='col-md-8'>
                           <p>Seleccione el Servicio</p>
                        </div>
                        <div class='col-md-4'>
                           <select class='form-control' id='exampleFormControlSelect1'>
                              <option>1</option>
                           </select>
                        </div>
                     </div>
                  </div>
 */