-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2023 a las 01:47:37
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `ID_contacto` int(11) NOT NULL,
  `nombre` tinytext NOT NULL,
  `correo` varchar(80) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `comentarios` text NOT NULL,
  `fecha` date NOT NULL,
  `rol` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`ID_contacto`, `nombre`, `correo`, `celular`, `comentarios`, `fecha`, `rol`) VALUES
(2, '$name', '$email', '$phone', '$comments', '2023-02-18', ''),
(3, 'asf', 'ags@hotmail.com', 'asg', 'asg', '2023-02-22', ''),
(4, 'asfasgf', 'chaparubio777@hotmail.com', 'asgf', 'asfasf', '2023-02-22', ''),
(5, 'asfasf', 'chaparubio777@hotmail.com', '124145124', 'afsasfa', '2023-02-23', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `ID_galeria` int(12) NOT NULL,
  `imagen` varchar(90) NOT NULL,
  `nombreimagen` varchar(80) NOT NULL,
  `mostrar` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`ID_galeria`, `imagen`, `nombreimagen`, `mostrar`) VALUES
(1, 'ALBA_WEB_ELEMENTS-23.png', 'asafasf', 'Si'),
(3, 'ALBA_WEB_ELEMENTS-25.png', '$titulo1', 'Si'),
(4, 'ALBA_WEB_ELEMENTS-30.png', 'Foco', 'Si'),
(5, 'ALBA_WEB_ELEMENTS-29.png', 'Lampara', 'No'),
(6, 'ALBA_WEB_ELEMENTS-26.png', 'Pasillo Rosado', 'No'),
(7, 'ALBA_WEB_ELEMENTS-24.png', 'asfasf', 'No'),
(9, 'ALBA_WEB_ELEMENTS-27.png', 'asfasgfag', 'No'),
(11, 'ALBA_WEB_ELEMENTS-23.png', 'asfasfa', 'No'),
(12, 'ALBA_WEB_ELEMENTS-25.png', 'asfasf', 'No'),
(14, 'ALBA_WEB_ELEMENTS-24.png', 'asfasf', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_usuario` int(11) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `apellidos` varchar(90) NOT NULL,
  `cargo` varchar(80) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `clave` varchar(90) NOT NULL,
  `foto` varchar(90) NOT NULL,
  `qr` varchar(90) NOT NULL,
  `usuario` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_usuario`, `nombre`, `apellidos`, `cargo`, `celular`, `correo`, `clave`, `foto`, `qr`, `usuario`) VALUES
(1, 'Milton Jair', 'Rubio Juárez', 'Becario', '2382115594', 'a@gmail.com', 'ea', 'foto.jpg', '[value-8]', 'Milton_JairRuz'),
(2, '[value-2]', '[value-3]', 'CEO', '[value-5]', 'i@gmail.com', 'ea', 'foto.jpg', '[value-8]', '[value-2][v]'),
(3, 'Oswaldo ', 'Vega Gonzalez', 'Familia Alba', '2381124142', 'o@gmail.com', 'ea', '', 'qr', 'Oswaldo_Vez'),
(4, 'Mario Alberto', 'Tort Becerril', 'CEO ', '23812415', 'm@gmail.com', 'ea', '', 'qr', 'Mario_AlbertoTol'),
(5, 'asfasf', 'asfasf', 'Familia Alba', '12415', 'o2@gmail.com', 'ea', '', 'qr', 'asfasfasf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`ID_contacto`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`ID_galeria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `ID_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `ID_galeria` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
