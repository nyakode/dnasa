<?php

/** * **********************************************
 * @author Fernando Castillo <ferncastillo@css.gob.pa>
 * @create 2020
 * @filename auth
 * Centro de Contactos - Caja de Seguro Social
 * * ********************************************* */

namespace App\Functions;

/**
 * Descripcion de metodos
 * -> _init: crea una cookie en caso que no exista
 * -> setToken: crea un token bin2hex
 * -> getToken:
 * -> userData: devuelve informacíon de conexion del usuario
 * -> validatecookie: Confirma el periodo de validez de una cookie
 */
class Auth {

   public static $len = 32;
   public static $cookie = "AUTH";
   public static $token;
   public static $exp;
   public static $time = 60 * 5;

   public static function _init() {

      if (isset($_SESSION[LOGIN])) {

         $user = $_SESSION[LOGIN];

         if (!empty($user->id)) {
            throw new \Exception('No esta autenticado', 401);
         }

         self::$exp = time() + self::$time;

         if (!isset($_COOKIE[self::$cookie])) {
            setcookie(
                    self::$cookie,
                    json_encode(
                            array(
                                "id" => $user["id"],
                                "usuario" => $user["usuario"],
                                "perfil" => $user["perfil"],
                                "token" => self::setToken(),
                                "exp" => self::$exp
                            )
                    ), self::$exp
            );
            return true;
         }
      }

      return false;
   }

   private static function setToken() {

      if (function_exists('bin2hex')) {
         self::$token = bin2hex(random_bytes(self::$len));
      } elseif (function_exists('mcrypt_create_iv')) {
         self::$token = bin2hex(mcrypt_create_iv(self::$len, MCRYPT_DEV_URANDOM));
      } else {
         self::$token = bin2hex(openssl_random_pseudo_bytes(self::$len));
      }

      return self::$token;
   }

   public static function getToken() {
      return self::$token;
   }

   public static function userData() {
      $uInfo = [];

      if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
         $uInfo["IP"] = $_SERVER['HTTP_CLIENT_IP'];
      } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
         $uInfo["FORWARDED"] = $_SERVER["HTTP_X_FORWARDED_FOR"];
      } else {
         $uInfo["ADDR"] = $_SERVER["REMOTE_ADDR"];
      }

      $uInfo["AGENT"] = $_SERVER["HTTP_USER_AGENT"];
      $uInfo["HOST"] = gethostname();

      return $uInfo;
   }

   public static function validateCookie() {
      if (!empty($_COOKIE[self::$cookie])) {
         $json = json_decode($_COOKIE[self::$cookie]);

         if (empty($json)) {
            return false;
         }

         if ($json->exp < time()) {
            return false;
         }

         if ($json->token === self::getToken()) {
            return false;
         }

         return true;
      }

      return false;
   }

   public static function destroyCookie() {
      if (self::validatecookie()) {
         unset($_COOKIE[self::$cookie]);
         setcookie(self::$cookie, null, -1);
      }
   }

}
