-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2021 a las 21:55:07
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

--
-- Volcado de datos para la tabla `adeudo`
--

INSERT INTO `adeudo` (`folio`, `fecha`, `hora`, `descripcion`, `estado`, `matricula_alumno_matricula`, `noserie_equipo`) VALUES
(1, '2021-10-01', '10:24:00', 'El alumno rompio el mouse.', 'espera', 201755652, '8793jhjk');

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
(201729813, 'Miguel de Jesús', 'Herrera Loaiza', 'ISTII', 'miguel_her-@hotmail.com'),
(201755652, 'María Fernanda', 'Alvarez Arenas', 'ISTII', 'fernanda@gmail.com');

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
(69, '2021-08-13', '8:00', '10:00', 2, 1),
(70, '2021-08-20', '8:00', '10:00', 2, 1),
(71, '2021-08-27', '8:00', '10:00', 2, 1),
(72, '2021-09-03', '8:00', '10:00', 2, 1),
(73, '2021-09-10', '8:00', '10:00', 2, 1),
(74, '2021-09-17', '8:00', '10:00', 2, 1),
(75, '2021-09-24', '8:00', '10:00', 2, 1),
(76, '2021-10-01', '8:00', '10:00', 2, 1),
(77, '2021-10-08', '8:00', '10:00', 2, 1),
(78, '2021-10-15', '8:00', '10:00', 2, 1),
(79, '2021-10-22', '8:00', '10:00', 2, 1),
(80, '2021-10-29', '8:00', '10:00', 2, 1),
(81, '2021-11-05', '8:00', '10:00', 2, 1),
(82, '2021-11-12', '8:00', '10:00', 2, 1),
(83, '2021-11-19', '8:00', '10:00', 2, 1),
(84, '2021-11-26', '8:00', '10:00', 2, 1),
(85, '2021-12-03', '8:00', '10:00', 2, 1),
(86, '2021-12-10', '8:00', '10:00', 2, 1),
(87, '2021-08-02', '8:00', '10:00', 1, 1),
(88, '2021-08-09', '8:00', '10:00', 1, 1),
(89, '2021-08-16', '8:00', '10:00', 1, 1),
(90, '2021-08-23', '8:00', '10:00', 1, 1),
(91, '2021-08-30', '8:00', '10:00', 1, 1),
(92, '2021-09-06', '8:00', '10:00', 1, 1),
(93, '2021-09-13', '8:00', '10:00', 1, 1),
(94, '2021-09-20', '8:00', '10:00', 1, 1),
(95, '2021-09-27', '8:00', '10:00', 1, 1),
(96, '2021-10-04', '8:00', '10:00', 1, 1),
(97, '2021-10-11', '8:00', '10:00', 1, 1),
(98, '2021-10-18', '8:00', '10:00', 1, 1),
(102, '2021-11-15', '8:00', '10:00', 1, 1),
(103, '2021-11-22', '8:00', '10:00', 1, 1),
(104, '2021-11-29', '8:00', '10:00', 1, 1),
(105, '2021-12-06', '8:00', '10:00', 1, 1),
(106, '2021-08-04', '13:00', '15:00', 1, 1),
(107, '2021-08-11', '13:00', '15:00', 1, 1),
(108, '2021-08-18', '13:00', '15:00', 1, 1),
(109, '2021-08-25', '13:00', '15:00', 1, 1),
(110, '2021-09-01', '13:00', '15:00', 1, 1),
(111, '2021-09-08', '13:00', '15:00', 1, 1),
(112, '2021-09-15', '13:00', '15:00', 1, 1),
(113, '2021-09-22', '13:00', '15:00', 1, 1),
(114, '2021-09-29', '13:00', '15:00', 1, 1),
(115, '2021-10-06', '13:00', '15:00', 1, 1),
(116, '2021-10-13', '13:00', '15:00', 1, 1),
(117, '2021-10-20', '13:00', '15:00', 1, 1),
(118, '2021-10-27', '13:00', '15:00', 1, 1),
(119, '2021-11-03', '13:00', '15:00', 1, 1),
(120, '2021-11-10', '13:00', '15:00', 1, 1),
(121, '2021-11-17', '13:00', '15:00', 1, 1),
(122, '2021-11-24', '13:00', '15:00', 1, 1),
(123, '2021-12-01', '13:00', '15:00', 1, 1),
(124, '2021-12-08', '13:00', '15:00', 1, 1);

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

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`no_serie`, `num_equipo`, `modelo`, `laboratorio_clave`, `marca_id`) VALUES
('1234', '56778', '3442jk', 1, 1),
('8793jhjk', '866768', 'MAC5653127', 2, 1);

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
(1, '1234', '12321hhjk'),
(2, '1234', '7897sadas'),
(3, '8793jhjk', '7897sadas');

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

