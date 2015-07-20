-- phpMyAdmin SQL Dump
-- version 4.4.6.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-07-2015 a las 21:16:26
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Library`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Escritor`
--

CREATE TABLE IF NOT EXISTS `Escritor` (
  `id_escritor` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido_paterno` varchar(45) NOT NULL,
  `apellido_materno` varchar(45) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Escritor`
--

INSERT INTO `Escritor` (`id_escritor`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`) VALUES
(1, 'Diego', 'Hernandez', 'Fuentes', 24),
(2, 'Raul', 'Rojas', 'Vazquez', 22),
(3, 'Roberto', 'Huerta', 'Arriaga', 22),
(4, 'Karla', 'Dominguez', 'Herrera', 24),
(5, 'Valeria', 'Mejia', 'Samperio', 23),
(6, 'Anahi', 'Ramirez', 'Ramirez', 27),
(7, 'Fany', 'Ramos', 'Espinoza', 23),
(8, 'Angeles', 'Juarez', 'Garcia', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Libro`
--

CREATE TABLE IF NOT EXISTS `Libro` (
  `id_libro` int(11) NOT NULL,
  `noPaginas` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `Escritor_id_escritor` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Libro`
--

INSERT INTO `Libro` (`id_libro`, `noPaginas`, `titulo`, `genero`, `Escritor_id_escritor`) VALUES
(1, 130, 'Programacion en Python', 'Programacion', 1),
(2, 254, 'SQL', 'Bases de datos', 1),
(3, 221, 'AngularJS', 'Desarrollo Web', 1),
(4, 321, 'Programacion en C', 'Programacion', 1),
(5, 176, 'Bootstrap', 'Desarrollo Web', 1),
(6, 432, 'Redes', 'Redes', 2),
(7, 532, 'Modelo de redes TCP', 'Redes', 2),
(8, 532, 'Scala', 'Programacion', 2),
(9, 374, 'Mathcad', 'Programacion', 3),
(10, 564, 'Metodos Numericos', 'Matematicas', 3),
(11, 357, 'Acturaria', 'Matematicas', 3),
(12, 426, 'Ingneria Quimica', 'Quimica', 4),
(13, 634, 'Quimica a la practica', 'Quimica', 4),
(14, 634, 'Metodos matematicos en quimica', 'Matematicas', 5),
(15, 634, 'Laboratorio de Quimica', 'Quimica', 5),
(16, 634, 'Servicios web Java', 'Desarrollo web', 6),
(17, 634, 'Programacion en Ruby', 'Programacion', 6),
(18, 634, 'Mongodb', 'Bases de datos', 7),
(19, 634, 'Programacion Java', 'Programacion', 7),
(20, 634, 'Administracion Publica', 'Administracion', 8),
(21, 634, 'Ciencias Politicas', 'Ciencias Sociales', 8),
(22, 634, 'Administracion Publica en la Politica', 'Ciencias Sociales', 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Escritor`
--
ALTER TABLE `Escritor`
  ADD PRIMARY KEY (`id_escritor`);

--
-- Indices de la tabla `Libro`
--
ALTER TABLE `Libro`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `fk_Libro_Escritor_idx` (`Escritor_id_escritor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Escritor`
--
ALTER TABLE `Escritor`
  MODIFY `id_escritor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `Libro`
--
ALTER TABLE `Libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Libro`
--
ALTER TABLE `Libro`
  ADD CONSTRAINT `fk_Libro_Escritor` FOREIGN KEY (`Escritor_id_escritor`) REFERENCES `Escritor` (`id_escritor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
