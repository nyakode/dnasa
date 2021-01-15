<?php

namespace App\Functions;

/**
 * Description of auth
 *
 * @author nyakode
 * 
 * @property int  $len longitud del string
 * @property char $cookie_name nombre de la cookie o sesion
 * @property char $token codigo alfanumerico de autenticacion
 * @property datetime  $exp expiracion del token
 * @property datetime  $time tiempo de duracion de la cookie 
 *  ==========================================================
 * 
 */
class Auth {

   public static $len = 32;
   public static $token;
   public static $ext_time = 60 * 60; // 60 * 60 * 4
   public static $exp;
   public static $user_data;

   /**
    * 
    * @param type $user
    * @return boolean
    */
   public static function initCookie($user) {
      if (!isset($_COOKIE[LOGIN])) {
         if (!empty($user)) {
            $data = [
                'id' => $user['id'],
                'usuario' => $user['usuario'],
                'perfil' => $user['perfil'],
                'perfil_id' => $user['perfil_id'],
                'token' => self::setToken(),
                'exp' => time() + self::$ext_time
            ];
            setcookie(LOGIN, json_encode($data), time() + self::$ext_time, '/dnasa');
            return true;
         } else {
            throw new \Exception("Variable usuario esta vacía", 400);
         }
      } else {
         throw new \Exception("Cookie ya existe", 500);
      }
   }

   /**
    * 
    * @return type
    */
   public static function setToken() {
      if (function_exists('bin2hex')) {
         self::$token = bin2hex(random_bytes(self::$len));
      } elseif (function_exists('mcrypt_create_iv')) {
         self::$token = bin2hex(mcrypt_create_iv(self::$len, MCRYPT_DEV_URANDOM));
      } else {
         self::$token = bin2hex(openssl_random_pseudo_bytes(self::$len));
      }
      return self::$token;
   }

   /**
    * 
    * @return type
    */
   public static function getToken() {
      return self::$token;
   }

   /**
    * 
    * @return boolean
    */
   public static function validateCookie() {
      if (isset($_COOKIE[LOGIN])) {
         $json = json_decode($_COOKIE[LOGIN], true);

         if (empty($json)) {
            return false;
            die();
         }

         if ($json['exp'] < time()) {
            return false;
            die();
         }

         if ($json['token'] == self::getToken()) {
            return false;
            die();
         }

         return true;
      }
      return false;
      die();
   }

   public static function destroyCookie() {
      if (self::validateCookie()) {
         unset($_COOKIE[LOGIN]);
         setcookie(LOGIN, '' ,time() -3600, '/dnasa');
         \App\Functions\Redirect::to('');
      } else {
           \App\Functions\Redirect::to('');
      }
   }

   /**
    * 
    * @return boolean
    */
   public static function isAuth() {
      if (!isset($_COOKIE[LOGIN])) {
         return false;
      }
      if (empty($_COOKIE[LOGIN])) {
         return false;
      }
      return true;
   }

   public static function cookieData() {
      if (isset($_COOKIE[LOGIN])) {
         $d = [];
         $array = explode(",", $_COOKIE[LOGIN]);

         /* foreach ($m as $name => $value) {
           $d[htmlspecialchars($name)] = htmlspecialchars($value);
           } */

         return $array;
      }
   }

}
