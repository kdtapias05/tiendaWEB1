-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2020 a las 03:52:28
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admin_productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `marca` text NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `marca`, `precio`, `descripcion`) VALUES
(1, 'Maderito', 'On Feeling', 25000, 'Materito de madera, con grabado personalizado en una cara e incluye una planta'),
(2, 'Terrario Manzana', 'On Feeling', 40000, 'Terrario en forma de manzana, incluye 4 plantas, piedras decorativas,se puede ubicar sobre una superficie plana o colgar'),
(3, 'Terrario Mediano', 'On Feeling', 40000, 'Terrario en forma circular, incluye 5 plantas y se puede colgar'),
(4, 'Ceramicas Animalitos', 'On Feeling', 20000, 'Materitos en ceramica, con variados diseños de animalitos, incluye 1 planta'),
(5, 'Materita Groot', 'On Feeling', 23000, 'Materita de ceramica en forma de Groot en diferentes diseños, incluye 1 planta'),
(6, 'Burbuja Mini', 'On Feeling', 17000, 'Burbuja de vidrio en tamaño pequeño, incluye 1 planta y piedra decorativa'),
(7, 'Velon Diagonal', 'On Feeling', 28000, 'Velon corte diagonal de vidrio, incluye 3 plantas y piedras decorativas'),
(8, 'Terrario Grande', 'On Feeling', 50000, 'Terrario en forma circular, incluye 7 plantas, piedra decorativa y se puede colgar'),
(9, 'Materita Perro', 'On Feeling', 23000, 'Materita en ceramica, en variados diseños de perritos, incluye 1 planta'),
(10, 'Materita Corazon', 'On Feeling', 22000, 'Materita en ceramica, con diseño en forma de corazon, incluye 3 plantas'),
(11, 'Materita Buda', 'On Feeling', 20000, 'Materita en ceramica, con diseño de buda, color a eleccion, incluye 1 planta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
