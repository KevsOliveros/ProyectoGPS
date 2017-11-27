-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 05:58 PM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `nom_usuario` varchar(200) NOT NULL DEFAULT '',
  `pass_usuario` varchar(200) DEFAULT NULL,
  `nombre_del_usuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nom_usuario`, `pass_usuario`, `nombre_del_usuario`) VALUES
('Q¢!ð¸â–g;£Æ÷N', 'Q¢!ð¸â–g;£Æ÷N', 'XÔkšqY˜ÿ‹½ gY–');

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
('AlmacÃ©n principal', 'Se almacena el equipo principal', 'IŒÊÁâŽ.…&ô‰Å'),
('Almacen Laboratorio PB', 'Sin direccion', 'IŒÊÁâŽ.…&ô‰Å'),
('Almacen Laboratorio Segundo Piso', 'Segundo piso', 'IŒÊÁâŽ.…&ô‰Å'),
('Almacen Quirofano', 'Tercer Piso', 'IŒÊÁâŽ.…&ô‰Å'),
('Almacen Urgencias', 'Primer piso', 'IŒÊÁâŽ.…&ô‰Å'),
('does it', 'finally work?', 'IŒÊÁâŽ.…&ô‰Å'),
('kjdflskjd', 'lskdj', 'Q¢!ð¸â–g;£Æ÷N'),
('Rayos X', 'Bodega Planta baja', 'IŒÊÁâŽ.…&ô‰Å'),
('test15', 'modificado', 'Q¢!ð¸â–g;£Æ÷N'),
('test16', 'changed to sixteen', 'Q¢!ð¸â–g;£Æ÷N'),
('todavia', ' otro men', '©12hï0¡Øÿ°aÎ*Yw'),
('¡í''µ–n„Ô:J¤å©”É', 'dos', 'ê"Ãûj$ŒÉ‡ì÷É•²â');

