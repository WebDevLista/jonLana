-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2016 a las 07:26:26
-- Versión del servidor: 5.5.43-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `c9`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivadas`
--

CREATE TABLE IF NOT EXISTS `archivadas` (
  `num` int(11) NOT NULL,
  `numLista` varchar(20) NOT NULL,
  KEY `num` (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE IF NOT EXISTS `listas` (
  `numLista` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`numLista`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE IF NOT EXISTS `tareas` (
  `id_tarea` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `id_lista` int(11) NOT NULL,
  PRIMARY KEY (`id_tarea`),
  KEY `id_lista` (`id_lista`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=412 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioLista`
--

CREATE TABLE IF NOT EXISTS `usuarioLista` (
  `num` int(11) NOT NULL,
  `numLista` int(11) NOT NULL,
  PRIMARY KEY (`num`,`numLista`),
  KEY `numLista` (`numLista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `num` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `listas`
--
ALTER TABLE `listas`
  ADD CONSTRAINT `listas_ibfk_1` FOREIGN KEY (`numLista`) REFERENCES `usuarioLista` (`numLista`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `tareas_ibfk_1` FOREIGN KEY (`id_lista`) REFERENCES `listas` (`numLista`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarioLista`
--
ALTER TABLE `usuarioLista`
  ADD CONSTRAINT `usuarioLista_ibfk_1` FOREIGN KEY (`num`) REFERENCES `usuarios` (`num`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`num`) REFERENCES `archivadas` (`num`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
