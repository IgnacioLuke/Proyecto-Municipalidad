-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2022 a las 13:39:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reclamos_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamos`
--

CREATE TABLE `reclamos` (
  `id` int(255) NOT NULL,
  `agente` varchar(30) NOT NULL,
  `localidad` varchar(25) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `pedido` varchar(100) NOT NULL,
  `detalles` varchar(200) NOT NULL,
  `fecha_reclamo` datetime(6) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `fecha_finalizado` datetime(6) NOT NULL,
  `observaciones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reclamos`
--

INSERT INTO `reclamos` (`id`, `agente`, `localidad`, `sector`, `pedido`, `detalles`, `fecha_reclamo`, `estado`, `fecha_finalizado`, `observaciones`) VALUES
(1, 'pepe', '', 'punto digital', 'Creación de sistema de gestión para automatizar reclamos', 'Estamos empezando ', '2022-07-06 10:09:22.848000', 'Finalizado', '2022-12-14 10:06:22.000000', 'estamos en etapa de prueba'),
(5, 'Ignacio ', '', 'Publico', 'Servidor', 'no anda', '2022-07-13 09:39:00.000000', 'Finalizado', '0000-00-00 00:00:00.000000', ''),
(6, 'Ignacio ', '', 'Publico', 'Servidor', 'no anda', '2022-07-13 09:57:00.000000', 'Finalizado', '0000-00-00 00:00:00.000000', ''),
(7, 'Gabriel', '', 'Publico', 'PC', 'no anda', '2022-07-13 09:57:00.000000', 'Finalizado', '0000-00-00 00:00:00.000000', ''),
(8, 'Gabriel', '', 'Publico', 'PC', 'no anda', '2022-07-13 09:58:37.000000', 'Finalizado', '0000-00-00 00:00:00.000000', ''),
(11, '', '', '', '', '', '2022-07-14 08:26:30.000000', 'En espera', '0000-00-00 00:00:00.000000', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
