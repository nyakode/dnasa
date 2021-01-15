<?php

namespace App\Functions;

class Redirect {

	private static $location;

	public static function to($path) {
		self::$location = $path;

		if (headers_sent()) {
			echo '<script type="text/javascript">';
			echo 'window.location.href="'.URI.self::$location.'";';
			echo '</script>';
			echo '<nonscript>';
			echo '<meta http-equiv="refresh" content="0;url='.URI.self::$location.'" />';
			echo '</nonscript>';
			//die();
		}

		if (strpos(self::$location, 'http') !== false) {
			header('Location: '.self::$location);
			die();
		}

		header('Location: '.URI.self::$location);
		die();
	}

	public static function alerts($data) {
		$txt = "";
		for ($i = 0; $i < count($data); $i++) {
			$str = '';
		}
	}
   
   public static  function debug($param) {
      $t = "<script type='text/javascript'>";
      $t += "console.log(".$param."');";
      $t += "</script>";
      
      echo $t;
   }
}
