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

insert into arduino (idArduino, nombre) values (1, "522");
insert into arduino (idArduino, nombre) values (2, "523");
insert into arduino (idArduino, nombre) values (3, "524");

ALTER TABLE sensores AUTO_INCREMENT = 1;

insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-12 08:00:00', 30.4, 3.5, 700, 20, 2);

insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-13 08:00:00', 30.4, 3.5, 700, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-13 08:00:10', 61.4, 2.2, 700, 10, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-13 08:00:15', 46.4, 12.5, 700, 20, 2);


insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-14 08:00:00', 36.4, 10.5, 700, 2, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-14 08:00:10', 89.4, 2.2, 900, 1, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-14 08:00:15', 10.4, 12.5, 700, 12, 2);


insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-15 08:00:00', 30.4, 31.5, 700, 8, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-15 08:00:10', 61.4, 2.2, 900, 10, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-15 08:00:15', 46.4, 12.5, 700, 15, 2);


insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-16 08:00:00', 30.4, 5.5, 700, 5, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-16 08:00:10', 61.4, 21.2, 900, 10, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-16 08:00:15', 46.4, 12.5, 700, 23, 2);


insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-17 08:00:00', 30.4, 32.5, 700, 1, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-17 08:00:10', 61.4, 22.2, 900, 12, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-17 08:00:15', 46.4, 12.5, 700, 20, 2);

insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-18 08:00:00', 2.4, 3.5, 700, 1, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-18 08:00:10', 20.4, 22.2, 900, 12, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-18 08:00:15', 90.4, 1.5, 700, 20, 2);

insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-19 08:00:00', 30.4, 41.5, 700, 1, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-19 08:00:10', 61.4, 2.2, 900, 12, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-02-19 08:00:15', 46.4, 15.5, 700, 20, 2);

insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-01-17 08:00:00', 30.4, 41.5, 700, 1, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-01-16 08:00:10', 61.4, 2.2, 900, 12, 2);
insert into sensores (fecha, humedad, temperatura, luminosidad, personas, idArduino) values ('2023-01-15 08:00:15', 46.4, 15.5, 700, 20, 2);