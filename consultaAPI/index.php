<?php

require("./config/configuracion.php");

if(isset($_REQUEST["logout"])) {
    
    session_destroy();
    $_SESSION['controlador'] = $controladores['login'];
    $_SESSION['pagina'] = 'login';
    $_SESSION['vista'] = $vistas['login'];
    header('location: index.php');

} else {
    if(!isset($_SESSION['pagina'])) {
        
        $_SESSION['controlador'] = $controladores['login'];
        $_SESSION['pagina'] = 'login';
        $_SESSION['vista'] = $vistas['login'];
        require_once($_SESSION['controlador']);

    } else {
        require_once($_SESSION['controlador']);
    }
}

require_once('./view/layout.php');

?>