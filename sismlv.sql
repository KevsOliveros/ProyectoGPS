-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 03:28 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sismlv`
--

-- --------------------------------------------------------

--
-- Table structure for table `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id_admin` int(11) NOT NULL,
  `usuario_admin` varchar(200) DEFAULT NULL,
  `pass_admin` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `almacen`
--

CREATE TABLE IF NOT EXISTS `almacen` (
  `nombre_almacen` varchar(200) NOT NULL DEFAULT '',
  `direccion_almacen` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `almacen`
--

INSERT INTO `almacen` (`nombre_almacen`, `direccion_almacen`, `nom_usuario`) VALUES
('de otro', 'men', 'prueba'),
('does it', 'finally work?', 'prueba'),
('kjdflskjd', 'lskdj', 'admin'),
('repeat', 'anotha one', 'prueba'),
('test15', 'modificado', 'admin'),
('test16', 'changed to sixteen', 'admin'),
('todavia', ' otro men', 'test'),
('uno', 'dos', 'tres'),
('¡í''µ–n„Ô:J¤å©”É', 'dos', 'tres');

-- --------------------------------------------------------

--
-- Table structure for table `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
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
-- Table structure for table `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `id_movimiento` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `nom_usuario` varchar(200) DEFAULT NULL,
  `dispositivo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
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
-- Table structure for table `concepto`
--

CREATE TABLE IF NOT EXISTS `concepto` (
  `codigo_articulo` int(11) NOT NULL,
  `pedido_pedido` int(11) NOT NULL,
  `cantidad_concepto` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `concepto2`
--

CREATE TABLE IF NOT EXISTS `concepto2` (
  `codigo_articulo` int(11) NOT NULL,
  `num_venta` int(11) NOT NULL,
  `cantidad` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `nombre_almacen` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `nom_usuario` varchar(200) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Table structure for table `deptoarea`
--

CREATE TABLE IF NOT EXISTS `deptoarea` (
  `nombre_depto` varchar(30) CHARACTER SET latin1 NOT NULL,
  `nombre_area` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `nom_usuario` varchar(200) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
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
-- Table structure for table `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `nombre_proveedor` varchar(200) NOT NULL DEFAULT '',
  `contacto_proveedor` varchar(200) DEFAULT NULL,
  `nombre_contacto_proveedor` varchar(200) DEFAULT NULL,
  `telefono_p_proveedor` varchar(200) DEFAULT NULL,
  `telefono_a_proveedor` varchar(200) DEFAULT NULL,
  `fax_proveedor` varchar(200) DEFAULT NULL,
  `email_proveedor` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) DEFAULT NULL,
  `name_proveedor` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proveedor`
--

INSERT INTO `proveedor` (`nombre_proveedor`, `contacto_proveedor`, `nombre_contacto_proveedor`, `telefono_p_proveedor`, `telefono_a_proveedor`, `fax_proveedor`, `email_proveedor`, `nom_usuario`, `name_proveedor`) VALUES
('a', 'bunch', 'of', '687', '87687', '68768', 'ces@lkj.com', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `relacion`
--

CREATE TABLE IF NOT EXISTS `relacion` (
  `nombre_almacen` varchar(200) NOT NULL,
  `codigo_articulo` int(11) NOT NULL,
  `cantidad_relacion` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nom_usuario` varchar(200) NOT NULL DEFAULT '',
  `pass_usuario` varchar(200) DEFAULT NULL,
  `nombre_del_usuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`nom_usuario`, `pass_usuario`, `nombre_del_usuario`) VALUES
('3z7_B··è¥Añ"', '·''êêUÍ³ê0»ÿ¨', 'DŽÁF¹Ýó¶U8É0'),
('admin', 'admin', NULL),
('men', 'encri', 'ptado'),
('prueba', 'prueba', NULL),
('test', 'test', NULL),
(']Ž!,t–<¹U[ê°q', '[¥a¸¯÷\\–9Ý¬êq', 'Ï&q\\ý|4@©ªx…i_');

-- --------------------------------------------------------

--
-- Table structure for table `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
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
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `usuario_admin` (`usuario_admin`);

--
-- Indexes for table `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`nombre_almacen`);

--
-- Indexes for table `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`codigo_articulo`);

--
-- Indexes for table `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_movimiento`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `concepto`
--
ALTER TABLE `concepto`
  ADD PRIMARY KEY (`codigo_articulo`,`pedido_pedido`),
  ADD KEY `id_pedido` (`pedido_pedido`);

--
-- Indexes for table `concepto2`
--
ALTER TABLE `concepto2`
  ADD PRIMARY KEY (`codigo_articulo`,`num_venta`),
  ADD KEY `id_venta` (`num_venta`);

--
-- Indexes for table `deptoarea`
--
ALTER TABLE `deptoarea`
  ADD PRIMARY KEY (`nombre_depto`,`nombre_area`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`num_pedido`);

--
-- Indexes for table `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`nombre_proveedor`);

--
-- Indexes for table `relacion`
--
ALTER TABLE `relacion`
  ADD PRIMARY KEY (`nombre_almacen`,`codigo_articulo`),
  ADD KEY `id_articulo` (`codigo_articulo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nom_usuario`),
  ADD UNIQUE KEY `nom_usuario` (`nom_usuario`);

--
-- Indexes for table `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`num_venta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `articulo`
--
ALTER TABLE `articulo`
  MODIFY `codigo_articulo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `num_pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `venta`
--
ALTER TABLE `venta`
  MODIFY `num_venta` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `concepto`
--
ALTER TABLE `concepto`
  ADD CONSTRAINT `concepto_ibfk_1` FOREIGN KEY (`codigo_articulo`) REFERENCES `articulo` (`codigo_articulo`),
  ADD CONSTRAINT `concepto_ibfk_2` FOREIGN KEY (`pedido_pedido`) REFERENCES `pedido` (`num_pedido`);

--
-- Constraints for table `concepto2`
--
ALTER TABLE `concepto2`
  ADD CONSTRAINT `concepto2_ibfk_1` FOREIGN KEY (`codigo_articulo`) REFERENCES `articulo` (`codigo_articulo`),
  ADD CONSTRAINT `concepto2_ibfk_2` FOREIGN KEY (`num_venta`) REFERENCES `venta` (`num_venta`);

--
-- Constraints for table `relacion`
--
ALTER TABLE `relacion`
  ADD CONSTRAINT `relacion_ibfk_1` FOREIGN KEY (`nombre_almacen`) REFERENCES `almacen` (`nombre_almacen`),
  ADD CONSTRAINT `relacion_ibfk_2` FOREIGN KEY (`codigo_articulo`) REFERENCES `articulo` (`codigo_articulo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
