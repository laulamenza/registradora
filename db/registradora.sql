-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2022 a las 23:24:22
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registradora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `librodiario`
--

CREATE TABLE `librodiario` (
  `id` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `tipoVenta` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `librodiario`
--

INSERT INTO `librodiario` (`id`, `monto`, `tipoVenta`, `fecha`) VALUES
(1, 3, 'efectivo', '2012-07-22'),
(2, 4, 'efectivo', '2012-07-22'),
(3, 7, 'efectivo', '2012-07-22'),
(4, 7, 'qr', '2012-07-22'),
(5, 5, 'tarjeta', '2012-07-22'),
(6, 600, 'efectivo', '2012-07-22'),
(7, 2, 'efectivo', '2007-12-22'),
(8, 5, 'efectivo', '2022-12-07'),
(9, 5, 'efectivo', '2022-12-07'),
(10, 10, 'efectivo', '2022-12-07'),
(11, 10, 'efectivo', '2022-12-07'),
(12, 10, 'efectivo', '2022-12-07'),
(13, 500, 'efectivo', '2022-12-08'),
(14, 600, 'qr', '2022-12-08'),
(15, 8800, 'tarjeta', '2022-12-08'),
(16, 8800, 'tarjeta', '2022-12-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libroz`
--

CREATE TABLE `libroz` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantVentasEfectivo` int(11) NOT NULL,
  `cantVentasOtras` int(11) NOT NULL,
  `montoEfectivo` int(11) NOT NULL,
  `montoOtras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `librodiario`
--
ALTER TABLE `librodiario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libroz`
--
ALTER TABLE `libroz`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `librodiario`
--
ALTER TABLE `librodiario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `libroz`
--
ALTER TABLE `libroz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
