-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2021 at 04:58 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`) VALUES
(1, 'Marin Hobbs', 'Marin.Hobbs@gmail.com', '153697521'),
(2, 'Tiana Schmidt', 'Tiana.Schmidt@gmail.com', '15975321'),
(3, 'Teagan Gomez', 'Teagan.Gomez@gmail.com', '915862196'),
(5, 'Kayleigh Espinoza', 'Kayleigh.Espinoza@gmail.com', '15963214598'),
(6, 'Cloe Martinez', 'Cloe.Martinez@gmail.com', '76231962017'),
(7, 'Maximo Owens', 'Maximo.Owens@gmail.com', '15963246879'),
(8, 'Noe Church', 'Noe.Church@gmail.com', '16497632149'),
(9, 'Belinda Cohen', 'Belinda.Cohen@gmail.com', '31678431976'),
(10, 'Livia Vincent', 'Livia.Vincent@gmail.com', '05974135975'),
(11, 'Ethen Petersen', 'Ethen.Petersen@gmail.com', '00198751369'),
(12, 'Mackenzie Sutton', 'Mackenzie.Sutton@gmail.com', '00496521367'),
(13, 'Beatrice Hull', 'Beatrice.Hull@gmail.com', '00079234699');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
