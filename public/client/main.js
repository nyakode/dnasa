/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function uData() {
    var cookieValor = document.cookie.replace(/(?:(?:^|.*;\s*)AUTH\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    console.log(cookieValor);
    if (cookieValor) {
        var txtCookie = decodeURIComponent(cookieValor);
        var uData = JSON.parse(txtCookie);
        return uData;
    }
}

function selectToastr(type, message, title) {
    switch (type) {
        case 'success':
            toastr.success(message, title);
            break;
        case 'info':
            toastr.info(message, title);
            break;
        case 'warning':
            toastr.warning(message, title);
            break;
        case 'error':
            toastr.error(message, title);
            break;
        default:
            toastr.success(message, title);
            break;
    }
}