-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-01-2023 a las 23:09:32
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ibcarsell2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristica`
--

CREATE TABLE `caracteristica` (
  `idCarac` int(11) NOT NULL,
  `motor` varchar(45) DEFAULT NULL,
  `kilometraje` varchar(45) DEFAULT NULL,
  `transmision` varchar(45) DEFAULT NULL,
  `combustible` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `caracteristica`
--

INSERT INTO `caracteristica` (`idCarac`, `motor`, `kilometraje`, `transmision`, `combustible`, `color`) VALUES
(40001, '4000', '25,346 km', 'Tiptronic', 'Gasolina', '	Gris Daytona'),
(40002, '1600', '51,827 km', 'Automática', 'Gasolina', '	azul'),
(40003, '1991', '28,098 km', 'Automática', 'Gasolina', '	blanco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cat_img` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_nombre`, `cat_img`, `estado`) VALUES
(20001, 'Sedán', 'sedan.svg', 'Activo'),
(20002, 'Coupé', 'city.svg', 'Activo'),
(20003, 'Hatchback', 'hatch.svg', 'Activo'),
(20004, 'Convertible', 'city.svg', 'Activo'),
(20005, 'Stagion Wagon', 'suv.svg', 'Activo'),
(20006, 'Deportivo', 'dep.svg', 'Activo'),
(20007, 'Arenero', 'fur.svg', 'Activo'),
(20008, 'Camioneta', 'cam.svg', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idmarca` int(11) NOT NULL,
  `nomMarca` varchar(60) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idmarca`, `nomMarca`, `estado`) VALUES
(10001, 'MAZDA', 'Activo'),
(10002, 'TOYOTA', 'Activo'),
(10003, 'PORSCHE', 'Activo'),
(10004, 'HYUNDAI', 'Activo'),
(10005, 'KIA', 'Activo'),
(10006, 'NISSAN', 'Activo'),
(10007, 'HONDA', 'Activo'),
(10008, 'AUDI', 'Activo'),
(10009, 'VOLKSWAGEN', 'Activo'),
(10010, 'MERCEDES BENZ', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id_vehiculo` int(11) NOT NULL,
  `modelo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `version` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `slug_vehiculo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `año` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `img_vehiculo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `idmarca` int(11) NOT NULL,
  `idCarac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id_vehiculo`, `modelo`, `version`, `slug_vehiculo`, `año`, `img_vehiculo`, `precio`, `estado`, `cat_id`, `idmarca`, `idCarac`) VALUES
(30001, 'RS7', 'Sportback Performance 4.0 TFSI quattro Tiptronic', 'sportback-performance-TFSI-quattro-tiptronic', '2016', 'audi-1.jpg', 30000, 'Activo', 20006, 10008, 40001),
(30002, 'Creta', 'GL 1.6', 'gl-1.6', '2020', '', 25400, 'Activo', 20008, 10008, 40002),
(30003, 'GLA', '	45 AMG', '45-amg', '2017', '', 23700, 'Activo', 20008, 10010, 40003),
(30004, 'Kia Rio', 'New Rio Sedán', 'new-rio-sedan', '2018', 'new-rio.jpg', 27000, 'Activo', 20001, 10005, 40003);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracteristica`
--
ALTER TABLE `caracteristica`
  ADD PRIMARY KEY (`idCarac`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idmarca`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id_vehiculo`,`cat_id`,`idmarca`,`idCarac`),
  ADD KEY `fk_vehiculo_categoria_idx` (`cat_id`),
  ADD KEY `fk_vehiculo_marca1_idx` (`idmarca`),
  ADD KEY `fk_vehiculo_Característica1_idx` (`idCarac`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `fk_vehiculo_Característica1` FOREIGN KEY (`idCarac`) REFERENCES `caracteristica` (`idCarac`),
  ADD CONSTRAINT `fk_vehiculo_categoria` FOREIGN KEY (`cat_id`) REFERENCES `categoria` (`cat_id`),
  ADD CONSTRAINT `fk_vehiculo_marca1` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
