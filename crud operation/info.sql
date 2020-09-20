-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2020 at 06:00 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `time` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `sex`, `email`, `phone`, `time`) VALUES
(1, 'Soumyadeep Ghosh', 'male', 'saheb123@gmail.com', '8584600562', '2020-09-09 13:19:52.598633'),
(2, 'Subhasis Ghosh', 'male', 'sghosh@gmail.com', '9433389167', '2020-09-09 13:22:20.814454'),
(3, 'Gopa Ghosh', 'female', 'jaba@gmail.com', '8697800578', '2020-09-10 15:21:39.958008'),
(10, 'Rahim Ali', 'male', 'rahim_ali@yahoo.com', '9675385559', '2020-09-10 17:07:56.956055'),
(5, 'Souvik Karmakar', 'male', 'sk@rediffmail.com', '9830693690', '2020-09-10 15:32:33.986329'),
(6, 'Premanjali Nandi', 'female', 'p_nandi@hotmail.com', '8697800578', '2020-09-10 15:41:23.011719'),
(9, 'Amit Das', 'male', 'amitdas@gmail.com', '7668551224', '2020-09-10 17:00:53.610352'),
(15, 'Raju Kayal', 'male', 'rajuk@gmail.com', '7662269875', '2020-09-20 23:29:46.581054'),
(13, 'Nirmal Das', 'male', 'nirmal_45@yahoo.com', '9432385505', '2020-09-10 17:23:27.368165'),
(14, 'Nandita Halder', 'female', 'nandita@rediffmail.com', '9239488721', '2020-09-20 23:02:53.824219');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
