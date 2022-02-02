-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2022 a las 21:55:53
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_computo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adeudo`
--

CREATE TABLE `adeudo` (
  `folio` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `matricula_alumno_matricula` int(11) NOT NULL,
  `noserie_equipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `adeudo`
--

INSERT INTO `adeudo` (`folio`, `fecha`, `hora`, `descripcion`, `estado`, `matricula_alumno_matricula`, `noserie_equipo`) VALUES
(1, '2022-01-13', '18:40:00', 'Mouse dañado.', 'espera', 201729813, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `matricula` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `carrera` varchar(45) NOT NULL,
  `correo_electronico` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`matricula`, `nombre`, `apellido`, `carrera`, `correo_electronico`) VALUES
(201729813, 'Miguel de Jesus', 'Herrera Loaiza', 'ISTII', 'miguel@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `num_asignacion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora_inicio` varchar(6) NOT NULL,
  `hora_termino` varchar(6) NOT NULL,
  `laboratorio_lab_clave` int(11) NOT NULL,
  `periodo_id_periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`num_asignacion`, `fecha`, `hora_inicio`, `hora_termino`, `laboratorio_lab_clave`, `periodo_id_periodo`) VALUES
(1, '2022-01-03', '8:00', '10:00', 1, 1),
(2, '2022-01-10', '8:00', '10:00', 1, 1),
(3, '2022-01-17', '8:00', '10:00', 1, 1),
(4, '2022-01-24', '8:00', '10:00', 1, 1),
(5, '2022-01-31', '8:00', '10:00', 1, 1),
(6, '2022-02-07', '8:00', '10:00', 1, 1),
(7, '2022-02-14', '8:00', '10:00', 1, 1),
(8, '2022-02-21', '8:00', '10:00', 1, 1),
(9, '2022-02-28', '8:00', '10:00', 1, 1),
(10, '2022-03-07', '8:00', '10:00', 1, 1),
(11, '2022-03-14', '8:00', '10:00', 1, 1),
(12, '2022-03-21', '8:00', '10:00', 1, 1),
(13, '2022-03-28', '8:00', '10:00', 1, 1),
(14, '2022-04-04', '8:00', '10:00', 1, 1),
(15, '2022-04-11', '8:00', '10:00', 1, 1),
(16, '2022-04-18', '8:00', '10:00', 1, 1),
(17, '2022-04-25', '8:00', '10:00', 1, 1),
(18, '2022-05-02', '8:00', '10:00', 1, 1),
(19, '2022-05-09', '8:00', '10:00', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoacceso`
--

CREATE TABLE `autoacceso` (
  `folio` int(11) NOT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_termino` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `actividad` varchar(45) DEFAULT NULL,
  `equipo_noserie` varchar(20) NOT NULL,
  `usuario_id` varchar(20) NOT NULL,
  `matricula_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autoacceso`
--

INSERT INTO `autoacceso` (`folio`, `hora_inicio`, `hora_termino`, `fecha`, `actividad`, `equipo_noserie`, `usuario_id`, `matricula_alumno`) VALUES
(1, '18:38:00', '20:38:00', '2022-01-13', 'Limpieza', '1', '201755652MFaa', 201729813);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `no_serie` varchar(20) NOT NULL,
  `num_equipo` varchar(50) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `laboratorio_clave` int(11) DEFAULT NULL,
  `marca_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`no_serie`, `num_equipo`, `modelo`, `laboratorio_clave`, `marca_id`) VALUES
('1', '13', 'ghjgjgj', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_software`
--

CREATE TABLE `equipo_software` (
  `clave` int(11) NOT NULL,
  `equipo_no_serie` varchar(20) NOT NULL,
  `software_clave` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo_software`
--

INSERT INTO `equipo_software` (`clave`, `equipo_no_serie`, `software_clave`) VALUES
(1, '1', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas`
--

CREATE TABLE `fallas` (
  `clave_fallas` int(11) NOT NULL,
  `fecha_reporte` date DEFAULT NULL,
  `fecha_atencion` date DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `equipo_noserie_equipo` varchar(20) NOT NULL,
  `usuario_id_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fallas`
--

INSERT INTO `fallas` (`clave_fallas`, `fecha_reporte`, `fecha_atencion`, `descripcion`, `equipo_noserie_equipo`, `usuario_id_usuario`) VALUES
(2, '2022-01-13', '2022-01-13', 'Cambio de hdmi', '1', '201755652MFaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `lab_clave` int(11) NOT NULL,
  `ubicacion` varchar(30) NOT NULL,
  `nombre_laboratorio` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`lab_clave`, `ubicacion`, `nombre_laboratorio`) VALUES
(1, 'SJCH1', 'Laboratorio de Super Computo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre_marca`) VALUES
(1, 'Lenovo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `clave` varchar(25) NOT NULL,
  `nrc` varchar(25) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `carrera` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`clave`, `nrc`, `nombre`, `carrera`) VALUES
('12345', '25671', 'Ingeniería de Software', 'ISTII');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_usuario`
--

CREATE TABLE `materia_usuario` (
  `id_mat_uso` int(11) NOT NULL,
  `materia_clave` varchar(15) NOT NULL,
  `usu_id_usu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perdida`
--

CREATE TABLE `perdida` (
  `clave` int(11) NOT NULL,
  `fecha_perdida` date DEFAULT NULL,
  `hora_perdida` time DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `equipo_no_serie_equipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perdida`
--

INSERT INTO `perdida` (`clave`, `fecha_perdida`, `hora_perdida`, `observaciones`, `equipo_no_serie_equipo`) VALUES
(1, '2022-01-13', '06:44:00', 'Mouse extraviado.', '1'),
(2, '2022-01-13', '10:30:00', 'Perdida de mouse', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(11) NOT NULL,
  `nombre_periodo` varchar(45) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_termino` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `nombre_periodo`, `fecha_inicio`, `fecha_termino`) VALUES
(1, 'Primavera 2021', '2022-01-03', '2022-05-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `num_prestamo` int(11) NOT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `descripcion` varchar(70) DEFAULT NULL,
  `labora_lab_clave` int(11) NOT NULL,
  `usuario_usu_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`num_prestamo`, `start`, `end`, `title`, `descripcion`, `labora_lab_clave`, `usuario_usu_id`) VALUES
(1, '2022-01-13 10:00:00', '2022-01-13 12:00:00', 'Curso Aws', NULL, 1, '201755652MFaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE `software` (
  `clave` varchar(15) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `software`
--

INSERT INTO `software` (`clave`, `nombre`, `descripcion`) VALUES
('12345', 'Sublime text', 'Editor de texto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(45) NOT NULL,
  `address` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `password`, `role`, `address`, `telephone`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
('201755652MFaa', 'Maria Fernanda', 'Alvarez Arenas', 'fernanda.alvarez.arenas@gmail.com', '$2y$10$9wJP2o5pgkUQF9aNMbzEX.lvbnriGQ7UJVLcn6iIWfvDEy8.s3qVa', 'admin', 'huamantla, tlaxcala', '2471199100', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_asignacion`
--

CREATE TABLE `usuario_asignacion` (
  `idusuario_asignacion` int(11) NOT NULL,
  `id_usuario` varchar(20) NOT NULL,
  `id_asignacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_asignacion`
--

INSERT INTO `usuario_asignacion` (`idusuario_asignacion`, `id_usuario`, `id_asignacion`) VALUES
(1, '201755652MFaa', 1),
(2, '201755652MFaa', 2),
(3, '201755652MFaa', 3),
(4, '201755652MFaa', 4),
(5, '201755652MFaa', 5),
(6, '201755652MFaa', 6),
(7, '201755652MFaa', 7),
(8, '201755652MFaa', 8),
(9, '201755652MFaa', 9),
(10, '201755652MFaa', 10),
(11, '201755652MFaa', 11),
(12, '201755652MFaa', 12),
(13, '201755652MFaa', 13),
(14, '201755652MFaa', 14),
(15, '201755652MFaa', 15),
(16, '201755652MFaa', 16),
(17, '201755652MFaa', 17),
(18, '201755652MFaa', 18),
(19, '201755652MFaa', 19);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adeudo`
--
ALTER TABLE `adeudo`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `matricula_alumno_matricula_idx` (`matricula_alumno_matricula`),
  ADD KEY `noserie_equipo_idx` (`noserie_equipo`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`num_asignacion`),
  ADD KEY `laboratorio_lab_clave_idx` (`laboratorio_lab_clave`),
  ADD KEY `periodo_id_periodo_idx` (`periodo_id_periodo`);

--
-- Indices de la tabla `autoacceso`
--
ALTER TABLE `autoacceso`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `equipo_noserie_idx` (`equipo_noserie`),
  ADD KEY `matricula_alumno_idx` (`matricula_alumno`),
  ADD KEY `usuario_id_idx` (`usuario_id`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`no_serie`),
  ADD KEY `laboratorio_clave_idx` (`laboratorio_clave`),
  ADD KEY `marca_id_idx` (`marca_id`);

--
-- Indices de la tabla `equipo_software`
--
ALTER TABLE `equipo_software`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `equipo_no_serie_idx` (`equipo_no_serie`),
  ADD KEY `software_clave_idx` (`software_clave`);

--
-- Indices de la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD PRIMARY KEY (`clave_fallas`),
  ADD KEY `equipo_noserie_equipo_idx` (`equipo_noserie_equipo`),
  ADD KEY `usuario_id_usuario_idx` (`usuario_id_usuario`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`lab_clave`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `materia_usuario`
--
ALTER TABLE `materia_usuario`
  ADD PRIMARY KEY (`id_mat_uso`),
  ADD KEY `materia_clave_idx` (`materia_clave`),
  ADD KEY `usu_id_usu_idx` (`usu_id_usu`);

--
-- Indices de la tabla `perdida`
--
ALTER TABLE `perdida`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `equipo_no_serie_equipo_idx` (`equipo_no_serie_equipo`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`num_prestamo`),
  ADD KEY `labora_lab_clave_idx` (`labora_lab_clave`),
  ADD KEY `usuario_usu_id_idx` (`usuario_usu_id`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_asignacion`
--
ALTER TABLE `usuario_asignacion`
  ADD PRIMARY KEY (`idusuario_asignacion`),
  ADD KEY `id_asignacion_idx` (`id_asignacion`),
  ADD KEY `id_usuario_idx` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adeudo`
--
ALTER TABLE `adeudo`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `num_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `autoacceso`
--
ALTER TABLE `autoacceso`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `equipo_software`
--
ALTER TABLE `equipo_software`
  MODIFY `clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fallas`
--
ALTER TABLE `fallas`
  MODIFY `clave_fallas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `materia_usuario`
--
ALTER TABLE `materia_usuario`
  MODIFY `id_mat_uso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `perdida`
--
ALTER TABLE `perdida`
  MODIFY `clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `num_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario_asignacion`
--
ALTER TABLE `usuario_asignacion`
  MODIFY `idusuario_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adeudo`
--
ALTER TABLE `adeudo`
  ADD CONSTRAINT `matricula_alumno_matricula` FOREIGN KEY (`matricula_alumno_matricula`) REFERENCES `alumno` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noserie_equipo` FOREIGN KEY (`noserie_equipo`) REFERENCES `equipo` (`no_serie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `laboratorio_lab_clave` FOREIGN KEY (`laboratorio_lab_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `periodo_id_periodo` FOREIGN KEY (`periodo_id_periodo`) REFERENCES `periodo` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `autoacceso`
--
ALTER TABLE `autoacceso`
  ADD CONSTRAINT `equipo_noserie` FOREIGN KEY (`equipo_noserie`) REFERENCES `equipo` (`no_serie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matricula_alumno` FOREIGN KEY (`matricula_alumno`) REFERENCES `alumno` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `laboratorio_clave` FOREIGN KEY (`laboratorio_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marca_id` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `equipo_software`
--
ALTER TABLE `equipo_software`
  ADD CONSTRAINT `equipo_no_serie` FOREIGN KEY (`equipo_no_serie`) REFERENCES `equipo` (`no_serie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `software_clave` FOREIGN KEY (`software_clave`) REFERENCES `software` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD CONSTRAINT `equipo_noserie_equipo` FOREIGN KEY (`equipo_noserie_equipo`) REFERENCES `equipo` (`no_serie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_id_usuario` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materia_usuario`
--
ALTER TABLE `materia_usuario`
  ADD CONSTRAINT `materia_clave` FOREIGN KEY (`materia_clave`) REFERENCES `materia` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usu_id_usu` FOREIGN KEY (`usu_id_usu`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `perdida`
--
ALTER TABLE `perdida`
  ADD CONSTRAINT `equipo_no_serie_equipo` FOREIGN KEY (`equipo_no_serie_equipo`) REFERENCES `equipo` (`no_serie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `labora_lab_clave` FOREIGN KEY (`labora_lab_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_usu_id` FOREIGN KEY (`usuario_usu_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_asignacion`
--
ALTER TABLE `usuario_asignacion`
  ADD CONSTRAINT `id_asignacion` FOREIGN KEY (`id_asignacion`) REFERENCES `asignacion` (`num_asignacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
