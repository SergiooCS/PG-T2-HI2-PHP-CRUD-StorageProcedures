-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2022 a las 22:16:44
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `programacion`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarUsuarios` (IN `u_nombre` VARCHAR(50))  DELETE FROM usuarios WHERE `usuarios`.`nombre` = u_nombre$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarUsuarios` (IN `u_nombre` VARCHAR(50), IN `u_email` VARCHAR(150), IN `u_contraseña` VARCHAR(150), IN `u_repetir_contraseña` VARCHAR(150), IN `u_foto` TEXT)  INSERT INTO usuarios (nombre, email, contraseña, repetir_contraseña, foto) VALUES (u_nombre, u_email, u_contraseña, u_repetir_contraseña, u_foto)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUsuarios` (IN `u_nombre` VARCHAR(50), IN `u_email` VARCHAR(150))  UPDATE usuarios SET nombre = u_nombre, email = u_email WHERE u_nombre = nombre AND u_email = email$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contraseña` varchar(150) NOT NULL,
  `repetir_contraseña` varchar(150) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `contraseña`, `repetir_contraseña`, `foto`) VALUES
(18, 'fghj', 'pepe@gmail.com', 'jgh', 'ghj', 'http://pepe.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
