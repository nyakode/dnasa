<?php

namespace App\Controllers;

class Home {

   public function index() {
      if (!\App\Functions\Auth::validateCookie()) {
         \App\Functions\Redirect::to('home/auth');
         die();
      }

      \Core\Engine::render();
   }

   public function auth($k = "") {
      if (\App\Functions\Auth::validateCookie()) {
         \App\Functions\Redirect::to('home/index');
         die();
      }

      \Core\Engine::render();
   }

   public function logout() {
      if (\App\Functions\Auth::validateCookie()) {
         \App\Functions\Auth::destroyCookie();
      }
   }

   public function authAjax() {

      if (isset($_POST)) {
         $post = [];
         foreach ($_POST as $nombre_campo => $valor) {
            $post[$nombre_campo] = $valor;
         }

         $param = [':usuario' => $post['usuario']];
         $data = \App\Models\Infacceso::filter($param);
         if ($data['class'] == 'success') {
            $hash = password_hash($post['clave'], PASSWORD_BCRYPT);
            if (password_verify($post['clave'], $data['data'][0]['clave'])) {
               if (\App\Functions\Auth::initCookie($data['data'][0])) {

                  $result = [
                      'response' => false,
                      'class' => 'success',
                      'title' => 'Autenticacion Correcta',
                      'message' => 'usuario autenticado correctamente',
                      'data' => $data['data'][0]
                  ];
                  header('Content-Type: appliction/json');
                  header("HTTP/1.0 200");
                  echo json_encode($result);
               } else {
                  $result = [
                      'response' => false,
                      'class' => 'warning',
                      'title' => 'Datos Incorrectos',
                      'message' => 'Usuario o contraseña son incorrectos',
                      'data' => $data['data'][0]
                  ];
                  header('Content-Type: appliction/json');
                  header("HTTP/1.0 401 Unauthorized");
                  echo json_encode($result);
               }
            } else {
               $result = [
                   'response' => false,
                   'class' => 'warning',
                   'title' => 'Datos Incorrectos',
                   'message' => 'Usuario o contraseña son incorrectos',
                   'data' => []
               ];
               header("HTTP/1.0 401 Unauthorized");
               header('Content-Type: appliction/json');
               echo json_encode($result);
            }
         } else {
            header('Content-Type: appliction/json');
            header("HTTP/1.0 401 Unauthorized");
            echo json_encode($data);
         }
      } else {
         $result = [
             'response' => false,
             'class' => 'warning',
             'title' => 'Datos Incorrectos',
             'message' => 'No se han recibido los datos necesarios para completar esta acceion',
             'data' => ''
         ];
         header("HTTP/1.0 401 Unauthorized");
         header('Content-Type: appliction/json');
         echo json_encode($result);
      }
   }

   public function nombre(){
     ;
   }

}