--
-- Triggers `almacen`
--
DELIMITER $$
CREATE TRIGGER `del_almacen` BEFORE DELETE ON `almacen`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('delete en almacen ', OLD.nombre_almacen), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ins_almacen` BEFORE INSERT ON `almacen`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('insert en almacen ', NEW.nombre_almacen), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `departamento_articulo` varchar(200) DEFAULT NULL,
  `area_articulo` varchar(200) DEFAULT NULL,
  `descripcion_articulo` varchar(200) DEFAULT NULL,
  `codigo_articulo` varchar(200) NOT NULL,
  `nombre_proveedor` varchar(200) DEFAULT NULL,
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

--
-- Dumping data for table `articulo`
--

INSERT INTO `articulo` (`departamento_articulo`, `area_articulo`, `descripcion_articulo`, `codigo_articulo`, `nombre_proveedor`, `fecha_instalacion_articulo`, `tipo_mantenimiento_articulo`, `fecha_mantenimiento_articulo`, `estatus_articulo`, `precio_costo_articulo`, `precio_venta_articulo`, `impuesto_articulo`, `unidad_medida_articulo`, `vida_util_articulo`, `notas_articulo`, `nom_usuario`) VALUES
('-W¨ÿžÛƒÀèœ¦ÍXð', 'uÚŒdº8rÁù|d®Òø', '4¶nv\rÐðÆ°—_q', 'Þ×ÆDÂŠ¾9õ]õ­', 'äbÅqaÖ7¹•¬…X«$ä', 'ß$¶ÞÿÕ:³ú¯Ò¯_N', '_\ZÁ”½/Àî¸YÞ2­Qq', 'ß$¶ÞÿÕ:³ú¯Ò¯_N', 'ºAQí|cñSj¡“‰ÆøÐ', '1‹@†»glÖêßø#½éX', '1‹@†»glÖêßø#½éX', '1‹@†»glÖêßø#½éX', 'ÄDU²Æå''H›ÊÖ—ðÝÎ', 'ÖÆ=_Æ’1¼Ë?E3 ‘í', '1‹@†»glÖêßø#½éX', 'IŒÊÁâŽ.…&ô‰Å'),
('*==ŒÞ’šT´^ÛÏüzç…', ' ®Ö>0 <ã5[[sF¾*', '<±»®Œl¼MÓõÍGƒì', '<±»®Œl¼MÓõÍGƒì', 'äbÅqaÖ7¹•¬…X«$ä', 'ß$¶ÞÿÕ:³ú¯Ò¯_N', '_\ZÁ”½/Àî¸YÞ2­Qq', 'ß$¶ÞÿÕ:³ú¯Ò¯_N', 'ºAQí|cñSj¡“‰ÆøÐ', 'íðÀ:Ž­Z4`Ó	]ã', 'íðÀ:Ž­Z4`Ó	]ã', 'íðÀ:Ž­Z4`Ó	]ã', 'ÄDU²Æå''H›ÊÖ—ðÝÎ', 'ÖÆ=_Æ’1¼Ë?E3 ‘í', 'A[H™<C°*öÈââ²YðCñíÛvx]Ócä^Öà:', 'IŒÊÁâŽ.…&ô‰Å'),
('\ntÍ°ÀHyYüë )^Ù', '†ý”•Y DFCM–Ë', '9ärWË,^W°T{ç1', 'B‡\n…7‚ž3.…š©O)1', 'äbÅqaÖ7¹•¬…X«$ä', 'ß$¶ÞÿÕ:³ú¯Ò¯_N', '_\ZÁ”½/Àî¸YÞ2­Qq', 'ß$¶ÞÿÕ:³ú¯Ò¯_N', 'ºAQí|cñSj¡“‰ÆøÐ', 'ÖöÙ Âä\0;¥¡w¼µN', '€Œ·ƒÕbó‹Cñ2', '1‹@†»glÖêßø#½éX', 'ÄDU²Æå''H›ÊÖ—ðÝÎ', 'ÖÆ=_Æ’1¼Ë?E3 ‘í', '?…½öe\Zì=ÑÃ:I°C', 'IŒÊÁâŽ.…&ô‰Å'),
('\ntÍ°ÀHyYüë )^Ù', 'nzÆhƒ_*¢®:òª°D', '¼À*‘\0»|+Yg’s¡jÂ', 'ð÷xwç_ývÚGU7ÍIÜ', 'äbÅqaÖ7¹•¬…X«$ä', 'ß$¶ÞÿÕ:³ú¯Ò¯_N', '_\ZÁ”½/Àî¸YÞ2­Qq', 'ß$¶ÞÿÕ:³ú¯Ò¯_N', 'ºAQí|cñSj¡“‰ÆøÐ', 'Oâ‚nöò5S”ï%E,Õ\n', '1‹@†»glÖêßø#½éX', '€Œ·ƒÕbó‹Cñ2', 'ÄDU²Æå''H›ÊÖ—ðÝÎ', 'ÖÆ=_Æ’1¼Ë?E3 ‘í', 'CÛcîf°ÍÿŸi‘v€', 'IŒÊÁâŽ.…&ô‰Å'),
('*==ŒÞ’šT´^ÛÏüzç…', ' ®Ö>0 <ã5[[sF¾*', 's.5h5)9ÖSº\ròlabŽ', 'ÞÇ^3 A‡àŽöÀŠY%', 'äbÅqaÖ7¹•¬…X«$ä', 'ß$¶ÞÿÕ:³ú¯Ò¯_N', '_\ZÁ”½/Àî¸YÞ2­Qq', 'ß$¶ÞÿÕ:³ú¯Ò¯_N', 'ºAQí|cñSj¡“‰ÆøÐ', '¤­óŠÝú_/ÂfZ³º', '¤­óŠÝú_/ÂfZ³º', '¤­óŠÝú_/ÂfZ³º', 'ÄDU²Æå''H›ÊÖ—ðÝÎ', 'ÖÆ=_Æ’1¼Ë?E3 ‘í', 'Œ*¡(ýM)Ø!‰Lq·HF', 'IŒÊÁâŽ.…&ô‰Å');

--
-- Triggers `articulo`
--
DELIMITER $$
CREATE TRIGGER `del_art` BEFORE DELETE ON `articulo`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('delete en articulo ', OLD.codigo_articulo), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ins_articulo` BEFORE INSERT ON `articulo`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('insert en articulo ', NEW.codigo_articulo), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bitacora`
--

