<?php

if(isset($_REQUEST['detalles'])) {
    $_SESSION['vista'] = $vistas['userDetalles'];
    $_SESSION['controlador'] = $controladores['userAula'];
    $_SESSION['css'] = $css['detalles'];
} else if(isset($_REQUEST['todos'])){
    $_SESSION['todos'] = true;
} else if(!isset($_SESSION['todos'])){
    $elementos = getByLastDate($_SESSION['idAula']);
    $valores = $elementos[0];
}

?>