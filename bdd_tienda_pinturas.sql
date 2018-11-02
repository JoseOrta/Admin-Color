-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2018 a las 23:48:17
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdd_tienda_pinturas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_inventario_final`
--

CREATE TABLE `tabla_inventario_final` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_inventario_inicial`
--

CREATE TABLE `tabla_inventario_inicial` (
  `id` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `cantidad_final` int(11) NOT NULL,
  `consumo` int(11) NOT NULL,
  `grupo` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `precio_compra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='fehc a es opcional';

--
-- Volcado de datos para la tabla `tabla_inventario_inicial`
--

INSERT INTO `tabla_inventario_inicial` (`id`, `nombre`, `cantidad`, `cantidad_final`, `consumo`, `grupo`, `fecha`, `precio_compra`) VALUES
(17, 'Negro 806', 3000, 0, 0, 'grupoa', 'Enero 18', '3000'),
(20, 'Aluminio 813', 950, 0, 0, 'grupoc', 'Enero 18', '950'),
(21, 'Verde Azulado 831 ', 950, 0, 0, 'grupoc', 'Enero 18', '950');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_inventario_final`
--
ALTER TABLE `tabla_inventario_final`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla_inventario_inicial`
--
ALTER TABLE `tabla_inventario_inicial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_inventario_inicial`
--
ALTER TABLE `tabla_inventario_inicial`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
