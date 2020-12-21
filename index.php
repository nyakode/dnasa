<?php

/** * **********************************************
 * @author Fernando Castillo <ferncastillo@css.gob.pa>
 * @create 2020
 * @filename auth
 * Centro de Contactos - Caja de Seguro Social
 * * ********************************************* */

session_start();

require_once realpath(__DIR__).DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'app.config.php';
require_once ROOT.'core'.DS.'autoload.php';

Core\Autoload::run();

set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

Core\Router::start(new \Core\Request());
