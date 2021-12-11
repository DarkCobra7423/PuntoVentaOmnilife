-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2021 a las 01:40:09
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

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
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `group_code` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES
('/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//controller', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//crud', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//extension', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//form', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//model', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('//module', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/asset/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/asset/compress', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/asset/template', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/flush', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/flush-all', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/flush-schema', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/cache/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/dashboard/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/dashboard/create', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/dashboard/delete', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/dashboard/index', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/dashboard/update', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/dashboard/view', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/debug/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/debug/default/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/debug/default/db-explain', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/debug/default/download-mail', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/debug/default/index', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/debug/default/toolbar', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/debug/default/view', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/debug/user/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/debug/user/reset-identity', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/debug/user/set-identity', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/fixture/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/fixture/load', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/fixture/unload', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/action', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/diff', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/preview', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gii/default/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/gridview/*', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/gridview/export/*', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/gridview/export/download', 3, NULL, NULL, NULL, 1510367287, 1510367287, NULL),
('/hello/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/hello/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/help/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/help/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/message/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/message/config', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/message/extract', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/down', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/history', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/mark', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/new', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/redo', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/to', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/migrate/up', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/site/*', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/about', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/captcha', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/contact', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/dash', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/error', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/index', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/login', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/site/logout', 3, NULL, NULL, NULL, 1510367286, 1510367286, NULL),
('/user-management/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth-item-group/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/captcha', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/change-own-password', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/confirm-email', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/confirm-email-receive', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/confirm-registration-email', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/login', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/logout', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/password-recovery', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/password-recovery-receive', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/auth/registration', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/refresh-routes', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/set-child-permissions', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/set-child-routes', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/permission/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/set-child-permissions', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/set-child-roles', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/role/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-permission/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-permission/set', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-permission/set-roles', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user-visit-log/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/*', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/bulk-activate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/bulk-deactivate', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/bulk-delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/change-password', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/create', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/delete', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/grid-page-size', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/grid-sort', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/index', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/toggle-attribute', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/update', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('/user-management/user/view', 3, NULL, NULL, NULL, 1426062189, 1426062189, NULL),
('Admin', 1, 'Admin', NULL, NULL, 1426062189, 1426062189, NULL),
('assignRolesToUsers', 2, 'Assign roles to users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('bindUserToIp', 2, 'Bind user to IP', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('changeOwnPassword', 2, 'Change own password', NULL, NULL, 1426062189, 1426062189, 'userCommonPermissions'),
('changeUserPassword', 2, 'Change user password', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('commonPermission', 2, 'Common permission', NULL, NULL, 1426062188, 1426062188, NULL),
('createUsers', 2, 'Create users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('deleteUsers', 2, 'Delete users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('editUserEmail', 2, 'Edit user email', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('editUsers', 2, 'Edit users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewRegistrationIp', 2, 'View registration IP', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewUserEmail', 2, 'View user email', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewUserRoles', 2, 'View user roles', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewUsers', 2, 'View users', NULL, NULL, 1426062189, 1426062189, 'userManagement'),
('viewVisitLog', 2, 'View visit log', NULL, NULL, 1426062189, 1426062189, 'userManagement');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Admin', 'assignRolesToUsers'),
('Admin', 'changeOwnPassword'),
('Admin', 'changeUserPassword'),
('Admin', 'createUsers'),
('Admin', 'deleteUsers'),
('Admin', 'editUsers'),
('Admin', 'viewUsers'),
('assignRolesToUsers', '/user-management/user-permission/set'),
('assignRolesToUsers', '/user-management/user-permission/set-roles'),
('assignRolesToUsers', 'viewUserRoles'),
('assignRolesToUsers', 'viewUsers'),
('changeOwnPassword', '/user-management/auth/change-own-password'),
('changeUserPassword', '/user-management/user/change-password'),
('changeUserPassword', 'viewUsers'),
('createUsers', '/user-management/user/create'),
('createUsers', 'viewUsers'),
('deleteUsers', '/user-management/user/bulk-delete'),
('deleteUsers', '/user-management/user/delete'),
('deleteUsers', 'viewUsers'),
('editUserEmail', 'viewUserEmail'),
('editUsers', '/user-management/user/bulk-activate'),
('editUsers', '/user-management/user/bulk-deactivate'),
('editUsers', '/user-management/user/update'),
('editUsers', 'viewUsers'),
('viewUsers', '/user-management/user/grid-page-size'),
('viewUsers', '/user-management/user/index'),
('viewUsers', '/user-management/user/view'),
('viewVisitLog', '/user-management/user-visit-log/grid-page-size'),
('viewVisitLog', '/user-management/user-visit-log/index'),
('viewVisitLog', '/user-management/user-visit-log/view');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_group`
--

CREATE TABLE `auth_item_group` (
  `code` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_item_group`
--

INSERT INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES
('userCommonPermissions', 'User common permission', 1426062189, 1426062189),
('userManagement', 'User management', 1426062189, 1426062189);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bank`
--

CREATE TABLE `bank` (
  `idbank` int(11) NOT NULL,
  `bank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bank`
--

INSERT INTO `bank` (`idbank`, `bank`) VALUES
(1, 'Bancomer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `card`
--

CREATE TABLE `card` (
  `idcard` int(11) NOT NULL,
  `fkprofile` int(11) NOT NULL,
  `fkbank` int(11) NOT NULL,
  `cardnumber` varchar(19) NOT NULL,
  `expirationdate` varchar(8) NOT NULL,
  `securitycode` varchar(4) NOT NULL,
  `namelastname` varchar(100) NOT NULL,
  `type` enum('Debito','Credito') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `card`
--

INSERT INTO `card` (`idcard`, `fkprofile`, `fkbank`, `cardnumber`, `expirationdate`, `securitycode`, `namelastname`, `type`) VALUES
(1, 2, 1, '4234 2343 4234 2342', '12/2721', '123', 'HOla eqweqwdqw vc', 'Debito'),
(2, 2, 1, '3121 3213 2132 3323', '06/2028', '423', 'sd sdsa dsadsad', 'Debito'),
(3, 2, 1, '5554 4565 4455 4544', '10/2030', '211', 'Yesenia Diaz Hernandez', 'Debito'),
(4, 2, 1, '1234 1231 2344 4444', '10/2030', '875', 'yesenia diaz hernandez', 'Debito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flavor`
--

CREATE TABLE `flavor` (
  `idflavor` int(11) NOT NULL,
  `flavor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `flavor`
--

INSERT INTO `flavor` (`idflavor`, `flavor`) VALUES
(1, 'Mango'),
(2, 'Coco'),
(3, 'Cafezzino'),
(4, 'Herbal'),
(5, 'Piña'),
(6, 'Toronja'),
(7, 'Citrico');

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
  `content` varchar(50) DEFAULT NULL,
  `fkunittype` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`idproduct`, `product`, `image`, `description`, `fkflavor`, `content`, `fkunittype`, `stock`, `price`) VALUES
(1, 'Cafezzino Plus', 'saxT2De3d-mjTz7S3X2c6Z66Piv-Ru7b.png', 'Suplemento alimenticio que contiene café colombiano, extracto de café verde (Coffea canephora robusta Pierre), cromo e inulina. Con endulzante de origen natural, estevia.', 3, '30 Sobres', 1, 30, '475'),
(2, 'One C Mix Plus', 'NAOBVGdCU_vrzkiL854y7DCDk6ipsZ3M.png', 'Suplemento alimenticio, sabor a mango verde, que contiene L-Glutatión, L-Cisteína, vitamina A, complejo B: tiamina B1, riboflavina B2, niacina B3, ácido pantoténico B5, piridoxina B6, biotina, ácido fólico B9, cianocobalamina B12, vitaminas C, D, E y K, además de minerales: calcio, fósforo, yodo, zinc, cobre, manganeso, cromo, molibdeno y selenio. Con endulzante de origen natural, estevia.', 1, '30 Sobres', 1, 30, '380'),
(3, 'Magnus Supreme', '2t7yvruCZnm-ZfmiJUvzWwRl26qNr6iB.png', 'Suplemento alimenticio, que contiene vitaminas del complejo B: tiamina B1, riboflavina B2, niacina B3, ácido pantoténico B5, piridoxina B6, ácido fólico B9, cobalamina B12, vitaminas C y E, glicina, además de minerales: zinc, cobre y cromo. Con endulzante de origen natural, estevia.', 1, '30 Sobres', 1, 30, '440'),
(10, 'Star bien', 'WYTMYmDDLQ6itUQFYlDcZdCuHBEgrUGc.png', 'Producto nutricional sabor naranja-limón, con vitaminas del complejo B, las cuales pueden favorecer el funcionamiento del sistema nervioso. Por su parte el extracto de maca puede promover la obtención de energía, colaborando en el estado de alerta del organismo.', 1, '30 Sobres', 1, 20, '345'),
(11, 'Ego Plant', 'lx7okWzXyUfO-QG7e6wOfxeFT4bUWgZn.png', 'Producto nutricional sabor herbal, con vitaminas.', 4, '200  ml', 3, 13, '45'),
(12, 'Aloe Beta', 'R-cNqJcnHYP7LOxOVzooL_dJt5TR28FN.webp', 'Bebida sabor piña, que contiene aloe vera orgánico y vitamina E.', 5, '200 ml', 3, 3, '45'),
(13, 'Omnilife Kolina', 'duhppg2c-DF4uA68nZpowroL-_D3XJhm.webp', 'Producto nutricional, sabor toronja, que por su contenido de extractos de piña y coco, pueden colaborar a la función gastrointestinal.', 6, '200 ml', 3, 20, '65'),
(14, 'Cafezzino Plus', 'zq7B0asrLnKHQ6Aqe0OVXojKZizKDIQC.jpg', 'Producto nutricional con café colombiano, extracto de café verde, cromo y fibra. Ayuda a utilizar la grasa almacenada como fuente de energía.', 3, '5 g', 2, 20, '17'),
(15, ' Ego Life Supreme', 'Lg5q3ArJVAmU8LBQ-lbsgHhaZj0gbfv_.jpg', 'Producto nutricional sabor piña, con electrólitos.', 5, '16 g', 2, 5, '12'),
(16, 'Magnus Supreme', '2vGFTXxsoXaTdn1Ti2G8ZskAZMAwRJhm.jpg', 'Producto nutricional sabor a cítrico, con vitaminas del complejo B, glicina y taurina.', 7, '8 g', 2, 13, '19'),
(17, 'prueba', 'MRDJFzWWbIeU3ebID5qbLUrcnkt1GVZv.jpg', 'prueba', 2, '30', 1, 30, '450');

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

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`idprofile`, `name`, `lastname`, `phonenumber`, `email`, `account`, `fkuser`) VALUES
(1, 'Yesenia', 'Díaz Hernández', '6647661256', 'yesenia@gmail.com', 'Comprador', 3),
(2, 'Carlos ', 'Angel Padilla', '1234567809', 'carlos@gmail.com', 'Comprador', 4),
(3, 'Maria', 'Gordillo Hernández', '0987654321', 'maria@gmail.com', 'Vendedor', 5);

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

--
-- Volcado de datos para la tabla `shippingaddress`
--

INSERT INTO `shippingaddress` (`idshippingaddress`, `idprofile`, `namelastname`, `postalcode`, `state`, `municipalitymayoralty`, `suburb`, `street`, `outdoornumber`, `interiornumber`, `typeaddress`, `telephonecontact`, `indications`) VALUES
(1, 2, 'Martha Padilla Espinoza', '29580', 'Tabasco', 'Emiliano Zapata', 'El manguito', 'La tuza', NULL, NULL, 'Casa', '1234567890', NULL),
(2, 3, 'Maria luisa Espinosa Guzman', '29580', 'Chiapas', 'Playas de catazá', 'La tuza', 'Principal', NULL, NULL, 'Casa', '0987654321', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shopping`
--

CREATE TABLE `shopping` (
  `idshopping` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `fkshoppingaddress` int(11) NOT NULL,
  `ticket` varchar(200) NOT NULL,
  `shipping` enum('Enviado','No Enviado','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `shopping`
--

INSERT INTO `shopping` (`idshopping`, `datetime`, `fkshoppingaddress`, `ticket`, `shipping`) VALUES
(1, '2021-11-19 11:09:38', 1, 'eeee', 'No Enviado'),
(2, '2021-12-08 14:58:21', 1, 'sssss', 'No Enviado'),
(3, '0000-00-00 00:00:00', 1, '0', 'No Enviado'),
(4, '0000-00-00 00:00:00', 1, '0', 'No Enviado'),
(5, '0000-00-00 00:00:00', 1, '0', 'No Enviado'),
(6, '2021-12-09 13:47:59', 1, '0', 'No Enviado'),
(7, '2021-12-09 13:58:39', 1, '0', 'No Enviado'),
(8, '2021-12-09 14:11:14', 1, '0', 'No Enviado'),
(9, '2021-12-09 14:12:39', 1, '0', 'No Enviado'),
(10, '2021-12-09 15:41:01', 2, '0', 'No Enviado'),
(11, '2021-12-09 15:44:50', 1, '0', 'No Enviado'),
(12, '2021-12-09 15:49:06', 1, '0', 'No Enviado');

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

--
-- Volcado de datos para la tabla `shoppingcart`
--

INSERT INTO `shoppingcart` (`idshoppingcart`, `fkshopping`, `fkprofile`, `fkproduct`, `quantity`, `price`) VALUES
(1, 4, 2, 1, 2, '156'),
(2, 2, 2, 2, 4, '16'),
(6, 10, 3, 2, 1, '380'),
(8, 4, 2, 13, 1, '65'),
(9, 5, 2, 12, 1, '45'),
(10, 6, 2, 11, 1, '45'),
(11, 7, 2, 11, 1, '45'),
(12, 8, 2, 16, 2, '38'),
(13, 9, 2, 15, 1, '12'),
(15, 11, 2, 15, 1, '12'),
(16, 12, 2, 10, 1, '345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unittype`
--

CREATE TABLE `unittype` (
  `idunittype` int(11) NOT NULL,
  `unittype` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unittype`
--

INSERT INTO `unittype` (`idunittype`, `unittype`) VALUES
(1, 'Caja'),
(2, 'Sobre'),
(3, 'Botella');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `superadmin` smallint(1) DEFAULT 0,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(15) DEFAULT NULL,
  `bind_to_ip` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_confirmed` smallint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `confirmation_token`, `status`, `superadmin`, `created_at`, `updated_at`, `registration_ip`, `bind_to_ip`, `email`, `email_confirmed`) VALUES
(1, 'admin1', 'kz2px152FAWlkHbkZoCiXgBAd-S8SSjF', '$2y$13$PaGP8LVDelpMsoF1U1TXMu9suzjg48ExlYXz4VBjgkZlb94F3.wE2', NULL, 1, 1, 1426062188, 1638049909, NULL, '', '', 0),
(3, 'yesenia', 'rjM2FthDW4K7zNT6_aULgH3VXl-hzhxh', '$2y$13$pLLg4OBY4QKlvRZ2yttkKuoYF06mSng2S8tZHuwr9U/Gi8.ADOE7S', NULL, 1, 0, 1634872721, 1634872721, '::1', '', NULL, 0),
(4, 'cliente', 'AT5QKhYPf4qAMuyhADQwTobvPQn_RPwm', '$2y$13$tm6D1pR25/kIu5//ZyzM0..CKiVYUxlEj9eEs5q9h2xEQm9ANDH2i', NULL, 1, 1, 1638049796, 1638049796, '127.0.0.1', '', '', 0),
(5, 'vendedor', 'e-ik3V7rWs62Ef8mTrmdjZzE4v4naztN', '$2y$13$WnL4NYowIE3.iehUVNuor.9/cOyhErWEIZAK6qiqiaO4jjPQP3bzK', NULL, 1, 1, 1638049836, 1638049836, '127.0.0.1', '', '', 0),
(6, 'pablo', 'NBujvgTrxk0GhlIPCcfEqZuBztmi2XKT', '$2y$13$g014w0WnLhCp0kCnNlVB0Ol.8l8FgRxsPfjxaqLo9KG0D9e0jN6Ca', NULL, 1, 0, 1639158675, 1639158675, '127.0.0.1', '', NULL, 0),
(7, 'paola', 'mkdYks0z97H93L9_Y3XtZjACnG7XKI_q', '$2y$13$ZgkjNvQUJhK6iJBzbEyfhe7Rd4Hb4Zml/3/KMtaTY..5oSJxEBlxu', NULL, 1, 0, 1639160902, 1639160902, '127.0.0.1', '', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_visit_log`
--

CREATE TABLE `user_visit_log` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `language` char(2) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `visit_time` int(11) NOT NULL,
  `browser` varchar(30) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user_visit_log`
--

INSERT INTO `user_visit_log` (`id`, `token`, `ip`, `language`, `user_agent`, `user_id`, `visit_time`, `browser`, `os`) VALUES
(1, '617050dec8734', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 1, 1634750686, 'Chrome', 'Windows'),
(2, '617052bcba6e3', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 1, 1634751164, 'Chrome', 'Windows'),
(3, '617055105ea45', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 1, 1634751760, 'Chrome', 'Windows'),
(4, '617056532873d', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 1, 1634752083, 'Chrome', 'Windows'),
(5, '6170b770b0a61', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0', 1, 1634776944, 'Firefox', 'Windows'),
(6, '6170d86f0a732', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 1, 1634785391, 'Chrome', 'Windows'),
(7, '6170e0d2494f9', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0', 1, 1634787538, 'Firefox', 'Windows'),
(8, '6170e1cf72512', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0', 1, 1634787791, 'Firefox', 'Windows'),
(9, '61722171a4a1a', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 1, 1634869617, 'Chrome', 'Windows'),
(10, '61722d91d8230', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 3, 1634872721, 'Chrome', 'Windows'),
(11, '61722dba2c00a', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 3, 1634872762, 'Chrome', 'Windows'),
(12, '619532a847e0b', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 1, 1637167784, 'Chrome', 'Windows'),
(13, '619b0190df953', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 1, 1637548432, 'Chrome', 'Windows'),
(14, '619dd6e015c5d', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 1, 1637734112, 'Chrome', 'Windows'),
(15, '61a28bca4788e', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 1, 1638042570, 'Chrome', 'Windows'),
(16, '61a2a11038b27', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 1, 1638048016, 'Chrome', 'Windows'),
(17, '61a2a668be367', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', 1, 1638049384, 'Firefox', 'Windows'),
(18, '61a2a89b19882', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 1, 1638049947, 'Chrome', 'Windows'),
(19, '61a2c68907419', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 5, 1638057609, 'Chrome', 'Windows'),
(20, '61a59b94926bb', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 5, 1638243220, 'Chrome', 'Windows'),
(21, '61a59d4b7fa76', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 5, 1638243659, 'Chrome', 'Windows'),
(22, '61a5aabbc042b', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 5, 1638247099, 'Chrome', 'Windows'),
(23, '61a6ce124d707', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 5, 1638321682, 'Chrome', 'Windows'),
(24, '61a806739e8eb', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 5, 1638401651, 'Chrome', 'Windows'),
(25, '61a80674edda8', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 5, 1638401652, 'Chrome', 'Windows'),
(26, '61a8de1549ee9', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 5, 1638456853, 'Chrome', 'Windows'),
(27, '61a916c699406', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 5, 1638471366, 'Chrome', 'Windows'),
(28, '61af8c5665654', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 5, 1638894678, 'Chrome', 'Windows'),
(29, '61afb818559b2', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0', 4, 1638905880, 'Firefox', 'Windows'),
(30, '61afc17117cb3', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0', 5, 1638908273, 'Firefox', 'Windows'),
(31, '61aff8faa2e15', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 5, 1638922490, 'Chrome', 'Windows'),
(32, '61b10ccac0551', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 5, 1638993098, 'Chrome', 'Windows'),
(33, '61b1177890d0a', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', 4, 1638995832, 'Firefox', 'Windows'),
(34, '61b1613e854e2', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', 4, 1639014718, 'Firefox', 'Windows'),
(35, '61b23684cd98d', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', 4, 1639069316, 'Firefox', 'Windows'),
(36, '61b278213c315', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 4, 1639086113, 'Chrome', 'Windows'),
(37, '61b2787803d6f', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 4, 1639086200, 'Chrome', 'Windows'),
(38, '61b27d3e57c8d', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 4, 1639087422, 'Chrome', 'Windows'),
(39, '61b2a6ee5937d', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 4, 1639098094, 'Chrome', 'Windows'),
(40, '61b2ab2219ed8', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 4, 1639099170, 'Chrome', 'Windows'),
(41, '61b2ac35af906', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 4, 1639099445, 'Chrome', 'Windows'),
(42, '61b2b212b1fb5', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 4, 1639100946, 'Chrome', 'Windows'),
(43, '61b2bbb956636', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 5, 1639103417, 'Chrome', 'Windows'),
(44, '61b3939439225', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', 6, 1639158676, 'Firefox', 'Windows'),
(45, '61b39c4673daa', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', 7, 1639160902, 'Firefox', 'Windows'),
(46, '61b39cb26f7db', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', 7, 1639161010, 'Firefox', 'Windows'),
(47, '61b39d4b2ce82', '::1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 5, 1639161163, 'Chrome', 'Windows'),
(48, '61b3a2c6c0e62', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', 5, 1639162566, 'Firefox', 'Windows');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`),
  ADD KEY `fk_auth_item_group_code` (`group_code`);

--
-- Indices de la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indices de la tabla `auth_item_group`
--
ALTER TABLE `auth_item_group`
  ADD PRIMARY KEY (`code`);

--
-- Indices de la tabla `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

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
  ADD KEY `fk_card_bank_idx` (`fkbank`),
  ADD KEY `fkprofile` (`fkprofile`);

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
  ADD PRIMARY KEY (`idprofile`),
  ADD KEY `fkuser` (`fkuser`);

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
  ADD KEY `fkshoppingaddress` (`fkshoppingaddress`);

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
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bank`
--
ALTER TABLE `bank`
  MODIFY `idbank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `card`
--
ALTER TABLE `card`
  MODIFY `idcard` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `flavor`
--
ALTER TABLE `flavor`
  MODIFY `idflavor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `idproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
  MODIFY `idprofile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `shippingaddress`
--
ALTER TABLE `shippingaddress`
  MODIFY `idshippingaddress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `shopping`
--
ALTER TABLE `shopping`
  MODIFY `idshopping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `idshoppingcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `unittype`
--
ALTER TABLE `unittype`
  MODIFY `idunittype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `user_visit_log`
--
ALTER TABLE `user_visit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_ibfk_2` FOREIGN KEY (`group_code`) REFERENCES `auth_item_group` (`code`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_1` FOREIGN KEY (`fkprofile`) REFERENCES `profile` (`idprofile`),
  ADD CONSTRAINT `fk_card_bank` FOREIGN KEY (`fkbank`) REFERENCES `bank` (`idbank`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_flavor1` FOREIGN KEY (`fkflavor`) REFERENCES `flavor` (`idflavor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_unittype1` FOREIGN KEY (`fkunittype`) REFERENCES `unittype` (`idunittype`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`fkuser`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `shippingaddress`
--
ALTER TABLE `shippingaddress`
  ADD CONSTRAINT `fk_shippingaddress_profile1` FOREIGN KEY (`idprofile`) REFERENCES `profile` (`idprofile`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `shopping`
--
ALTER TABLE `shopping`
  ADD CONSTRAINT `shopping_ibfk_1` FOREIGN KEY (`fkshoppingaddress`) REFERENCES `shippingaddress` (`idshippingaddress`);

--
-- Filtros para la tabla `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD CONSTRAINT `fk_shoppingcart_product1` FOREIGN KEY (`fkproduct`) REFERENCES `product` (`idproduct`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_shoppingcart_profile1` FOREIGN KEY (`fkprofile`) REFERENCES `profile` (`idprofile`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_shoppingcart_shopping1` FOREIGN KEY (`fkshopping`) REFERENCES `shopping` (`idshopping`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD CONSTRAINT `user_visit_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
