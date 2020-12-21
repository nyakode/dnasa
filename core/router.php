<?php

namespace Core;

class Router {

	public static function start(Request $req) {
		$controller = $req->getController();
		$cpath      = CONTROLLER.$controller.'.php';

		$methd  = $req->getMethod();
		$params = $req->getParams();
		//\App\Functions::Secured();

		if (file_exists($cpath)) {
			$cname      = '\App\Controllers\\'.ucwords($controller);
			$controller = new $cname;

			if (empty($params)) {
				if (method_exists($controller, $methd)) {
					call_user_func(array($controller, $methd));
				} else {
					// metodo no existe
					throw new \Exception("Metodo {$methd} no encontrado dentro de el controlador {$req->getController()}", 404);
				}
			} else {
				if (method_exists($controller, $methd)) {

					try {
						call_user_func_array(array($controller, $methd), $params);
					} catch (\Exception $ex) {
						throw new Exception($ex->getMessage());
					}
				} else {
					// metodo no existe
					throw new \Exception("Metodo {$methd} no encontrado dentro de el controlador {$req->getController()}", 404);
				}
			}
		} else {
			// archivo no existe
			throw new \Exception("Controlador <strong>{$req->getController()}</strong> no existe", 404);
		}
	}

}
