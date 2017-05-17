-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 26 feb 2017 om 19:08
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `guestbook`
--
CREATE DATABASE IF NOT EXISTS `guestbook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `guestbook`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `guests`
--

CREATE TABLE IF NOT EXISTS `guests` (
  `guestbookId` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `insertion` varchar(15) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `ipAdddress` int(25) NOT NULL,
  `timefInsert` date NOT NULL,
  PRIMARY KEY (`guestbookId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
