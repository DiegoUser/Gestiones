-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-06-2022 a las 14:19:30
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
  `tipoGastos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idGastos`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `gestion`
--

INSERT INTO `gestion` (`idGastos`, `descripcionGastos`, `fechaGastos`, `importeGastos`, `tipoGastos`) VALUES
(31, 'TARJETA', '2022-06-24', 500, 'Ingreso'),
(35, 'OTRO AHORRO', '2022-06-21', 2000, 'Ahorro'),
(33, 'OTRO INGRESO', '2022-06-08', 2000, 'Ingreso'),
(34, 'OTRO EGRESO', '2022-06-21', 2000, 'Egreso'),
(32, 'CALABAZA', '2022-06-20', 100, 'Ahorro'),
(30, 'FACTURA', '2022-06-15', 5000, 'Egreso');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
