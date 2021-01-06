$(document).ready(function () {
   $("#frm_process").on("click", login_auth);

});
/**
 * 
 * @param {type} event
 * @returns {undefined}
 */

function procesar(event) {
   event.preventDefault();
   var form = $("#qadmform");
   var data = new FormData(form.get(0));
   var id = $("#id").val();
   var frm_nombre = $("#frm_nombre").val();
   var frm_descripcion = $("#frm_descripcion").val();
   var tipo_form = $("#tipo_form").val();
   var creador = document.cookie;
   var estado = ("#estado");
   var creacion = "creacion";

   data.append("frm_nombre", frm_nombre);
   data.append("frm_descripcion", frm_descripcion);
   data.append("tipo_form", tipo_form);
   data.append("creador", creador);
   data.append("estado", estado);
   data.append("creacion", creacion);

   if (id) {
      data.append("id", id);
      $.ajax({
         url: uri + 'ajax/qltformulario/update',
         type: 'post',
         dataType: 'json',
         contentType: false,
         processData: false,
         cache: false,
         data: data,
         success: function (data) {
            console.log(data);
         },
         error: function (e) {
            console.log(e.responseText);
         },
      });
   } else{
       $.ajax({
         url: uri + 'ajax/qltformulario/create',
         type: 'post',
         dataType: 'json',
         contentType: false,
         processData: false,
         cache: false,
         data: data,
         success: function (data) {
            console.log(data);
         },
         error: function (e) {
            console.log(e.responseText);
         },
      });
   }
}


/**
 * Comment
 */
function type_form() {
   
}