-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2017 a las 17:07:47
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

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
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `nom_usuario` varchar(200) NOT NULL DEFAULT '',
  `pass_usuario` varchar(200) DEFAULT NULL,
  `nombre_del_usuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`nom_usuario`, `pass_usuario`, `nombre_del_usuario`) VALUES
('Q¢!ð¸â–g;£Æ÷N', 'Q¢!ð¸â–g;£Æ÷N', 'XÔkšqY˜ÿ‹½ gY–');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_admin` int(11) NOT NULL,
  `usuario_admin` varchar(200) DEFAULT NULL,
  `pass_admin` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `nombre_almacen` varchar(200) NOT NULL DEFAULT '',
  `direccion_almacen` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`nombre_almacen`, `direccion_almacen`, `nom_usuario`) VALUES
('AlmacÃ©n principal', 'Se almacena el equipo principal', 'IŒÊÁâŽ.…&ô‰Å'),
('Almacen Laboratorio PB', 'Sin direccion', 'IŒÊÁâŽ.…&ô‰Å'),
('Almacen Laboratorio Segundo Piso', 'Segundo piso', 'IŒÊÁâŽ.…&ô‰Å'),
('Almacen Quirofano', 'Tercer Piso', 'IŒÊÁâŽ.…&ô‰Å'),
('Almacen Urgencias', 'Primer piso', 'IŒÊÁâŽ.…&ô‰Å'),
('Rayos X', 'Bodega Planta baja', 'IŒÊÁâŽ.…&ô‰Å');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `departamento_articulo` varchar(200) DEFAULT NULL,
  `area_articulo` varchar(200) DEFAULT NULL,
  `descripcion_articulo` varchar(200) DEFAULT NULL,
  `codigo_articulo` int(11) NOT NULL,
  `fecha_instalacion_articulo` varchar(200) DEFAULT NULL,
  `tipo_mantenimiento_articulo` varchar(200) DEFAULT NULL,
  `fecha_mantenimiento_articulo` varchar(200) DEFAULT NULL,
  `estatus_articulo` varchar(200) DEFAULT NULL,
  `precio_costo_articulo` varchar(200) DEFAULT NULL,
  `precio_venta_articulo` varchar(200) DEFAULT NULL,
  `impuesto_articulo` varchar(200) DEFAULT NULL,
  `unidad_medida_articulo` varchar(200) DEFAULT NULL,
  `vida_util_articulo` varchar(200) DEFAULT NULL,
  `notas_articulo` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_movimiento` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `nom_usuario` varchar(200) DEFAULT NULL,
  `dispositivo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(200) DEFAULT NULL,
  `p_contacto_cliente` varchar(200) DEFAULT NULL,
  `n_contacto_cliente` varchar(200) DEFAULT NULL,
  `dir_facturacion_cliente` varchar(200) DEFAULT NULL,
  `ciudad_cliente` varchar(200) DEFAULT NULL,
  `estado_cliente` varchar(200) DEFAULT NULL,
  `codigo_postal_cliente` varchar(200) DEFAULT NULL,
  `pais_cliente` varchar(200) DEFAULT NULL,
  `tel_personal_cliente` varchar(200) DEFAULT NULL,
  `tel_alternativo_cliente` varchar(200) DEFAULT NULL,
  `fax_cliente` varchar(200) DEFAULT NULL,
  `email_cliente` varchar(200) DEFAULT NULL,
  `direccion_otros` varchar(200) DEFAULT NULL,
  `ciudad_otros` varchar(200) DEFAULT NULL,
  `estado_otros` varchar(200) DEFAULT NULL,
  `cp_otros` varchar(200) DEFAULT NULL,
  `pais_otros` varchar(200) DEFAULT NULL,
  `vendedor_otros` varchar(200) DEFAULT NULL,
  `notas_otros` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepto`
--

CREATE TABLE `concepto` (
  `codigo_articulo` int(11) NOT NULL,
  `pedido_pedido` int(11) NOT NULL,
  `cantidad_concepto` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepto2`
--

