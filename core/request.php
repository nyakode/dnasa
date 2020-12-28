<?php

namespace Core;

class Request {

   private $_controller;
   private $_method;
   private $_params;
   private $_token;

   public function __construct() {

      if (isset($_GET['url'])) {
         $p = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
         $a = explode('/', $p);
         $u = array_filter($a);

         // define los componentes
         $this->_controller = strtolower(array_shift($u));

         if (count($u) > 0) {
            $this->_method = strtolower(array_shift($u));
         } else {
            $this->_method = 'index';
         }

         if (count($u) > 0) {
            $this->_params = $u;
         }
      } else {
         // crea valores por defecto
         // ToDo: Crear metodo o clase de validacion de autenticacion
         //
         $this->_controller = 'home';
         $this->_method = 'index';
         $this->_params = [];
      }
   }

   function getController() {
      return $this->_controller;
   }

   function getMethod() {
      return $this->_method;
   }

   function getParams() {
      return $this->_params;
   }

}
