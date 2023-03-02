<?php

// aqui hago un require de todos los archivos
require_once './config/configuracion.php';

// llamo a la funcion de recurso donde recibo la url a partir de "api.php".
$recurso = ControladorPadre::recurso();
if($recurso) {
    // compruebo si el valor del array en la posicion [1] es sensores o actuadores, dependiendo de si es llamo a su controlador
    if($recurso[1] == 'sensores'){
        $controlador = new sensoresController();
        $controlador->controlar();
    } else if($recurso[1] == 'actuador') {
        $controlador = new actuadorLogController();
        $controlador->controlar();
    } else if($recurso[1] == 'arduino') {
        $controlador = new arduinoController();
        $controlador->controlar();
    }
} 