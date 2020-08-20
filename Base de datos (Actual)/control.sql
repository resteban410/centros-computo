-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2020 a las 06:06:39
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(20) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo_electronico` varchar(45) DEFAULT NULL,
  `ciudad` varchar(25) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `apellido`, `telefono`, `correo_electronico`, `ciudad`, `direccion`, `password`) VALUES
(1, 'cesar', 'sorcia', '7773068835', 'cesarsorciacruz@lhotmail.com', 'mexico', '10 norte', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `matricula` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `carrera` varchar(25) DEFAULT NULL,
  `correo_electronico` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`matricula`, `nombre`, `apellido`, `carrera`, `correo_electronico`) VALUES
(201244870, 'cesar', 'sorcia cruz', 'tics', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoservicios`
--

CREATE TABLE `autoservicios` (
  `folio` int(11) NOT NULL,
  `hora_inicio` varchar(10) DEFAULT NULL,
  `hora_fin` varchar(10) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `actividad` varchar(45) DEFAULT NULL,
  `laboratorio_clave` int(11) NOT NULL,
  `administrador_id` int(20) NOT NULL,
  `alumno_matricula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autoservicios`
--

INSERT INTO `autoservicios` (`folio`, `hora_inicio`, `hora_fin`, `fecha`, `actividad`, `laboratorio_clave`, `administrador_id`, `alumno_matricula`) VALUES
(0, '22:38:32', '10:00', '2017-11-28', 'investigacion', 1, 1, 201240097),
(0, '00:33:07', '13:00', '2017-11-16', 'flojera', 2, 1, 201244870),
(1, '1', '1', '0000-00-00', '1', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `clave` varchar(20) NOT NULL,
  `password` varchar(25) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo_electronico` varchar(25) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`clave`, `password`, `nombre`, `apellidos`, `telefono`, `correo_electronico`, `direccion`) VALUES
('0', NULL, NULL, NULL, NULL, NULL, NULL),
('1', '1', 'cesar', 'sorcia', '7773068836', 'cesar@hotmail.com', '10 norte'),
('2', '2', 'ana', 'ballinas', '2491166595', 'ana@hotmail.com', '15 norte'),
('3', '3', 'Estefani', 'ballinas', '2491166595', 'stefany@hotmail.com', '15 norte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `no_serie` varchar(15) NOT NULL,
  `numero_equipo` varchar(50) DEFAULT NULL,
  `laboratorio_clave` int(11) NOT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`no_serie`, `numero_equipo`, `laboratorio_clave`, `marca`, `modelo`) VALUES
('ghgfhgfhgfh', '1', 2, 'lenovo', 'gh'),
('jsuuyqwowq', '14', 2, 'toshiba', '4sjj'),
('MYL12345678', '1', 1, 'hp', 'g568');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_has_software_instalado`
--

CREATE TABLE `equipo_has_software_instalado` (
  `equipo_no_serie` int(11) NOT NULL,
  `equipo_laboratorio_clave` int(11) NOT NULL,
  `equipo_caracteristicas_numero` int(11) NOT NULL,
  `software_instalado_clave_software` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas`
--

CREATE TABLE `fallas` (
  `numero_de_fallas` int(11) NOT NULL,
  `fecha_de_reporte` date DEFAULT NULL,
  `fecha_de_atencion` date DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `docente_clave` varchar(20) NOT NULL,
  `administrador_id` int(20) NOT NULL,
  `equipo_no_serie` int(11) NOT NULL,
  `nombre_laboratorio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fallas`
--

INSERT INTO `fallas` (`numero_de_fallas`, `fecha_de_reporte`, `fecha_de_atencion`, `descripcion`, `docente_clave`, `administrador_id`, `equipo_no_serie`, `nombre_laboratorio`) VALUES
(1, '2017-11-18', '0000-00-00', '', '1', 1, 1, '3'),
(2, '2017-11-29', '0000-00-00', 'falla en el ventilador', '2', 1, 14, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faltantes`
--

CREATE TABLE `faltantes` (
  `no_falla` int(11) NOT NULL,
  `no_equipo` int(11) DEFAULT NULL,
  `no_laboratorio` varchar(20) DEFAULT NULL,
  `fecha_perdida` date DEFAULT NULL,
  `hora` varchar(10) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `faltantes`
--

INSERT INTO `faltantes` (`no_falla`, `no_equipo`, `no_laboratorio`, `fecha_perdida`, `hora`, `observaciones`) VALUES
(6, 1, '3', '2017-11-18', '22:35:43', '111'),
(7, 1, '1', '2017-11-18', '22:38:50', ''),
(8, 1, '1', '2017-11-29', '22:43:03', 'le falta servicio'),
(9, 14, '1', '2017-11-29', '22:43:31', 'falta work');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faltantes_has_equipo`
--

CREATE TABLE `faltantes_has_equipo` (
  `faltantes_no_falla` int(11) NOT NULL,
  `equipo_no_serie` int(11) NOT NULL,
  `equipo_laboratorio_clave` int(11) NOT NULL,
  `equipo_caracteristicas_numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `numero_de_horario` int(11) NOT NULL,
  `dia` varchar(20) DEFAULT NULL,
  `hora` varchar(15) DEFAULT NULL,
  `periodo` varchar(25) DEFAULT NULL,
  `docente_clave` varchar(20) NOT NULL,
  `laboratorio_clave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impreciones`
--

CREATE TABLE `impreciones` (
  `clave` int(11) NOT NULL,
  `impreciones` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `laboratorio_clave` int(11) NOT NULL,
  `administrador_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `impreciones`
--

INSERT INTO `impreciones` (`clave`, `impreciones`, `fecha`, `laboratorio_clave`, `administrador_id`) VALUES
(5, 1, '2017-11-16', 1, 1),
(6, 0, '2017-11-16', 1, 1),
(7, 1, '2017-11-29', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `clave` int(11) NOT NULL,
  `ubicacion` varchar(25) DEFAULT NULL,
  `nombre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`clave`, `ubicacion`, `nombre`) VALUES
(1, '10 norte', 'Bachillerato tecnol?gico'),
(2, '10 sur', 'C?mputo b?sico'),
(3, '10 este', 'C?mputo avanzado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(10) NOT NULL,
  `nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre`) VALUES
(18, 'Lenovo'),
(19, 'Sony');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `nrc` int(15) NOT NULL DEFAULT 0,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`nrc`, `nombre`) VALUES
(0, 'Autoacceso'),
(34, 'Compiladores'),
(35, 'Redes'),
(39, 'Graficacion'),
(67, 'Circuitos'),
(98, 'Robotica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_docente`
--

CREATE TABLE `materia_docente` (
  `nrcmd` int(15) DEFAULT NULL,
  `clavemd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia_docente`
--

INSERT INTO `materia_docente` (`nrcmd`, `clavemd`) VALUES
(98, '3'),
(98, '1'),
(67, '2'),
(34, '1'),
(39, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `num_prestamo` int(11) NOT NULL,
  `hora` varchar(5) DEFAULT NULL,
  `HoraTermino` varchar(5) NOT NULL,
  `fecha_prestamo` date DEFAULT NULL,
  `tipo` varchar(1) NOT NULL,
  `laboratorio_clave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`num_prestamo`, `hora`, `HoraTermino`, `fecha_prestamo`, `tipo`, `laboratorio_clave`) VALUES
(14, '08:00', '09:00', '2017-12-05', 'A', 1),
(15, '08:00', '09:00', '2017-12-12', 'A', 1),
(16, '11:00', '12:00', '2017-12-18', 'A', 1),
(98, '08:00', '09:00', '2017-12-14', 'P', 1),
(99, '11:00', '12:00', '2017-12-14', 'P', 1),
(100, '13:00', '14:00', '2017-12-14', 'P', 1),
(101, '08:00', '09:00', '2017-12-25', 'A', 1),
(102, '11:00', '12:00', '2017-12-27', 'A', 1),
(103, '08:00', '09:00', '2018-01-01', 'A', 1),
(104, '11:00', '12:00', '2018-01-03', 'A', 1),
(105, '08:00', '09:00', '2018-01-08', 'A', 1),
(106, '11:00', '12:00', '2018-01-10', 'A', 1),
(107, '08:00', '09:00', '2017-12-25', 'A', 3),
(108, '11:00', '12:00', '2017-12-27', 'A', 3),
(109, '08:00', '09:00', '2018-01-01', 'A', 3),
(110, '11:00', '12:00', '2018-01-03', 'A', 3),
(111, '08:00', '09:00', '2018-01-08', 'A', 3),
(112, '11:00', '12:00', '2018-01-10', 'A', 3),
(113, '13:00', '14:00', '2017-12-25', 'A', 2),
(114, '13:00', '14:00', '2017-12-29', 'A', 2),
(115, '13:00', '14:00', '2018-01-01', 'A', 2),
(116, '13:00', '14:00', '2018-01-05', 'A', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo_docente`
--

CREATE TABLE `prestamo_docente` (
  `clavepd` varchar(20) DEFAULT NULL,
  `num_prestamopd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamo_docente`
--

INSERT INTO `prestamo_docente` (`clavepd`, `num_prestamopd`) VALUES
('2', 15),
('1', 16),
('1', 98),
('1', 99),
('1', 100),
('2', 14),
('2', 101),
('3', 102),
('2', 103),
('3', 104),
('2', 105),
('3', 106),
('2', 107),
('3', 108),
('2', 109),
('3', 110),
('2', 111),
('3', 112),
('1', 113),
('1', 114),
('1', 115),
('1', 116);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo_materia`
--

CREATE TABLE `prestamo_materia` (
  `num_prestamopm` int(11) DEFAULT NULL,
  `nrcpm` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamo_materia`
--

INSERT INTO `prestamo_materia` (`num_prestamopm`, `nrcpm`) VALUES
(14, 67),
(15, 67),
(16, 34),
(99, 98),
(100, 98),
(101, 67),
(102, 35),
(103, 67),
(104, 35),
(105, 67),
(106, 35),
(107, 67),
(108, 35),
(109, 67),
(110, 35),
(111, 67),
(112, 35),
(113, 39),
(114, 39),
(115, 39),
(116, 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software_instalado`
--

CREATE TABLE `software_instalado` (
  `clave_software` varchar(15) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `equipo` int(11) NOT NULL,
  `laboratorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `software_instalado`
--

INSERT INTO `software_instalado` (`clave_software`, `nombre`, `descripcion`, `equipo`, `laboratorio`) VALUES
('123456789', 'JAVA', 'PROGRAMACION', 1, 1),
('1234er', 'youtube', 'videos', 2, 2),
('6655', 'javascript', 'lata', 14, 1),
('ad23', 'java', 'PROGRAMACION', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `autoservicios`
--
ALTER TABLE `autoservicios`
  ADD PRIMARY KEY (`folio`,`laboratorio_clave`,`administrador_id`,`alumno_matricula`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`no_serie`,`laboratorio_clave`);

--
-- Indices de la tabla `equipo_has_software_instalado`
--
ALTER TABLE `equipo_has_software_instalado`
  ADD PRIMARY KEY (`equipo_no_serie`,`equipo_laboratorio_clave`,`equipo_caracteristicas_numero`,`software_instalado_clave_software`),
  ADD KEY `fk_equipo_has_software_instalado_equipo1_idx` (`equipo_no_serie`,`equipo_laboratorio_clave`,`equipo_caracteristicas_numero`);

--
-- Indices de la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD PRIMARY KEY (`numero_de_fallas`,`docente_clave`,`administrador_id`,`equipo_no_serie`);

--
-- Indices de la tabla `faltantes`
--
ALTER TABLE `faltantes`
  ADD PRIMARY KEY (`no_falla`);

--
-- Indices de la tabla `faltantes_has_equipo`
--
ALTER TABLE `faltantes_has_equipo`
  ADD PRIMARY KEY (`faltantes_no_falla`,`equipo_no_serie`,`equipo_laboratorio_clave`,`equipo_caracteristicas_numero`),
  ADD KEY `fk_faltantes_has_equipo_faltantes1_idx` (`faltantes_no_falla`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`numero_de_horario`,`docente_clave`,`laboratorio_clave`),
  ADD KEY `fk_horario_docente1_idx` (`docente_clave`),
  ADD KEY `fk_horario_laboratorio1_idx1` (`laboratorio_clave`);

--
-- Indices de la tabla `impreciones`
--
ALTER TABLE `impreciones`
  ADD PRIMARY KEY (`clave`,`laboratorio_clave`,`administrador_id`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`nrc`);

--
-- Indices de la tabla `materia_docente`
--
ALTER TABLE `materia_docente`
  ADD KEY `nrcmd` (`nrcmd`),
  ADD KEY `clavemd` (`clavemd`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`num_prestamo`,`laboratorio_clave`),
  ADD KEY `fk_prestamo_laboratorio1_idx1` (`laboratorio_clave`);

--
-- Indices de la tabla `prestamo_docente`
--
ALTER TABLE `prestamo_docente`
  ADD KEY `clavepd` (`clavepd`),
  ADD KEY `num_prestamopd` (`num_prestamopd`);

--
-- Indices de la tabla `prestamo_materia`
--
ALTER TABLE `prestamo_materia`
  ADD KEY `nrcpm` (`nrcpm`),
  ADD KEY `num_prestamopm` (`num_prestamopm`);

--
-- Indices de la tabla `software_instalado`
--
ALTER TABLE `software_instalado`
  ADD PRIMARY KEY (`clave_software`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fallas`
--
ALTER TABLE `fallas`
  MODIFY `numero_de_fallas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `faltantes`
--
ALTER TABLE `faltantes`
  MODIFY `no_falla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `impreciones`
--
ALTER TABLE `impreciones`
  MODIFY `clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `num_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materia_docente`
--
ALTER TABLE `materia_docente`
  ADD CONSTRAINT `materia_docente_ibfk_1` FOREIGN KEY (`nrcmd`) REFERENCES `materia` (`nrc`),
  ADD CONSTRAINT `materia_docente_ibfk_2` FOREIGN KEY (`clavemd`) REFERENCES `docente` (`clave`);

--
-- Filtros para la tabla `prestamo_docente`
--
ALTER TABLE `prestamo_docente`
  ADD CONSTRAINT `prestamo_docente_ibfk_1` FOREIGN KEY (`clavepd`) REFERENCES `docente` (`clave`),
  ADD CONSTRAINT `prestamo_docente_ibfk_2` FOREIGN KEY (`num_prestamopd`) REFERENCES `prestamo` (`num_prestamo`);

--
-- Filtros para la tabla `prestamo_materia`
--
ALTER TABLE `prestamo_materia`
  ADD CONSTRAINT `prestamo_materia_ibfk_1` FOREIGN KEY (`nrcpm`) REFERENCES `materia` (`nrc`),
  ADD CONSTRAINT `prestamo_materia_ibfk_2` FOREIGN KEY (`num_prestamopm`) REFERENCES `prestamo` (`num_prestamo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
