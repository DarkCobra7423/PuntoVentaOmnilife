-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2021 a las 06:02:35
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

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
(1, 'admin', 'kz2px152FAWlkHbkZoCiXgBAd-S8SSjF', '$2y$13$PaGP8LVDelpMsoF1U1TXMu9suzjg48ExlYXz4VBjgkZlb94F3.wE2', NULL, 1, 1, 1426062188, 1634752216, NULL, '', '', 0);

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
(8, '6170e1cf72512', '127.0.0.1', 'es', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:94.0) Gecko/20100101 Firefox/94.0', 1, 1634787791, 'Firefox', 'Windows');

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
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user_visit_log`
--
ALTER TABLE `user_visit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  ADD CONSTRAINT `fk_shopping_profile1` FOREIGN KEY (`fkprofileseller`) REFERENCES `profile` (`idprofile`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
