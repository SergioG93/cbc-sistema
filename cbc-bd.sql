-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2021 a las 23:26:16
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cbc-bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `alumno_id` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `apellido` text DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`alumno_id`, `nombre`, `apellido`, `edad`, `direccion`, `cedula`, `telefono`, `correo`, `fecha_nac`, `estatus`) VALUES
(9, 'Sergio', 'Garza', 15, 'Circuito la calma 212', '123456', 6646973356, 'sergio.saga93@gmail.com', '2021-10-11', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--

CREATE TABLE `aula` (
  `aula_id` int(11) NOT NULL,
  `nombre_aula` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `curso_id` int(11) NOT NULL,
  `materia_id` int(11) DEFAULT NULL,
  `profesor_id` int(11) DEFAULT NULL,
  `estatusC` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`curso_id`, `materia_id`, `profesor_id`, `estatusC`) VALUES
(111, 1, 6, 1),
(112, 11, 6, 1),
(113, 18, 6, 1),
(114, 19, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `inscripcion_id` int(11) NOT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `turno_id` int(11) NOT NULL,
  `estatusI` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`inscripcion_id`, `alumno_id`, `curso_id`, `turno_id`, `estatusI`) VALUES
(70, 9, 113, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `materia_id` int(11) NOT NULL,
  `nombre_materia` varchar(255) DEFAULT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`materia_id`, `nombre_materia`, `estatus`) VALUES
(1, 'Programacion', 2),
(11, 'Base de Datos II', 1),
(13, 'ingles', 0),
(14, 'Matematicas', 0),
(15, 'Matematicas II', 0),
(16, 'Ingles', 1),
(17, 'Español', 1),
(18, 'Salon 3D', 1),
(19, 'Algebra', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `profesor_id` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `apellido` text DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `nivel_est` text DEFAULT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`profesor_id`, `nombre`, `apellido`, `direccion`, `cedula`, `telefono`, `correo`, `nivel_est`, `estatus`) VALUES
(6, 'Sergio', 'Garza', 'Circuito la calma 212', '1234567', 6646973356, 'sergio.saga93@gmail.com', 'Secu', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `nombre_rol` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `turno_id` int(11) NOT NULL,
  `tipo_turno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`turno_id`, `tipo_turno`) VALUES
(1, 'Matutino'),
(2, 'Vespertino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user_id` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `estatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `nombre`, `usuario`, `password`, `rol`, `estatus`) VALUES
(39, 'Sergio', 'ser01', '$2y$10$WfjlxsSmWGgHPbeNjGQ0XegcDwfzc9gdSO9wpfRJKknrfHQQytfL6', 1, 1),
(40, 'Mauricio', 'asdf', '$2y$10$6jpCAKZjQJKHs6vYzheD2ec8atsMIRUWXEzU9s3FTUYI9HpsqmLyO', 2, 0),
(41, 'Mauricio', 'mau01', '$2y$10$ck1yxAu4NS4qRxexlNEJxO7ZI1AliwJPl1zHWGV7SbZJ54VmkXkvS', 1, 1),
(42, 'Miriam', 'mir01', '$2y$10$fzHDeil5P1ddWAc4nxCj3uU19xE98n9LekQmtHe48streAZE49r4C', 2, 1),
(43, 'Hector', 'hec01', '$2y$10$4hzToIbql2Q3TK8e.9yFj.Eakok0k.cnhX7z7Fhd9b8hz/WvyPq6m', 1, 0),
(44, 'Oscar', 'osc', '$2y$10$bDMaYasB4LGBbNZ9kyk.9eM/ayLnK2cI0v2qQJ/euHzb.F7.t5fu6', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`alumno_id`);

--
-- Indices de la tabla `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`aula_id`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`curso_id`),
  ADD KEY `curso_ibfk_1` (`materia_id`),
  ADD KEY `curso_ibfk_2` (`profesor_id`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`inscripcion_id`),
  ADD KEY `turno_id` (`turno_id`),
  ADD KEY `inscripcion_ibfk_1` (`curso_id`),
  ADD KEY `inscripcion_ibfk_2` (`alumno_id`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`materia_id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`profesor_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`turno_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `alumno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `aula`
--
ALTER TABLE `aula`
  MODIFY `aula_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `curso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `inscripcion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `materia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `profesor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `turno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`materia_id`) REFERENCES `materia` (`materia_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`profesor_id`) REFERENCES `profesor` (`profesor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`curso_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcion_ibfk_2` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`alumno_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcion_ibfk_3` FOREIGN KEY (`turno_id`) REFERENCES `turno` (`turno_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`rol_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
