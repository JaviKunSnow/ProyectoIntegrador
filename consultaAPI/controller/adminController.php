<?php

if(isset($_REQUEST['planta1'])) {
    $_SESSION['planta'] = '1';
    $_SESSION['vista'] = $vistas['adminAulas'];
    $_SESSION['controlador'] = $controladores['adminAulas'];
    require_once $_SESSION['controlador'];
    
} else if(isset($_REQUEST['planta2'])) {
    $_SESSION['planta'] = '2';
    $_SESSION['vista'] = $vistas['adminAulas'];
    $_SESSION['controlador'] = $controladores['adminAulas'];
    require_once $_SESSION['controlador'];

} else if(isset($_REQUEST['planta3'])) {
    $_SESSION['planta'] = '3';
    $_SESSION['vista'] = $vistas['adminAulas'];
    $_SESSION['controlador'] = $controladores['adminAulas'];
    require_once $_SESSION['controlador'];
    
} else if(isset($_REQUEST['planta4'])) {
    $_SESSION['planta'] = '4';
    $_SESSION['vista'] = $vistas['adminAulas'];
    $_SESSION['controlador'] = $controladores['adminAulas'];
    require_once $_SESSION['controlador'];
    
} else if(isset($_REQUEST['planta5'])) {
    $_SESSION['planta'] = '5';
    $_SESSION['vista'] = $vistas['adminAulas'];
    $_SESSION['controlador'] = $controladores['adminAulas'];
    require_once $_SESSION['controlador'];
    
} else if(isset($_REQUEST['todos'])){
    
    $_SESSION['vista'] = $vistas['adminDetalles'];
    $_SESSION['controlador'] = $controladores['adminAula'];
    $_SESSION['css'] = $css['detalles'];
    require_once $_SESSION['controlador'];

}

?>