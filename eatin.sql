-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2020 a las 08:06:09
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

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
(1, 'Agua', '15', 'Agua fresca natural', 'bebidas'),
(2, 'Refresco', '15', 'Variedad de refrescos', 'bebidas'),
(3, 'Agua de Frutas', '20', 'Agua de fruta natural', 'bebidas'),
(7, 'Hamburguesa Tender', '90', 'Hamburguresa de tender con lechuga, aderezo y cubierta en salsa', 'hamburguesas'),
(8, 'Ensalada', '80', '', 'otros'),
(9, 'Mireles Wings', '200', 'Incluye un poco de todo; boneless, alitas tenders y papas', 'otros'),
(10, 'Tenders Personales', '75', 'Tiras de pollo crujientes cubiertos en salsa', 'tenders'),
(11, 'Tenders Medio Kilo', '130', 'Tiras de pollo crujientes cubiertos en salsa', 'tenders'),
(12, 'Tenders Kilo', '190', 'Tiras de pollo crujientes cubiertos en salsa', 'tenders'),
(13, 'Boneless Personales', '80', 'Cubitos de pollo con cubierta suave en salsa', 'boneless'),
(14, 'Boneless Medio Kilo', '135', 'Cubitos de pollo con cubierta suave en salsa', 'boneless'),
(15, 'Boneless Kilo', '190', 'Cubitos de pollo con cubierta suave en salsa', 'boneless'),
(16, 'Alitas Personales', '75', 'Alitas de pollo cuubiertas en salsa', 'alitas'),
(17, 'Alitas Medio Kilo', '130', 'Alitas de pollo cubiertas en salsa', 'alitas'),
(18, 'Alitas Kilo', '180', 'Alitas de pollo cubiertas en salsa', 'alitas'),
(19, 'Dedo de Queso', '12', 'Palitos de queso empanizados', 'complementos'),
(20, 'Chilopoppers', '12', '', 'complementos'),
(21, 'Aderezo', '5', 'Adereso ranch', 'complementos'),
(22, 'Papas Fritas', '40', 'Papas fritas naturales', 'complementos'),
(23, 'Papas Crisscut', '50', 'Papas crisscut naturales', 'complementos'),
(24, 'Como El Edgar', '90', '', 'otros');

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
  `estatus` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
