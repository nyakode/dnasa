<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

/**
 * Description of ajax
 *
 * @author nyakode
 */
class Ajax {

   /**
    * 
    * @param type $method
    */
   public static function cfgarea($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgarea::create($post);

               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':

            break;

         case 'readAll':
            $data = \App\Models\Cfgarea::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function cfgcargo($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function cfgcorregimiento($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function cfgdistrito($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function cfgecivil($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function cfgestado($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function cfgequipo($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function cfggenero($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function cfgjefe($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function cfgperfil($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function cfgpermiso($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function cfgprovincia($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function cfgrol($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function empleados($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function infacceso($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function infcontacto($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function infdireccion($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function infemergencia($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function inflaboral($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function infmedica($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

   /**
    * 
    * @param type $method
    */
   public static function infpersonal($method) {
      switch ($method) {
         case 'create':

            break;

         case 'readOne':

            break;

         case 'readAll':

            break;

         case 'filter':

            break;

         case 'update':

            break;

         case 'delete':

            break;

         default:
            break;
      }
   }

}
