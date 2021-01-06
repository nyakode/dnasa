<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

/**
 * Description of evaluaciones
 *
 * @author nyakode
 */
class Evaluaciones {
   
   public function index() {
      if (\App\Functions\Auth::validateCookie()) {
         \Core\Engine::render();
      } else{
         \App\Functions\Redirect::to('home/auth');
         die();
      }
   }
   
   public function add_evaluacion() {
       if (\App\Functions\Auth::validateCookie()) {
         \Core\Engine::render();
      } else{
         \App\Functions\Redirect::to('home/auth');
         die();
      }
   }
   
   
   public function conf_formulario() {
      if (!\App\Functions\Auth::isAuth()) {
         \App\Functions\Redirect::to('home/auth');
         die();
      }

      \Core\Engine::render();
      
   }
   
   public function conf_preguntas() {
      if (!\App\Functions\Auth::isAuth()) {
         \App\Functions\Redirect::to('home/auth');
         die();
      }

      \Core\Engine::render();
   }
   
   public function reportes() {
      if (!\App\Functions\Auth::isAuth()) {
         \App\Functions\Redirect::to('home/auth');
         die();
      }

      \Core\Engine::render();
   }
   
   
   
   
   
}
