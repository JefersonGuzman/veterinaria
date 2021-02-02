-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2021 a las 22:46:50
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaborador`
--

CREATE TABLE `colaborador` (
  `id` int(4) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `cargo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `especialidad` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_documento` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  `documento_identificacion` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_historia_clinica`
--

CREATE TABLE `detalle_historia_clinica` (
  `id` int(4) NOT NULL,
  `temperatura` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `peso` decimal(19,2) NOT NULL,
  `frecuencia_cardiaca` decimal(19,2) NOT NULL,
  `frecuencia_respiratoria` decimal(19,2) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `alimentación` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `habitad` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `observacion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `colaborador_id` int(4) NOT NULL,
  `historia_clinica_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_clinica`
--

CREATE TABLE `historia_clinica` (
  `id` int(4) NOT NULL,
  `mascota_id` int(4) NOT NULL,
  `fecha_creacion` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id` int(4) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `raza` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_id` int(4) NOT NULL,
  `sexo` char(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id`, `nombre`, `raza`, `usuario_id`, `sexo`) VALUES
(21, 'Pelucher', 'pug - grande', 12, 'Macho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(4) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_documento` char(255) COLLATE utf8_spanish2_ci NOT NULL,
  `documento_identificacion` int(4) NOT NULL,
  `estado` char(255) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `tipo_documento`, `documento_identificacion`, `estado`, `sexo`) VALUES
(12, 'anderson', 'MANUEL tirizo', 'cedula', 1143996972, 'Desabilitado', 'hombre');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colaborador`
--
ALTER TABLE `colaborador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_historia_clinica`
--
ALTER TABLE `detalle_historia_clinica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colaborador_id` (`colaborador_id`),
  ADD KEY `historia_clinica_id` (`historia_clinica_id`);

--
-- Indices de la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mascota_id` (`mascota_id`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colaborador`
--
ALTER TABLE `colaborador`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_historia_clinica`
--
ALTER TABLE `detalle_historia_clinica`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_historia_clinica`
--
ALTER TABLE `detalle_historia_clinica`
  ADD CONSTRAINT `detalle_historia_clinica_ibfk_1` FOREIGN KEY (`colaborador_id`) REFERENCES `colaborador` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_historia_clinica_ibfk_2` FOREIGN KEY (`historia_clinica_id`) REFERENCES `historia_clinica` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  ADD CONSTRAINT `historia_clinica_ibfk_1` FOREIGN KEY (`id`) REFERENCES `mascota` (`id`);

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
