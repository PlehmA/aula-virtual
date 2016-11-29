-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2016 a las 20:11:39
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `login_usuario` (IN `alias` VARCHAR(80), IN `contra` VARCHAR(32), OUT `existe` INT)  BEGIN SET existe=0; SELECT count(*) into existe FROM usuarios WHERE (username=alias or email=alias) AND MD5(contra)=password; 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `login_usuario2` (IN `alias` VARCHAR(80), IN `contra` VARCHAR(32), OUT `existe` INT)  BEGIN SET existe=0; SELECT count(*) into existe FROM users_comunes WHERE (username=alias or email=alias) AND MD5(contra)=password; END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--
-- Creación: 29-11-2016 a las 17:38:28
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `categorias`:
--

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `descripcion`) VALUES
(1, 'prolongador'),
(2, 'puesta a tierra'),
(3, 'instrumentos de medicion'),
(4, 'productos aislantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--
-- Creación: 26-11-2016 a las 22:01:15
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `clientes`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--
-- Creación: 29-11-2016 a las 17:23:58
--

CREATE TABLE `foro` (
  `ID` int(7) UNSIGNED NOT NULL,
  `titulo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `respuestas` int(11) NOT NULL DEFAULT '0',
  `identificador` int(7) NOT NULL DEFAULT '0',
  `ult_respuesta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `foro`:
--

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`ID`, `titulo`, `mensaje`, `fecha`, `respuestas`, `identificador`, `ult_respuesta`) VALUES
(1, 'Este es mi alias', 'Este es mi alias', '2001-06-15', 2, 0, '2001-06-15'),
(2, 'Bodom Beach Terror', 'Bodom Beach Terror', '2001-06-15', 0, 0, '2001-06-15'),
(4, 'Solo de violines', 'Solo de violines', '2001-06-15', 0, 1, '2001-06-15'),
(5, 'Bart esta bien', 'Bart esta bien', '2001-06-15', 1, 1, '2001-06-15'),
(6, 'bart esta bien', 'bart esta bien pero arrastra multiples rallauras y sintomas de estrepitosas craneales, por dios esa mujer se ha tragado un bebe', '2001-06-15', 0, 5, '2001-06-15'),
(7, 'holas a todos', 'holas a todos\r\n', '2029-11-16', 0, 0, '2029-11-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--
-- Creación: 28-11-2016 a las 20:44:46
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `productos`:
--   `id_categoria`
--       `categorias` -> `id_categoria`
--

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `id_categoria`, `descripcion`, `cantidad`, `precio`) VALUES
(1, 3, 'Prolongador 5 Tomas 10A Con Prolongador Termico Sin Cable', 55, '130.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_users`
--
-- Creación: 26-11-2016 a las 19:59:59
--

CREATE TABLE `tipo_users` (
  `id_tipo` int(11) NOT NULL,
  `tipo_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `tipo_users`:
--

--
-- Volcado de datos para la tabla `tipo_users`
--

INSERT INTO `tipo_users` (`id_tipo`, `tipo_usuario`) VALUES
(1, 'Instructor'),
(2, 'Aprendiz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_comunes`
--
-- Creación: 26-11-2016 a las 21:06:08
--

CREATE TABLE `users_comunes` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` char(32) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `users_comunes`:
--

--
-- Volcado de datos para la tabla `users_comunes`
--

INSERT INTO `users_comunes` (`id_usuario`, `username`, `password`, `email`, `fecha_alta`) VALUES
(1, 'maria', '263bce650e68ab4e23f28263760b9fa5', 'maria@gmail.com', '2016-11-26 21:06:08'),
(2, 'ganzero', '73c23a0e7ed87a650f4cb5e9dd233dfd', 'agarramelganzo@gmail.com', '2016-11-26 22:28:37'),
(3, 'micacp', '73c23a0e7ed87a650f4cb5e9dd233dfd', 'micacp@gmail.com', '2016-11-28 23:18:27'),
(4, 'polachonio', '73c23a0e7ed87a650f4cb5e9dd233dfd', 'asdugahsd@hotmail.com', '2016-11-29 18:36:57'),
(5, 'arnaldoloco', '73c23a0e7ed87a650f4cb5e9dd233dfd', 'arnaldo@gmail.com', '2016-11-29 18:38:57'),
(6, 'mariabro', '73c23a0e7ed87a650f4cb5e9dd233dfd', 'lahermanademaria@gmail.com', '2016-11-29 18:39:44'),
(7, 'todoslocos', '73c23a0e7ed87a650f4cb5e9dd233dfd', 'locostodos@gmail.com', '2016-11-29 18:40:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 26-11-2016 a las 21:05:12
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` char(32) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `usuarios`:
--

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `username`, `password`, `email`, `fecha_alta`) VALUES
(1, 'polach', '73c23a0e7ed87a650f4cb5e9dd233dfd', 'polachgg@gmail.com', '2016-11-26 21:05:12'),
(2, 'polaken', '', 'polaken@gmail.com', '2016-11-26 22:26:07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `producto_categoria` (`id_categoria`);

--
-- Indices de la tabla `tipo_users`
--
ALTER TABLE `tipo_users`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `users_comunes`
--
ALTER TABLE `users_comunes`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `ID` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_users`
--
ALTER TABLE `tipo_users`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users_comunes`
--
ALTER TABLE `users_comunes`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `producto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);


--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para categorias
--

--
-- Metadatos para clientes
--

--
-- Metadatos para foro
--

--
-- Volcado de datos para la tabla `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'login', 'foro', '{"sorted_col":"`identificador`  DESC"}', '2016-11-29 18:38:13');

--
-- Metadatos para productos
--

--
-- Metadatos para tipo_users
--

--
-- Metadatos para users_comunes
--

--
-- Metadatos para usuarios
--

--
-- Metadatos para login
--

--
-- Volcado de datos para la tabla `pma__central_columns`
--

INSERT INTO `pma__central_columns` (`db_name`, `col_name`, `col_type`, `col_length`, `col_collation`, `col_isNull`, `col_extra`, `col_default`) VALUES
('login', 'id_usuario', 'int', '11', '', 0, 'auto_increment,', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