INSERT INTO `bitacora` (`id_movimiento`, `descripcion`, `fecha`, `nom_usuario`, `dispositivo`) VALUES
(1, 'insert en articulo <±»®?l¼MÓõÍGƒì', '2017-11-27 10:44:32', NULL, NULL),
(2, 'insert en almacen AlmacÃ©n principal', '2017-11-27 10:49:34', NULL, NULL),
(3, 'insert en almacen Almacen Laboratorio PB', '2017-11-27 10:49:34', NULL, NULL),
(4, 'insert en almacen Almacen Laboratorio Segundo Piso', '2017-11-27 10:49:34', NULL, NULL),
(5, 'insert en almacen Almacen Quirofano', '2017-11-27 10:49:34', NULL, NULL),
(6, 'insert en almacen Almacen Urgencias', '2017-11-27 10:49:34', NULL, NULL),
(7, 'insert en almacen Rayos X', '2017-11-27 10:49:34', NULL, NULL),
(8, 'insert en proveedor Fluke', '2017-11-27 10:49:48', NULL, NULL),
(9, 'insert en proveedor Helmer', '2017-11-27 10:49:48', NULL, NULL),
(10, 'insert en proveedor Kitlab', '2017-11-27 10:49:48', NULL, NULL),
(11, 'insert en proveedor Phillips', '2017-11-27 10:49:48', NULL, NULL),
(12, 'insert en proveedor Scorpion Scientific', '2017-11-27 10:49:48', NULL, NULL),
(13, 'delete en usuario ÑD‘nã¸\n?áÍ$;P', '2017-11-27 10:53:54', NULL, NULL),
(14, 'delete en usuario ·èDîlQÉ/gÜ,óì*¯', '2017-11-27 10:53:55', NULL, NULL),
(15, 'delete en usuario ²wß&ç{ÇÉšÍ/ ø', '2017-11-27 10:53:56', NULL, NULL),
(16, 'insert en proveedor Fluked', '2017-11-27 10:54:43', NULL, NULL),
(17, 'insert en proveedor Helmerd', '2017-11-27 10:54:43', NULL, NULL),
(18, 'insert en proveedor Kitlabd', '2017-11-27 10:54:43', NULL, NULL),
(19, 'insert en proveedor Phillipsd', '2017-11-27 10:54:43', NULL, NULL),
(20, 'insert en proveedor Scorpion Scientificd', '2017-11-27 10:54:43', NULL, NULL),
(23, 'insert en usuario ©12hï0¡Øÿ°aÎ*Yw', '2017-11-27 10:55:46', NULL, NULL);

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

--
-- Triggers `cliente`
--
DELIMITER $$
CREATE TRIGGER `del_cli` BEFORE DELETE ON `cliente`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('delete en cliente ', OLD.id_cliente), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ins_cliente` BEFORE INSERT ON `cliente`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('insert en cliente ', NEW.id_cliente), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `concepto`
--

CREATE TABLE IF NOT EXISTS `concepto` (
  `codigo_articulo` varchar(200) NOT NULL,
  `pedido_pedido` int(11) NOT NULL,
  `cantidad_concepto` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `concepto2`
--

CREATE TABLE IF NOT EXISTS `concepto2` (
  `codigo_articulo` varchar(200) NOT NULL,
  `num_venta` int(11) NOT NULL,
  `cantidad` varchar(200) DEFAULT NULL,
  `nombre_almacen` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deptoarea`
--

