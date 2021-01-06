<?php

date_default_timezone_set('America/Panama');
setlocale(LC_ALL, 'es_PA');

define('DIAS', ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado']);
define('MESES', ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']);

// define app name
define('APPNAME', 'DNASA');

// define internal paths
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__, 2).DS);
define('CONTROLLER', ROOT.'app'.DS.'controllers'.DS);



// define url base

if (isset($_GET['url'])) {
	define('URI', 'http://'.$_SERVER['HTTP_HOST'].str_replace($_GET['url'], '', $_SERVER['REQUEST_URI']));
} else {
	define('URI', 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}


/**
 * definimos url de acceso
 */

define("PUBLICS", URI . 'public/');
define('ASSETS', PUBLICS . 'assets/');
define('CLIENT', PUBLICS . 'client/');
define('IMAGES', PUBLICS . 'images/');
define('IMPORTS', PUBLICS . 'imports/');


// define development enviroment

define('DEBUG', true);

if (DEBUG) {
	ini_set('display_errors', 0);
	error_reporting(E_ALL);
} else {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}

// var path to log file
$path = ROOT.'tmp'.DS.'logs'.DS.'logs.txt';

ini_set('log_errors', 1);
ini_set('error_log', $path);

// authentication vars

define('LOGIN', 'AUTH');
define('__SECRET_KEY__', '1q2w3e4r5t');
define('memory_limit', '-1');

const DATABASE = [
	'driver'   => 'mysql',
	'hostname' => 'localhost',
	'database' => 'densadb',
	'username' => 'root',
	'password' => 'hola2020'
];
