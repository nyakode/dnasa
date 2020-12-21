<?php

namespace App\Functions;

class Secured {
	private $len = 32;// longitud del token
	private $token;// token
	private $exp;// fecha de expiracion del token
	private $exp_time = 60*5;// duracion del token

	public static function _init() {
		$self = new self();
		if (!isset($_SESSION['CSRF_Token'])) {
			$self->set_token();
			$_SESSION['CSRF_Token'] = [
				'token'      => $self->token,
				'expiration' => $self->exp
			];

			return $self;
		}

		// self::token = $_SESSION['CSRF_Token']['token'];
		// self::exp_time = $_SESSION['CSRF_Token']['expiration'];

		// $this->token    = $_SESSION['CSRF_Token']['token'];
		// $this->exp_time = $_SESSION['CSRF_Token']['expiration'];

		return $self;

	}

	private function set_token() {
		if (function_exists('bin2hex')) {
			$this->token = bin2hex(random_bytes($this->len));
		} elseif (function_exists('mcrypt_create_iv')) {
			$this->token = bin2hex(mcrypt_create_iv($this->len, MCRYPT_DEV_URANDOM));
		} else {
			$this->token = bin2hex(openssl_random_pseudo_bytes($this->len));
		}

		$this->exp = time()+$this->exp_time;
		return $this;
	}

	public static function validate($csrf, $expiration = false) {
		$self = new self();
		if ($expiration && $self->get_expiration() < time()) {
			return false;
		}

		if ($csrf !== $self->get_token()) {
			return false;
		}

		return true;
	}

	public static function auth() {
		if (!isset($_SESSION['CSRF_Token']['usuario'])) {
			return false;
		}
		return true;
	}

	public function get_token() {
		return $this->token;
	}

	public function get_expiration() {
		return $this->exp;
	}

}