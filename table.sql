-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-04-2017 a las 00:44:50
-- Versión del servidor: 5.6.35
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `championship_bj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `last_name` varchar(90) NOT NULL,
  `name_team` varchar(100) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `img_inscription` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;