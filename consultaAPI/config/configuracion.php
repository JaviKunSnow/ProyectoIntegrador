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
    'admin' => './controller/adminController.php',
    'adminAulas' => './controller/adminAulasController.php',
    'adminAula' => './controller/adminAulaController.php'
);


// vistas
$vistas = array(
    'login' => './view/login.php',
    'userAula' => './view/userAula.php',
    'userDetalles' => './view/userDetalles.php',
    'adminPlantas' => './view/adminPlantas.php',
    'adminAulas' => './view/adminAulas.php',
    'adminAula' => './view/adminAula.php',
    'adminDetalles' => './view/adminDetalles.php'
);

// estilos
$css = array(
    'login' => 'web/css/loginStyle.css',
    'admin' => 'web/css/adminStyle.css',
    'user' => 'web/css/userStyle.css',
    'detalles' => 'web/css/detallesStyle.css'
);
