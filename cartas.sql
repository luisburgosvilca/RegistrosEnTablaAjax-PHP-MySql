-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2019 a las 01:04:33
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cartas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta`
--

CREATE TABLE `carta` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `seguro` varchar(255) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `estado` varchar(255) DEFAULT NULL,
  `carta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carta`
--

INSERT INTO `carta` (`id`, `usuario`, `nombre`, `seguro`, `fecha`, `estado`, `carta`) VALUES
(1, 'luisburgosvilca@gmail.com', 'luis', 'pacifico', '2019-04-02 05:00:00', 'aprobado', '654987'),
(2, 'luisburgosvilca@gmail.com', 'mruiz', 'pacifico', '2019-04-03 05:00:00', 'Aprobado', '321654987'),
(3, '1', '2', '3', '0000-00-00 00:00:00', '6', '7'),
(4, '1', '2', '3', '0000-00-00 00:00:00', '6', '7'),
(5, '1', '2', '3', '0000-00-00 00:00:00', '6', '7'),
(6, '1', '2', '3', '0000-00-00 00:00:00', '6', '7'),
(7, 'anibalzv', 'iris', 'PacÃ­fico', '2019-04-02 05:00:00', 'Aprobado', '987654321');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carta`
--
ALTER TABLE `carta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carta`
--
ALTER TABLE `carta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
