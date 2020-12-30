<?php

namespace App\Controllers;

class Home {

   public function index() {
      \App\Functions\Secured::isLogin();
      \Core\Engine::render();
   }

   // funcion de autrenticacion de usuario
   // valida si un usuario ya esta conectado al sistema
   // control por usuario, contraseña y token
   public function auth($k = "") {
      $_SESSION[LOGIN] = [];

      if (isset($_POST)) {
         
      }

      \Core\Engine::render();
   }
  
}
