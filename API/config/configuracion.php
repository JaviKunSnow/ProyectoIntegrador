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
require_once './controller/controladorPadre.php';
require_once './controller/sensoresController.php';
require_once './controller/actuadorLogController.php';


?>