<?php

// conexion
require_once './config/conexion.php';

// controladores
require_once './controller/controladorPadre.php';
require_once './controller/sensoresController.php';
require_once './controller/actuadorLogController.php';
require_once './controller/arduinoController.php';

// modelo DAO y clases
require_once './dao/DAO.php';
require_once './dao/factoryBD.php';
require_once './model/sensores.php';
require_once './model/actuadorLog.php';
require_once './model/arduino.php';
require_once './dao/sensoresDAO.php';
require_once './dao/actuadorLogDAO.php';
require_once './dao/arduinoDAO.php';



?>