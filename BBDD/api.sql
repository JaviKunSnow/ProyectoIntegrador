CREATE DATABASE api;
USE api;

DROP TABLE IF EXISTS `arduino`;
CREATE TABLE `arduino` (
  `idArduino` int NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idArduino`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `sensores`;
CREATE TABLE `sensores` (
  `idSensor` int NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `humedad` float NOT NULL,
  `temperatura` float NOT NULL,
  `luminosidad` int NOT NULL,
  `personas` int NOT NULL,
  `idArduino` int NOT NULL,
  PRIMARY KEY (`idSensor`),
  KEY `idArduino_idx` (`idArduino`),
  CONSTRAINT `idArduino` FOREIGN KEY (`idArduino`) REFERENCES `arduino` (`idArduino`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `actuador_log`;
CREATE TABLE `actuador_log` (
  `idActuador` int NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT NULL,
  `actuador` varchar(50) DEFAULT NULL,
  `causa` varchar(200) DEFAULT NULL,
  `idArduino` int DEFAULT NULL,
  PRIMARY KEY (`idActuador`),
  KEY `idArduino_idx` (`idArduino`),
  CONSTRAINT `idArduinoAct` FOREIGN KEY (`idArduino`) REFERENCES `arduino` (`idArduino`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;