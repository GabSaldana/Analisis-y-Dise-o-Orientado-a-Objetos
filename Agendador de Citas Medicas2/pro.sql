-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2015 a las 04:00:12
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE IF NOT EXISTS `horario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dia` varchar(11) NOT NULL,
  `hora_inicio` varchar(11) NOT NULL,
  `hora_fin` varchar(11) NOT NULL,
  `agendar` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `dia`, `hora_inicio`, `hora_fin`, `agendar`) VALUES
(1, 'Lunes', '8:00', '10:00', 'agendar'),
(2, 'Martes', '9:00', '11:00', 'agendar'),
(3, 'Viernes', '14:00', '15:30', 'agendar'),
(4, 'Sabado', '14:00', '16:00', 'agendar'),
(5, 'Miercoles', '5:00am', '9:00pm', 'agendar'),
(6, 'Jueves', '7:00am', '7:00pm', 'agendar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE IF NOT EXISTS `medico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `desc` varchar(30) NOT NULL,
  `ver_horario` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id`, `nombre`, `apellido`, `telefono`, `direccion`, `desc`, `ver_horario`) VALUES
(1, 'Melina', 'Cuadra_Camacho', '5545168482', 'Granate32,Col.Estrella', 'ale_cmae@hotmail.com ', 'verhorario'),
(2, 'Alejandra ', 'Dorantes', '5525283516', 'granate6.Col.Industrial', 'melinopski@gmail.com', 'verhorario'),
(3, 'Mario Alberto', 'Camacho', '5535565787', 'Av.Victoria345', 'mario.cuadra@hotmail.com', 'verhorario'),
(4, 'Jennifer', 'Loyola', '5515102420', 'Matamoros5.Centro', 'jloyid95@gmail.com', 'verhorario'),
(5, 'Gabriela', 'Saldaña_Aguilar', '5517115322', 'ExHacienda_34', 'gab.saldana95@gmail.com', 'verhorario'),
(6, 'Ricardo', 'Orozco_Soto', '5543908765', 'Eduardo Molina', 'digital.osx@gmail.com ', 'verhorario'),
(7, 'Jair Said', 'Hernandez_Reyes', '5543884738', 'Ferreria', 'jairsaidds@gmail.com ', 'verhorario'),
(8, 'Arnulfo', 'Roa', '5543884095', 'Tlalnepantla edo.Mex', 'asaldanaroa@gmail.com ', 'verhorario'),
(9, 'Diana', 'Aguilar', '5543884032', 'Prensa Nacional', 'ela.ri.bag@outlook.com ', 'verhorario');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
