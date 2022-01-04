-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2022 a las 19:10:39
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `matricula_alumno_matricula` int(11) DEFAULT NULL,
  `noserie_equipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `adeudo`
--

INSERT INTO `adeudo` (`folio`, `fecha`, `hora`, `descripcion`, `estado`, `matricula_alumno_matricula`, `noserie_equipo`) VALUES
(1, '2021-11-03', '23:44:00', 'Debe un mouse.', 'resuelto', 201729813, '1234MF');

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
(201729813, 'Miguel de Jesús', 'Herrera Loaiza', 'IPGI', 'miguel@gmail.com'),
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
(1, '2021-08-04', '10:00', '12:00', 1, 1),
(2, '2021-08-11', '10:00', '12:00', 1, 1),
(3, '2021-08-18', '10:00', '12:00', 1, 1),
(4, '2021-08-25', '10:00', '12:00', 1, 1),
(5, '2021-09-01', '10:00', '12:00', 1, 1),
(6, '2021-09-08', '10:00', '12:00', 1, 1),
(7, '2021-09-15', '10:00', '12:00', 1, 1),
(8, '2021-09-22', '10:00', '12:00', 1, 1),
(9, '2021-09-29', '10:00', '12:00', 1, 1),
(10, '2021-10-06', '10:00', '12:00', 1, 1),
(11, '2021-10-13', '10:00', '12:00', 1, 1),
(12, '2021-10-20', '10:00', '12:00', 1, 1),
(13, '2021-10-27', '10:00', '12:00', 1, 1),
(14, '2021-11-03', '10:00', '12:00', 1, 1),
(15, '2021-11-10', '10:00', '12:00', 1, 1),
(16, '2021-11-17', '10:00', '12:00', 1, 1),
(17, '2021-11-24', '10:00', '12:00', 1, 1),
(18, '2021-12-01', '10:00', '12:00', 1, 1),
(19, '2021-12-08', '10:00', '12:00', 1, 1),
(20, '2021-08-03', '13:00', '15:00', 2, 1),
(21, '2021-08-10', '13:00', '15:00', 2, 1),
(22, '2021-08-17', '13:00', '15:00', 2, 1),
(23, '2021-08-24', '13:00', '15:00', 2, 1),
(24, '2021-08-31', '13:00', '15:00', 2, 1),
(25, '2021-09-07', '13:00', '15:00', 2, 1),
(26, '2021-09-14', '13:00', '15:00', 2, 1),
(27, '2021-09-21', '13:00', '15:00', 2, 1),
(28, '2021-09-28', '13:00', '15:00', 2, 1),
(29, '2021-10-05', '13:00', '15:00', 2, 1),
(30, '2021-10-12', '13:00', '15:00', 2, 1),
(31, '2021-10-19', '13:00', '15:00', 2, 1),
(32, '2021-10-26', '13:00', '15:00', 2, 1),
(33, '2021-11-02', '13:00', '15:00', 2, 1),
(34, '2021-11-09', '13:00', '15:00', 2, 1),
(35, '2021-11-16', '13:00', '15:00', 2, 1),
(36, '2021-11-23', '13:00', '15:00', 2, 1),
(37, '2021-11-30', '13:00', '15:00', 2, 1),
(38, '2021-12-07', '13:00', '15:00', 2, 1),
(39, '2021-08-03', '13:00', '15:00', 2, 1),
(40, '2021-08-10', '13:00', '15:00', 2, 1),
(41, '2021-08-17', '13:00', '15:00', 2, 1),
(42, '2021-08-24', '13:00', '15:00', 2, 1),
(43, '2021-08-31', '13:00', '15:00', 2, 1),
(44, '2021-09-07', '13:00', '15:00', 2, 1),
(45, '2021-09-14', '13:00', '15:00', 2, 1),
(46, '2021-09-21', '13:00', '15:00', 2, 1),
(47, '2021-09-28', '13:00', '15:00', 2, 1),
(48, '2021-10-05', '13:00', '15:00', 2, 1),
(49, '2021-10-12', '13:00', '15:00', 2, 1),
(50, '2021-10-19', '13:00', '15:00', 2, 1),
(51, '2021-10-26', '13:00', '15:00', 2, 1),
(52, '2021-11-02', '13:00', '15:00', 2, 1),
(53, '2021-11-09', '13:00', '15:00', 2, 1),
(54, '2021-11-16', '13:00', '15:00', 2, 1),
(55, '2021-11-23', '13:00', '15:00', 2, 1),
(56, '2021-11-30', '13:00', '15:00', 2, 1),
(57, '2021-12-07', '13:00', '15:00', 2, 1);

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
  `matricula_alumno` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autoacceso`
--

