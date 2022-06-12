-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-06-2022 a las 15:16:24
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion`
--

DROP TABLE IF EXISTS `gestion`;
CREATE TABLE IF NOT EXISTS `gestion` (
  `idGastos` int NOT NULL AUTO_INCREMENT,
  `descripcionGastos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fechaGastos` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `importeGastos` int NOT NULL,
  PRIMARY KEY (`idGastos`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `gestion`
--

INSERT INTO `gestion` (`idGastos`, `descripcionGastos`, `fechaGastos`, `importeGastos`) VALUES
(1, 'Television', 'CHINA', 15000),
(2, 'Lavarropas', 'CHINA', 15000),
(3, 'Secarropas', 'CHINA', 18000),
(4, 'Microondas', 'USA', 12000),
(5, 'Horno', 'USA', 15000),
(6, 'Heladera', 'USA', 22000),
(7, 'Batidora', 'INDIA', 6000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
