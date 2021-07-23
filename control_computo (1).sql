-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2021 a las 03:10:15
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
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `matricula` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `carrera` varchar(25) NOT NULL,
  `correo_electronico` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`matricula`, `nombre`, `apellido`, `carrera`, `correo_electronico`) VALUES
(201755652, 'María Fernanda', 'Álvarez Arenas', 'ISTII', 'maria.alvareza@alumno.buap.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoacceso`
--

CREATE TABLE `autoacceso` (
  `folio` int(11) NOT NULL,
  `hora_inicio` time(6) DEFAULT NULL,
  `hora_termino` time(6) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `actividad` varchar(45) DEFAULT NULL,
  `equipo_noserie` varchar(20) NOT NULL,
  `usuario_id` varchar(20) NOT NULL,
  `matricula_alumno` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autoacceso`
--

INSERT INTO `autoacceso` (`folio`, `hora_inicio`, `hora_termino`, `fecha`, `actividad`, `equipo_noserie`, `usuario_id`, `matricula_alumno`) VALUES
(16, '01:05:00.000000', '02:05:00.000000', NULL, 'Limpieza', '1', '1', 201755652);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `no_serie` varchar(20) NOT NULL,
  `num_equipo` varchar(50) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `laboratorio_clave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`no_serie`, `num_equipo`, `marca`, `modelo`, `laboratorio_clave`) VALUES
('1', '13', 'Lenovo', '123', 1);

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
(5, '1', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas`
--

CREATE TABLE `fallas` (
  `clave_fallas` int(11) NOT NULL,
  `fecha_reporte` date DEFAULT NULL,
  `fecha_atencion` date DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `equipo_noserie` varchar(20) DEFAULT NULL,
  `usuario_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faltas`
--

CREATE TABLE `faltas` (
  `clave` int(11) NOT NULL,
  `fecha_perdida` date DEFAULT NULL,
  `hora_perdida` time DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `equipo_no_serie` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `num_horario` int(11) NOT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_termino` time DEFAULT NULL,
  `laboratorio_lab_clave` int(11) DEFAULT NULL,
  `periodo_id_periodo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`num_horario`, `fecha`, `hora_inicio`, `hora_termino`, `laboratorio_lab_clave`, `periodo_id_periodo`) VALUES
(10, 'lunes', '08:00:00', '10:00:00', 1, 2),
(13, 'Viernes', '10:00:00', '11:00:00', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `lab_clave` int(11) NOT NULL,
  `ubicacion` varchar(30) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`lab_clave`, `ubicacion`, `nombre`) VALUES
(1, 'SJCH1', 'Laboratorio de Super Computo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `nrc` varchar(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `carrera` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`nrc`, `nombre`, `carrera`) VALUES
('ABC123', 'Ingeniería de Software', 'ISTII'),
('ABC124', 'Redes de Computadoras', 'ISTII');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_usuario`
--

CREATE TABLE `materia_usuario` (
  `clave` int(15) NOT NULL,
  `materia_nrc` varchar(15) DEFAULT NULL,
  `usu_id_usu` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia_usuario`
--

INSERT INTO `materia_usuario` (`clave`, `materia_nrc`, `usu_id_usu`) VALUES
(3, 'ABC123', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `num_prestamo` int(11) NOT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_termino` time DEFAULT NULL,
  `fecha_prestamo` date DEFAULT NULL,
  `tipo` varchar(11) DEFAULT NULL,
  `laboratorio_lab_clave` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('12345', 'Sublime text', 'Editor de texto - Básico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` varchar(20) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `contraseña` varchar(25) NOT NULL,
  `correo_electronico` varchar(45) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `tipo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `contraseña`, `correo_electronico`, `direccion`, `telefono`, `tipo`) VALUES
('1', 'Ana Luisa', 'Ballinas Hernandez', '12345', 'analuisa.ballinash@correo.buap.mx', 'Puebla', '123456789', 'admin'),
('201755652', 'María Fernanda', 'Alvarez Arenas', '123456', 'fernanda.alvarez.arena@gmail.com', '16 de septiembre #24', '2471199100', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_horario`
--

CREATE TABLE `usuario_horario` (
  `clave` int(11) NOT NULL,
  `num_horario_fk` int(11) DEFAULT NULL,
  `id_usuario_fk` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_horario`
--

INSERT INTO `usuario_horario` (`clave`, `num_horario_fk`, `id_usuario_fk`) VALUES
(2, 13, '201755652');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_prestamo`
--

CREATE TABLE `usuario_prestamo` (
  `clave` int(11) NOT NULL,
  `prestamo_num_prestamo` int(11) DEFAULT NULL,
  `usua_id_usua` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `autoacceso`
--
ALTER TABLE `autoacceso`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `equipo_noserie_idx` (`equipo_noserie`),
  ADD KEY `usuario_id_idx` (`usuario_id`),
  ADD KEY `matricula_alumno` (`matricula_alumno`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`no_serie`),
  ADD KEY `laboratorio_clave_idx` (`laboratorio_clave`);

--
-- Indices de la tabla `equipo_software`
--
ALTER TABLE `equipo_software`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `equipo_no_serie_equipo_idx` (`equipo_no_serie`),
  ADD KEY `software_clave_idx` (`software_clave`);

--
-- Indices de la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD PRIMARY KEY (`clave_fallas`),
  ADD KEY `equipo_noserie_eq_idx` (`equipo_noserie`),
  ADD KEY `usuario_id_usu_idx` (`usuario_id`);

--
-- Indices de la tabla `faltas`
--
ALTER TABLE `faltas`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `equipo_no_serie_idx` (`equipo_no_serie`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`num_horario`),
  ADD KEY `laboratorio_clave_laboratorio_idx` (`laboratorio_lab_clave`),
  ADD KEY `period_id_period_idx` (`periodo_id_periodo`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`lab_clave`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`nrc`);

--
-- Indices de la tabla `materia_usuario`
--
ALTER TABLE `materia_usuario`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `materia_nrc_idx` (`materia_nrc`),
  ADD KEY `usu_id_usu_idx` (`usu_id_usu`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`num_prestamo`),
  ADD KEY `laboratorio_lab_clave_idx` (`laboratorio_lab_clave`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_horario`
--
ALTER TABLE `usuario_horario`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `num_hora_fk_idx` (`num_horario_fk`),
  ADD KEY `id_usu_fk_idx` (`id_usuario_fk`);

--
-- Indices de la tabla `usuario_prestamo`
--
ALTER TABLE `usuario_prestamo`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `prestamo_num_prestamo_idx` (`prestamo_num_prestamo`),
  ADD KEY `usua_id_usua_idx` (`usua_id_usua`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autoacceso`
--
ALTER TABLE `autoacceso`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `equipo_software`
--
ALTER TABLE `equipo_software`
  MODIFY `clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `fallas`
--
ALTER TABLE `fallas`
  MODIFY `clave_fallas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `faltas`
--
ALTER TABLE `faltas`
  MODIFY `clave` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `num_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `materia_usuario`
--
ALTER TABLE `materia_usuario`
  MODIFY `clave` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario_horario`
--
ALTER TABLE `usuario_horario`
  MODIFY `clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autoacceso`
--
ALTER TABLE `autoacceso`
  ADD CONSTRAINT `equipo_noserie` FOREIGN KEY (`equipo_noserie`) REFERENCES `equipo` (`no_serie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matricula_alumno` FOREIGN KEY (`matricula_alumno`) REFERENCES `alumno` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `laboratorio_clave_fk` FOREIGN KEY (`laboratorio_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `equipo_software`
--
ALTER TABLE `equipo_software`
  ADD CONSTRAINT `equipo_no_serie_equipo` FOREIGN KEY (`equipo_no_serie`) REFERENCES `equipo` (`no_serie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `software_clave` FOREIGN KEY (`software_clave`) REFERENCES `software` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD CONSTRAINT `equipo_noserie_eq` FOREIGN KEY (`equipo_noserie`) REFERENCES `equipo` (`no_serie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_id_usu` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `faltas`
--
ALTER TABLE `faltas`
  ADD CONSTRAINT `equipo_no_serie` FOREIGN KEY (`equipo_no_serie`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `laboratorio_clave_laboratorio` FOREIGN KEY (`laboratorio_lab_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `period_id_period` FOREIGN KEY (`periodo_id_periodo`) REFERENCES `periodo` (`id_periodo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `materia_usuario`
--
ALTER TABLE `materia_usuario`
  ADD CONSTRAINT `materia_nrc` FOREIGN KEY (`materia_nrc`) REFERENCES `materia` (`nrc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usu_id_usu` FOREIGN KEY (`usu_id_usu`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `laboratorio_lab_clave` FOREIGN KEY (`laboratorio_lab_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_horario`
--
ALTER TABLE `usuario_horario`
  ADD CONSTRAINT `id_usu_fk` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `num_hora_fk` FOREIGN KEY (`num_horario_fk`) REFERENCES `horario` (`num_horario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_prestamo`
--
ALTER TABLE `usuario_prestamo`
  ADD CONSTRAINT `prestamo_num_prestamo` FOREIGN KEY (`prestamo_num_prestamo`) REFERENCES `prestamo` (`num_prestamo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usua_id_usua` FOREIGN KEY (`usua_id_usua`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
