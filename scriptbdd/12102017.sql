CREATE TABLE `aerolineafee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aerolinea` int(11) DEFAULT NULL,
  `tipoaerolinea` varchar(45) NOT NULL,
  `esPredeterminada` varchar(10) DEFAULT NULL,
  `valorfee` decimal(15,2) DEFAULT NULL,
  `tiposervicio` varchar(45) NOT NULL,
  `origen` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
);
ALTER TABLE `orden`
ADD COLUMN  `feeemergencia_servicios` double DEFAULT NULL,
ADD COLUMN  `aerolinea` int(11) DEFAULT NULL;