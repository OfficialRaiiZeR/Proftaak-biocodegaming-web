-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 23 mei 2017 om 10:14
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
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userId` int(3) NOT NULL AUTO_INCREMENT,
  `userName` varchar(25) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `screenName` varchar(25) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `login`
--

INSERT INTO `login` (`userId`, `userName`, `userPass`, `screenName`) VALUES
(1, 'qwr', 'cf0b9265f7b8282fd97e695e48ead511e4d0c114', 'Klaas'),
(2, 'bob', 'ffa6706ff2127a749973072756f83c532e43ed02', 'Henk'),
(3, 'lol', '403926033d001b5279df37cbbe5287b7c7c267fa', ''),
(4, 'asd', 'cf0b9265f7b8282fd97e695e48ead511e4d0c114', 'Bert');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
