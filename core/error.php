<?php


namespace Core;


class Error
{
    public static function errorHandler($errno, $errstr, $errfile, $errline)
    {

        if (error_reporting() !== 0 & $errno !== 0) {
            switch ($errno) {
                case E_USER_ERROR:
                    echo "<b> Error Personalizado</b> [$errno] $errstr <br>\n";
                    echo "Error fatal en la linea {$errline} en el archivo {$errfile}";
                    echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br>\n";
                    echo "Proceso abortado <br>\n";
                    exit(1);
                    break;

                case E_USER_WARNING:
                    echo "<b>Advertencia Personalizada</b> [$errno] {$errstr}";
                    break;

                case E_USER_NOTICE:
                    echo "<b>Notificación Personalizada</b> [$errno] {$errstr}";
                    break;

                default:
                    echo "<b>Error desconocido</b> [$errno] {$errstr} en {$errfile} en la linea {$errline}";
                    break;
            }
        }

        return TRUE;
    }

    public static function exceptionHandler($e)
    {

        $code = $e->getCode();
        if ($code !== 404) {
            $code = 500;
            $title = "Excepcion Encontrada!";
        } else {
            $title = "Error Encontrado!";
        }

        http_response_code($code);

        if (DEBUG) {
            \Core\Engine::set('title', $title);
            \Core\Engine::set('class', get_class());
            \Core\Engine::set('mensaje', $e->getMessage());
            \Core\Engine::set('ruta', $e->getTraceAsString());
            \Core\Engine::set('file', $e->getFile());
            \Core\Engine::set('line', $e->getLine());
            \Core\Engine::set('code', $code);
            $carpeta = 'errors';
            \Core\Engine::render($carpeta, $code);

            /*  echo "<h1>{$title} <small>Error {$code}</small></h1><br>\n";
              echo "<b>Se ha encontrado un error en la linea {$e->getLine()} en el archivo {$e->getFile()} <br> \n";
              echo $e->getMessage() . "<br>\n";
              echo $e->getTraceAsString() . "<br>";
              echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br>\n";
              echo "Proceso abortado</b>";*/
        } else {
            return false;
        }


        // plantilla de impresion
        $traceline = "#%s %s(%s): %s\n\t %s \n\t (%s)";
        $msg = "PHP Error Fatal: Excepcion Desconocida '%s' con mensaje '%s' en %s:%s\nTraza:\n%s \n Lanzado en %s en la linea %s";

        //
        $trace = $e->getTrace();
        foreach ($trace as $key => $stackPoint) {
            $trace[$key]['args'] = array_map('gettype', $trace[$key]['args']);
        }

        // modifica las trazas del error
        $result = array();
        foreach ($trace as $key => $stackPoint) {
            $result[] = sprintf(
                $traceline, $key, $stackPoint['file'], $stackPoint['line'], $stackPoint['function'], $e->getTraceAsString(), implode(', ', $stackPoint['args'])
            );
        }

        $result[] = "\t-------------------------------------------------------------------------------------------------------------------------------#" . ++$key . "{main}";
        $msg = sprintf($traceline, get_class($e), $e->getMessage(), $e->getFile(), $e->getLine(), $e->getTraceAsString(), implode("\n", $result), $e->getFile(), $e->getLine()
        );

        error_log($msg);
    }

}
