<?php

// conexion
require_once './config/conexion.php';

// core
require_once './core/curl.php';
require_once './core/funciones.php';

// modelo DAO y clases
require_once './model/usuario.php';
require_once './dao/DAO.php';
require_once './dao/factoryBD.php';
require_once './dao/usuarioDAO.php';

// controladores
$controladores = array(
    'login' => './controller/loginController.php',
    'user' => './controller/userController.php',
    'admin' => './controller/adminController.php'
);


// vistas
$vistas = array(
    'login' => './view/loginView.php',
    'user' => './view/userView.php',
    'admin' => './view/adminView.php'
);

// estilos
$css = array(
    'login' => 'web/css/loginStyle.css',
    'admin' => 'web/css/adminStyle.css',
    'user' => 'web/css/userStyle.css'
);

?>