INSERT INTO `autoacceso` (`folio`, `hora_inicio`, `hora_termino`, `fecha`, `actividad`, `equipo_noserie`, `usuario_id`, `matricula_alumno`) VALUES
(1, '23:41:00', '12:41:00', '2021-11-03', 'Instalación de programas', '1234MF', '1234ALBH', 201729813);

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
('1234MF', '87971298', '123', 1, 1);

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
(1, '1234MF', '8080hi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas`
--

CREATE TABLE `fallas` (
  `clave_fallas` int(11) NOT NULL,
  `fecha_reporte` date DEFAULT NULL,
  `fecha_atencion` date DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `equipo_noserie_equipo` varchar(20) DEFAULT NULL,
  `usuario_id_usuario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fallas`
--

INSERT INTO `fallas` (`clave_fallas`, `fecha_reporte`, `fecha_atencion`, `descripcion`, `equipo_noserie_equipo`, `usuario_id_usuario`) VALUES
(2, '2021-11-04', '2021-11-04', 'Mouse falla', '1234MF', '1234ALBH');

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
(1, 'SJCH1', 'Basico I'),
(2, 'SJCH2', 'Basico II');

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
(1, 'Lenovo'),
(2, 'HP');

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

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`clave`, `nrc`, `nombre`, `carrera`) VALUES
('12345', '1234FFF', 'Robotica', 'ISTII'),
('123456', '1234FFFAA', 'Bases de Datos', 'ISTII'),
('1A', '123MFAA', 'Ingeniería de Software', 'ISTII');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_usuario`
--

CREATE TABLE `materia_usuario` (
  `id_mat_uso` int(11) NOT NULL,
  `materia_clave` varchar(15) DEFAULT NULL,
  `usu_id_usu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia_usuario`
--

INSERT INTO `materia_usuario` (`id_mat_uso`, `materia_clave`, `usu_id_usu`) VALUES
(4, '12345', '20171234'),
(5, '1A', '20171234'),
(6, '12345', '20171234'),
(7, '12345', '1234ALBH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perdida`
--

CREATE TABLE `perdida` (
  `clave` int(11) NOT NULL,
  `fecha_perdida` date DEFAULT NULL,
  `hora_perdida` time DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `equipo_no_serie_equipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perdida`
--

INSERT INTO `perdida` (`clave`, `fecha_perdida`, `hora_perdida`, `observaciones`, `equipo_no_serie_equipo`) VALUES
(2, '2021-11-05', '10:30:00', 'Mouse extraviado.', '1234MF');

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
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `labora_lab_clave` int(11) DEFAULT NULL,
  `usuario_usu_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`num_prestamo`, `start`, `end`, `title`, `labora_lab_clave`, `usuario_usu_id`) VALUES
(7, '2021-11-11 07:00:00', '2021-11-11 10:00:00', 'Seminario I', 1, '1234ALBH'),
(9, '2021-11-13 08:15:00', '2021-11-13 09:15:00', 'Seminario II', 1, '1234ALBH'),
(11, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL),
(17, '2021-11-16 08:00:00', '2021-11-16 10:00:00', 'Seminario III', 1, '1234ALBH'),
(20, '2021-11-18 08:00:00', '2021-11-18 10:00:00', 'Seminario IV', 1, '1234ALBH');

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
('8080hi', 'Netbeans', 'Codigo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(7847, 'esteban', 'resteban410@gmail.com', NULL, '$2y$10$g7R2tYqfDdimjZLfLz3M.etvRHwq42o8Sku57HCHDW3kMgXMnQP3e', 'admin', NULL, '2021-12-07 08:47:20', '2021-12-07 08:47:20'),
(7848, 'claudia', 'claudia@gmail.com', NULL, '$2y$10$Jk1jf5jDwHhEd8k85SlZe.M/AYcTKhiHNyQACBTRbAjRDxRJ5lqky', 'user', NULL, '2021-12-07 09:26:47', '2021-12-07 09:26:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` varchar(20) NOT NULL,
  `nombre_usuario` varchar(35) NOT NULL,
  `correo_electronico` varchar(45) NOT NULL,
  `contraseña` varchar(25) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_usuario`, `correo_electronico`, `contraseña`, `tipo`, `apellido`, `direccion`, `telefono`) VALUES
('1234ALBH', 'Claudia', 'claudia@gmail.com', '12345', 'admin', 'Denicia Carral', 'Puebla', '89797'),
('20171234', 'Ana Luisa', 'analuisa@gmail.com', '12345', 'usu', 'Ballinas Hernandez', 'Puebla', '17839127');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_asignacion`
--

CREATE TABLE `usuario_asignacion` (
  `idusuario_asignacion` int(11) NOT NULL,
  `id_usuario` varchar(20) DEFAULT NULL,
  `id_asignacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_asignacion`
--

INSERT INTO `usuario_asignacion` (`idusuario_asignacion`, `id_usuario`, `id_asignacion`) VALUES
(1, '1234ALBH', 1),
(2, '1234ALBH', 2),
(3, '1234ALBH', 3),
(4, '1234ALBH', 4),
(5, '1234ALBH', 5),
(6, '1234ALBH', 6),
(7, '1234ALBH', 7),
(8, '1234ALBH', 8),
(9, '1234ALBH', 9),
(10, '1234ALBH', 10),
(11, '1234ALBH', 11),
(12, '1234ALBH', 12),
(13, '1234ALBH', 13),
(14, '1234ALBH', 14),
(15, '1234ALBH', 15),
(16, '1234ALBH', 16),
(17, '1234ALBH', 17),
(18, '1234ALBH', 18),
(19, '1234ALBH', 19),
(20, '20171234', 20),
(21, '20171234', 21),
(22, '20171234', 22),
(23, '20171234', 23),
(24, '20171234', 24),
(25, '20171234', 25),
(26, '20171234', 26),
(27, '20171234', 27),
(28, '20171234', 28),
(29, '20171234', 29),
(30, '20171234', 30),
(31, '20171234', 31),
(32, '20171234', 32),
(33, '20171234', 33),
(34, '20171234', 34),
(35, '20171234', 35),
(36, '20171234', 36),
(37, '20171234', 37),
(38, '20171234', 38),
(39, '20171234', 39),
(40, '20171234', 40),
(41, '20171234', 41),
(42, '20171234', 42),
(43, '20171234', 43),
(44, '20171234', 44),
(45, '20171234', 45),
(46, '20171234', 46),
(47, '20171234', 47),
(48, '20171234', 48),
(49, '20171234', 49),
(50, '20171234', 50),
(51, '20171234', 51),
(52, '20171234', 52),
(53, '20171234', 53),
(54, '20171234', 54),
(55, '20171234', 55),
(56, '20171234', 56),
(57, '20171234', 57);

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
  ADD KEY `usuario_id_idx` (`usuario_id`),
  ADD KEY `matricula_alumno_idx` (`matricula_alumno`);

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
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD PRIMARY KEY (`clave_fallas`),
  ADD KEY `equipo_noserie_idx` (`equipo_noserie_equipo`),
  ADD KEY `usuario_id_idx` (`usuario_id_usuario`);

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
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `perdida`
--
ALTER TABLE `perdida`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `equipo_no_serie_idx` (`equipo_no_serie_equipo`);

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
  ADD KEY `usuario_usuario_id_idx` (`usuario_usu_id`),
  ADD KEY `laboratorio_lab_clave_idx` (`labora_lab_clave`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`correo_electronico`);

--
-- Indices de la tabla `usuario_asignacion`
--
ALTER TABLE `usuario_asignacion`
  ADD PRIMARY KEY (`idusuario_asignacion`),
  ADD KEY `id_usuario_idx` (`id_usuario`),
  ADD KEY `id_asignacion_idx` (`id_asignacion`);

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
  MODIFY `num_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fallas`
--
ALTER TABLE `fallas`
  MODIFY `clave_fallas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `materia_usuario`
--
ALTER TABLE `materia_usuario`
  MODIFY `id_mat_uso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `num_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7849;

--
-- AUTO_INCREMENT de la tabla `usuario_asignacion`
--
ALTER TABLE `usuario_asignacion`
  MODIFY `idusuario_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adeudo`
--
ALTER TABLE `adeudo`
  ADD CONSTRAINT `matricula_alumno_matricula` FOREIGN KEY (`matricula_alumno_matricula`) REFERENCES `alumno` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `noserie_equipo` FOREIGN KEY (`noserie_equipo`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `laboratorio_lab_clave` FOREIGN KEY (`laboratorio_lab_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `periodo_id_periodo` FOREIGN KEY (`periodo_id_periodo`) REFERENCES `periodo` (`id_periodo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `autoacceso`
--
ALTER TABLE `autoacceso`
  ADD CONSTRAINT `equipo_noserie` FOREIGN KEY (`equipo_noserie`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `matricula_alumno` FOREIGN KEY (`matricula_alumno`) REFERENCES `alumno` (`matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `laboratorio_clave` FOREIGN KEY (`laboratorio_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `marca_id` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipo_software`
--
ALTER TABLE `equipo_software`
  ADD CONSTRAINT `equipo_no_serie` FOREIGN KEY (`equipo_no_serie`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `software_clave` FOREIGN KEY (`software_clave`) REFERENCES `software` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD CONSTRAINT `equipo_noserie_equipo` FOREIGN KEY (`equipo_noserie_equipo`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_id_usuario` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `materia_usuario`
--
ALTER TABLE `materia_usuario`
  ADD CONSTRAINT `materia_clave` FOREIGN KEY (`materia_clave`) REFERENCES `materia` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usu_id_usu` FOREIGN KEY (`usu_id_usu`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `perdida`
--
ALTER TABLE `perdida`
  ADD CONSTRAINT `equipo_no_serie_equipo` FOREIGN KEY (`equipo_no_serie_equipo`) REFERENCES `equipo` (`no_serie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `labora_lab_clave` FOREIGN KEY (`labora_lab_clave`) REFERENCES `laboratorio` (`lab_clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_usu_id` FOREIGN KEY (`usuario_usu_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_asignacion`
--
ALTER TABLE `usuario_asignacion`
  ADD CONSTRAINT `id_asignacion` FOREIGN KEY (`id_asignacion`) REFERENCES `asignacion` (`num_asignacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
