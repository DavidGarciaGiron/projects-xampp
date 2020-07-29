-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2020 a las 07:16:04
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `visamdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosgenerales`
--

CREATE TABLE `datosgenerales` (
  `id` int(10) NOT NULL,
  `name_unit` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `name_point` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `source` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `authorization` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `surveillance_period` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `start` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `flow` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `volume` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datosgenerales`
--

INSERT INTO `datosgenerales` (`id`, `name_unit`, `name_point`, `source`, `authorization`, `surveillance_period`, `start`, `flow`, `volume`) VALUES
(9, 'TANTAHUATAY', 'E-1', 'QUEBRADA', 'RD-1512019-ANA', '3 aÃ±os', '03/12/2019', '1,200', '5,200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'David Adolfo Garcia Giron', 'david.garcia@tecsup.edu.pe', 'dgarcia', '$2y$10$XIMLgCR.7t6mm/xNYlP8POpXD3WgrBaIVEe3qkhu/Tz9BuMy68Z3.'),
(2, 'Diana del Pilar', 'diana.garcia@gmail.com', 'dianagarcia', '$2y$10$0.t/08Xf0lMBJhyO4RTZbOXsiQe70vIqkZWh61WmtuWv/r5wfSF0K');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosgenerales`
--
ALTER TABLE `datosgenerales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosgenerales`
--
ALTER TABLE `datosgenerales`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
