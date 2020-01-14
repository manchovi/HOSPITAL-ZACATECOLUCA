-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-12-2019 a las 08:53:53
-- Versión del servidor: 5.6.45
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mjgl_db_biomedic_2019`
--

create database `mjgl_hospital`;
use `mjgl_hospital`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_alarma`
--

CREATE TABLE `tb_alarma` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `alarma` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_paciente` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_contacto_paciente`
--

CREATE TABLE `tb_contacto_paciente` (
  `id_contacto` int(11) NOT NULL,
  `nombre_persona` varchar(100) NOT NULL,
  `parentesco` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `id_paciente` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_especialista`
--

CREATE TABLE `tb_especialista` (
  `dui` varchar(15) NOT NULL,
  `nombres` varchar(70) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `email` varchar(150) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `pregunta` varchar(150) NOT NULL,
  `respuesta` varchar(50) NOT NULL,
  `comentarios` varchar(250) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_paciente`
--

CREATE TABLE `tb_paciente` (
  `id_paciente` varchar(15) NOT NULL,
  `doc_id` varchar(15) NOT NULL,
  `nombres` varchar(75) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `estado` varchar(120) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comentarios` varchar(250) NOT NULL,
  `dui` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_sensores`
--

CREATE TABLE `tb_sensores` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `frec_cardiaca` int(11) NOT NULL,
  `spo2` int(11) NOT NULL,
  `presion_arterial` int(11) NOT NULL,
  `frec_respiratoria` int(11) NOT NULL,
  `temp_corporal` int(11) NOT NULL,
  `alarma` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dui` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `id_paciente` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Contenedor Principal de Almacenamiento de datos de los senso';

--
-- Volcado de datos para la tabla `tb_sensores`
--

INSERT INTO `tb_sensores` (`id`, `descripcion`, `frec_cardiaca`, `spo2`, `presion_arterial`, `frec_respiratoria`, `temp_corporal`, `alarma`, `fecha`, `hora`, `time`, `dui`, `id_paciente`) VALUES
(7708, 'Internet of Things', 978, 951, 964, 834, 508, 1, '2019-12-05', '11:15:20', '2019-12-05 17:15:23', '28227838', ''),
(7709, 'Internet of Things', 978, 951, 964, 834, 508, 1, '2019-12-05', '11:15:20', '2019-12-05 17:15:30', '28227838', ''),
(7710, 'Internet of Things', 1007, 989, 987, 771, 865, 1, '2019-12-05', '11:15:30', '2019-12-05 17:15:34', '28227838', ''),
(7711, 'Internet of Things', 1007, 989, 987, 771, 865, 1, '2019-12-05', '11:15:30', '2019-12-05 17:15:34', '28227838', ''),
(7712, 'Internet of Things', 1010, 978, 1014, 686, 270, 1, '2019-12-05', '11:15:40', '2019-12-05 17:15:44', '28227838', ''),
(7713, 'Internet of Things', 1010, 978, 1014, 686, 270, 1, '2019-12-05', '11:15:40', '2019-12-05 17:15:47', '28227838', ''),
(7714, 'Internet of Things', 1012, 979, 1017, 683, 293, 1, '2019-12-05', '11:15:50', '2019-12-05 17:15:55', '28227838', ''),
(7715, 'Internet of Things', 1012, 979, 1017, 683, 293, 1, '2019-12-05', '11:15:50', '2019-12-05 17:15:58', '28227838', ''),
(7716, 'Internet of Things', 1016, 977, 1014, 687, 736, 1, '2019-12-05', '11:16:00', '2019-12-05 17:16:05', '28227838', ''),
(7717, 'Internet of Things', 1016, 977, 1014, 687, 736, 1, '2019-12-05', '11:16:00', '2019-12-05 17:16:06', '28227838', ''),
(7718, 'Internet of Things', 1021, 978, 1018, 687, 427, 1, '2019-12-05', '11:16:10', '2019-12-05 17:16:14', '28227838', ''),
(7719, 'Internet of Things', 1021, 978, 1018, 687, 427, 1, '2019-12-05', '11:16:10', '2019-12-05 17:16:16', '28227838', ''),
(7720, 'Internet of Things', 1019, 978, 1014, 689, 528, 1, '2019-12-05', '11:16:21', '2019-12-05 17:16:20', '28227838', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_alarma`
--
ALTER TABLE `tb_alarma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `tb_contacto_paciente`
--
ALTER TABLE `tb_contacto_paciente`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `tb_especialista`
--
ALTER TABLE `tb_especialista`
  ADD PRIMARY KEY (`dui`);

--
-- Indices de la tabla `tb_paciente`
--
ALTER TABLE `tb_paciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD KEY `dui` (`dui`),
  ADD KEY `dui_especialista` (`dui`);

--
-- Indices de la tabla `tb_sensores`
--
ALTER TABLE `tb_sensores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dui` (`dui`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_alarma`
--
ALTER TABLE `tb_alarma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_contacto_paciente`
--
ALTER TABLE `tb_contacto_paciente`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_sensores`
--
ALTER TABLE `tb_sensores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7721;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
