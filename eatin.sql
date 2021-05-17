-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-05-2021 a las 21:55:31
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eatin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extras`
--

CREATE TABLE `extras` (
  `idextra` int(11) NOT NULL,
  `nombre_extra` varchar(200) DEFAULT NULL,
  `costo_extra` varchar(45) DEFAULT NULL,
  `tipo_extra` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `extras`
--

INSERT INTO `extras` (`idextra`, `nombre_extra`, `costo_extra`, `tipo_extra`) VALUES
(1, 'Buffalo', '0', 'salsa'),
(2, 'BBQ Hot', '0', 'salsa'),
(3, 'Lemon Pepper', '0', 'salsa'),
(4, 'Mango Habanero', '0', 'salsa'),
(5, 'BBQ', '0', 'salsa'),
(6, 'Papas con queso y tocino', '20', 'papas'),
(7, 'Papas con queso', '10', 'papas'),
(8, 'Papas con tocino', '10', 'papas'),
(9, 'Papas naturales', '0', 'papas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `idplatillo` int(11) NOT NULL,
  `nombre_platillo` varchar(200) DEFAULT NULL,
  `costo` varchar(200) DEFAULT NULL,
  `descripcion` varchar(3000) NOT NULL,
  `categoria` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`idplatillo`, `nombre_platillo`, `costo`, `descripcion`, `categoria`) VALUES
(1, 'Agua', '12', 'Agua fresca natural', 'bebidas'),
(2, 'Refresco', '18', 'Variedad de refrescos', 'bebidas'),
(3, 'Agua de Frutas', '25', 'Agua de fruta natural', 'bebidas'),
(7, 'Hamburguesa Tender', '90', 'Hamburguresa de tender con lechuga, aderezo y cubierta en salsa', 'hamburguesas'),
(8, 'Ensalada', '80', 'Ensalada tradicional con lechuga, pollo, tomate y aderezos', 'otros'),
(9, 'Mireles Wings', '200', 'Incluye un poco de todo; boneless, alitas tenders y papas', 'otros'),
(10, 'Tenders Personales', '80', 'Tiras de pollo crujientes cubiertos en salsa', 'tenders'),
(11, 'Tenders Medio Kilo', '120', '500 gr de tiras de pollo crujientes cubiertos en salsa', 'tenders'),
(12, 'Tenders Kilo', '200', '1 kg de tiras de pollo crujientes cubiertos en salsa', 'tenders'),
(13, 'Boneless Personales', '80', 'Cubitos de pollo con cubierta suave en salsa', 'boneless'),
(14, 'Boneless Medio Kilo', '120', '500 gr de cubitos de pollo con cubierta suave en salsa', 'boneless'),
(15, 'Boneless Kilo', '200', '1 kg de cubitos de pollo con cubierta suave en salsa', 'boneless'),
(16, 'Alitas Personales', '80', 'Alitas de pollo cuubiertas en salsa', 'alitas'),
(17, 'Alitas Medio Kilo', '120', '500 gr de alitas de pollo cubiertas en salsa', 'alitas'),
(18, 'Alitas Kilo', '200', '1 kg de alitas de pollo cubiertas en salsa', 'alitas'),
(19, 'Dedo de Queso', '15', '1 palito de queso empanizado', 'complementos'),
(20, 'Chilopopper', '12', 'Pequeño chile aderezado', 'complementos'),
(22, 'Papas Fritas', '40', '250 gr de papas fritas naturales', 'complementos'),
(23, 'Papas Crisscut', '50', '250 gr de papas crisscut naturales', 'complementos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idpedido` int(11) NOT NULL,
  `numero_mesa` varchar(45) DEFAULT NULL,
  `pedido` varchar(5000) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `tipo_pago` varchar(45) DEFAULT NULL,
  `pagado` varchar(45) DEFAULT NULL,
  `estatus` varchar(200) DEFAULT NULL,
  `fecha_hora` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idpedido`, `numero_mesa`, `pedido`, `total`, `tipo_pago`, `pagado`, `estatus`, `fecha_hora`) VALUES
(6, '27', 'a:2:{i:0;a:4:{s:10:\"idPlatillo\";s:2:\"13\";s:11:\"extra_salsa\";s:1:\"1\";s:11:\"extra_papas\";s:1:\"6\";s:11:\"comentarios\";s:0:\"\";}i:1;a:4:{s:10:\"idPlatillo\";s:2:\"16\";s:11:\"extra_salsa\";s:1:\"1\";s:11:\"extra_papas\";s:1:\"6\";s:11:\"comentarios\";s:0:\"\";}}', '200', 'Efectivo', '0', '2', '2021-05-11 11:21:57'),
(7, '27', 'a:2:{i:0;a:4:{s:10:\"idPlatillo\";s:2:\"16\";s:11:\"extra_salsa\";s:1:\"1\";s:11:\"extra_papas\";s:1:\"6\";s:11:\"comentarios\";s:0:\"\";}i:1;a:4:{s:10:\"idPlatillo\";s:2:\"10\";s:11:\"extra_salsa\";s:1:\"1\";s:11:\"extra_papas\";s:1:\"6\";s:11:\"comentarios\";s:0:\"\";}}', '200', 'Efectivo', '0', '0', '2021-05-11 11:22:43'),
(8, '27', 'a:2:{i:0;a:4:{s:10:\"idPlatillo\";s:2:\"19\";s:11:\"extra_salsa\";i:0;s:11:\"extra_papas\";i:0;s:11:\"comentarios\";s:0:\"\";}i:1;a:4:{s:10:\"idPlatillo\";s:2:\"10\";s:11:\"extra_salsa\";s:1:\"1\";s:11:\"extra_papas\";s:1:\"6\";s:11:\"comentarios\";s:0:\"\";}}', '115', 'Tarjeta', '0', '1', '2021-05-11 11:49:01'),
(9, '27', 'a:2:{i:0;a:4:{s:10:\"idPlatillo\";s:2:\"22\";s:11:\"extra_salsa\";i:0;s:11:\"extra_papas\";i:0;s:11:\"comentarios\";s:0:\"\";}i:1;a:4:{s:10:\"idPlatillo\";s:2:\"14\";s:11:\"extra_salsa\";s:1:\"1\";s:11:\"extra_papas\";s:1:\"6\";s:11:\"comentarios\";s:0:\"\";}}', '180', 'Efectivo', '0', '0', '2021-05-11 12:35:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`idextra`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idplatillo`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idpedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `extras`
--
ALTER TABLE `extras`
  MODIFY `idextra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `idplatillo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
