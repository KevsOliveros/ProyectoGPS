-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2017 a las 16:28:43
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sismlv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `nombre_almacen` varchar(30) NOT NULL,
  `direccion_almacen` varchar(50) DEFAULT NULL,
  `nom_usuario` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`nombre_almacen`, `direccion_almacen`, `nom_usuario`) VALUES
('de otro', 'men', 'prueba'),
('does it', 'finally work?', 'prueba'),
('kjdflskjd', 'lskdj', 'admin'),
('repeat', 'anotha one', 'prueba'),
('test15', 'modificado', 'admin'),
('test16', 'changed to sixteen', 'admin'),
('todavia', ' otro men', 'test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `nombre_depto` varchar(30) DEFAULT NULL,
  `nombre_area` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `nombre_depto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `nombre_proveedor` varchar(30) NOT NULL,
  `contacto_proveedor` varchar(40) DEFAULT NULL,
  `nombrecontacto_proveedor` varchar(20) DEFAULT NULL,
  `direccion_proveedor` varchar(50) DEFAULT NULL,
  `telefonop_proveedor` varchar(10) DEFAULT NULL,
  `telefonoa_proveedor` varchar(10) DEFAULT NULL,
  `fax_proveedor` varchar(15) DEFAULT NULL,
  `email_proveedor` varchar(25) DEFAULT NULL,
  `nom_usuario` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`nombre_proveedor`, `contacto_proveedor`, `nombrecontacto_proveedor`, `direccion_proveedor`, `telefonop_proveedor`, `telefonoa_proveedor`, `fax_proveedor`, `email_proveedor`, `nom_usuario`) VALUES
('Proveedor 1', 'Juan Carlo Perez Lopez', 'Juan', 'Calle Constituyentes col. Independencia', '3243243554', '5435345345', '32424324234', 'proveedor1@gmail.com', 'test'),
('Proveedor 2', 'Ana Sánchez', 'Ana', 'Calle 1234 col. Numeros', '234324342', '3534534543', '535345345', 'proveedor2@gmail.com', 'test'),
('Proveedor 3', 'Luis Carlos Torres', 'Luis', 'Calle blabla', '432423234', '432423432', '4324232', 'correo@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nom_usuario` varchar(15) NOT NULL,
  `pass_usuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nom_usuario`, `pass_usuario`) VALUES
(1, 'test', 'test'),
(2, 'prueba', 'prueba'),
(3, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`nombre_almacen`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD KEY `nombre_depto` (`nombre_depto`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`nombre_depto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`nombre_proveedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`nombre_depto`) REFERENCES `departamento` (`nombre_depto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
