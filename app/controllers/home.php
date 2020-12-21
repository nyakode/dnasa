<?php

namespace App\Controllers;

class Home {
	public function index() {

		if (!isset($_SESSION[LOGIN])) {
			\App\Functions\Redirect::to('home/auth');
		}

		\Core\Engine::render();
	}

	// funcion de autrenticacion de usuario
	// valida si un usuario ya esta conectado al sistema
	// control por usuario, contraseña y token
	public function auth($k = "") {
		$_SESSION[LOGIN] = [
			"id"      => "",
			"usuario" => "",
			"perfil"  => "",
		];

		\Core\Engine::render();

	}

}
