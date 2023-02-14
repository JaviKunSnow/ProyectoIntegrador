<?php

// conexion
require_once './config/conexion.php';

// controladores
require_once './controller/loginControlador.php';

// modelo DAO y clases
require_once './model/usuario.php';
require_once './dao/DAO.php';
require_once './dao/factoryBD.php';
require_once './dao/usuarioDAO.php';

// controladores
$controladores = array(
    'login' => './controller/loginController.php',
    'home' => './controller/homeController.php',
    'admin' => './controller/adminController.php'
);


// vistas
$vistas = array(
    'login' => './view/loginView.php',
    'home' => './view/homeView.php',
    'admin' => './view/adminView.php'
);

?>