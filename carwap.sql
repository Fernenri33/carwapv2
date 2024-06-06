-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2024 a las 14:30:36
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carwap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE `autos` (
  `ID` int(11) NOT NULL,
  `Modelo` varchar(255) DEFAULT NULL,
  `Marca` varchar(255) DEFAULT NULL,
  `Año` int(11) DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL,
  `Descripción` text DEFAULT NULL,
  `ImagenURL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`ID`, `Modelo`, `Marca`, `Año`, `Precio`, `Descripción`, `ImagenURL`) VALUES
(1, 'Civic', 'Honda', 2020, 69900.00, 'Le falta un espejo', 'img\\_99f71b4a-5271-47fa-bdc1-5f9cef86b1e9.jpg'),
(3, 'Yaris', 'Toyota', 2019, 80000.00, 'Requerirá cambio de pintura', 'img\\_105a49e0-855d-43a7-b6b3-a27ca91694e6.jpg'),
(4, 'Corolla', 'Toyota', 2021, 70000.00, 'Asientos en buen estado', 'img\\_2330a201-0132-4bb8-bdca-50535d4be11a.jpg'),
(5, 'Corolla', 'Toyota', 2021, 70000.00, 'Asientos en buen estado', 'img\\_4399b193-6f32-42d5-8936-5be46575bd86.jpg'),
(6, 'Corolla', 'Toyota', 2021, 70000.00, 'Asientos en buen estado', 'img\\_ee91f98f-2458-4bc8-83f7-90a9b0f8d34f.jpeg'),
(7, 'Corolla', 'Toyota', 2021, 70000.00, 'Asientos en buen estado', 'img\\_b7daae6d-b8f6-43c3-a94d-5131ccd242be.jpeg'),
(8, 'Cruze', 'Chevrolet', 2018, 75000.00, 'Recién pintado', 'img\\_cfca99d5-9770-43c2-91cd-a07445db407e.jpeg'),
(9, 'Versa', 'Nissan', 2020, 68000.00, 'Único dueño, bien cuidado', 'img\\_bcd8143b-9d08-4a5e-8b70-04fab618e160.jpeg'),
(10, 'Maxima', 'Nissan', 2017, 70000.00, 'Interior impecable', 'img\\_8caa0828-0051-42c6-b057-fd6f4e6b9fbf.jpeg'),
(11, 'Jetta', 'Volkswagen', 2018, 82700.00, 'Le falta un espejo', 'img\\_671775fe-fa1f-47bf-bbee-515b4f20b404.jpeg'),
(12, 'Golf', 'Volkswagen', 2018, 82700.00, 'Cambio de pintura reciente', 'img\\_49fef3db-4cbc-41d2-b16f-19fc1497d3eb.jpeg'),
(13, 'MX-5', 'Mazda', 2020, 9900.00, 'Se le puso un turbo', 'img\\_8f7f0259-b080-4b81-bce6-a41b7126567e.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos_tags`
--

CREATE TABLE `autos_tags` (
  `AutoID` int(11) DEFAULT NULL,
  `TagID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autos_tags`
--

INSERT INTO `autos_tags` (`AutoID`, `TagID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `UsuarioID` int(11) DEFAULT NULL,
  `AutoID` int(11) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `UsuarioID`, `AutoID`, `Precio`) VALUES
(3, 1, 4, 70000),
(17, 1, 1, 69900),
(19, 1, 12, 82700);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `UsuarioID` int(11) DEFAULT NULL,
  `AutoID` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `FechaCompra` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`UsuarioID`, `AutoID`, `Cantidad`, `FechaCompra`) VALUES
(1, 1, 1, '2024-02-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `ID` int(11) NOT NULL,
  `Tag` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`ID`, `Tag`) VALUES
(1, 'Gasolina'),
(2, 'Deportivo'),
(3, 'Familiar'),
(4, 'Diésel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Contraseña` char(64) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Email`, `Contraseña`, `apellidos`) VALUES
(1, 'Juan José', 'juan.perez@example.com', '987654321', 'Perez Espinoza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_tags`
--

CREATE TABLE `usuarios_tags` (
  `UsuarioID` int(11) DEFAULT NULL,
  `TagID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios_tags`
--

INSERT INTO `usuarios_tags` (`UsuarioID`, `TagID`) VALUES
(1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `autos_tags`
--
ALTER TABLE `autos_tags`
  ADD KEY `AutoID` (`AutoID`),
  ADD KEY `TagID` (`TagID`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UsuarioID` (`UsuarioID`),
  ADD KEY `AutoID` (`AutoID`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD KEY `UsuarioID` (`UsuarioID`),
  ADD KEY `AutoID` (`AutoID`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios_tags`
--
ALTER TABLE `usuarios_tags`
  ADD KEY `UsuarioID` (`UsuarioID`),
  ADD KEY `TagID` (`TagID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autos`
--
ALTER TABLE `autos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autos_tags`
--
ALTER TABLE `autos_tags`
  ADD CONSTRAINT `autos_tags_ibfk_1` FOREIGN KEY (`AutoID`) REFERENCES `autos` (`ID`),
  ADD CONSTRAINT `autos_tags_ibfk_2` FOREIGN KEY (`TagID`) REFERENCES `tags` (`ID`);

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`ID`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`AutoID`) REFERENCES `autos` (`ID`);

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`ID`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`AutoID`) REFERENCES `autos` (`ID`);

--
-- Filtros para la tabla `usuarios_tags`
--
ALTER TABLE `usuarios_tags`
  ADD CONSTRAINT `usuarios_tags_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`ID`),
  ADD CONSTRAINT `usuarios_tags_ibfk_2` FOREIGN KEY (`TagID`) REFERENCES `tags` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
