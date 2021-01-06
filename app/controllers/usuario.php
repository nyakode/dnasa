<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

/**
 * Description of usuario
 *
 * @author nyakode
 */
class Usuario {
   public function index() {
       if (\App\Functions\Auth::validateCookie()) {
         \Core\Engine::render();
      } else{
         \App\Functions\Redirect::to('home/auth');
         die();
      }
   }
   
   
}
