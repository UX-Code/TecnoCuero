-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-06-2016 a las 23:49:21
-- Versión del servidor: 5.5.49-cll
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bsstudio_tecnocuero`
--
CREATE DATABASE IF NOT EXISTS `bsstudio_tecnocuero` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `bsstudio_tecnocuero`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_acceso`
--

CREATE TABLE IF NOT EXISTS `mod_acceso` (
  `acc_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usu_codigo` bigint(20) NOT NULL,
  `per_codigo` int(11) NOT NULL,
  `acc_clave` int(11) NOT NULL,
  `acc_estado` int(11) NOT NULL,
  `acc_utimo_acceso` int(11) NOT NULL,
  PRIMARY KEY (`acc_codigo`),
  KEY `usu_codigo` (`usu_codigo`),
  KEY `per_codigo` (`per_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_ciudades`
--

CREATE TABLE IF NOT EXISTS `mod_ciudades` (
  `ciu_codigoPK` int(10) NOT NULL,
  `dep_codigo` int(10) NOT NULL,
  `ciu_codigo` int(5) NOT NULL,
  `ciu_nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ciu_codigoPK`),
  UNIQUE KEY `dep_codigo` (`dep_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_departamentos`
--

CREATE TABLE IF NOT EXISTS `mod_departamentos` (
  `dep_codigo` int(10) NOT NULL AUTO_INCREMENT,
  `pais_codigo` int(10) NOT NULL,
  `dep_nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`dep_codigo`),
  KEY `pais_codigo` (`pais_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_empleados`
--

CREATE TABLE IF NOT EXISTS `mod_empleados` (
  `empl_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `emp_nit` bigint(20) NOT NULL,
  `usu_codigo` bigint(20) NOT NULL,
  `empl_cargo` varchar(50) NOT NULL,
  PRIMARY KEY (`empl_codigo`),
  KEY `emp_nit` (`emp_nit`,`usu_codigo`),
  KEY `usu_codigo` (`usu_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_empresas`
--

CREATE TABLE IF NOT EXISTS `mod_empresas` (
  `emp_nit` bigint(20) NOT NULL,
  `emp_dv` int(2) NOT NULL,
  `emp_nombre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_tel` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`emp_nit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_evento`
--

CREATE TABLE IF NOT EXISTS `mod_evento` (
  `even_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `even_nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `even_slogan` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `even_fechainicio` datetime NOT NULL,
  `even_fechafin` datetime NOT NULL,
  `even_lugar` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `even_coord_lat` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `even_coord_lon` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `teven_codigo` int(2) NOT NULL,
  `even_registro_sofia` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `even_precio` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`even_codigo`),
  KEY `teven_codigo` (`teven_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_paises`
--

CREATE TABLE IF NOT EXISTS `mod_paises` (
  `pais_codigo` int(10) NOT NULL AUTO_INCREMENT,
  `pais_nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`pais_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=133 ;

--
-- Volcado de datos para la tabla `mod_paises`
--

INSERT INTO `mod_paises` (`pais_codigo`, `pais_nombre`) VALUES
(1, 'colombia'),
(2, '0'),
(3, '1'),
(4, '2'),
(5, '3'),
(6, '4'),
(7, '5'),
(8, '6'),
(9, '7'),
(10, '8'),
(11, '9'),
(12, '10'),
(13, '11'),
(14, '12'),
(15, '13'),
(16, '14'),
(17, '15'),
(18, '16'),
(19, '17'),
(20, '18'),
(21, '19'),
(22, '20'),
(23, '21'),
(24, '22'),
(25, '23'),
(26, '24'),
(27, '25'),
(28, '26'),
(29, '27'),
(30, '28'),
(31, '29'),
(32, '30'),
(33, '31'),
(34, '32'),
(35, '33'),
(36, '34'),
(37, '35'),
(38, '36'),
(39, '37'),
(40, '38'),
(41, '39'),
(42, '40'),
(43, '41'),
(44, '42'),
(45, '43'),
(46, '0'),
(47, '1'),
(48, '2'),
(49, '3'),
(50, '4'),
(51, '5'),
(52, '6'),
(53, '7'),
(54, '8'),
(55, '9'),
(56, '10'),
(57, '11'),
(58, '12'),
(59, '13'),
(60, '14'),
(61, '15'),
(62, '16'),
(63, '17'),
(64, '18'),
(65, '19'),
(66, '20'),
(67, '21'),
(68, '22'),
(69, '23'),
(70, '24'),
(71, '25'),
(72, '26'),
(73, '27'),
(74, '28'),
(75, '29'),
(76, '30'),
(77, '31'),
(78, '32'),
(79, '33'),
(80, '34'),
(81, '35'),
(82, '36'),
(83, '37'),
(84, '38'),
(85, '39'),
(86, '40'),
(87, '41'),
(88, '42'),
(89, '0'),
(90, '1'),
(91, '2'),
(92, '3'),
(93, '4'),
(94, '5'),
(95, '6'),
(96, '7'),
(97, '8'),
(98, '9'),
(99, '10'),
(100, '11'),
(101, '12'),
(102, '13'),
(103, '14'),
(104, '15'),
(105, '16'),
(106, '17'),
(107, '18'),
(108, '19'),
(109, '20'),
(110, '21'),
(111, '22'),
(112, '23'),
(113, '24'),
(114, '25'),
(115, '26'),
(116, '27'),
(117, '28'),
(118, '29'),
(119, '30'),
(120, '31'),
(121, '32'),
(122, '33'),
(123, '34'),
(124, '35'),
(125, '36'),
(126, '37'),
(127, '38'),
(128, '39'),
(129, '40'),
(130, '41'),
(131, '42'),
(132, '43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_participante`
--

CREATE TABLE IF NOT EXISTS `mod_participante` (
  `par_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `tpar_codigo` int(11) NOT NULL,
  `usu_codigo` bigint(20) NOT NULL,
  `par_hojavida` blob NOT NULL,
  `par_nacionalidad` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `par_sitioweb` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`par_codigo`),
  KEY `tpar_codigo` (`tpar_codigo`,`usu_codigo`),
  KEY `usu_codigo` (`usu_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_perfiles`
--

CREATE TABLE IF NOT EXISTS `mod_perfiles` (
  `per_codigo` int(10) NOT NULL AUTO_INCREMENT,
  `per_nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `per_descripcion` longtext COLLATE utf8_spanish_ci,
  PRIMARY KEY (`per_codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_tipoevento`
--

CREATE TABLE IF NOT EXISTS `mod_tipoevento` (
  `teven_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `teven_nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `teven_descripcion` longtext COLLATE utf8_spanish_ci,
  PRIMARY KEY (`teven_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_tipoparticipante`
--

CREATE TABLE IF NOT EXISTS `mod_tipoparticipante` (
  `tpar_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `tpar_nombre` varchar(90) COLLATE utf8_spanish_ci NOT NULL,
  `tpar_descripcion` longtext COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`tpar_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_usuarios`
--

CREATE TABLE IF NOT EXISTS `mod_usuarios` (
  `usu_codigo` bigint(20) NOT NULL,
  `usu_tipoidentidad` varchar(2) NOT NULL,
  `usu_estado` varchar(50) NOT NULL,
  `usu_fecharegistro` date NOT NULL,
  PRIMARY KEY (`usu_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_visitantes`
--

CREATE TABLE IF NOT EXISTS `mod_visitantes` (
  `vis_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usu_codigo` bigint(20) NOT NULL,
  `even_codigo` int(11) NOT NULL,
  `vis_fecha` date NOT NULL,
  `vis_hora` date NOT NULL,
  PRIMARY KEY (`vis_codigo`),
  KEY `usu_codigo` (`usu_codigo`),
  KEY `even_codigo` (`even_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_datosbasicos`
--

CREATE TABLE IF NOT EXISTS `usuarios_datosbasicos` (
  `usu_codigo` bigint(20) NOT NULL,
  `usu_nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `usu_apellidop` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usu_apellidom` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usu_telefono` int(20) NOT NULL,
  `usu_correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usu_genero` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `usu_estrato` int(1) NOT NULL,
  `usu_paisresidencia` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_municipioresidencia` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_ciudadresidencia` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  UNIQUE KEY `usu_codigo` (`usu_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla de datos basicos de los usuarios';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_detalledatos`
--

CREATE TABLE IF NOT EXISTS `usuarios_detalledatos` (
  `usu_codigo` bigint(20) NOT NULL,
  `usu_fechanacimiento` date NOT NULL,
  `usu_paisnacimiento` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_municipionacimiento` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_ciudadnacimiento` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_fechaexp_doc` date NOT NULL,
  `usu_paisexp_doc` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_munexp_doc` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_ciuexp_doc` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  UNIQUE KEY `usu_codigo` (`usu_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mod_acceso`
--
ALTER TABLE `mod_acceso`
  ADD CONSTRAINT `mod_acceso_ibfk_2` FOREIGN KEY (`per_codigo`) REFERENCES `mod_perfiles` (`per_codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mod_acceso_ibfk_1` FOREIGN KEY (`usu_codigo`) REFERENCES `usuarios_datosbasicos` (`usu_codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `mod_ciudades`
--
ALTER TABLE `mod_ciudades`
  ADD CONSTRAINT `mod_ciudades_ibfk_1` FOREIGN KEY (`dep_codigo`) REFERENCES `mod_departamentos` (`dep_codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `mod_departamentos`
--
ALTER TABLE `mod_departamentos`
  ADD CONSTRAINT `mod_departamentos_ibfk_1` FOREIGN KEY (`pais_codigo`) REFERENCES `mod_paises` (`pais_codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `mod_empleados`
--
ALTER TABLE `mod_empleados`
  ADD CONSTRAINT `mod_empleados_ibfk_2` FOREIGN KEY (`usu_codigo`) REFERENCES `mod_usuarios` (`usu_codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mod_empleados_ibfk_1` FOREIGN KEY (`emp_nit`) REFERENCES `mod_empresas` (`emp_nit`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `mod_evento`
--
ALTER TABLE `mod_evento`
  ADD CONSTRAINT `mod_evento_ibfk_1` FOREIGN KEY (`teven_codigo`) REFERENCES `mod_tipoevento` (`teven_codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `mod_participante`
--
ALTER TABLE `mod_participante`
  ADD CONSTRAINT `mod_participante_ibfk_2` FOREIGN KEY (`usu_codigo`) REFERENCES `mod_usuarios` (`usu_codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mod_participante_ibfk_1` FOREIGN KEY (`tpar_codigo`) REFERENCES `mod_tipoparticipante` (`tpar_codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `mod_visitantes`
--
ALTER TABLE `mod_visitantes`
  ADD CONSTRAINT `mod_visitantes_ibfk_2` FOREIGN KEY (`even_codigo`) REFERENCES `mod_evento` (`even_codigo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mod_visitantes_ibfk_1` FOREIGN KEY (`usu_codigo`) REFERENCES `mod_usuarios` (`usu_codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_datosbasicos`
--
ALTER TABLE `usuarios_datosbasicos`
  ADD CONSTRAINT `usuarios_datosbasicos_ibfk_1` FOREIGN KEY (`usu_codigo`) REFERENCES `mod_usuarios` (`usu_codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_detalledatos`
--
ALTER TABLE `usuarios_detalledatos`
  ADD CONSTRAINT `usuarios_detalledatos_ibfk_1` FOREIGN KEY (`usu_codigo`) REFERENCES `mod_usuarios` (`usu_codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
