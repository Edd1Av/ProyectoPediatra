-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2021 a las 21:28:52
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pediatra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(2) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `usuario`, `contrasena`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(2) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto1` varchar(100) DEFAULT NULL,
  `texto2` varchar(100) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `titulo`, `texto1`, `texto2`, `imagen`) VALUES
(2, 'OFERTAS', '50% DE DESCUENTO EN CONSULTA', 'Al mencionar que nos contactaron a través de la pagina  ', 'iconos/2021-12-16-06-37-56-009-probador-de-traccion.png'),
(3, 'APLICACIÓN DE VACUNAS:', 'Entre $500 y $2000 Dependiendo de la vacuna', 'Pulsioximetría: Sin costo (incluido en la consulta)', 'iconos/2021-12-16-06-44-04-002-vacunacion.png'),
(4, 'CONSULTA MÉDICA', 'PRIMERA VEZ SUBSECUENTE', '$600', 'iconos/2021-12-16-07-48-31-003-doctor.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscripciones`
--

CREATE TABLE `subscripciones` (
  `id` int(4) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `subscripciones`
--

INSERT INTO `subscripciones` (`id`, `nombre`, `email`) VALUES
(2, 'Eduardo Avilés', 'edd@gmail.com'),
(4, 'Carlos Merida', 'CarlM@gmail.com'),
(6, 'Eduardo', 'eddavilesk@gmail.com'),
(7, 'aviles', 'LE18081054@merida.tecnm.mx');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subscripciones`
--
ALTER TABLE `subscripciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `subscripciones`
--
ALTER TABLE `subscripciones`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