--
-- Volcado de datos para la tabla `fallas`
--

INSERT INTO `fallas` (`clave_fallas`, `fecha_reporte`, `fecha_atencion`, `descripcion`, `equipo_noserie`, `usuario_id`) VALUES
(1, '2021-10-21', '2021-10-23', 'Falla en un mouse.', '8793jhjk', '201755652');

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
(1, 'SJCH1', 'Super computo'),
(2, 'SJCH2', 'Basico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(10) NOT NULL,
  `nombre_marca` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre_marca`) VALUES
(1, 'Lenovo'),
(2, 'MAC');

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

--
-- Volcado de datos para la tabla `perdida`
--

INSERT INTO `perdida` (`clave`, `fecha_perdida`, `hora_perdida`, `observaciones`, `equipo_no_serie`) VALUES
(1, '2021-10-21', '22:40:00', 'Se perdió un teclado.', '8793jhjk');

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
(1, 'Otoño 2021', '2021-08-02', '2021-12-10');

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

--
-- Volcado de datos para la tabla `software`
--

INSERT INTO `software` (`clave`, `nombre`, `descripcion`) VALUES
('12321hhjk', 'Unity', 'Videojuegos en 3D'),
('7897sadas', 'Visual Studio Code', 'Editor de código.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` varchar(20) NOT NULL,
  `nombre_usuario` varchar(35) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `contraseña` varchar(25) NOT NULL,
  `correo_electronico` varchar(45) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `tipo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_usuario`, `apellido`, `contraseña`, `correo_electronico`, `direccion`, `telefono`, `tipo`) VALUES
('201755652', 'María Fernanda', 'Alvarez Arenas', '1234', 'fernanda@gmail.com', 'shlsahdia6', '3816489169', 'admin');

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
(11, '201755652', 69),
(12, '201755652', 70),
(13, '201755652', 71),
(14, '201755652', 72),
(15, '201755652', 73),
(16, '201755652', 74),
(17, '201755652', 75),
(18, '201755652', 76),
(19, '201755652', 77),
(20, '201755652', 78),
(21, '201755652', 79),
(22, '201755652', 80),
(23, '201755652', 81),
(24, '201755652', 82),
(25, '201755652', 83),
(26, '201755652', 84),
(27, '201755652', 85),
(28, '201755652', 86),
(29, '201755652', 87),
(30, '201755652', 88),
(31, '201755652', 89),
(32, '201755652', 90),
(33, '201755652', 91),
(34, '201755652', 92),
(35, '201755652', 93),
(36, '201755652', 94),
(37, '201755652', 95),
(38, '201755652', 96),
(39, '201755652', 97),
(40, '201755652', 98),
(44, '201755652', 102),
(45, '201755652', 103),
(46, '201755652', 104),
(47, '201755652', 105),
(48, '201755652', 106),
(49, '201755652', 107),
(50, '201755652', 108),
(51, '201755652', 109),
(52, '201755652', 110),
(53, '201755652', 111),
(54, '201755652', 112),
(55, '201755652', 113),
(56, '201755652', 114),
(57, '201755652', 115),
(58, '201755652', 116),
(59, '201755652', 117),
(60, '201755652', 118),
(61, '201755652', 119),
(62, '201755652', 120),
(63, '201755652', 121),
(64, '201755652', 122),
(65, '201755652', 123),
(66, '201755652', 124);

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
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `num_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `autoacceso`
--
ALTER TABLE `autoacceso`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipo_software`
--
ALTER TABLE `equipo_software`
  MODIFY `clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fallas`
--
ALTER TABLE `fallas`
  MODIFY `clave_fallas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `materia_usuario`
--
ALTER TABLE `materia_usuario`
  MODIFY `id_mat_uso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perdida`
--
ALTER TABLE `perdida`
  MODIFY `clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `num_prestamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_asignacion`
--
ALTER TABLE `usuario_asignacion`
  MODIFY `idusuario_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

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
