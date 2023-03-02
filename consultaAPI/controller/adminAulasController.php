<?php

if(isset($_REQUEST['enviar'])) {
    $_SESSION['idAula'] = $_REQUEST['idAula'];
    $_SESSION['vista'] = $vistas['adminAula'];
    $_SESSION['controlador'] = $controladores['adminAula'];
    require_once $_SESSION['controlador'];
} else {
    $elementos = getByClass();
}


?>