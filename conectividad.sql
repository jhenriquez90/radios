-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2017 a las 22:53:36
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `conectividad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE IF NOT EXISTS `direccion` (
  `cod_direccion` int(4) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_direccion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`cod_direccion`, `direccion`) VALUES
(1, 'Conectividad'),
(2, 'Seguridad Viceministro'),
(3, 'Seguridad Ministro'),
(4, 'Central de Comunicaciones'),
(5, '911 SNE Teg.'),
(6, '911 SNE SPS.'),
(7, 'DNT Teg.'),
(8, 'DNT SPS.'),
(9, 'DNPP'),
(10, 'DNSEI'),
(11, 'S.E.P.'),
(12, 'DPI Teg.'),
(13, 'DPI SPS.'),
(14, 'Udep-1 Atlantida'),
(15, 'Udep-2 Colon'),
(16, 'Udep-3 Comayagua'),
(17, 'Udep-4 Copan'),
(18, 'Udep-5 Cortes'),
(19, 'Udep-6 Choluteca'),
(20, 'Udep-7 El Paraiso'),
(21, 'Udep-8 Fco. Morazan'),
(22, 'Udep-9 Gracias a Dios'),
(23, 'Udep-10 Intibuca'),
(24, 'Udep-11 Islas Bahia'),
(25, 'Udep-12 La Paz'),
(26, 'Udep-13 Lempira'),
(27, 'Udep-14 Ocotepeque'),
(28, 'Udep-15 Olancho'),
(29, 'Udep-16 Sta Barbara'),
(30, 'Udep-17 Valle'),
(31, 'Udep-18 Yoro'),
(32, 'Umep-1 Los Dolores'),
(33, 'Umep-2 Belen'),
(34, 'Umep-3 La Granja'),
(35, 'Umep-4 Kennedy'),
(36, 'Umep-5 Guamilito'),
(37, 'Umep-6 Chamelecon'),
(38, 'Umep-7 Suncery'),
(39, 'Umep-8 Rivera Hdz'),
(40, 'Umep-9 Lima, Cortes'),
(41, 'Umep-10 Choloma'),
(42, 'Umep-11 Progreso'),
(43, 'Umep-14 Sabana Grande'),
(44, 'Umep-12 Villa Nueva'),
(45, 'Umep-13 Pimineta Cortes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `idradio` varchar(30) NOT NULL,
  `cod_inventario` varchar(30) NOT NULL,
  `serie` varchar(30) NOT NULL,
  `tipo_radio` varchar(30) NOT NULL,
  `modelo_radio` varchar(30) NOT NULL,
  `cod_direccion` varchar(50) NOT NULL,
  `jefatura` int(10) NOT NULL,
  `asignacion_individual` varchar(50) NOT NULL,
  `cod_cm` varchar(10) NOT NULL,
  `cod_lcp` varchar(30) NOT NULL,
  `cod_cp` varchar(30) NOT NULL,
  `cod_ipsc` varchar(30) NOT NULL,
  `observacion` varchar(300) NOT NULL,
  PRIMARY KEY (`idradio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`idradio`, `cod_inventario`, `serie`, `tipo_radio`, `modelo_radio`, `cod_direccion`, `jefatura`, `asignacion_individual`, `cod_cm`, `cod_lcp`, `cod_cp`, `cod_ipsc`, `observacion`) VALUES
('1', '1234', 'qwe123', 'Portatil', 'ytrew', 'jeje', 16, 'Josue', 'no', 'si', 'si', 'si', 'ND'),
('108', '4602771', '871IQE0767', 'Movil', 'DGP-8550', 'SUB INS JIMENEZ', 2, 'JIMENEZ', '', 'si', 'si', 'si', 'ESTE RADIO TIENE LAS TRES LICE lalasikasdlhlashdla ad as d ads   asd as d asd asd a sds a sd asd a d f af  a a s a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
  `cod_nivel` int(2) NOT NULL,
  `nivel` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_nivel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`cod_nivel`, `nivel`) VALUES
(1, 'SuperAdministrador'),
(2, 'Administrador'),
(3, 'Invitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `cod_nivel` int(2) NOT NULL,
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user`, `pass`, `cod_nivel`) VALUES
('admin', '1234', 2),
('kakashi', '1234', 2),
('lfjosue', 'qqqq', 1),
('lfjosue17@gmail.com', 'admin', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