CREATE TABLE IF NOT EXISTS `deptoarea` (
  `nombre_depto` varchar(200) CHARACTER SET latin1 NOT NULL,
  `nombre_area` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `nom_usuario` varchar(200) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `deptoarea`
--

INSERT INTO `deptoarea` (`nombre_depto`, `nombre_area`, `nom_usuario`) VALUES
('\ntÍ°ÀHyYüë )^Ù', 'ê%¨ÿX‘+Y€Òéµ…', 'IŒÊÁâŽ.…&ô‰Å'),
('\ntÍ°ÀHyYüë )^Ù', 'nzÆhƒ_*¢®:òª°D', 'IŒÊÁâŽ.…&ô‰Å'),
('\ntÍ°ÀHyYüë )^Ù', '†ý”•Y DFCM–Ë', 'IŒÊÁâŽ.…&ô‰Å'),
('*==ŒÞ’šT´^ÛÏüzç…', 'û…7kj£Q;âÆäˆ¦g', 'IŒÊÁâŽ.…&ô‰Å'),
('*==ŒÞ’šT´^ÛÏüzç…', '”}þó\n%\0á‚"Øp§™Š“', 'IŒÊÁâŽ.…&ô‰Å'),
('*==ŒÞ’šT´^ÛÏüzç…', ' ®Ö>0 <ã5[[sF¾*', 'IŒÊÁâŽ.…&ô‰Å'),
('-W¨ÿžÛƒÀèœ¦ÍXð', 'äxARò‰¯í–6vÏ˜w¢', 'IŒÊÁâŽ.…&ô‰Å'),
('-W¨ÿžÛƒÀèœ¦ÍXð', 'o6ò½öÚr“!‰ýÄ', 'IŒÊÁâŽ.…&ô‰Å'),
('-W¨ÿžÛƒÀèœ¦ÍXð', 'uÚŒdº8rÁù|d®Òø', 'IŒÊÁâŽ.…&ô‰Å');

--
-- Triggers `deptoarea`
--
DELIMITER $$
CREATE TRIGGER `del_da` BEFORE DELETE ON `deptoarea`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('delete en departamento ', OLD.nombre_depto, ' y area ', OLD.nombre_area), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ins_deptoarea` BEFORE INSERT ON `deptoarea`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('insert en departamento ', NEW.nombre_depto, ' y area ', NEW.nombre_area), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;

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

--
-- Triggers `pedido`
--
DELIMITER $$
CREATE TRIGGER `del_ped` BEFORE DELETE ON `pedido`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('delete en pedido ', OLD.num_pedido), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ins_pedido` BEFORE INSERT ON `pedido`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('insert en pedido ', NEW.num_pedido), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `nombre_proveedor` varchar(200) NOT NULL DEFAULT '',
  `contacto_proveedor` varchar(200) DEFAULT NULL,
  `nombre_contacto_proveedor` varchar(200) DEFAULT NULL,
  `direccion_proveedor` varchar(200) DEFAULT NULL,
  `telefono_p_proveedor` varchar(200) DEFAULT NULL,
  `telefono_a_proveedor` varchar(200) DEFAULT NULL,
  `fax_proveedor` varchar(200) DEFAULT NULL,
  `email_proveedor` varchar(200) DEFAULT NULL,
  `nom_usuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proveedor`
--

INSERT INTO `proveedor` (`nombre_proveedor`, `contacto_proveedor`, `nombre_contacto_proveedor`, `direccion_proveedor`, `telefono_p_proveedor`, `telefono_a_proveedor`, `fax_proveedor`, `email_proveedor`, `nom_usuario`) VALUES
('a', 'bunch', 'of', NULL, '687', '87687', '68768', 'ces@lkj.com', 'admin'),
('Fluke', 'Fluke', 'Fluke', NULL, '1234567', '65422121', '43242342432', 'fluke@gmail.com', 'prueba'),
('Fluked', 'Fluke', 'Fluke', NULL, '1234567', '65422121', '43242342432', 'fluke@gmail.com', 'IŒÊÁâŽ.…&ô‰Å'),
('Helmer', 'Helmer', 'Helmer', NULL, '2342311234', '3442124343', '34423423', 'service@helmer.com', 'prueba'),
('Helmerd', 'Helmer', 'Helmer', NULL, '2342311234', '3442124343', '34423423', 'service@helmer.com', 'IŒÊÁâŽ.…&ô‰Å'),
('Kitlab', 'Kitlab', 'Kitlab', NULL, '55554323462', '55576573278', '23663002183', 'kitlab@gmail.com', 'prueba'),
('Kitlabd', 'Kitlab', 'Kitlab', NULL, '55554323462', '55576573278', '23663002183', 'kitlab@gmail.com', 'IŒÊÁâŽ.…&ô‰Å'),
('Phillips', 'Phillips', 'Phillips', NULL, '1235344543', '4235323422', '23434534223', 'phillips_medicine@live.com.mx', 'prueba'),
('Phillipsd', 'Phillips', 'Phillips', NULL, '1235344543', '4235323422', '23434534223', 'phillips_medicine@live.com.mx', 'IŒÊÁâŽ.…&ô‰Å'),
('Scorpion Scientific', 'Scorpion Scientific', 'Scorpion Scientific', NULL, '3555324642', '423234345', '010028377', 'ss_costumers@scorpio.com', 'prueba'),
('Scorpion Scientificd', 'Scorpion Scientific', 'Scorpion Scientific', NULL, '3555324642', '423234345', '010028377', 'ss_costumers@scorpio.com', 'IŒÊÁâŽ.…&ô‰Å'),
('äbÅqaÖ7¹•¬…X«$ä', '}ûÎ9¤ i9V’}\nÃl´', 'ªLœ¤¹\np;•ú‰Ë©‚±!', NULL, '›Ê\rY<Z×!û¢F^Ü7¶&', '›Ê\rY<Z×!û¢F^Ü7¶&', '›Ê\rY<Z×!û¢F^Ü7¶&', 'Ç&·N… jÈq5k(', 'IŒÊÁâŽ.…&ô‰Å'),
('Šáß °šQÖ^»7—0o', 'tÈ´h 1*5’AMŽF', 'ÿ\r"‰\\­àY§*É¨šCV"', NULL, 'ð Q5ýh5šR¢bÕ·', 'ð Q5ýh5šR¢bÕ·', 'ð Q5ýh5šR¢bÕ·', 'jÖÜó¦	_(Z±ó¦\rì', 'IŒÊÁâŽ.…&ô‰Å'),
('¶³|ÍgËñC<ëq˜', '©UHôo»òÆ<¨<¤ü', 'a¿IŒw„íg@ëÚ“v"', NULL, '“}-ÊÎ×c0„qËÛ', '“}-ÊÎ×c0„qËÛ', '“}-ÊÎ×c0„qËÛ', 'kîÓ†ä‰¡5WXÂmƒï‹', 'IŒÊÁâŽ.…&ô‰Å');

--
-- Triggers `proveedor`
--
DELIMITER $$
CREATE TRIGGER `del_prov` BEFORE DELETE ON `proveedor`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('delete en proveedor ', OLD.nombre_proveedor), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ins_proveedor` BEFORE INSERT ON `proveedor`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('insert en proveedor ', NEW.nombre_proveedor), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `relacion`
--

CREATE TABLE IF NOT EXISTS `relacion` (
  `nombre_almacen` varchar(200) NOT NULL,
  `codigo_articulo` varchar(200) NOT NULL,
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
('IŒÊÁâŽ.…&ô‰Å', 'IŒÊÁâŽ.…&ô‰Å', '(xeû~fyô_yDcÓk²o'),
('©12hï0¡Øÿ°aÎ*Yw', '©12hï0¡Øÿ°aÎ*Yw', 'iò3''õ2tq-Ÿcl');

--
-- Triggers `usuario`
--
DELIMITER $$
CREATE TRIGGER `del_usr` BEFORE DELETE ON `usuario`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('delete en usuario ', OLD.nom_usuario), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ins_usuario` BEFORE INSERT ON `usuario`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('insert en usuario ', NEW.nom_usuario), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;

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
-- Triggers `venta`
--
DELIMITER $$
CREATE TRIGGER `del_venta` BEFORE DELETE ON `venta`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('delete en venta ', OLD.num_venta), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ins_venta` BEFORE INSERT ON `venta`
 FOR EACH ROW BEGIN 
INSERT INTO bitacora (descripcion, fecha) VALUES
(CONCAT('insert en venta ', NEW.num_venta), CURRENT_TIMESTAMP());
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nom_usuario`),
  ADD UNIQUE KEY `nom_usuario` (`nom_usuario`);

--
-- Indexes for table `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`nombre_almacen`);

--
-- Indexes for table `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`codigo_articulo`),
  ADD KEY `fka` (`nombre_proveedor`);

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
-- AUTO_INCREMENT for table `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
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
-- Constraints for table `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`nombre_proveedor`) REFERENCES `proveedor` (`nombre_proveedor`);

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
