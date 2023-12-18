-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-12-2023 a las 22:31:07
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

DROP TABLE IF EXISTS `dieta`;
CREATE TABLE IF NOT EXISTS `dieta` (
  `id_dieta` int NOT NULL AUTO_INCREMENT,
  `dia_semana` date NOT NULL,
  `id_perfil_perfil_miembro` int NOT NULL,
  `descripcion_dieta` varchar(100) NOT NULL,
  PRIMARY KEY (`id_dieta`),
  KEY `id_perfil_perfil_miembro` (`id_perfil_perfil_miembro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructores`
--

DROP TABLE IF EXISTS `instructores`;
CREATE TABLE IF NOT EXISTS `instructores` (
  `idInstructor` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  PRIMARY KEY (`idInstructor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresia`
--

DROP TABLE IF EXISTS `membresia`;
CREATE TABLE IF NOT EXISTS `membresia` (
  `id_membresia` int NOT NULL AUTO_INCREMENT,
  `duracion` int NOT NULL,
  `id_pago_pagos` int NOT NULL,
  `id_modalidad_modalidad` int NOT NULL,
  `dieta` tinyint NOT NULL,
  PRIMARY KEY (`id_membresia`),
  KEY `id_pago_pagos` (`id_pago_pagos`),
  KEY `id_modalidad_modalidad` (`id_modalidad_modalidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

DROP TABLE IF EXISTS `modalidad`;
CREATE TABLE IF NOT EXISTS `modalidad` (
  `id_modalidad` int NOT NULL AUTO_INCREMENT,
  `nombre_modalidad` varchar(30) NOT NULL,
  `costo` int DEFAULT NULL,
  `idInstructor_instructores` int NOT NULL,
  PRIMARY KEY (`id_modalidad`),
  KEY `idInstructor_instructores` (`idInstructor_instructores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

DROP TABLE IF EXISTS `pagos`;
CREATE TABLE IF NOT EXISTS `pagos` (
  `id_pago` int NOT NULL AUTO_INCREMENT,
  `matricula` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `metodo_pago` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_miembro`
--

DROP TABLE IF EXISTS `perfil_miembro`;
CREATE TABLE IF NOT EXISTS `perfil_miembro` (
  `id_perfil` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `sexo` tinyint NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono_contacto` varchar(20) NOT NULL,
  `peso_actual` decimal(10,0) NOT NULL,
  `fecha_registro` date NOT NULL,
  `id_membresia_membresiaa` int NOT NULL,
  `activo` tinyint NOT NULL,
  PRIMARY KEY (`id_perfil`),
  KEY `id_membresia_membresiaa` (`id_membresia_membresiaa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE IF NOT EXISTS `permisos` (
  `id_permisos` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`id_permisos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int NOT NULL AUTO_INCREMENT,
  `tipo_rol` varchar(45) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `roles_permisos`;
CREATE TABLE IF NOT EXISTS `roles_permisos` (
  `id_permisos_permisos` int NOT NULL,
  `id_rol_roles` int NOT NULL,
  PRIMARY KEY (`id_permisos_permisos`,`id_rol_roles`),
  KEY `id_rol_roles` (`id_rol_roles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutinas`
--

DROP TABLE IF EXISTS `rutinas`;
CREATE TABLE IF NOT EXISTS `rutinas` (
  `id_rutina` int NOT NULL AUTO_INCREMENT,
  `dia_semana` date NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `id_perfil_perfil_miembro` int NOT NULL,
  `idInstructor_instructores` int NOT NULL,
  PRIMARY KEY (`id_rutina`),
  KEY `id_perfil_perfil_miembro` (`id_perfil_perfil_miembro`),
  KEY `idInstructor_instructores` (`idInstructor_instructores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

DROP TABLE IF EXISTS `salon`;
CREATE TABLE IF NOT EXISTS `salon` (
  `id_salon` int NOT NULL AUTO_INCREMENT,
  `cantidad_reservas` int NOT NULL,
  `idInstructor_instructores` int NOT NULL,
  `id_perfil_perfil_miembro` int NOT NULL,
  PRIMARY KEY (`id_salon`),
  KEY `idInstructor_instructores` (`idInstructor_instructores`),
  KEY `id_perfil_perfil_miembro` (`id_perfil_perfil_miembro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `alias` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

DROP TABLE IF EXISTS `usuarios_roles`;
CREATE TABLE IF NOT EXISTS `usuarios_roles` (
  `id_usuario_usuarios` int NOT NULL,
  `id_rol_roles` int NOT NULL,
  PRIMARY KEY (`id_usuario_usuarios`,`id_rol_roles`),
  KEY `id_rol_roles` (`id_rol_roles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios_roles`
--

INSERT INTO `usuarios_roles` (`id_usuario_usuarios`, `id_rol_roles`) VALUES
(1, 1),
(2, 2),
(3, 3);

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
  ADD CONSTRAINT `membresia_ibfk_2` FOREIGN KEY (`id_modalidad_modalidad`) REFERENCES `modalidad` (`id_modalidad`);

--
-- Filtros para la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD CONSTRAINT `modalidad_ibfk_1` FOREIGN KEY (`idInstructor_instructores`) REFERENCES `instructores` (`idInstructor`);

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