CREATE TABLE `concepto2` (
  `codigo_articulo` int(11) NOT NULL,
  `num_venta` int(11) NOT NULL,
  `cantidad` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `nombre_almacen` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `nom_usuario` varchar(200) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deptoarea`
--

CREATE TABLE `deptoarea` (
  `nombre_depto` varchar(30) CHARACTER SET latin1 NOT NULL,
  `nombre_area` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `nom_usuario` varchar(200) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `deptoarea`
--

INSERT INTO `deptoarea` (`nombre_depto`, `nombre_area`, `nom_usuario`) VALUES
('Š|içõ>jàµâÁšª', 'j\\fõ¡?Uåð ‡öë', 'IŒÊÁâŽ.…&ô‰Å'),
('Š|içõ>jàµâÁšª', 'óDg\\£2>v_Ž£*!.ÕÑ‡IZ¬\\„Ý°Ê+]Æ', 'IŒÊÁâŽ.…&ô‰Å'),
('h)VÓAO¢#¯®z˜Š»°', 'h)VÓAO¢#¯®z˜Š»°', 'IŒÊÁâŽ.…&ô‰Å'),
('„Oþò/ìí;\\ÿ9­Ä', ';v*iÖöž²—/E©*R_', 'IŒÊÁâŽ.…&ô‰Å'),
('„Oþò/ìí;\\ÿ9­Ä', 'êrÐÜŠk©—ð:;(Z', 'IŒÊÁâŽ.…&ô‰Å'),
('„Oþò/ìí;\\ÿ9­Ä', 'íC“a4zYöi8½ŽêŒ^', 'IŒÊÁâŽ.…&ô‰Å'),
('„Oþò/ìí;\\ÿ9­Ä', '_÷ÆŸ``c%)PÑYô', 'IŒÊÁâŽ.…&ô‰Å'),
('‘”nHÞ¨&HsúaéÅY3ËT§ñæ(L1ú—', '#ÅN3WKo¬òUØ{¦3', 'IŒÊÁâŽ.…&ô‰Å'),
('³æ«=ÓÚEÛC~´0xªðë', '4ð‰ÙMJ1ŸöÅw*\"-ÒY', 'IŒÊÁâŽ.…&ô‰Å'),
('³æ«=ÓÚEÛC~´0xªðë', '³æ«=ÓÚEÛC~´0xªðë', 'IŒÊÁâŽ.…&ô‰Å');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `fecha_emision_pedido` varchar(200) DEFAULT NULL,
  `fecha_recibo_pedido` varchar(200) DEFAULT NULL,
  `num_pedido` int(11) NOT NULL,
  `pedido_pedido` varchar(200) DEFAULT NULL,
  `importe_pedido` varchar(200) DEFAULT NULL,
  `estado_pedido` varchar(200) DEFAULT NULL,
  `facturar_a_pedido` varchar(200) DEFAULT NULL,
  `enviar_a_pedido` varchar(200) DEFAULT NULL,
  `reg_sec_pedido` varchar(200) DEFAULT NULL,
  `medio_envio` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `nombre_proveedor` varchar(200) NOT NULL DEFAULT '',
  `contacto_proveedor` varchar(200) DEFAULT NULL,
  `nombre_contacto_proveedor` varchar(200) DEFAULT NULL,
  `telefono_p_proveedor` varchar(200) DEFAULT NULL,
  `telefono_a_proveedor` varchar(200) DEFAULT NULL,
  `fax_proveedor` varchar(200) DEFAULT NULL,
  `email_proveedor` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`nombre_proveedor`, `contacto_proveedor`, `nombre_contacto_proveedor`, `telefono_p_proveedor`, `telefono_a_proveedor`, `fax_proveedor`, `email_proveedor`, `nom_usuario`) VALUES
('Fluke', 'Fluke', 'Fluke', '1234567', '65422121', '43242342432', 'fluke@gmail.com', 'prueba'),
('Helmer', 'Helmer', 'Helmer', '2342311234', '3442124343', '34423423', 'service@helmer.com', 'prueba'),
('Kitlab', 'Kitlab', 'Kitlab', '55554323462', '55576573278', '23663002183', 'kitlab@gmail.com', 'prueba'),
('Phillips', 'Phillips', 'Phillips', '1235344543', '4235323422', '23434534223', 'phillips_medicine@live.com.mx', 'prueba'),
('Scorpion Scientific', 'Scorpion Scientific', 'Scorpion Scientific', '3555324642', '423234345', '010028377', 'ss_costumers@scorpio.com', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion`
--

CREATE TABLE `relacion` (
  `nombre_almacen` varchar(200) NOT NULL,
  `codigo_articulo` int(11) NOT NULL,
  `cantidad_relacion` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nom_usuario` varchar(200) NOT NULL DEFAULT '',
  `pass_usuario` varchar(200) DEFAULT NULL,
  `nombre_del_usuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nom_usuario`, `pass_usuario`, `nombre_del_usuario`) VALUES
('IŒÊÁâŽ.…&ô‰Å', 'IŒÊÁâŽ.…&ô‰Å', '(xeû~fyô_yDcÓk²o'),
('Ù!Äçpq?´*orˆ—CÛcîf°ÍÿŸi‘v€', '‰Š»èšnÁÝ!i“ä]hCÛcîf°ÍÿŸi‘v€', 'u¶è8qO:ïsõÛ<É­ CÛcîf°ÍÿŸi‘v€'),
('©12hï0¡Øÿ°aÎ*Yw', '©12hï0¡Øÿ°aÎ*Yw', 'iò3\'õ2tq-Ÿcl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `articulo_venta` varchar(200) DEFAULT NULL,
  `num_venta` int(11) NOT NULL,
  `descripcion_venta` varchar(200) DEFAULT NULL,
  `precio_venta` varchar(200) DEFAULT NULL,
  `cliente_venta` varchar(200) DEFAULT NULL,
  `fecha_venta` varchar(200) DEFAULT NULL,
  `estado_venta` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nom_usuario`),
  ADD UNIQUE KEY `nom_usuario` (`nom_usuario`);

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `usuario_admin` (`usuario_admin`);

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`nombre_almacen`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`codigo_articulo`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_movimiento`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `concepto`
--
ALTER TABLE `concepto`
  ADD PRIMARY KEY (`codigo_articulo`,`pedido_pedido`),
  ADD KEY `id_pedido` (`pedido_pedido`);

--
-- Indices de la tabla `concepto2`
--
ALTER TABLE `concepto2`
  ADD PRIMARY KEY (`codigo_articulo`,`num_venta`),
  ADD KEY `id_venta` (`num_venta`);

--
-- Indices de la tabla `deptoarea`
--
ALTER TABLE `deptoarea`
  ADD PRIMARY KEY (`nombre_depto`,`nombre_area`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`num_pedido`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`nombre_proveedor`);

--
-- Indices de la tabla `relacion`
--
ALTER TABLE `relacion`
  ADD PRIMARY KEY (`nombre_almacen`,`codigo_articulo`),
  ADD KEY `id_articulo` (`codigo_articulo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nom_usuario`),
  ADD UNIQUE KEY `nom_usuario` (`nom_usuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`num_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `codigo_articulo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `num_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `num_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `concepto`
--
ALTER TABLE `concepto`
  ADD CONSTRAINT `concepto_ibfk_1` FOREIGN KEY (`codigo_articulo`) REFERENCES `articulo` (`codigo_articulo`),
  ADD CONSTRAINT `concepto_ibfk_2` FOREIGN KEY (`pedido_pedido`) REFERENCES `pedido` (`num_pedido`);

--
-- Filtros para la tabla `concepto2`
--
ALTER TABLE `concepto2`
  ADD CONSTRAINT `concepto2_ibfk_1` FOREIGN KEY (`codigo_articulo`) REFERENCES `articulo` (`codigo_articulo`),
  ADD CONSTRAINT `concepto2_ibfk_2` FOREIGN KEY (`num_venta`) REFERENCES `venta` (`num_venta`);

--
-- Filtros para la tabla `relacion`
--
ALTER TABLE `relacion`
  ADD CONSTRAINT `relacion_ibfk_1` FOREIGN KEY (`nombre_almacen`) REFERENCES `almacen` (`nombre_almacen`),
  ADD CONSTRAINT `relacion_ibfk_2` FOREIGN KEY (`codigo_articulo`) REFERENCES `articulo` (`codigo_articulo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
