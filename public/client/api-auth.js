/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
   $("#btn-submit").on("click", login_auth);
});

function login_auth(event) {
   event.preventDefault();
   var form = $("#loginForm");
   var data = new FormData(form.get(0));
   var usuario = $('#usuario').val();
   var clave = $("#clave").val();
   data.append('usuario', usuario);
   data.append('calve', clave);

   $.ajax({
      url: uri + 'home/authAjax',
      type: 'post',
      dataType: 'json',
      contentType: false,
      processData: false,
      cache: false,
      data: data,
      success: function (data) {

         toastr.error(data.message, data.title);
         window.location.href = uri;
      },
      error: function (e) {
         toastr.error(e.message, e.title);
      },
   });
}
