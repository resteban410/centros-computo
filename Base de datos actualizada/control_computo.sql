-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-01-2021 a las 07:00:12
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
(201729813, 'Miguel', 'Herrera Loaiza', 'ISTII', '123'),
(201755652, 'Maria Fernanda', 'Alvarez Arenas', 'ISTII', 'maria.alvareza@alumno.buap.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_autoacceso`
--

CREATE TABLE `alumno_autoacceso` (
  `clave` int(15) NOT NULL,
  `alumno_matricula` int(11) DEFAULT NULL,
  `autoacceso_folio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoacceso`
--

CREATE TABLE `autoacceso` (
  `folio` int(11) NOT NULL,
  `hora_inicio` varchar(10) DEFAULT NULL,
  `hora_termino` varchar(10) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `actividad` varchar(45) DEFAULT NULL,
  `equipo_noserie` varchar(20) DEFAULT NULL,
  `usuario_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `no_serie` varchar(20) NOT NULL,
  `num_equipo` varchar(50) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `laboratorio_clave` int(11) DEFAULT NULL
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
  `dia` varchar(10) DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_termino` time DEFAULT NULL,
  `periodo` varchar(45) DEFAULT NULL,
  `laboratorio_lab_clave` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `lab_clave` int(11) NOT NULL,
  `ubicacion` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `nrc` varchar(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `carrera` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_usuario`
--

CREATE TABLE `materia_usuario` (
  `clave` int(15) NOT NULL,
  `materia_nrc` varchar(15) DEFAULT NULL,
  `usu_id_usu` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `direccion` varchar(45) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `tipo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_horario`
--

CREATE TABLE `usuario_horario` (
  `id` int(11) NOT NULL,
  `horario_num` int(11) DEFAULT NULL,
  `usuar_id_usuar` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indices de la tabla `alumno_autoacceso`
--
ALTER TABLE `alumno_autoacceso`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `alumno_matricula_idx` (`alumno_matricula`),
  ADD KEY `autoacceso_folio_idx` (`autoacceso_folio`);

--
-- Indices de la tabla `autoacceso`
--
ALTER TABLE `autoacceso`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `equipo_noserie_idx` (`equipo_noserie`),
  ADD KEY `usuario_id_idx` (`usuario_id`);

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
  ADD KEY `laboratorio_clave_laboratorio_idx` (`laboratorio_lab_clave`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `horario_num_idx` (`horario_num`),
  ADD KEY `usuar_id_usuar_idx` (`usuar_id_usuar`);

--
-- Indices de la tabla `usuario_prestamo`
--
ALTER TABLE `usuario_prestamo`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `prestamo_num_prestamo_idx` (`prestamo_num_prestamo`),
  ADD KEY `usua_id_usua_idx` (`usua_id_usua`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_autoacceso`
--
ALTER TABLE `alumno_autoacceso`
  ADD CONSTRAINT `alumno_matricula` FOREIGN KEY (`alumno_matricula`) REFERENCES `alumno` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `autoacceso_folio` FOREIGN KEY (`autoacceso_folio`) REFERENCES `autoacceso` (`folio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `autoacceso`
--
ALTER TABLE `autoacceso`
  ADD CONSTRAINT `equipo_noserie` FOREIGN KEY (`equipo_noserie`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `laboratorio_clave_fk` FOREIGN KEY (`laboratorio_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipo_software`
--
ALTER TABLE `equipo_software`
  ADD CONSTRAINT `equipo_no_serie_equipo` FOREIGN KEY (`equipo_no_serie`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `software_clave` FOREIGN KEY (`software_clave`) REFERENCES `software` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD CONSTRAINT `equipo_noserie_eq` FOREIGN KEY (`equipo_noserie`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_id_usu` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `faltas`
--
ALTER TABLE `faltas`
  ADD CONSTRAINT `equipo_no_serie` FOREIGN KEY (`equipo_no_serie`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `laboratorio_clave_laboratorio` FOREIGN KEY (`laboratorio_lab_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `materia_usuario`
--
ALTER TABLE `materia_usuario`
  ADD CONSTRAINT `materia_nrc` FOREIGN KEY (`materia_nrc`) REFERENCES `materia` (`nrc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usu_id_usu` FOREIGN KEY (`usu_id_usu`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `laboratorio_lab_clave` FOREIGN KEY (`laboratorio_lab_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_horario`
--
ALTER TABLE `usuario_horario`
  ADD CONSTRAINT `horario_num` FOREIGN KEY (`horario_num`) REFERENCES `horario` (`num_horario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuar_id_usuar` FOREIGN KEY (`usuar_id_usuar`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_prestamo`
--
ALTER TABLE `usuario_prestamo`
  ADD CONSTRAINT `prestamo_num_prestamo` FOREIGN KEY (`prestamo_num_prestamo`) REFERENCES `prestamo` (`num_prestamo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usua_id_usua` FOREIGN KEY (`usua_id_usua`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
