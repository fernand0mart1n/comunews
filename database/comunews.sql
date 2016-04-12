-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2016 at 03:59 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comunews`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `autor` int(10) unsigned NOT NULL,
  `imagen` varchar(255) NOT NULL DEFAULT 'tumb.svg',
  `descripcion` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `autor` (`autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `autor`, `imagen`, `descripcion`, `contenido`, `url`, `created_at`, `updated_at`) VALUES
(21, 'Otro titulo de noticia', 1, 'Alan Arza|2016-04-11 15:15:03|Linux-wallpapers-10.jpg', 'holanda gente como va todo bien! saludo', '<p>Comienza a crear tu noticia aqui..</p>\r\n', 'Otro-titulo-de-noticia', '2016-04-11 18:15:03', '2016-04-11 18:15:03'),
(22, 'Un test de noticia', 1, 'Alan Arza|2016-04-11 15:15:34|terminal-linux.jpg', 'Esta es una noticia preliminal de prueba para la web de noticias, sera reemplazada en breve por contenido de usuarios registrados a la web.', '<p>Comienza a crear tu noticia aqui..</p>\r\n', 'Un-test-de-noticia', '2016-04-11 18:15:34', '2016-04-11 18:15:34'),
(23, 'Ahi va otro titulo mas de noticia', 1, 'Alan Arza|2016-04-11 15:17:39|cloud.jpg', 'Esta es una breve descripcion de como va a ser mi noticia, para mas info ver mas..', '<p>Comienza a crear tu noticia aqui..</p>\r\n', 'Ahi-va-otro-titulo-mas-de-noticia', '2016-04-11 18:17:39', '2016-04-11 18:17:39'),
(24, 'Noticia urgente', 1, 'Alan Arza|2016-04-11 15:20:39|images.jpg', 'holanda gente como va todo bien! saludo', '<p>Comienza a crear tu noticia aqui..</p>\r\n', 'Noticia-urgente', '2016-04-11 18:20:39', '2016-04-11 18:20:39'),
(25, 'Feliz cumple', 1, 'Alan Arza|2016-04-11 15:21:36|facebook.png', 'Esta es una noticia preliminal de prueba para la web de noticias, sera reemplazada en breve por contenido de usuarios registrados a la web.', '<p>Comienza a crear tu noticia aqui..</p>\r\n', 'Feliz-cumple', '2016-04-11 18:21:36', '2016-04-11 18:21:36'),
(26, 'Un test de noticia', 1, 'Alan Arza|2016-04-11 15:26:17|500px-Mozilla_Firefox.svg.png', 'Esta es una noticia preliminal de prueba para la web de noticias, sera reemplazada en breve por contenido de usuarios registrados a la web.', '<p>Comienza a crear tu noticia aqui..</p>\r\n', 'Un-test-de-noticia', '2016-04-11 18:26:17', '2016-04-11 18:26:17'),
(27, 'Clase de fabio salerno 2', 1, 'Alan Arza|2016-04-12 17:48:44|udc-talentos-sarmiento-th.jpg', 'Esta es otra clase de redes y seguridad informatica, en esta ocacion aprenderemos a crear nuestro propio socket chicos.. wiii', '<p>Comienza a crear tu noticia aqui..</p>\r\n', 'Clase-de-fabio-salerno-2', '2016-04-12 20:48:44', '2016-04-12 20:48:44'),
(28, 'Clase de fabio salerno 3', 1, 'Alan Arza|2016-04-12 17:50:28|horario-REDES-2016-3erA-1er-768x587.gif', 'holandaaaaaaaaaaaaa', '<p>Comienza a crear tu noticia aqui..</p>\r\n', 'Clase-de-fabio-salerno-3', '2016-04-12 20:50:28', '2016-04-12 20:50:28'),
(29, 'Otro aburrido titulo para una noticia', 1, 'Alan Arza|2016-04-12 17:50:53|copy-UDC-250-78.png', 'holandooooooooo', '<p>Comienza a crear tu noticia aqui..</p>\r\n', 'Otro-aburrido-titulo-para-una-noticia', '2016-04-12 20:50:53', '2016-04-12 20:50:53'),
(30, 'Otro aburrido titulo para una noticia 2', 1, 'Alan Arza|2016-04-12 17:51:31|TutoresVirtuales1-198x250.png', 'la forma estandar de la red', '<p>Comienza a crear tu noticia aqui..</p>\r\n', 'Otro-aburrido-titulo-para-una-noticia-2', '2016-04-12 20:51:31', '2016-04-12 20:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
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
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alan Arza', 'arzapersonal@gmail.com', '$2y$10$FJHVmUltDUdbADrLVTujneUwSmmztyG5up6sJ0bDPfXo9SE5d89QO', 'o6l8XwI3IvM2MqBZGWauzWgv9ixD22cD0Q17ZTBejv3AnTnU2XpALhzbsqq3', '2016-04-01 16:07:48', '2016-04-07 18:42:55'),
(2, 'Francisco', 'fran123@asdasd.com', '$2y$10$hpm3iCttzA3NmL/y4T4lYewGx0hspAe3frQqMcSROj59XNFw/Vlrm', 'WYM0fjtiWiX3U886n1ZorA0LhrH2YCcOZjMpvkNa34dcePJE7szv7gNYa4rg', '2016-04-05 18:12:17', '2016-04-05 18:15:56');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
