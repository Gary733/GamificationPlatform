-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 22. Juni 2016 um 13:39
-- Server Version: 5.1.41
-- PHP-Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `platform`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pwhash` char(32) NOT NULL,
  `locked` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Daten für Tabelle `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `pwhash`, `locked`) VALUES
(9, 'admin', 'f7177163c833dff4b38fc8d2872f1ec6', 0),
(24, 'bla1', 'd603ac0c04b9d08974482ae7fd4cf55d', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `aufgaben`
--

CREATE TABLE IF NOT EXISTS `aufgaben` (
  `Bezeichnung` varchar(64) NOT NULL,
  `erstelldatum` date NOT NULL,
  `abgabedatum` date NOT NULL,
  PRIMARY KEY (`Bezeichnung`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `aufgaben`
--


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `dozent`
--

CREATE TABLE IF NOT EXISTS `dozent` (
  `dozentid` int(11) NOT NULL,
  `titel` text NOT NULL,
  `vorname` int(11) NOT NULL,
  `nachname` int(11) NOT NULL,
  `accountname` int(11) NOT NULL,
  `pwhash` int(11) NOT NULL,
  PRIMARY KEY (`dozentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `dozent`
--


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
  `Bezeichnung` varchar(64) NOT NULL,
  `ergebnis` tinyint(1) NOT NULL DEFAULT '0',
  `cp_punkte` int(11) NOT NULL,
  PRIMARY KEY (`Bezeichnung`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `modul`
--


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Matrikelnr` int(11) NOT NULL,
  `vorname` text NOT NULL,
  `nachname` text NOT NULL,
  `studiengang_id` int(11) NOT NULL,
  `accountname` text NOT NULL,
  `pwhash` text NOT NULL,
  PRIMARY KEY (`Matrikelnr`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `student`
--


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `studiengang`
--

CREATE TABLE IF NOT EXISTS `studiengang` (
  `studiengang_id` int(11) NOT NULL,
  `bezeichnung` text NOT NULL,
  PRIMARY KEY (`studiengang_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `studiengang`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
