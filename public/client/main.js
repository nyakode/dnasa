/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */   
   var cookieValor = document.cookie.replace(/(?:(?:^|.*;\s*)AUTH\s*\=\s*([^;]*).*$)|^.*$/, "$1");
   var txtCookie = decodeURIComponent(cookieValor);
   const uData =JSON.parse(txtCookie) ;


   