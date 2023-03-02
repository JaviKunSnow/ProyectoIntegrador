<?php

if(isset($_REQUEST['planta1'])) {
    $_SESSION['planta'] = 'planta1';
    $_SESSION['vista'] = $vistas['adminAulas'];
    $_SESSION['controlador'] = $controladores['adminAula'];
    require_once $_SESSION['controlador'];
    
} else if(isset($_REQUEST['planta2'])) {
    $_SESSION['planta'] = 'planta2';
    $_SESSION['vista'] = $vistas['adminAulas'];
    $_SESSION['controlador'] = $controladores['adminAula'];
    require_once $_SESSION['controlador'];

} else if(isset($_REQUEST['planta3'])) {
    $_SESSION['planta'] = 'planta3';
    $_SESSION['vista'] = $vistas['adminAulas'];
    $_SESSION['controlador'] = $controladores['adminAula'];
    require_once $_SESSION['controlador'];
    
} else if(isset($_REQUEST['planta4'])) {
    $_SESSION['planta'] = 'planta4';
    $_SESSION['vista'] = $vistas['adminAulas'];
    $_SESSION['controlador'] = $controladores['adminAula'];
    require_once $_SESSION['controlador'];
    
} else if(isset($_REQUEST['planta5'])) {
    $_SESSION['planta'] = 'planta5';
    $_SESSION['vista'] = $vistas['adminAulas'];
    $_SESSION['controlador'] = $controladores['adminAula'];
    require_once $_SESSION['controlador'];
    
} else {
    
}

?>