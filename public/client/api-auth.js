/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    $("#btn-submit").on("click", login_auth);
});

function login_auth(event) {
    event.preventDefault();
    var data = {
        'usuario': $("#usuario").val(),
        'clave': $("#clave").val()
    }
    $.ajax({
        url: uri + 'home/authAjax',
        type: 'POST',
        dataType: 'json',
        data,
        beforeSend: function() {
            $("#loginForm").waitMe({
                effect: 'pulse',
                waitTime: 2000,
                text: 'Autenticando...'
            })
        }
    }).done(function(result) {
        console.log(result);
        selectToastr(result.class, result.message, result.title);
        window.location.href = uri;
    }).fail(function(e) {
        console.error(e);
        result = e.responseJSON;
        selectToastr(result.class, result.message, result.title);
    })
}