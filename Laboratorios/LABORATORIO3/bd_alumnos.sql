-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 25-04-2024 a las 01:44:29
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `fotografia` varchar(100) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `cu` varchar(15) NOT NULL,
  `sexo` char(1) DEFAULT NULL,
  `id_carrera` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `fotografia`, `nombres`, `apellidos`, `cu`, `sexo`, `id_carrera`) VALUES
(35, '66297aa8dfacb.jpg', '314705498_1842801536113696_576', 'Salinas', '35-5252', 'F', 1),
(36, '66297b001e929.png', 'DANNERCITOx2', 'Salinas', '35-5252', 'F', 1),
(37, '66297e5ed9759.png', 'Incididunt enim accu111', 'Ut sed optio illo a', 'Aut id expedita', 'M', 2),
(38, '66297e5edc5c6.jpg', 'Minim neque soluta c2222', 'Omnis rerum quos aut', 'Quaerat animi s', 'F', 1),
(39, '66297ec987380.png', 'Quae et dolor quasi 3333', 'Praesentium quae ad ', 'Pariatur Ipsam ', 'F', 1),
(40, '66297ec989d9b.jpg', 'Dignissimos sed exce44444', 'Et deleniti architec', 'Aliquip accusan', 'F', 2),
(41, '66297f0913c40.png', 'Quae et dolor quasi 3333', 'Praesentium quae ad ', 'Pariatur Ipsam ', 'F', 1),
(42, '66297f09161ce.jpg', 'Dignissimos sed exce44444', 'Et deleniti architec', 'Aliquip accusan', 'F', 2),
(43, '66297fcec1139.png', 'Laudantium sit tem', 'Nostrum maiores sit', 'Aut pariatur Ad', 'M', 1),
(44, '662980233ed29.png', 'Cum fugiat tenetur n', 'Veritatis pariatur ', 'Deserunt quo ve', 'M', 1),
(45, '6629804cd8b41.png', 'Cum fugiat tenetur n', 'Veritatis pariatur ', 'Deserunt quo ve', 'M', 1),
(46, '662982e29d9c1.png', 'Voluptatem Eius ut ', 'Neque fugiat officia', 'Praesentium ex ', 'F', 1),
(47, '66298333b1d3c.png', 'Deserunt commodo ear', 'Magni nobis officia ', 'Sint illo neque', 'F', 1),
(48, '66298333b3486.png', 'Soluta et tempore t', 'Reiciendis eos imped', 'Provident velit', 'M', 2),
(49, '662983c5ef24a.png', 'Deserunt commodo ear', 'Magni nobis officia ', 'Sint illo neque', 'F', 1),
(50, '662983c5f089e.png', 'Soluta et tempore t', 'Reiciendis eos imped', 'Provident velit', 'M', 2),
(51, '662984d6d9efc.png', '', '', '', '', 1),
(52, '662984d6dc3e2.png', '', '', '', '', 1),
(53, '66298648cfa4c.png', 'Rerum eum et do quis', 'Laudantium nobis do', 'Consequatur Mol', 'M', 1),
(54, '66298648d0f56.png', 'Nihil facere velit e', 'Itaque occaecat cumq', 'Non cillum non ', 'F', 2),
(55, '66298648d1db8.jpg', 'Fugit cumque porro ', 'Molestias adipisci c', 'Dolorum debitis', 'F', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `carrera` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `carrera`) VALUES
(1, 'Ing. sistemas'),
(2, 'Medicina');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_carrera` (`id_carrera`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
