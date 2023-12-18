-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-12-2023 a las 22:22:16
-- Versión del servidor: 8.0.34-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basepower`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dieta`
--

CREATE TABLE `dieta` (
  `id_dieta` int NOT NULL,
  `dia_semana` date NOT NULL,
  `id_perfil_perfil_miembro` int NOT NULL,
  `descripcion_dieta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructores`
--

CREATE TABLE `instructores` (
  `idInstructor` int NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `direccion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `instructores`
--

INSERT INTO `instructores` (`idInstructor`, `nombre`, `apellido`, `telefono`, `email`, `direccion`) VALUES
(1, 'Franchesco', 'Virgolinni', '0985632147', 'fanchesvir1@gmail.com', 'Avda. Pedro Juan Caballero'),
(3, 'Ezequiel', 'Rivaldi', '0991256487', 'ezequielito666@gmail.com', 'Avda. Bernardino Caballero'),
(4, 'Elodia', 'Ortiz', '0985231456', 'eloooo5@gmail.com', 'San Lorenzo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresia`
--

CREATE TABLE `membresia` (
  `id_membresia` int NOT NULL,
  `duracion` int NOT NULL,
  `id_pago_pagos` int NOT NULL,
  `id_modalidad_modalidad` int NOT NULL,
  `dieta` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `idModalidad` int NOT NULL,
  `nombre_modalidad` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `costo` int DEFAULT NULL,
  `idInstructor` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`idModalidad`, `nombre_modalidad`, `costo`, `idInstructor`) VALUES
(3, 'Musculación', 100000, 1),
(4, 'Funcional', 100000, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` int NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `metodo_pago` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_miembro`
--

CREATE TABLE `perfil_miembro` (
  `id_perfil` int NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `sexo` tinyint NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `peso_actual` decimal(10,0) NOT NULL,
  `fecha_registro` date NOT NULL,
  `id_membresia_membresiaa` int NOT NULL,
  `activo` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permisos` int NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int NOT NULL,
  `tipo_rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `tipo_rol`) VALUES
(1, 'Administrador'),
(2, 'Entrenador'),
(3, 'Miembro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_permisos`
--

CREATE TABLE `roles_permisos` (
  `id_permisos_permisos` int NOT NULL,
  `id_rol_roles` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutinas`
--

CREATE TABLE `rutinas` (
  `id_rutina` int NOT NULL,
  `dia_semana` date NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `id_perfil_perfil_miembro` int NOT NULL,
  `idInstructor_instructores` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `id_salon` int NOT NULL,
  `cantidad_reservas` int NOT NULL,
  `idInstructor_instructores` int NOT NULL,
  `id_perfil_perfil_miembro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencia`
--

CREATE TABLE `sugerencia` (
  `idSugerencia` int NOT NULL,
  `mensaje` varchar(300) NOT NULL,
  `id_perfil` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL,
  `alias` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `alias`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$NKHTWsUalhXkjLveRUxdSedQumQlPsmPh1SJof2kBo6NcBz3xSkYS'),
(2, 'profe', 'prof@gmai.com', '$2y$10$Y0uh/TpZTbTSqLiF5.SDL.SkhbeWH2l7L6bG.GEvd7xXimBktFioS'),
(3, 'juan', 'juan@gmail.com', '$2y$10$74Qe.gB2KXxQHJqhx1A4PuWuKNCHFT61oyHmJs6it0qdBQdzvR3Dq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_roles`
--

CREATE TABLE `usuarios_roles` (
  `id_usuario_usuarios` int NOT NULL,
  `id_rol_roles` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios_roles`
--

INSERT INTO `usuarios_roles` (`id_usuario_usuarios`, `id_rol_roles`) VALUES
(1, 1),
(2, 2),
(3, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dieta`
--
ALTER TABLE `dieta`
  ADD PRIMARY KEY (`id_dieta`),
  ADD KEY `id_perfil_perfil_miembro` (`id_perfil_perfil_miembro`);

--
-- Indices de la tabla `instructores`
--
ALTER TABLE `instructores`
  ADD PRIMARY KEY (`idInstructor`);

--
-- Indices de la tabla `membresia`
--
ALTER TABLE `membresia`
  ADD PRIMARY KEY (`id_membresia`),
  ADD KEY `id_pago_pagos` (`id_pago_pagos`),
  ADD KEY `id_modalidad_modalidad` (`id_modalidad_modalidad`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`idModalidad`),
  ADD KEY `idInstructor_instructores` (`idInstructor`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `perfil_miembro`
--
ALTER TABLE `perfil_miembro`
  ADD PRIMARY KEY (`id_perfil`),
  ADD KEY `id_membresia_membresiaa` (`id_membresia_membresiaa`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permisos`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `roles_permisos`
--
ALTER TABLE `roles_permisos`
  ADD PRIMARY KEY (`id_permisos_permisos`,`id_rol_roles`),
  ADD KEY `id_rol_roles` (`id_rol_roles`);

--
-- Indices de la tabla `rutinas`
--
ALTER TABLE `rutinas`
  ADD PRIMARY KEY (`id_rutina`),
  ADD KEY `id_perfil_perfil_miembro` (`id_perfil_perfil_miembro`),
  ADD KEY `idInstructor_instructores` (`idInstructor_instructores`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id_salon`),
  ADD KEY `idInstructor_instructores` (`idInstructor_instructores`),
  ADD KEY `id_perfil_perfil_miembro` (`id_perfil_perfil_miembro`);

--
-- Indices de la tabla `sugerencia`
--
ALTER TABLE `sugerencia`
  ADD PRIMARY KEY (`idSugerencia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuarios_roles`
--
ALTER TABLE `usuarios_roles`
  ADD PRIMARY KEY (`id_usuario_usuarios`,`id_rol_roles`),
  ADD KEY `id_rol_roles` (`id_rol_roles`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dieta`
--
ALTER TABLE `dieta`
  MODIFY `id_dieta` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instructores`
--
ALTER TABLE `instructores`
  MODIFY `idInstructor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `membresia`
--
ALTER TABLE `membresia`
  MODIFY `id_membresia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `idModalidad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil_miembro`
--
ALTER TABLE `perfil_miembro`
  MODIFY `id_perfil` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permisos` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rutinas`
--
ALTER TABLE `rutinas`
  MODIFY `id_rutina` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `id_salon` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sugerencia`
--
ALTER TABLE `sugerencia`
  MODIFY `idSugerencia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dieta`
--
ALTER TABLE `dieta`
  ADD CONSTRAINT `dieta_ibfk_1` FOREIGN KEY (`id_perfil_perfil_miembro`) REFERENCES `perfil_miembro` (`id_perfil`);

--
-- Filtros para la tabla `membresia`
--
ALTER TABLE `membresia`
  ADD CONSTRAINT `membresia_ibfk_1` FOREIGN KEY (`id_pago_pagos`) REFERENCES `pagos` (`id_pago`),
  ADD CONSTRAINT `membresia_ibfk_2` FOREIGN KEY (`id_modalidad_modalidad`) REFERENCES `modalidad` (`idModalidad`);

--
-- Filtros para la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD CONSTRAINT `modalidad_ibfk_1` FOREIGN KEY (`idInstructor`) REFERENCES `instructores` (`idInstructor`);

--
-- Filtros para la tabla `perfil_miembro`
--
ALTER TABLE `perfil_miembro`
  ADD CONSTRAINT `perfil_miembro_ibfk_1` FOREIGN KEY (`id_membresia_membresiaa`) REFERENCES `membresia` (`id_membresia`);

--
-- Filtros para la tabla `roles_permisos`
--
ALTER TABLE `roles_permisos`
  ADD CONSTRAINT `roles_permisos_ibfk_1` FOREIGN KEY (`id_permisos_permisos`) REFERENCES `permisos` (`id_permisos`),
  ADD CONSTRAINT `roles_permisos_ibfk_2` FOREIGN KEY (`id_rol_roles`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `rutinas`
--
ALTER TABLE `rutinas`
  ADD CONSTRAINT `rutinas_ibfk_1` FOREIGN KEY (`id_perfil_perfil_miembro`) REFERENCES `perfil_miembro` (`id_perfil`),
  ADD CONSTRAINT `rutinas_ibfk_2` FOREIGN KEY (`idInstructor_instructores`) REFERENCES `instructores` (`idInstructor`);

--
-- Filtros para la tabla `salon`
--
ALTER TABLE `salon`
  ADD CONSTRAINT `salon_ibfk_1` FOREIGN KEY (`idInstructor_instructores`) REFERENCES `instructores` (`idInstructor`),
  ADD CONSTRAINT `salon_ibfk_2` FOREIGN KEY (`id_perfil_perfil_miembro`) REFERENCES `perfil_miembro` (`id_perfil`);

--
-- Filtros para la tabla `usuarios_roles`
--
ALTER TABLE `usuarios_roles`
  ADD CONSTRAINT `usuarios_roles_ibfk_2` FOREIGN KEY (`id_rol_roles`) REFERENCES `roles` (`id_rol`),
  ADD CONSTRAINT `usuarios_roles_ibfk_3` FOREIGN KEY (`id_usuario_usuarios`) REFERENCES `usuarios` (`id_usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
