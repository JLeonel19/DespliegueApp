-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 08:54:14
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nba_store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tenis`
--

CREATE TABLE `tenis` (
  `id_tenis` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `estilo` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tenis`
--

INSERT INTO `tenis` (`id_tenis`, `nombre`, `marca`, `estilo`, `precio`) VALUES
(101, 'LEBRON', 'NIKE', 'BASQUETBOL', 3200),
(102, 'CURRY', 'UNDER ARMOUR', 'BASQUETBOL', 2700),
(103, 'COBE', 'NIKE', 'BASQUETBOL', 3100),
(104, 'WADE', 'ADIDAS', 'BASQUETBOL', 2800);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tenis`
--
ALTER TABLE `tenis`
  ADD PRIMARY KEY (`id_tenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
