CREATE DATABASE api;
USE api;

DROP TABLE IF EXISTS `sensores`;
CREATE TABLE `sensores` (
  `idSensor` int NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `humedad` float NOT NULL,
  `temperatura` float NOT NULL,
  `personas` int NOT NULL,
  `luminosidad` int NOT NULL,
  `idArduino` int NOT NULL,
  PRIMARY KEY (`idSensor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `actuador_log`;
CREATE TABLE `actuador_log` (
  `idActuador` int NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT NULL,
  `actuador` varchar(50) DEFAULT NULL,
  `causa` varchar(200) DEFAULT NULL,
  `idArduino` int DEFAULT NULL,
  PRIMARY KEY (`idActuador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;