-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-04-2022 a las 23:53:05
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

DROP TABLE IF EXISTS `agentes`;
CREATE TABLE IF NOT EXISTS `agentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(512) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(512) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(512) COLLATE utf8_spanish_ci DEFAULT NULL,
  `documentID` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cuenta` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `paquete1` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `paquete2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `paquete3` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaventa` date DEFAULT NULL,
  `fechainstalacion` date DEFAULT NULL,
  `horario` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `agente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `telefono` (`telefono`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `telefono`, `email`, `direccion`, `documentID`, `cuenta`, `paquete1`, `paquete2`, `paquete3`, `fechaventa`, `fechainstalacion`, `horario`, `estado`, `agente`) VALUES
(1, 'Juan', 'Garay', '+50374790009', 'juannchin@gmail.com', NULL, '', '019987456', '', '', '', '0000-00-00', '0000-00-00', '', 0, 0),
(4, 'Carlos', 'Ortiz', '77777777', 'carlosalbertsv@gmail.com', NULL, NULL, NULL, 'Paquete 2', 'Paquete 1', 'Paquete 3', NULL, NULL, NULL, NULL, NULL),
(5, 'Luis', 'Gomez', '7374757677', 'gomezluix@gmail.com', NULL, NULL, NULL, 'Paquete 2', 'Paquete 3', 'Paquete 1', NULL, NULL, NULL, NULL, NULL),
(6, 'Raul', 'Martinez', '78795643', 'raulxmar@gmail.com', NULL, NULL, NULL, 'Paquete 2', 'Paquete 1', 'Paquete 3', NULL, NULL, NULL, NULL, NULL),
(7, 'RenÃ©', 'Garay', '78345677', 'ng_garay@gmail.com', NULL, NULL, NULL, 'Paquete 2', 'Paquete 1', 'Paquete 3', NULL, NULL, NULL, NULL, NULL),
(8, 'Alexis', 'Hernandez', '78973245', 'alexbrax@gmail.com', NULL, NULL, NULL, 'Paquete 1', 'Paquete 2', 'Paquete 3', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

DROP TABLE IF EXISTS `paquetes`;
CREATE TABLE IF NOT EXISTS `paquetes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`id`, `plan`, `tipo`) VALUES
(1, 'Video basico', 1),
(2, 'Video clasico', 1),
(3, 'Video todo incluido', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes_tipo`
--

DROP TABLE IF EXISTS `paquetes_tipo`;
CREATE TABLE IF NOT EXISTS `paquetes_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `paquetes_tipo`
--

INSERT INTO `paquetes_tipo` (`id`, `tipo`) VALUES
(1, 'Video'),
(2, 'Internet'),
(3, 'Telefonia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `rol`) VALUES
(1, 'juan', 'juan2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_roles`
--

DROP TABLE IF EXISTS `users_roles`;
CREATE TABLE IF NOT EXISTS `users_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users_roles`
--

INSERT INTO `users_roles` (`id`, `rol`) VALUES
(1, 'administrador'),
(2, 'agente');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
