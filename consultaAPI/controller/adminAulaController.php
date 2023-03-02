<?php

if(isset($_REQUEST['detalles'])) {
    $_SESSION['vista'] = $vistas['userDetalles'];
    $_SESSION['controlador'] = $controladores['adminAula'];
    $_SESSION['css'] = $css['detalles'];
} else {
    $elementos = getByLastDate($_SESSION['idAula']);
    $valores = $elementos[0];
}


?>