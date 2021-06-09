-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-06-2021 a las 00:27:10
-- Versión del servidor: 10.3.29-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `promay20_hotelbosque`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acompañantes`
--

CREATE TABLE `acompañantes` (
  `id_huesped` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `edad` int(3) NOT NULL,
  `sexo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `contrasena` varchar(16) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nombre`, `contrasena`, `email`) VALUES
(1, 'Julio Antonio Diaz Robles', '123', 'julio@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `edad` int(3) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `seccion` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre`, `edad`, `sexo`, `seccion`, `cargo`) VALUES
(3, 'Andres Meza Rodriguez', 40, 'Masculino', 'seccion4', 'Valet parking'),
(4, 'Laura Crescencio Gomez', 34, 'Masculino', 'seccion3', 'Recepcionista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habfecha`
--

CREATE TABLE `habfecha` (
  `fecha` date NOT NULL,
  `id_habitacion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `habfecha`
--

INSERT INTO `habfecha` (`fecha`, `id_habitacion`) VALUES
('2021-06-09', 4),
('2021-06-10', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id_habitacion` int(10) NOT NULL,
  `numero` int(3) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `piso` int(2) NOT NULL,
  `capacidad` int(2) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id_habitacion`, `numero`, `estado`, `piso`, `capacidad`, `descripcion`, `precio`) VALUES
(1, 1, 'Libre', 2, 3, '1 Cama king size, 1 cama individual,  2 baños, 1 balcon', 800),
(2, 2, 'Libre', 2, 3, '1 Cama matrimonial, 1 cama individual, 1 baño, 1 balcon', 500),
(3, 3, 'Ocupada', 2, 4, '1 Cama king size, 1 cama individual,  2 baï¿½os, 1 balcon', 800),
(4, 4, 'Libre', 2, 2, '1 Cama matrimonial, 1 baï¿½o, 1 balcon', 350),
(5, 5, 'Libre', 2, 3, '1 Cama matrimonial, 1 cama individual, 1 baño, 1 balcon', 500),
(6, 6, 'Libre', 10, 3, '1 Cama king size, 1 baï¿½o, 1 balcon', 600),
(7, 7, 'Libre', 2, 3, '1 Cama matrimonial, 1 cama individual, 1 baño, 1 balcon', 500),
(8, 8, 'Libre', 2, 3, '1 Cama king size, 1 baño, 1 balcon', 600),
(9, 9, 'Libre', 2, 3, '1 Cama matrimonial, 1 cama individual, 1 baño, 1 balcon', 500),
(10, 10, 'Libre', 2, 3, '1 Cama king size, 1 baño, 1 balcon', 600),
(11, 11, 'Libre', 2, 3, '1 Cama matrimonial, 1 cama individual, 1 baño, 1 balcon', 500),
(12, 12, 'Libre', 2, 3, '1 Cama king size, 1 baño, 1 balcon', 600),
(13, 13, 'Libre', 2, 3, '1 Cama matrimonial, 1 cama individual, 1 baño, 1 balcon', 500),
(14, 14, 'Libre', 2, 3, '1 Cama matrimonial, 1 cama individual, 1 baño, 1 balcon', 500),
(15, 15, 'Libre', 2, 3, '1 Cama king size, 1 baño, 1 balcon', 600),
(16, 16, 'Libre', 2, 3, '1 Cama matrimonial, 1 cama individual, 1 baño, 1 balcon', 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huesped`
--

CREATE TABLE `huesped` (
  `id_huesped` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `edad` int(3) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `contrasena` varchar(16) NOT NULL,
  `apellidos` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `huesped`
--

INSERT INTO `huesped` (`id_huesped`, `nombre`, `edad`, `sexo`, `email`, `telefono`, `ciudad`, `contrasena`, `apellidos`) VALUES
(1, 'Aldair', 21, 'Masculino', '123', '21313213', 'Orizaba', '456', 'Caballero'),
(2, 'Sergio', 21, 'valor1', 'dunc4nf1r3@gmail.com', '25792135', 'Orizaba', '12345', 'Lopez'),
(3, 'Braulio', 21, 'Masculino', 'lauxrobi@gmail.com', '3499867761', 'Canada', '54321', 'Montalvo'),
(4, 'Julian Casablancas', 41, 'Masculino', 'julian@gmail.com', '45898237', 'Paris', '12345', 'McGregor'),
(5, 'Pepe', 22, 'Masculino', 'peps@gmail.com', '18878', 'Mintatitlan', '9988', 'Pecas'),
(6, 'Uri', 21, 'Masculino', 'u@gmail.com', '1112222', 'Orizaba', '1122', 'Casas'),
(7, 'Lalo', 22, 'Masculino', 'lalo@gmail.com', '1221', 'Orizaba', '112', 'Casillas'),
(8, 'Pablo', 35, 'Masculino', 'alboran@gmail.com', '443563', 'Madrid', '4455', 'Alboran'),
(9, 'Pablo', 23, 'Masculino', 'pablosanchez@gmail.com', '214324234', 'Cordoba', '12345', 'Sanchez'),
(10, 'Pedrito', 44, 'Masculino', 'Fernandez@gmail.com', '552234', 'Zacatecas', '13343', 'fernandez'),
(12, 'Gerardo', 84, 'Masculino', 'gon@gmail.com', '113342', 'Guadalajara', '4444', 'Gonzalez'),
(13, 'Pedro', 25, 'Masculino', 'julio@gmail.com', '111', 'Orizaba', 'Orizaba', 'El Malo'),
(14, 'Orlando', 45, 'Masculino', 'or@gmail.com', '3384756', 'Moscu', '4476', 'Casinski'),
(15, 'Raul', 81, 'Masculino', 'raulsando@gmail.com', '2725782349', 'Rio Blanco', '12345', 'Sandoval Castro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcionista`
--

CREATE TABLE `recepcionista` (
  `id_recepcionista` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `edad` int(3) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `contrasena` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recepcionista`
--

INSERT INTO `recepcionista` (`id_recepcionista`, `nombre`, `edad`, `sexo`, `contrasena`, `email`) VALUES
(1, 'Juan Carlos Bodoque', 35, 'Masculino', '12345', 'bodoque@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `id_reservacion` int(10) NOT NULL,
  `id_huesped` int(10) NOT NULL,
  `id_habitacion` int(10) NOT NULL,
  `cantidad_noches` int(5) NOT NULL,
  `cant_personas` int(2) NOT NULL,
  `total` float NOT NULL,
  `fechaIn` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acompañantes`
--
ALTER TABLE `acompañantes`
  ADD KEY `FKAcompañant60275` (`id_huesped`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `habfecha`
--
ALTER TABLE `habfecha`
  ADD KEY `FKhabfecha151100` (`id_habitacion`) USING BTREE;

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id_habitacion`);

--
-- Indices de la tabla `huesped`
--
ALTER TABLE `huesped`
  ADD PRIMARY KEY (`id_huesped`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telefono` (`telefono`);

--
-- Indices de la tabla `recepcionista`
--
ALTER TABLE `recepcionista`
  ADD PRIMARY KEY (`id_recepcionista`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD PRIMARY KEY (`id_reservacion`),
  ADD KEY `FKReservacio747241` (`id_huesped`),
  ADD KEY `FKReservacio25783` (`id_habitacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id_habitacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `huesped`
--
ALTER TABLE `huesped`
  MODIFY `id_huesped` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `recepcionista`
--
ALTER TABLE `recepcionista`
  MODIFY `id_recepcionista` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  MODIFY `id_reservacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acompañantes`
--
ALTER TABLE `acompañantes`
  ADD CONSTRAINT `FKAcompañant60275` FOREIGN KEY (`id_huesped`) REFERENCES `huesped` (`id_huesped`);

--
-- Filtros para la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD CONSTRAINT `FKReservacio25783` FOREIGN KEY (`id_habitacion`) REFERENCES `habitacion` (`id_habitacion`),
  ADD CONSTRAINT `FKReservacio747241` FOREIGN KEY (`id_huesped`) REFERENCES `huesped` (`id_huesped`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
