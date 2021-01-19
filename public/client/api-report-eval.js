$(document).ready(function () {
   mineEvaluations();
   countEvaluations();
   avgEvaluations();
   hightEvaluations();
   lowEvaluations();
});
function mineEvaluations() {
   $("#tbl_evaluaciones").DataTable({
         ajax: {
            url: uri + 'ajax/qltevaluaciones/readevaluatorperiod',
            error: function (xhr, error, thrown) {
                error( xhr, error, thrown );
            }
         },
         columnDefs: [{
               targets: 8,
               data: null,
               defaultContent: "<div class='btn-group' role='group'><button type='button' class='btn btn-sm btn-success btn-editar' ><i class='far fa-edit'></i></button><button type='button' class='btn  btn-sm btn-danger btn-eliminar'><i class='far fa-trash-alt'></i></button></div>"
            }],
         columns: [{
               data: 'id'
            }, {
               data: 'fecha'
            }, {
               data: 'nombreOperador'
            }, {
               data: 'nombre_jefe'
            }, {
               data: 'nombreEvaluador'
            }, {
               data: 'frm_nombre'
            }, {
               data: 'totalEvaluacion'
            }, {
               data: 'comentario'
            }]
      });
}

function countEvaluations() {
   $.ajax({
        url: uri + 'ajax/qltevaluaciones/countevaluationperiod',
        type: 'GET',
        dataType: 'json',
        
    }).done(function(result) {
        var item = result.data;
        document.getElementById("contador").innerHTML = item[0].cantidad;
        //console.log(item   );
    }).fail(function(e) {
        //console.log(e)
        document.getElementById("contador").innerHTML = 0;
    });
}

function avgEvaluations() {
   $.ajax({
        url: uri + 'ajax/qltevaluaciones/avgevaluationperiod',
        type: 'GET',
        dataType: 'json',
        
    }).done(function(result) {
        var item = result.data;
        document.getElementById("promedio").innerHTML = item[0].promedio;
        
        //console.log(item   );
    }).fail(function(e) {
        //console.log(e)
        document.getElementById("contador").innerHTML = 0;
    });
}

function hightEvaluations() {
   $.ajax({
        url: uri + 'ajax/qltevaluaciones/hightevaluationperiod',
        type: 'GET',
        dataType: 'json',
        
    }).done(function(result) {
        var item = result.data;
        document.getElementById("en-objetivo").innerHTML = (item[0].bueno)*100 + "%";
        $("#in-bar").css("width", (item[0].bueno)*100  + "%");
        //console.log(item   );
    }).fail(function(e) {
        //console.log(e)
        document.getElementById("en-objetivo").innerHTML = 0 + "%";;
    });
}

function lowEvaluations() {
    $.ajax({
        url: uri + 'ajax/qltevaluaciones/lowevaluationperiod',
        type: 'GET',
        dataType: 'json',
        
    }).done(function(result) {
        var item = result.data;
        document.getElementById("fuera-objetivo").innerHTML = (item[0].malo)*100 + "%";
        $("#out-bar").css("width", (item[0].malo)*100  + "%");
        //console.log(item   );
    }).fail(function(e) {
       // console.log(e)
        document.getElementById("fuera-objetivo").innerHTML = 0 + "%";;
    });
}