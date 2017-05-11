-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2017 at 08:30 PM
-- Server version: 5.7.14-log
-- PHP Version: 5.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `2301983069_verkefni7php`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `UserEmail` varchar(255) NOT NULL,
  `imgName` varchar(255) NOT NULL,
  `size` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `UserEmail` (`UserEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `UserEmail`, `imgName`, `size`) VALUES
(43, 'A', 'coco.jpg', 71),
(44, 'A', 'Archispirostreptus-Gigas-Amphitheatre.jpg', 845),
(45, 'A', 'circuit-board-background.jpg', 4025);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Name` varchar(128) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Email`, `Password`, `salt`) VALUES
('max', 'A', '14c3a5f98cb10f373f5bb4a6480ac14bd13d454127628cb72b9810ffaa36e5b738b72548891d4d71feb5624149bc422be7370664bfcd191191bf7263c3c204c9', '3010563645914b601c863a8.21517220'),
('Andrey', 'm@m.is', 'd40b5013629800ef97d50ba3df71149f1c1f136ebbed920fa8b7efb7310cb6c1601ed7fefdb0f2f95056c4fdd64a82d8126e73a48168cf9842af55688a74fbf8', '16839654445914b5cd4f5ac1.42313506'),
('Maxim Rudkov', 'Rudkovpop@gmail.com', '8042d0349203390bfa4417bdc1c9824de30fd6d7ef14fed02c2343b89d74d56cf5c9aa3d3aaa9e19de33dceb8051ac554a17de0b94c5464caa080b6c315b21cd', '5669233705914b1ff039d90.79980096'),
('Maxim Rudkov', 'Rudkovpop@hotmail.com', '5e0470355d8563533549fa08ff7d5eb61e1366d59398516f8bc9b106d3f447131623aa63eacd91694eedc95d04ffe4fb583462482c31c53c44296cffa919c6ad', '5971961645914b23951af96.71440285');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_ibfk_1` FOREIGN KEY (`UserEmail`) REFERENCES `user` (`Email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
