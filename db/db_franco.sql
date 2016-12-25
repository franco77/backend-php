-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-12-2016 a las 19:01:06
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_franco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_eventos`
--

CREATE TABLE `tb_eventos` (
  `id_evento` int(11) NOT NULL,
  `titulo_evento` text COLLATE utf8_spanish_ci NOT NULL,
  `nota_evento` text COLLATE utf8_spanish_ci,
  `desde_evento` datetime NOT NULL,
  `hasta_evento` datetime DEFAULT NULL,
  `autor_evento` int(11) DEFAULT NULL,
  `prioridad_evento` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_evento` varchar(50) COLLATE utf8_spanish_ci DEFAULT 'Activo',
  `fecha_eveto` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_eventos`
--

INSERT INTO `tb_eventos` (`id_evento`, `titulo_evento`, `nota_evento`, `desde_evento`, `hasta_evento`, `autor_evento`, `prioridad_evento`, `estado_evento`, `fecha_eveto`) VALUES
(10, 'Palepes', '', '2016-12-22 11:05:04', '2016-12-23 11:05:04', NULL, '#6B8E23', 'Activo', '2016-12-23 03:23:18'),
(12, 'Mantenimiento Lapto', '', '2016-12-28 11:15:23', '2016-12-29 11:15:23', NULL, '#FFA500', 'Activo', '2016-12-23 03:39:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_nivel`
--

CREATE TABLE `tb_nivel` (
  `id_nivel` int(11) NOT NULL,
  `usuario_nivel` varchar(20) NOT NULL,
  `descripcion_nivel` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_nivel`
--

INSERT INTO `tb_nivel` (`id_nivel`, `usuario_nivel`, `descripcion_nivel`) VALUES
(1, 'Administrador', 'todos los niveles y privilegios para este usuario'),
(2, 'Usuario', 'Privilegios limitados para este usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(350) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `apellido` varchar(70) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `perfil` text NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `usuario`, `email`, `password`, `nombre`, `apellido`, `telefono`, `perfil`, `id_tipo`, `estado`) VALUES
(1, 'Admin', 'juanfranco561@gmail.com', 'e76babd84b222e0b6bb64c1022f5fae75bc7fc3d', 'Juan D.', 'Franco', '04160771499', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, 'Activo'),
(5, 'Elparce', 'franko-15@hotmail.com', 'c4ebcb616bd69c2424e66a2793e6450a4134953f', 'Donaldo', 'Franco', '04160771488', '', 2, 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_eventos`
--
ALTER TABLE `tb_eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `tb_nivel`
--
ALTER TABLE `tb_nivel`
  ADD PRIMARY KEY (`id_nivel`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_eventos`
--
ALTER TABLE `tb_eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tb_nivel`
--
ALTER TABLE `tb_nivel`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
