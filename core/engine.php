<?php

namespace Core;

class Engine {
	protected static $data;
	const VPATH = ROOT.'app'.DS.'views'.DS;

	public static function render($c = null, $f = null) {

		$req = new \Core\Request();
		if (empty($c)) {
			$c = $req->getController();
			$f = $req->getMethod();
		}

		$tpl = self::VPATH.$c.DS.$f.'.php';

		if (file_exists($tpl)) {
			ob_start();

			if (isset(self::$data)) {
				extract(self::$data);
			}

			require_once $tpl;

			$str = ob_get_contents();
			ob_end_clean();

			\Core\Template::getHeader();
			\Core\Template::getSidebar();
			\Core\Template::getNavbar();
			echo $str;
			\Core\Template::getFooter();

		} else {
			throw new \Exception("Archivo de vista no encontrado");
		}
	}

	public static function set($k, $v) {
		if (isset($v)) {
			self::$data[$k] = $v;
		}
	}
}