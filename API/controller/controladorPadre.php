<?php

class ControladorPadre{

    // recojo la url, hago un explode para separar los valores y la devuelvo.
    public static function recurso(){
        if(isset($_SERVER['PATH_INFO'])) {
            $uri = $_SERVER['PATH_INFO'];
            $uri = explode('/',$uri);
            return $uri;
        } else {
            // retorna un error de la api.
            ControladorPadre::respuesta('',array('HTTP/1.1 404 No se indica recurso'));
            return null;
        }

    }

    // recojo los parametros de la variable GET.
    protected function parametros(){
        $par = $_GET;
        return $par;
    }

    // envio la respuesta a la peticion.
    public static function respuesta($datos, $httpHeaders = array()) {
        foreach($httpHeaders as $value) {
            header($value);
        }
        echo $datos;
        exit;
    }
}

?>