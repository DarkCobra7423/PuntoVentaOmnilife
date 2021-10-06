-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2021 a las 05:44:23
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pvomnilife`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bank`
--

CREATE TABLE `bank` (
  `idbank` int(11) NOT NULL,
  `bank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `card`
--

CREATE TABLE `card` (
  `idcard` int(11) NOT NULL,
  `fkbank` int(11) NOT NULL,
  `cardnumber` varchar(16) NOT NULL,
  `expirationdate` varchar(5) NOT NULL,
  `securitycode` varchar(3) NOT NULL,
  `namelastname` varchar(100) NOT NULL,
  `type` enum('Debito','Credito') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flavor`
--

CREATE TABLE `flavor` (
  `idflavor` int(11) NOT NULL,
  `flavor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `idproduct` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `fkflavor` int(11) NOT NULL,
  `content` int(11) DEFAULT NULL,
  `fkunittype` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE `profile` (
  `idprofile` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `account` enum('Vendedor','Comprador') NOT NULL,
  `fkuser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shippingaddress`
--

CREATE TABLE `shippingaddress` (
  `idshippingaddress` int(11) NOT NULL,
  `idprofile` int(11) NOT NULL,
  `namelastname` varchar(100) NOT NULL,
  `postalcode` varchar(5) NOT NULL,
  `state` varchar(45) NOT NULL,
  `municipalitymayoralty` varchar(45) NOT NULL,
  `suburb` varchar(45) NOT NULL,
  `street` varchar(45) NOT NULL,
  `outdoornumber` int(11) DEFAULT NULL,
  `interiornumber` int(11) DEFAULT NULL,
  `typeaddress` enum('Trabajo','Casa') NOT NULL,
  `telephonecontact` varchar(15) NOT NULL,
  `indications` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shopping`
--

CREATE TABLE `shopping` (
  `idshopping` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `fkprofileseller` int(11) NOT NULL,
  `ticket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `idshoppingcart` int(11) NOT NULL,
  `fkshopping` int(11) DEFAULT NULL,
  `fkprofile` int(11) NOT NULL,
  `fkproduct` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unittype`
--

CREATE TABLE `unittype` (
  `idunittype` int(11) NOT NULL,
  `unittype` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`idbank`);

--
-- Indices de la tabla `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`idcard`),
  ADD KEY `fk_card_bank_idx` (`fkbank`);

--
-- Indices de la tabla `flavor`
--
ALTER TABLE `flavor`
  ADD PRIMARY KEY (`idflavor`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`),
  ADD KEY `fk_product_flavor1_idx` (`fkflavor`),
  ADD KEY `fk_product_unittype1_idx` (`fkunittype`);

--
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`idprofile`);

--
-- Indices de la tabla `shippingaddress`
--
ALTER TABLE `shippingaddress`
  ADD PRIMARY KEY (`idshippingaddress`),
  ADD KEY `fk_shippingaddress_profile1_idx` (`idprofile`);

--
-- Indices de la tabla `shopping`
--
ALTER TABLE `shopping`
  ADD PRIMARY KEY (`idshopping`),
  ADD KEY `fk_shopping_profile1_idx` (`fkprofileseller`);

--
-- Indices de la tabla `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`idshoppingcart`),
  ADD KEY `fk_shoppingcart_profile1_idx` (`fkprofile`),
  ADD KEY `fk_shoppingcart_product1_idx` (`fkproduct`),
  ADD KEY `fk_shoppingcart_shopping1_idx` (`fkshopping`);

--
-- Indices de la tabla `unittype`
--
ALTER TABLE `unittype`
  ADD PRIMARY KEY (`idunittype`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bank`
--
ALTER TABLE `bank`
  MODIFY `idbank` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `card`
--
ALTER TABLE `card`
  MODIFY `idcard` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `flavor`
--
ALTER TABLE `flavor`
  MODIFY `idflavor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `idproduct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
  MODIFY `idprofile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `shippingaddress`
--
ALTER TABLE `shippingaddress`
  MODIFY `idshippingaddress` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `shopping`
--
ALTER TABLE `shopping`
  MODIFY `idshopping` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `idshoppingcart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unittype`
--
ALTER TABLE `unittype`
  MODIFY `idunittype` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `fk_card_bank` FOREIGN KEY (`fkbank`) REFERENCES `bank` (`idbank`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_flavor1` FOREIGN KEY (`fkflavor`) REFERENCES `flavor` (`idflavor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_unittype1` FOREIGN KEY (`fkunittype`) REFERENCES `unittype` (`idunittype`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shippingaddress`
--
ALTER TABLE `shippingaddress`
  ADD CONSTRAINT `fk_shippingaddress_profile1` FOREIGN KEY (`idprofile`) REFERENCES `profile` (`idprofile`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shopping`
--
ALTER TABLE `shopping`
  ADD CONSTRAINT `fk_shopping_profile1` FOREIGN KEY (`fkprofileseller`) REFERENCES `profile` (`idprofile`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD CONSTRAINT `fk_shoppingcart_product1` FOREIGN KEY (`fkproduct`) REFERENCES `product` (`idproduct`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_shoppingcart_profile1` FOREIGN KEY (`fkprofile`) REFERENCES `profile` (`idprofile`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_shoppingcart_shopping1` FOREIGN KEY (`fkshopping`) REFERENCES `shopping` (`idshopping`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
