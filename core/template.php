<?php

namespace Core;

class Template {

	public static function getHeader() {
		$file = ROOT.'public'.DS.'imports'.DS.'header.php';
		if (file_exists($file)) {
			require_once $file;

		} else {
			throw new \Exception("El archivo: {$file} no esta disponible");
		}
	}

	public static function getSidebar() {
		$file = ROOT.'public'.DS.'imports'.DS.'sidebar.php';
		if (file_exists($file)) {
			$v = \App\Functions\Secured::auth();
			if ($v) {
				require_once $file;
			}
		} else {
			throw new \Exception("El archivo: {$file} no esta disponible");
		}
	}

	public static function getNavbar() {
		$file = ROOT.'public'.DS.'imports'.DS.'navbar.php';
		if (file_exists($file)) {
			$v = \App\Functions\Secured::auth();
			if ($v) {
				require_once $file;
			}
		} else {
			throw new \Exception("El archivo: {$file} no esta disponible");
		}
	}

	public static function getFooter() {
		$file = ROOT.'public'.DS.'imports'.DS.'footer.php';
		if (file_exists($file)) {
			require_once $file;
		} else {
			throw new \Exception("El archivo: {$file} no esta disponible");
		}
	}

}
