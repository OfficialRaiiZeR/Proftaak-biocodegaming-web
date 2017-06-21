-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 21 jun 2017 om 07:13
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `biocode`
--
CREATE DATABASE IF NOT EXISTS `biocode` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `biocode`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `forum_answer`
--

CREATE TABLE IF NOT EXISTS `forum_answer` (
  `question_id` int(4) NOT NULL,
  `a_id` int(4) NOT NULL,
  `a_name` varchar(65) NOT NULL,
  `a_email` varchar(65) NOT NULL,
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `forum_answer`
--

INSERT INTO `forum_answer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES
(1, 1, 'yea dude', 'ewer', 'i know right!', '2017-06-07 11:16:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `forum_question`
--

CREATE TABLE IF NOT EXISTS `forum_question` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `datetime` varchar(25) NOT NULL,
  `view` int(4) NOT NULL,
  `reply` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `forum_question`
--

INSERT INTO `forum_question` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES
(1, 'this website is soo cool!', 'just like i say''d above its soo awesome!', 'ddd', 'gie', '2017-06-07 11:15:40', 6, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `inventories`
--

CREATE TABLE IF NOT EXISTS `inventories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Gegevens worden uitgevoerd voor tabel `inventories`
--

INSERT INTO `inventories` (`id`, `user_id`, `item_id`) VALUES
(1, 2, 1),
(2, 1, 1),
(3, 1, 1),
(4, 2, 1),
(5, 1, 1),
(6, 1, 1),
(7, 2, 3),
(8, 1, 1),
(9, 1, 1),
(10, 1, 1),
(11, 2, 1),
(12, 1, 1),
(13, 1, 1),
(14, 2, 1),
(15, 1, 1),
(16, 2, 2),
(17, 2, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `cost`) VALUES
(1, '10$ biocoins', 'our own currency', 10),
(2, 'Welcome coin', 'this coin is our welcome gift to you because it has no value!', 0),
(3, 'veteran coin', 'all first members get this. keep this one it might get some value later on!', 30),
(4, '5$ BioCoins', 'the 5 euro Biocoins pack', 5),
(5, '15$ BioCoins', 'the 15 euro Biocoins pack', 15);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userId` int(3) NOT NULL AUTO_INCREMENT,
  `userName` varchar(25) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `screenName` varchar(25) NOT NULL,
  `Currency` int(11) NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Gegevens worden uitgevoerd voor tabel `login`
--

INSERT INTO `login` (`userId`, `userName`, `userPass`, `screenName`, `Currency`, `Email`) VALUES
(1, 'henk', '00f4b7ca2bb19c5ba0f44aa3ccf5ae292b5ee19c', 'henk', 25, 'henk@gamil.com'),
(2, 'Damian', '0a9fdd9e48012e50811bbd76efed3d68e0993dd7', 'damian Giese', 100, 'Damian-Giese@hotmail.com'),
(3, 'Alex', 'b93ae87b4b7a33b07848a6af936a6f0f09d12074', 'Alex Mares', 100, ''),
(6, 'Taylor', '32014f7f8ed5b301edd9b25a9e5cf4988874ace3', '', 0, 'AdamTaylor@outlook.com'),
(7, 'Asperge', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Adam west', 0, 'AdamDaWest@Westmail.com');

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `inventories`
--
ALTER TABLE `inventories`
  ADD CONSTRAINT `inventories_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `login` (`userId`),
  ADD CONSTRAINT `inventories_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `items` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
