-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-04-2016 a las 12:36:55
-- Versión del servidor: 5.5.47
-- Versión de PHP: 5.6.20-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `comunews`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `autor` int(10) unsigned NOT NULL,
  `imagen` varchar(255) NOT NULL DEFAULT 'tumb.svg',
  `descripcion` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `autor` (`autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `autor`, `imagen`, `descripcion`, `contenido`, `created_at`, `updated_at`) VALUES
(2, 'Titulo de Prueba', 1, 'tumb.svg', 'Una breve descripcion de prueba', '<p>Mi noticia de prueba. aca es donde va a estar todo el contenido de mi noticia! ajashdjabuyhavbsudfyvbasdufs</p>\r\n\r\n<p>asdsdafsadf</p>\r\n\r\n<p>asdfasdfasdfasdfasdf</p>\r\n', '2016-04-05 18:08:29', '2016-04-05 18:08:29'),
(3, 'Mi segundo titulo de prueba', 1, 'tumb.svg', 'He aqui mi segundo titulo de prueba', '<p>asdasdasdfasdfsadfas</p>\r\n\r\n<p>sadfasdfasdfas</p>\r\n\r\n<p>asdfsadfsadfasdfasdf</p>\r\n', '2016-04-05 18:09:19', '2016-04-05 18:09:19'),
(4, 'Francisco', 1, 'tumb.svg', 'una descripcion mas', '<p>Comienza a crear tu noticia aqui..</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>asdsadsfgadsgasdg</p>\r\n', '2016-04-05 18:11:04', '2016-04-05 18:11:04'),
(5, 'asasdfasdf', 2, 'tumb.svg', 'asdfasdfasdf', '<p>Comienza a crear tu noticia aqui..</p>\r\n\r\n<p>sadfsadf</p>\r\n', '2016-04-05 18:12:39', '2016-04-05 18:12:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alan Arza', 'arzapersonal@gmail.com', '$2y$10$FJHVmUltDUdbADrLVTujneUwSmmztyG5up6sJ0bDPfXo9SE5d89QO', 'BnYqCm0PCAijYlhVGk4VVO4NnDKZ8hNGFhcjffQNFOIlikJ9c5AaOQclQbbD', '2016-04-01 16:07:48', '2016-04-05 18:11:37'),
(2, 'Francisco', 'fran123@asdasd.com', '$2y$10$hpm3iCttzA3NmL/y4T4lYewGx0hspAe3frQqMcSROj59XNFw/Vlrm', 'WYM0fjtiWiX3U886n1ZorA0LhrH2YCcOZjMpvkNa34dcePJE7szv7gNYa4rg', '2016-04-05 18:12:17', '2016-04-05 18:15:56');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
