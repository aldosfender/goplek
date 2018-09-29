-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2018 a las 21:23:25
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `foodorange`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentos`
--

CREATE TABLE `alimentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `costo` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`id`, `nombre`, `costo`, `descripcion`, `foto`) VALUES
(1, 'pepperoni', 135, 'Simplemente la mejor combinación: Pepperoni y Queso', 'pepperoni.jpg'),
(2, 'vegetariana', 105, 'Solo para vegetarianos: Jitomate, Cebolla, Pimiento Verde, Aceitunas Negras y Champiñones', 'vegan.jpg'),
(3, 'carnes', 195, 'Deliciosa combinación: Carne de Res, Carne de Puerco, Cebolla, Pimiento Verde y Champiñón', 'carnes_frias.jpg'),
(4, 'Tostada de pollo', 23, 'Platillo típico mexicano, las cuales tienen como base la tortilla frita. ', 'tostadaspollo.jpg'),
(5, 'Orden de chalupas', 35, 'Tortilla, salsa (verde o roja), carne (de res, pollo o cerdo) y (crema, queso, cebolla o cilantro).', 'chalupas.jpg'),
(6, 'Enmoladas', 60, 'Tortilla bañada en mole poblano (mole dulce) con queso y longaniza', 'fname_1523993228.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_pedido`
--

CREATE TABLE `detalles_pedido` (
  `Alimentos_id` int(11) NOT NULL,
  `Pedido_id` int(11) NOT NULL,
  `unidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_pedido`
--

INSERT INTO `detalles_pedido` (`Alimentos_id`, `Pedido_id`, `unidades`) VALUES
(1, 1, 1),
(1, 3, 1),
(1, 4, 3),
(1, 5, 1),
(1, 12, 1),
(2, 3, 1),
(2, 4, 3),
(2, 5, 1),
(2, 9, 1),
(2, 10, 1),
(3, 4, 5),
(3, 7, 1),
(4, 2, 1),
(4, 11, 1),
(5, 8, 3),
(5, 11, 2),
(6, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `Alimentos_id` int(11) NOT NULL,
  `Usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`Alimentos_id`, `Usuario_id`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 5),
(5, 5),
(6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `costo_total` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `Usuario_cliente` int(11) NOT NULL,
  `Usuario_restaurante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `costo_total`, `status`, `Usuario_cliente`, `Usuario_restaurante`) VALUES
(1, 135, 'pendiente', 1, 2),
(2, 83, 'pendiente', 8, 5),
(3, 240, 'pendiente', 4, 2),
(4, 1695, 'pendiente', 6, 2),
(5, 240, 'pendiente', 1, 2),
(6, 240, 'pendiente', 4, 2),
(7, 195, 'pendiente', 4, 2),
(8, 105, 'pendiente', 6, 5),
(9, 105, 'pendiente', 9, 2),
(10, 105, 'pendiente', 10, 2),
(11, 93, 'pendiente', 11, 5),
(12, 135, 'pendiente', 12, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `matricula` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nivel` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `matricula`, `telefono`, `password`, `nivel`, `foto`) VALUES
(1, 'Aldo Soto', '201223346', '2461118747', 'aldo', 3, ''),
(2, 'Pizzas Castillo', '11111', '123456', 'pizzas', 2, 'pizza_castillo.jpg'),
(3, 'admin', '00000', '00000', 'admin', 1, ''),
(4, 'Fernando Cerna', '0321', '0321', 'fer', 3, ''),
(5, 'Antojitos Mexicanos', '1111111', '35353535', 'tostadas', 2, 'mexican.jpg'),
(6, 'gabinepe', '2012321312213', '0122252627282930', 'gabinepe', 3, ''),
(7, 'Cafeteria Admin Buap', '2222222', '9999999', 'cafeadmin', 2, 'cafe_admin.jpg'),
(8, 'Steven Gerrard', '8', '8', 'lfc', 3, ''),
(9, 'Blanca Barbosa', '1963', '2360700', '1530', 3, ''),
(10, 'Erick Portillo', '52525252', '52525252', 'erick', 3, ''),
(11, 'Erika Mtz', '123456789', '222222221425', 'hola123', 3, ''),
(12, 'Gaby', '1919', '1919', 'gaby', 3, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles_pedido`
--
ALTER TABLE `detalles_pedido`
  ADD PRIMARY KEY (`Alimentos_id`,`Pedido_id`),
  ADD KEY `fk_Alimentos_has_Pedido_Pedido1_idx` (`Pedido_id`),
  ADD KEY `fk_Alimentos_has_Pedido_Alimentos1_idx` (`Alimentos_id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Alimentos_id`,`Usuario_id`),
  ADD KEY `fk_Alimentos_has_Usuario_Usuario1_idx` (`Usuario_id`),
  ADD KEY `fk_Alimentos_has_Usuario_Alimentos_idx` (`Alimentos_id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`,`Usuario_cliente`,`Usuario_restaurante`),
  ADD KEY `fk_Pedido_Usuario1_idx` (`Usuario_cliente`),
  ADD KEY `fk_Pedido_Usuario2_idx` (`Usuario_restaurante`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `matricula_UNIQUE` (`matricula`),
  ADD UNIQUE KEY `telefono_UNIQUE` (`telefono`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles_pedido`
--
ALTER TABLE `detalles_pedido`
  ADD CONSTRAINT `fk_Alimentos_has_Pedido_Alimentos1` FOREIGN KEY (`Alimentos_id`) REFERENCES `alimentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alimentos_has_Pedido_Pedido1` FOREIGN KEY (`Pedido_id`) REFERENCES `pedido` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_Alimentos_has_Usuario_Alimentos` FOREIGN KEY (`Alimentos_id`) REFERENCES `alimentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Alimentos_has_Usuario_Usuario1` FOREIGN KEY (`Usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_Pedido_Usuario1` FOREIGN KEY (`Usuario_cliente`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pedido_Usuario2` FOREIGN KEY (`Usuario_restaurante`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
