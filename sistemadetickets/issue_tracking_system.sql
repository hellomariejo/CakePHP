-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2015 a las 21:25:40
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `issue_tracking_system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departaments`
--

CREATE TABLE IF NOT EXISTS `departaments` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `departaments`
--

INSERT INTO `departaments` (`id`, `description`) VALUES
(1, 'Escuela de Ingeniería en Sistemas'),
(2, 'Escuela de Diseño Grafico'),
(3, 'Escuela de Ingeniería Electronica'),
(4, 'Departamento de Bienestar Politécnico'),
(5, 'Dirección de Tecnologías de la Información y Comunicación'),
(6, 'Escuela de Medicina'),
(7, 'Escuela de Gastronomia'),
(8, 'Centro de Idiomas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) NOT NULL,
  `validity` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `description`, `validity`) VALUES
(1, 'Soporte y Mantenimiento DTIC', 'Válido'),
(2, 'Desarrollo DTIC', 'Válido'),
(3, 'Infraestructura y Redes DTIC', 'Válido'),
(4, 'Administrador', 'Válido'),
(5, 'Soporte Facultad ', 'Válido'),
(6, 'Dirección DTIC', 'Válido'),
(7, 'Dependencia ESPOCH', 'Válido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `priorities`
--

CREATE TABLE IF NOT EXISTS `priorities` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `description` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `priorities`
--

INSERT INTO `priorities` (`id`, `description`) VALUES
(1, 'Baja'),
(2, 'Normal'),
(3, 'Alta'),
(4, 'Urgente'),
(5, 'Crítica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `description` varchar(25) NOT NULL,
  `validity` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `description`, `validity`) VALUES
(1, 'Administrador', 'Válido'),
(2, 'Director', 'Válido'),
(3, 'Jefe de Area', 'Válido'),
(4, 'Técnico', 'Válido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `description` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `states`
--

INSERT INTO `states` (`id`, `description`) VALUES
(1, 'Nuevo'),
(2, 'Abierto'),
(3, 'Pendiente'),
(4, 'Cerrado con exito'),
(5, 'Cerrado sin éxito'),
(6, 'Escalado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_type_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `departament_id` int(5) NOT NULL,
  `group_id` int(5) NOT NULL,
  `priority_id` varchar(25) NOT NULL,
  `user_id` int(5) DEFAULT NULL,
  `tech_id` int(5) DEFAULT NULL,
  `subject` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `symptom` text,
  `solution` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`id`, `ticket_type_id`, `state_id`, `departament_id`, `group_id`, `priority_id`, `user_id`, `tech_id`, `subject`, `description`, `created`, `modified`, `symptom`, `solution`) VALUES
(16, 1, 2, 1, 3, '2', 6, NULL, 'Sin internet', 'No hay internet en la direccion de esta escuela', '2015-05-20 12:29:30', '2015-05-20 12:30:46', NULL, NULL),
(17, 1, 1, 5, 2, '2', 5, NULL, 'Credenciales', 'Sin credenciales', '2015-05-21 11:47:47', '2015-05-21 11:47:47', NULL, NULL),
(18, 1, 1, 5, 6, '2', 7, 8, 'Prueba Asunto', 'Prueba Descripcion', '2015-05-21 12:58:28', '2015-05-21 13:24:40', NULL, NULL),
(19, 1, 1, 2, 5, '2', 9, NULL, 'Daño de Impresora', 'No funciona', '2015-05-21 13:28:48', '2015-05-21 13:28:48', NULL, NULL),
(20, 1, 2, 1, 3, '3', 4, 10, 'asdfgh', 'dfghjk', '2015-06-10 19:03:14', '2015-06-10 19:06:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets_users`
--

CREATE TABLE IF NOT EXISTS `tickets_users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(5) NOT NULL,
  `answer` text,
  `created` datetime NOT NULL,
  `sign` varchar(56) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `tickets_users`
--

INSERT INTO `tickets_users` (`id`, `ticket_id`, `answer`, `created`, `sign`) VALUES
(18, 16, 'A continuacion se le transferira al area de Redes DTIC', '2015-05-20 12:30:24', 'Daniel Haro'),
(19, 20, 'vbnm', '2015-06-10 19:03:27', 'Maria Jose Samaniego Larrea'),
(20, 20, 'dfghjk', '2015-06-10 19:05:27', 'Luis  Pérez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket_types`
--

CREATE TABLE IF NOT EXISTS `ticket_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ticket_types`
--

INSERT INTO `ticket_types` (`id`, `description`) VALUES
(1, 'Pregunta'),
(2, 'Incidente'),
(3, 'Problema'),
(4, 'Requerimiento de Servicio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `validity` varchar(25) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `last_session` timestamp NOT NULL,
  `role_id` int(5) NOT NULL,
  `group_id` int(5) NOT NULL,
  `departament_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `phone`, `username`, `password`, `validity`, `created`, `modified`, `last_session`, `role_id`, `group_id`, `departament_id`) VALUES
(4, 'Maria Jose', 'Samaniego Larrea', 'majos89@yahoo.com', 214748367, 'msamaniego', 'abcfefd9c4fa555f97c54c84969d51534cd7eeb5', 'Válido', '2014-10-03 17:23:39', '2015-05-12 13:13:02', '2015-03-18 00:47:28', 1, 4, NULL),
(5, 'Daniel', 'Haro', 'dharo@dtic.com', 1234567890, 'dharo', 'abcfefd9c4fa555f97c54c84969d51534cd7eeb5', 'Válido', '2015-05-20 12:14:02', '2015-05-20 12:14:02', '0000-00-00 00:00:00', 2, 6, NULL),
(6, 'Patricia', 'Larrea', 'plarsa@gmail.com', 98753955, 'plarrea', 'abcfefd9c4fa555f97c54c84969d51534cd7eeb5', 'Válido', '2015-05-20 12:14:54', '2015-05-20 12:14:54', '0000-00-00 00:00:00', 2, 7, NULL),
(7, 'Luis ', 'Pérez', 'lperez@dtic.com', 98753955, 'lperez', 'abcfefd9c4fa555f97c54c84969d51534cd7eeb5', 'Válido', '2015-05-20 12:15:26', '2015-06-10 19:05:00', '0000-00-00 00:00:00', 3, 3, NULL),
(8, 'Fernando', 'Velasco', 'fvelasco@dtic.com', 98753955, 'fvelasco', 'abcfefd9c4fa555f97c54c84969d51534cd7eeb5', 'Válido', '2015-05-20 12:16:04', '2015-05-20 12:16:04', '0000-00-00 00:00:00', 4, 1, NULL),
(9, 'Maria', 'Garcia', 'mgarcia@gmail.com', 98753955, 'mgarcia', 'abcfefd9c4fa555f97c54c84969d51534cd7eeb5', 'Válido', '2015-05-20 12:16:51', '2015-05-20 12:16:51', '0000-00-00 00:00:00', 4, 5, NULL),
(10, 'Jorge', 'Carpio', 'jcarpio@gmail.com', 987083956, 'jcarpio', 'abcfefd9c4fa555f97c54c84969d51534cd7eeb5', 'Válido', '2015-06-10 18:15:10', '2015-06-10 18:15:10', '0000-00-00 00:00:00', 4, 3, NULL),
(11, 'Pedro ', 'Larrea', 'pdlarrea@gmail.com', 1234567890, 'pdlarrea', 'abcfefd9c4fa555f97c54c84969d51534cd7eeb5', 'Válido', '2015-06-10 18:23:33', '2015-06-10 18:25:14', '0000-00-00 00:00:00', 4, 3, NULL),
(12, 'a', 'b', 'admin@dev.com', 234234234, 'abc', 'abcfefd9c4fa555f97c54c84969d51534cd7eeb5', 'Válido', '2015-06-10 18:36:35', '2015-06-10 18:36:35', '0000-00-00 00:00:00', 4, 1, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
