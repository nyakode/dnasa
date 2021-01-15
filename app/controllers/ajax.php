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
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgarea::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Cfgarea::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgarea::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgarea::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgarea::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function cfgcargo($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgcargo::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgcargo::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Cfgcargo::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgcargo::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgcargo::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgarea::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function cfgcorregimiento($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgcorregimiento::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgcorregimiento::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Cfgcorregimiento::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgcorregimiento::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgcorregimiento::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgcorregimiento::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function cfgdistrito($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgdistrito::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgdistrito::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Cfgdistrito::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgdistrito::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgdistrito::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgdistrito::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function cfgecivil($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgecivil::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgecivil::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Cfgecivil::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgecivil::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgecivil::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgecivil::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function cfgestado($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgeestado::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgeestado::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Cfgeestado::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgeestado::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgeestado::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgeestado::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function cfggenero($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfggenero::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfggenero::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Cfggenero::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfggenero::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfggenero::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfggenero::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function cfgjefe($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgjefe::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgjefe::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Cfgjefe::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgjefe::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgjefe::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgjefe::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function cfgperfil($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgperfil::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgperfil::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Cfgperfil::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgperfil::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgperfil::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgperfil::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function cfgpermiso($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgpermiso::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgpermiso::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Cfgpermiso::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgpermiso::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgpermiso::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgpermiso::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function cfgprovincia($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgprovincia::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgprovincia::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Cfgprovincia::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgprovincia::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgprovincia::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgprovincia::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function cfgrol($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgrol::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgrol::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Cfgrol::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgrol::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgrol::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgrol::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function empleados($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Empleados::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Empleados::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Empleados::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Empleados::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Empleados::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Empleados::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function infacceso($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infacceso::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infacceso::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Infacceso::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infacceso::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infacceso::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infacceso::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function infcontacto($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infcontacto::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infcontacto::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Infcontacto::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infcontacto::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infcontacto::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infcontacto::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function infdireccion($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infdireccion::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infdireccion::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Infdireccion::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infdireccion::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infdireccion::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infdireccion::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function infemergencia($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infemergencia::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infemergencia::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Infemergencia::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infemergencia::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infemergencia::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infemergencia::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function inflaboral($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Inflaboral::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Inflaboral::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Inflaboral::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Inflaboral::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Inflaboral::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Inflaboral::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function infmedica($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infmedica::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infmedica::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Infmedica::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infmedica::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infmedica::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infmedica::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function infpersonal($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infpersonal::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infpersonal::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Infpersonal::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infpersonal::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infpersonal::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Infpersonal::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function qltformulario($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $post[":creacion"] = date("Y-m-d H:i:s");

               $data = \App\Models\Qltformulario::create($post);
               header('Content-Type: appliction/json');
               //echo json_encode($data);
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltformulario::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Qltformulario::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltformulario::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltformulario::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltformulario::delete($post);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function cfgtipoform($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgtipoform::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Cfgtipoform::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgtipoform::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Cfgtipoform::delete($data);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   public static function qltpreguntas($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltpregunta::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readOne':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltpregunta::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readAll':
            $data = \App\Models\Qltpregunta::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'filter':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltpregunta::filter($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'update':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltpregunta::update($post);
               header('Content-Type: application/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'delete':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltpregunta::delete($post);
               header("Content-Type: application/json");
               echo json_encode($data);
               die();
            }
            break;

         default:
            break;
      }
   }

   /**
    *
    */
   public static function referencias($method) {
      switch ($method) {
         case 'cargo':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Referencias::filterCargo($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'genero':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Referencias::filterGenero($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'perfil':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Referencias::filterPerfil($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'estado':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Referencias::filterEstado($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'equipo':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Referencias::filterEquipo($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;
      }
   }

   public static function qltevaluaciones($method) {
      switch ($method) {
         case 'create':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltevaluaciones::create($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readall':

            $data = \App\Models\Qltevaluaciones::readAll();
            header('Content-Type: appliction/json');
            echo json_encode($data);
            die();
            break;

         case 'readone':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltevaluaciones::readOne($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readbyuser':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltevaluaciones::readByUser($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readbyevaluator':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltevaluaciones::readByEvaluator($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;

         case 'readbyteam':
            if (isset($_POST)) {
               $post = [];
               foreach ($_POST as $nombre_campo => $valor) {
                  $post[":" . $nombre_campo] = $valor;
               }
               $data = \App\Models\Qltevaluaciones::readByTeam($post);
               header('Content-Type: appliction/json');
               echo json_encode($data);
               die();
            }
            break;
      }
   }

}
