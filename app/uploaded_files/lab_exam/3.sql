-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-08-2022 a las 17:33:33
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `polimedic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `common_disease`
--

CREATE TABLE `common_disease` (
  `id` int(11) NOT NULL,
  `common_disease` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condition_monitoring`
--

CREATE TABLE `condition_monitoring` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `appoinment_date` date NOT NULL,
  `condition_type` int(11) NOT NULL,
  `issue_date` int(11) NOT NULL,
  `diagnostic` varchar(200) NOT NULL,
  `treatment` varchar(200) NOT NULL,
  `evolution` varchar(200) NOT NULL,
  `id_owner` int(11) NOT NULL,
  `family_core` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condition_type`
--

CREATE TABLE `condition_type` (
  `id` int(11) NOT NULL,
  `condition_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `family_core`
--

CREATE TABLE `family_core` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `family_core`
--

INSERT INTO `family_core` (`id`, `owner_id`, `name`) VALUES
(3, 3, 'FAMILIA MARTINEZ'),
(4, 4, 'FAMILIA ROBERTO'),
(5, 5, 'FAMILIA GOMEZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `health_condition`
--

CREATE TABLE `health_condition` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `appoinment_date` date NOT NULL,
  `lab_type` int(11) NOT NULL,
  `lab_file_path` varchar(200) NOT NULL,
  `id_owner` int(11) NOT NULL,
  `family_core` int(11) NOT NULL,
  `common_disease` int(11) DEFAULT NULL,
  `particular_desease` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `health_indicator`
--

CREATE TABLE `health_indicator` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `appoinment_date` date NOT NULL,
  `workout` int(11) NOT NULL,
  `heart_rate` double NOT NULL,
  `blood_pressure` double NOT NULL,
  `distance_in_km` double NOT NULL,
  `burned_calories` double NOT NULL,
  `weight_in_kg` double NOT NULL,
  `height_in_cm` double NOT NULL,
  `blood_oxygen_saturation` int(11) NOT NULL,
  `vaccines` varchar(120) NOT NULL,
  `id_owner` int(11) NOT NULL,
  `family_core` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lab_type`
--

CREATE TABLE `lab_type` (
  `id` int(11) NOT NULL,
  `lab_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medical_care_info`
--

CREATE TABLE `medical_care_info` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `appoinment_date` date NOT NULL,
  `physician_type` int(11) NOT NULL,
  `medical_appointment` varchar(120) NOT NULL,
  `physician_name` varchar(120) NOT NULL,
  `observation` varchar(200) NOT NULL,
  `id_owner` int(11) DEFAULT NULL,
  `family_core` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `physician_type`
--

CREATE TABLE `physician_type` (
  `id` int(11) NOT NULL,
  `physician_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `role`
--

INSERT INTO `role` (`id`, `name`, `state`) VALUES
(1, 'admin', 1),
(2, 'owner', 1),
(3, 'member', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `identification_type` varchar(30) NOT NULL,
  `identification_number` int(20) NOT NULL,
  `user` varchar(40) NOT NULL,
  `password` varchar(120) NOT NULL,
  `temporal_password` varchar(60) DEFAULT NULL,
  `fullname` varchar(120) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(120) NOT NULL,
  `type` varchar(60) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '1',
  `role_id` int(11) NOT NULL,
  `familycore_id` int(11) DEFAULT NULL,
  `creation_date` date NOT NULL,
  `modification_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `identification_type`, `identification_number`, `user`, `password`, `temporal_password`, `fullname`, `firstname`, `lastname`, `gender`, `birthdate`, `email`, `type`, `state`, `role_id`, `familycore_id`, `creation_date`, `modification_date`) VALUES
(3, 'Cedula de ciudadania', 1090272162, 'lmar1090', '6007f16e0db96bef60de5e1d1f3f1ee9', 'f18d9d1d258f6c7be3844b0cf4f4c4d9', 'Luis Carlos Martinez Guzman', 'Luis Carlos', 'Martinez Guzman', 'Masculino', '2004-03-13', 'luisomg111@gmail.com', 'Responsable de Familia', 1, 2, 3, '2022-08-12', NULL),
(4, 'Cedula de ciudadania', 12345678, 'jrob1234', '202cb962ac59075b964b07152d234b70', 'adc0901d9c1cb7101546de0348239406', 'Julian Roberto', 'Julian', 'Roberto', 'Masculino', '2007-01-14', 'teamunifed1@gmail.com', 'Responsable de Familia', 1, 2, 4, '2022-08-14', NULL),
(5, 'Cedula de ciudadania', 1010000125, 'ggom1010', '186612aec7846093266b3c3bc285383a', NULL, 'Gloria Lucia Gomez Martinez', 'Gloria Lucia', 'Gomez Martinez', 'Femenino', '2001-05-07', 'lcmartinez261@gmail.com', 'Responsable de Familia', 0, 2, 5, '2022-08-15', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workout`
--

CREATE TABLE `workout` (
  `id` int(11) NOT NULL,
  `workout_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `common_disease`
--
ALTER TABLE `common_disease`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `condition_monitoring`
--
ALTER TABLE `condition_monitoring`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `family_core` (`family_core`),
  ADD KEY `condition_type` (`condition_type`);

--
-- Indices de la tabla `condition_type`
--
ALTER TABLE `condition_type`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `family_core`
--
ALTER TABLE `family_core`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indices de la tabla `health_condition`
--
ALTER TABLE `health_condition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `family_core` (`family_core`),
  ADD KEY `lab_type` (`lab_type`),
  ADD KEY `common_disease` (`common_disease`);

--
-- Indices de la tabla `health_indicator`
--
ALTER TABLE `health_indicator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `family_core` (`family_core`),
  ADD KEY `workout` (`workout`);

--
-- Indices de la tabla `lab_type`
--
ALTER TABLE `lab_type`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medical_care_info`
--
ALTER TABLE `medical_care_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `family_core` (`family_core`),
  ADD KEY `physician_type` (`physician_type`);

--
-- Indices de la tabla `physician_type`
--
ALTER TABLE `physician_type`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `familycore_id` (`familycore_id`);

--
-- Indices de la tabla `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `common_disease`
--
ALTER TABLE `common_disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `condition_monitoring`
--
ALTER TABLE `condition_monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `condition_type`
--
ALTER TABLE `condition_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `family_core`
--
ALTER TABLE `family_core`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `health_condition`
--
ALTER TABLE `health_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `health_indicator`
--
ALTER TABLE `health_indicator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lab_type`
--
ALTER TABLE `lab_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medical_care_info`
--
ALTER TABLE `medical_care_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `physician_type`
--
ALTER TABLE `physician_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `workout`
--
ALTER TABLE `workout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `condition_monitoring`
--
ALTER TABLE `condition_monitoring`
  ADD CONSTRAINT `condition_monitoring_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `condition_monitoring_ibfk_2` FOREIGN KEY (`family_core`) REFERENCES `family_core` (`id`),
  ADD CONSTRAINT `condition_monitoring_ibfk_3` FOREIGN KEY (`condition_type`) REFERENCES `condition_type` (`id`);

--
-- Filtros para la tabla `health_condition`
--
ALTER TABLE `health_condition`
  ADD CONSTRAINT `health_condition_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `health_condition_ibfk_2` FOREIGN KEY (`family_core`) REFERENCES `family_core` (`id`),
  ADD CONSTRAINT `health_condition_ibfk_3` FOREIGN KEY (`lab_type`) REFERENCES `lab_type` (`id`),
  ADD CONSTRAINT `health_condition_ibfk_4` FOREIGN KEY (`common_disease`) REFERENCES `common_disease` (`id`);

--
-- Filtros para la tabla `health_indicator`
--
ALTER TABLE `health_indicator`
  ADD CONSTRAINT `health_indicator_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `health_indicator_ibfk_2` FOREIGN KEY (`family_core`) REFERENCES `family_core` (`id`),
  ADD CONSTRAINT `health_indicator_ibfk_3` FOREIGN KEY (`workout`) REFERENCES `workout` (`id`);

--
-- Filtros para la tabla `medical_care_info`
--
ALTER TABLE `medical_care_info`
  ADD CONSTRAINT `medical_care_info_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `medical_care_info_ibfk_2` FOREIGN KEY (`family_core`) REFERENCES `family_core` (`id`),
  ADD CONSTRAINT `medical_care_info_ibfk_3` FOREIGN KEY (`physician_type`) REFERENCES `physician_type` (`id`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`familycore_id`) REFERENCES `family_core` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
