<?php

if(isset($_REQUEST['enviar'])) {
    $_SESSION['idAula'] = $_REQUEST['idArduino'];
    $_SESSION['vista'] = $vistas['adminAula'];
    $_SESSION['controlador'] = $controladores['adminAula'];
    $_SESSION['css'] = $css['user'];
    require_once $_SESSION['controlador'];
} else {
    $elementos = getByClass();
}


?>