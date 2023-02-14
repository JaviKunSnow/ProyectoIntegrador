CREATE DATABASE api;
USE api;

DROP TABLE IF EXISTS `arduino`;
CREATE TABLE `arduino` (
  `idArduino` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idArduino`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `humedad`;
CREATE TABLE `humedad` (
  `idHumedad` int NOT NULL AUTO_INCREMENT,
  `porcentaje` float DEFAULT NULL,
  PRIMARY KEY (`idHumedad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `temperatura`;
CREATE TABLE `temperatura` (
  `idTemperatura` int NOT NULL AUTO_INCREMENT,
  `grados` float DEFAULT NULL,
  PRIMARY KEY (`idTemperatura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `datos`;
CREATE TABLE `datos` (
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `personasEntran` int DEFAULT NULL,
  `personasSalen` int DEFAULT NULL,
  `idArduino` int DEFAULT NULL,
  `idHumedad` int DEFAULT NULL,
  `idTemperatura` int DEFAULT NULL,
  KEY `idArduino_idx` (`idArduino`),
  KEY `idHumedad_idx` (`idHumedad`),
  KEY `idTemperatura_idx` (`idTemperatura`),
  CONSTRAINT `idArduino` FOREIGN KEY (`idArduino`) REFERENCES `arduino` (`idArduino`),
  CONSTRAINT `idHumedad` FOREIGN KEY (`idHumedad`) REFERENCES `humedad` (`idHumedad`),
  CONSTRAINT `idTemperatura` FOREIGN KEY (`idTemperatura`) REFERENCES `temperatura` (`idTemperatura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;