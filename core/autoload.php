<?php

namespace Core;

class Autoload {

   public static function run() {
      spl_autoload_register(function ($class) {
         $ruta = ROOT . str_replace('\\', '/', strtolower($class)) . '.php';
         if (is_file($ruta)) {
            require_once $ruta;
         } else {
            throw new \Exception("Error al cargar archivo $ruta");
         }
      });
   }

}
