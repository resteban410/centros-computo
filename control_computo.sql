-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2021 a las 00:58:30
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
-- Base de datos: `controlcomputo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adeudo`
--

CREATE TABLE `adeudo` (
  `folio` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time DEFAULT NULL,
  `descripcion` varchar(200) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `matricula_alumno_matricula` int(11) NOT NULL,
  `noserie_equipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `matricula` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `carrera` varchar(25) NOT NULL,
  `corre_electronico` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `num_asignacion` int(11) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_termino` time NOT NULL,
  `laboratorio_lab_clave` int(11) NOT NULL,
  `periodo_id_periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoacceso`
--

CREATE TABLE `autoacceso` (
  `folio` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_termino` time NOT NULL,
  `fecha` date NOT NULL,
  `actividad` varchar(45) NOT NULL,
  `equipo_noserie` varchar(20) NOT NULL,
  `usuario_id` varchar(20) NOT NULL,
  `matricula_alumno` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `no_serie` varchar(20) NOT NULL,
  `num_equipo` varchar(50) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `laboratorio_clave` int(11) NOT NULL,
  `marca_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_software`
--

CREATE TABLE `equipo_software` (
  `clave` int(11) NOT NULL,
  `equipo_no_serie` varchar(20) NOT NULL,
  `software_clave` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas`
--

CREATE TABLE `fallas` (
  `clave_fallas` int(11) NOT NULL,
  `fecha_reporte` date NOT NULL,
  `fecha_atencion` date DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `equipo_noserie` varchar(20) NOT NULL,
  `usuario_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `lab_clave` int(11) NOT NULL,
  `ubicacion` varchar(30) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `clave` varchar(15) NOT NULL,
  `nrc` varchar(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `carrera` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `fecha_perdida` date NOT NULL,
  `hora_perdida` time DEFAULT NULL,
  `observaciones` varchar(45) NOT NULL,
  `equipo_no_serie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_termino` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `num_prestamo` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_termino` time NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `tipo` varchar(11) NOT NULL,
  `laboratorio_lab_clave` int(11) NOT NULL
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
  `telefono` varchar(12) DEFAULT NULL,
  `tipo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_asignacion`
--

CREATE TABLE `usuario_asignacion` (
  `idusuario_asignacion` int(11) NOT NULL,
  `id_usuario` varchar(20) NOT NULL,
  `id_asignacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_prestamo`
--

CREATE TABLE `usuario_prestamo` (
  `idusuario_prestamo` int(11) NOT NULL,
  `prestamo_num_prestamo` int(11) NOT NULL,
  `usua_id_usua` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adeudo`
--
ALTER TABLE `adeudo`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `noserie_equipo_fk_idx` (`noserie_equipo`),
  ADD KEY `matri_alumno_fk_idx` (`matricula_alumno_matricula`);

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
  ADD KEY `periodo_id_fk_idx` (`periodo_id_periodo`);

--
-- Indices de la tabla `autoacceso`
--
ALTER TABLE `autoacceso`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `equipo_noserie_equipo_idx` (`equipo_noserie`),
  ADD KEY `usuario_id_fk_idx` (`usuario_id`),
  ADD KEY `matricula_alumno_fk_idx` (`matricula_alumno`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`no_serie`),
  ADD KEY `laboratorio_clave_fk_idx` (`laboratorio_clave`),
  ADD KEY `marca_id_fk_idx` (`marca_id`);

--
-- Indices de la tabla `equipo_software`
--
ALTER TABLE `equipo_software`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `equipo_no_serie_fk_idx` (`equipo_no_serie`),
  ADD KEY `software_clave_fk_idx` (`software_clave`);

--
-- Indices de la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD PRIMARY KEY (`clave_fallas`),
  ADD KEY `equipo_noserie_fk_idx` (`equipo_noserie`),
  ADD KEY `usuario_id_usuario_fk_idx` (`usuario_id`);

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
  ADD KEY `materia_clave_fk_idx` (`materia_clave`),
  ADD KEY `usu_id_usu_fk_idx` (`usu_id_usu`);

--
-- Indices de la tabla `perdida`
--
ALTER TABLE `perdida`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `equipo_noserie_equipo_fk_idx` (`equipo_no_serie`);

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
  ADD KEY `laboratorio_lab_clave_lab_idx` (`laboratorio_lab_clave`);

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
-- Indices de la tabla `usuario_asignacion`
--
ALTER TABLE `usuario_asignacion`
  ADD PRIMARY KEY (`idusuario_asignacion`),
  ADD KEY `id_usuario_fk_usu_idx` (`id_usuario`),
  ADD KEY `id_asignacion_fk_idx` (`id_asignacion`);

--
-- Indices de la tabla `usuario_prestamo`
--
ALTER TABLE `usuario_prestamo`
  ADD PRIMARY KEY (`idusuario_prestamo`),
  ADD KEY `prestamo_num_prestamo_idx` (`prestamo_num_prestamo`),
  ADD KEY `usua_id_usua_idx` (`usua_id_usua`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adeudo`
--
ALTER TABLE `adeudo`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `num_asignacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `autoacceso`
--
ALTER TABLE `autoacceso`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipo_software`
--
ALTER TABLE `equipo_software`
  MODIFY `clave` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fallas`
--
ALTER TABLE `fallas`
  MODIFY `clave_fallas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materia_usuario`
--
ALTER TABLE `materia_usuario`
  MODIFY `id_mat_uso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perdida`
--
ALTER TABLE `perdida`
  MODIFY `clave` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `num_prestamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_asignacion`
--
ALTER TABLE `usuario_asignacion`
  MODIFY `idusuario_asignacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_prestamo`
--
ALTER TABLE `usuario_prestamo`
  MODIFY `idusuario_prestamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adeudo`
--
ALTER TABLE `adeudo`
  ADD CONSTRAINT `matri_alumno_fk` FOREIGN KEY (`matricula_alumno_matricula`) REFERENCES `alumno` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `noserie_equipo_fk` FOREIGN KEY (`noserie_equipo`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `laboratorio_clave_fk` FOREIGN KEY (`laboratorio_lab_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `periodo_id_fk` FOREIGN KEY (`periodo_id_periodo`) REFERENCES `periodo` (`id_periodo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `autoacceso`
--
ALTER TABLE `autoacceso`
  ADD CONSTRAINT `equipo_noserie_equipo` FOREIGN KEY (`equipo_noserie`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `matricula_alumno_fk` FOREIGN KEY (`matricula_alumno`) REFERENCES `alumno` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_id_fk` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `laboratorio_clave_lab_fk` FOREIGN KEY (`laboratorio_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `marca_id_fk` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipo_software`
--
ALTER TABLE `equipo_software`
  ADD CONSTRAINT `equipo_no_serie_fk` FOREIGN KEY (`equipo_no_serie`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `software_clave_fk` FOREIGN KEY (`software_clave`) REFERENCES `software` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD CONSTRAINT `equipo_noserie_equipo_fk` FOREIGN KEY (`equipo_noserie`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_id_usuario_fk` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `materia_usuario`
--
ALTER TABLE `materia_usuario`
  ADD CONSTRAINT `materia_clave_fk` FOREIGN KEY (`materia_clave`) REFERENCES `materia` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usu_id_usu_fk` FOREIGN KEY (`usu_id_usu`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `perdida`
--
ALTER TABLE `perdida`
  ADD CONSTRAINT `noserie_equipo_noserie_fk` FOREIGN KEY (`equipo_no_serie`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `laboratorio_lab_clave_lab` FOREIGN KEY (`laboratorio_lab_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_asignacion`
--
ALTER TABLE `usuario_asignacion`
  ADD CONSTRAINT `id_asignacion_fk` FOREIGN KEY (`id_asignacion`) REFERENCES `asignacion` (`num_asignacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_usuario_fk_usu` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_prestamo`
--
ALTER TABLE `usuario_prestamo`
  ADD CONSTRAINT `prestamo_num_prestamo_fk` FOREIGN KEY (`prestamo_num_prestamo`) REFERENCES `prestamo` (`num_prestamo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usua_id_usua` FOREIGN KEY (`usua_id_usua`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
