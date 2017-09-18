-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-01-2015 a las 09:23:50
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aplicacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Aerolinea`
--

CREATE TABLE IF NOT EXISTS `Aerolinea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Agencia`
--

CREATE TABLE IF NOT EXISTS `Agencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ruc` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_24D112058E86059E` (`ciudad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Agente`
--

CREATE TABLE IF NOT EXISTS `Agente` (
  `id` int(11) NOT NULL,
  `agencia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_66EE1B09EB6C2B99` (`agencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Anulacion`
--

CREATE TABLE IF NOT EXISTS `Anulacion` (
  `id` int(11) NOT NULL,
  `datos_boleto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vtc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tarjet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ciudad`
--

CREATE TABLE IF NOT EXISTS `Ciudad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_892A00A87E5D2EFF` (`pais`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Configuracion`
--

CREATE TABLE IF NOT EXISTS `Configuracion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) DEFAULT NULL,
  `lastCounter` int(11) DEFAULT NULL,
  `activa` tinyint(1) NOT NULL,
  `emailViaticos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailVacaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tiempoAnulacion` int(11) NOT NULL,
  `tiempoEmision` int(11) NOT NULL,
  `tiempoRevision` int(11) NOT NULL,
  `fomaPagoCash` int(11) NOT NULL,
  `fomaPagoPlanPiloto` int(11) NOT NULL,
  `fomaPagoVtc` int(11) NOT NULL,
  `local` int(11) NOT NULL,
  `remota` int(11) NOT NULL,
  `tiempoPorPasajero` int(11) NOT NULL,
  `tiempoRespuestaPlanPiloto` int(11) NOT NULL,
  `tiempoRespuestaNormal` int(11) NOT NULL,
  `ponderacionPlanPiloto` int(11) NOT NULL,
  `ponderacionNoPlanPiloto` int(11) NOT NULL,
  `ponderacionEmision` int(11) NOT NULL,
  `ponderacionRevision` int(11) NOT NULL,
  `ponderacionAnulacion` int(11) NOT NULL,
  `inicioHorarioAtencion` time NOT NULL,
  `finHorarioAtencion` time NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ponderacionSVI` int(11) NOT NULL,
  `ponderacionNOSVI` int(11) NOT NULL,
  `tiempoPrimeraAlerta` int(11) NOT NULL,
  `tiempoSegundaAlerta` int(11) NOT NULL,
  `feeEmergencia` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DB528104B8D75A50` (`empresa`),
  KEY `IDX_DB5281047DABC8BD` (`lastCounter`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Continente`
--

CREATE TABLE IF NOT EXISTS `Continente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CronTask`
--

CREATE TABLE IF NOT EXISTS `CronTask` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comandos` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `intervalo` int(11) NOT NULL,
  `lastrun` datetime DEFAULT NULL,
  `activa` tinyint(1) NOT NULL,
  `empresa` int(11) DEFAULT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `asignacionOrdenes` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B56F04C1B8D75A50` (`empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DepefectivoTransferenciabancaria`
--

CREATE TABLE IF NOT EXISTS `DepefectivoTransferenciabancaria` (
  `id` int(11) NOT NULL,
  `banco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_documento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  `transaccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Emision`
--

CREATE TABLE IF NOT EXISTS `Emision` (
  `id` int(11) NOT NULL,
  `reserva_pnr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tarifa_reserva` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empresa`
--

CREATE TABLE IF NOT EXISTS `Empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` int(11) DEFAULT NULL,
  `matriz` int(11) DEFAULT NULL,
  `ruc` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `razonsocial` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `representante` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_776A63CC8E86059E` (`ciudad`),
  KEY `IDX_776A63CC163D20E3` (`matriz`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_agencia`
--

CREATE TABLE IF NOT EXISTS `empresa_agencia` (
  `empresa` int(11) NOT NULL,
  `agencia` int(11) NOT NULL,
  PRIMARY KEY (`empresa`,`agencia`),
  KEY `IDX_622BE099B8D75A50` (`empresa`),
  KEY `IDX_622BE099EB6C2B99` (`agencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_feriado`
--

CREATE TABLE IF NOT EXISTS `empresa_feriado` (
  `empresa` int(11) NOT NULL,
  `feriado` int(11) NOT NULL,
  PRIMARY KEY (`empresa`,`feriado`),
  KEY `IDX_F4C18B13B8D75A50` (`empresa`),
  KEY `IDX_F4C18B137D864013` (`feriado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estadoorden`
--

CREATE TABLE IF NOT EXISTS `Estadoorden` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Feriado`
--

CREATE TABLE IF NOT EXISTS `Feriado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inicio` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Formapago`
--

CREATE TABLE IF NOT EXISTS `Formapago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orden` int(11) DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FC1EDF6DE128CFD7` (`orden`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_group`
--

CREATE TABLE IF NOT EXISTS `fos_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4B019DDB5E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ci` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `foto` longtext COLLATE utf8_unicode_ci,
  `sexo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ext` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Gds`
--

CREATE TABLE IF NOT EXISTS `Gds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Orden`
--

CREATE TABLE IF NOT EXISTS `Orden` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agente` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `gds` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `numero_orden` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_boleto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` longtext COLLATE utf8_unicode_ci,
  `record_gds` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tourcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fee_servicios` double NOT NULL,
  `observaciones` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prioridad` int(11) NOT NULL,
  `ciudadDestino` int(11) DEFAULT NULL,
  `numPasajeros` int(11) NOT NULL,
  `horaAsignacion` datetime DEFAULT NULL,
  `procesadaEmergencia` tinyint(1) NOT NULL,
  `adjunto` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_20E9E0D361421E3F` (`agente`),
  KEY `IDX_20E9E0D32265B05D` (`usuario`),
  KEY `IDX_20E9E0D3265DE1E3` (`estado`),
  KEY `IDX_20E9E0D3B8D75A50` (`empresa`),
  KEY `IDX_20E9E0D37A448A92` (`gds`),
  KEY `IDX_20E9E0D392516F8E` (`ciudadDestino`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pagodirecto`
--

CREATE TABLE IF NOT EXISTS `Pagodirecto` (
  `id` int(11) NOT NULL,
  `tipo_pago` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pais`
--

CREATE TABLE IF NOT EXISTS `Pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `continente` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DE6F81C1B6058041` (`continente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Plan_Piloto`
--

CREATE TABLE IF NOT EXISTS `Plan_Piloto` (
  `agencia` int(11) NOT NULL,
  `aerolinea` int(11) NOT NULL,
  PRIMARY KEY (`agencia`,`aerolinea`),
  KEY `IDX_BF8F2F50EB6C2B99` (`agencia`),
  KEY `IDX_BF8F2F50CDD559D8` (`aerolinea`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Revision`
--

CREATE TABLE IF NOT EXISTS `Revision` (
  `id` int(11) NOT NULL,
  `reserva_pnr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tarifa_reserva` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datos_boleto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tarjet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tarjetacredito`
--

CREATE TABLE IF NOT EXISTS `Tarjetacredito` (
  `id` int(11) NOT NULL,
  `emisor_vtc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aerolinea` int(11) DEFAULT NULL,
  `banco_emisor_tarjeta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_tarjeta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_tarjeta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `propietario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vence` date NOT NULL,
  `pin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_pago` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plazo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_autorizacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_autorizacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor_tarjeta` double NOT NULL,
  `interes_tarjeta` double NOT NULL,
  `valor_total` double NOT NULL,
  `pago_pasajeros` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8C940CACDD559D8` (`aerolinea`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuariointerno`
--

CREATE TABLE IF NOT EXISTS `Usuariointerno` (
  `id` int(11) NOT NULL,
  `jefe` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `inicioAlmuerzo` time NOT NULL,
  `finAlmuerzo` time NOT NULL,
  `inicioJornada` time NOT NULL,
  `finJornada` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E5503D035BC9846` (`jefe`),
  KEY `IDX_E5503D0B8D75A50` (`empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_grupo`
--

CREATE TABLE IF NOT EXISTS `usuario_grupo` (
  `usuario` int(11) NOT NULL,
  `grupo` int(11) NOT NULL,
  PRIMARY KEY (`usuario`,`grupo`),
  KEY `IDX_91D0F1CD2265B05D` (`usuario`),
  KEY `IDX_91D0F1CD8C0E9BD3` (`grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Agencia`
--
ALTER TABLE `Agencia`
  ADD CONSTRAINT `FK_24D112058E86059E` FOREIGN KEY (`ciudad`) REFERENCES `Ciudad` (`id`);

--
-- Filtros para la tabla `Agente`
--
ALTER TABLE `Agente`
  ADD CONSTRAINT `FK_66EE1B09BF396750` FOREIGN KEY (`id`) REFERENCES `fos_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_66EE1B09EB6C2B99` FOREIGN KEY (`agencia`) REFERENCES `Agencia` (`id`);

--
-- Filtros para la tabla `Anulacion`
--
ALTER TABLE `Anulacion`
  ADD CONSTRAINT `FK_A94F4C46BF396750` FOREIGN KEY (`id`) REFERENCES `Orden` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `Ciudad`
--
ALTER TABLE `Ciudad`
  ADD CONSTRAINT `FK_892A00A87E5D2EFF` FOREIGN KEY (`pais`) REFERENCES `Pais` (`id`);

--
-- Filtros para la tabla `Configuracion`
--
ALTER TABLE `Configuracion`
  ADD CONSTRAINT `FK_DB5281047DABC8BD` FOREIGN KEY (`lastCounter`) REFERENCES `Usuariointerno` (`id`),
  ADD CONSTRAINT `FK_DB528104B8D75A50` FOREIGN KEY (`empresa`) REFERENCES `Empresa` (`id`);

--
-- Filtros para la tabla `CronTask`
--
ALTER TABLE `CronTask`
  ADD CONSTRAINT `FK_B56F04C1B8D75A50` FOREIGN KEY (`empresa`) REFERENCES `Empresa` (`id`);

--
-- Filtros para la tabla `DepefectivoTransferenciabancaria`
--
ALTER TABLE `DepefectivoTransferenciabancaria`
  ADD CONSTRAINT `FK_246BB9ACBF396750` FOREIGN KEY (`id`) REFERENCES `Formapago` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `Emision`
--
ALTER TABLE `Emision`
  ADD CONSTRAINT `FK_DDF448F2BF396750` FOREIGN KEY (`id`) REFERENCES `Orden` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `Empresa`
--
ALTER TABLE `Empresa`
  ADD CONSTRAINT `FK_776A63CC163D20E3` FOREIGN KEY (`matriz`) REFERENCES `Empresa` (`id`),
  ADD CONSTRAINT `FK_776A63CC8E86059E` FOREIGN KEY (`ciudad`) REFERENCES `Ciudad` (`id`);

--
-- Filtros para la tabla `empresa_agencia`
--
ALTER TABLE `empresa_agencia`
  ADD CONSTRAINT `FK_622BE099B8D75A50` FOREIGN KEY (`empresa`) REFERENCES `Empresa` (`id`),
  ADD CONSTRAINT `FK_622BE099EB6C2B99` FOREIGN KEY (`agencia`) REFERENCES `Agencia` (`id`);

--
-- Filtros para la tabla `empresa_feriado`
--
ALTER TABLE `empresa_feriado`
  ADD CONSTRAINT `FK_F4C18B137D864013` FOREIGN KEY (`feriado`) REFERENCES `Feriado` (`id`),
  ADD CONSTRAINT `FK_F4C18B13B8D75A50` FOREIGN KEY (`empresa`) REFERENCES `Empresa` (`id`);

--
-- Filtros para la tabla `Formapago`
--
ALTER TABLE `Formapago`
  ADD CONSTRAINT `FK_FC1EDF6DE128CFD7` FOREIGN KEY (`orden`) REFERENCES `Orden` (`id`);

--
-- Filtros para la tabla `Orden`
--
ALTER TABLE `Orden`
  ADD CONSTRAINT `FK_20E9E0D32265B05D` FOREIGN KEY (`usuario`) REFERENCES `Usuariointerno` (`id`),
  ADD CONSTRAINT `FK_20E9E0D3265DE1E3` FOREIGN KEY (`estado`) REFERENCES `Estadoorden` (`id`),
  ADD CONSTRAINT `FK_20E9E0D361421E3F` FOREIGN KEY (`agente`) REFERENCES `Agente` (`id`),
  ADD CONSTRAINT `FK_20E9E0D37A448A92` FOREIGN KEY (`gds`) REFERENCES `Gds` (`id`),
  ADD CONSTRAINT `FK_20E9E0D392516F8E` FOREIGN KEY (`ciudadDestino`) REFERENCES `Ciudad` (`id`),
  ADD CONSTRAINT `FK_20E9E0D3B8D75A50` FOREIGN KEY (`empresa`) REFERENCES `Empresa` (`id`);

--
-- Filtros para la tabla `Pagodirecto`
--
ALTER TABLE `Pagodirecto`
  ADD CONSTRAINT `FK_1FF26A44BF396750` FOREIGN KEY (`id`) REFERENCES `Formapago` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `Pais`
--
ALTER TABLE `Pais`
  ADD CONSTRAINT `FK_DE6F81C1B6058041` FOREIGN KEY (`continente`) REFERENCES `Continente` (`id`);

--
-- Filtros para la tabla `Plan_Piloto`
--
ALTER TABLE `Plan_Piloto`
  ADD CONSTRAINT `FK_BF8F2F50CDD559D8` FOREIGN KEY (`aerolinea`) REFERENCES `Aerolinea` (`id`),
  ADD CONSTRAINT `FK_BF8F2F50EB6C2B99` FOREIGN KEY (`agencia`) REFERENCES `Agencia` (`id`);

--
-- Filtros para la tabla `Revision`
--
ALTER TABLE `Revision`
  ADD CONSTRAINT `FK_9415779ABF396750` FOREIGN KEY (`id`) REFERENCES `Orden` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `Tarjetacredito`
--
ALTER TABLE `Tarjetacredito`
  ADD CONSTRAINT `FK_8C940CABF396750` FOREIGN KEY (`id`) REFERENCES `Formapago` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8C940CACDD559D8` FOREIGN KEY (`aerolinea`) REFERENCES `Aerolinea` (`id`);

--
-- Filtros para la tabla `Usuariointerno`
--
ALTER TABLE `Usuariointerno`
  ADD CONSTRAINT `FK_E5503D035BC9846` FOREIGN KEY (`jefe`) REFERENCES `Usuariointerno` (`id`),
  ADD CONSTRAINT `FK_E5503D0B8D75A50` FOREIGN KEY (`empresa`) REFERENCES `Empresa` (`id`),
  ADD CONSTRAINT `FK_E5503D0BF396750` FOREIGN KEY (`id`) REFERENCES `fos_user` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuario_grupo`
--
ALTER TABLE `usuario_grupo`
  ADD CONSTRAINT `FK_91D0F1CD2265B05D` FOREIGN KEY (`usuario`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_91D0F1CD8C0E9BD3` FOREIGN KEY (`grupo`) REFERENCES `fos_group` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
