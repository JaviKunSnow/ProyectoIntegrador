 CREATE DATABASE login;
USE login;

DROP TABLE IF EXISTS `arduino`;
CREATE TABLE `arduino` (
  `idArduino` int NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idArduino`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `rol` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `acceder`;
CREATE TABLE `acceder` (
  `idArduino` int NOT NULL,
  `idUsuario` int NOT NULL,
  KEY `idArduino_idx` (`idArduino`),
  KEY `idUsuario_idx` (`idUsuario`),
  CONSTRAINT `idArduino` FOREIGN KEY (`idArduino`) REFERENCES `arduino` (`idArduino`),
  CONSTRAINT `idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
