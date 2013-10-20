-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 20. Okt 2013 um 23:39
-- Server Version: 5.1.44
-- PHP-Version: 5.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `rosso_cms`
--
CREATE DATABASE IF NOT EXISTS `rosso_cms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rosso_cms`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fields`
--

CREATE TABLE IF NOT EXISTS `fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `pictureURL` varchar(255) NOT NULL,
  `belag` varchar(255) NOT NULL,
  `masse` varchar(255) NOT NULL,
  `jahr` int(11) NOT NULL,
  `sitze` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `fields`
--

INSERT INTO `fields` (`id`, `title`, `pictureURL`, `belag`, `masse`, `jahr`, `sitze`) VALUES
(1, 'Hauptplatz Bifang', '00100.jpg', 'Naturrasen', '101/64', 1979, 500),
(2, 'Nebenplatz Stutz', '00101.jpg', 'Naturrasen', '90/57', 1994, 200),
(3, 'KiFu Bifang', '00102.jpg', 'Naturrasen', '35/30', 0, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `gameID` int(11) NOT NULL,
  `teamID` int(11) NOT NULL,
  `isHome` int(11) NOT NULL,
  `gameType` varchar(255) NOT NULL,
  `resultConfirmed` int(1) DEFAULT NULL,
  `pointsHome` int(11) NOT NULL,
  `pointsAway` int(11) NOT NULL,
  `day` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `opponent` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `complex` varchar(255) NOT NULL,
  `plz` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `dressing` varchar(255) NOT NULL,
  PRIMARY KEY (`gameID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `match`
--

INSERT INTO `match` (`gameID`, `teamID`, `isHome`, `gameType`, `resultConfirmed`, `pointsHome`, `pointsAway`, `day`, `date`, `time`, `opponent`, `location`, `complex`, `plz`, `field`, `dressing`) VALUES
(145838, 2, 1, 'Meisterschaft', 1, 5, 3, 'Sa', '2013-08-17', '20:00:00', 'FC Gelterkinden', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145849, 2, 1, 'Meisterschaft', 1, 3, 2, 'Mi', '2013-08-21', '20:00:00', 'FC Eiken', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145851, 2, 0, 'Meisterschaft', 1, 5, 5, 'Do', '2013-08-29', '20:30:00', 'AC Virtus Liestal b', 'Stadion Gitterli, Liestal - 2 (Kunstrasen)', 'Stadion Gitterli', 'Liestal', '2 (Kunstrasen)', 'Stadion Gitterli, Liestal'),
(145860, 2, 1, 'Meisterschaft', 1, 2, 6, 'Sa', '2013-09-18', '20:00:00', 'Pratteln United ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145864, 2, 0, 'Meisterschaft', 1, 8, 2, 'So', '2013-09-22', '10:00:00', 'FC Bubendorf', 'Bruehl, Bubendorf - 1', 'Bruehl', 'Bubendorf', '1', 'Bruehl, Bubendorf'),
(145871, 2, 1, 'Meisterschaft', 1, 2, 3, 'So', '2013-09-29', '11:00:00', 'NK Pajde', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145877, 2, 0, 'Meisterschaft', 1, 0, 1, 'So', '2013-10-06', '12:30:00', 'FC Lausen 72', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145882, 2, 1, 'Meisterschaft', 1, 3, 1, 'Sa', '2013-10-12', '20:00:00', 'FC Wallbach', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145890, 2, 0, 'Meisterschaft', 1, 0, 2, 'Sa', '2013-10-19', '19:00:00', 'FC Liestal  ', 'Stadion Gitterli, Liestal - 2 (Kunstrasen)', 'Stadion Gitterli', 'Liestal', '2 (Kunstrasen)', 'Stadion Gitterli, Liestal'),
(145893, 2, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2013-10-27', '11:00:00', 'FC Diegten Eptingen ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145903, 2, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2013-11-03', '14:00:00', 'FC Zeiningen ', 'Unter Reben, Zeiningen - 1', 'Unter Reben', 'Zeiningen', '1', 'Unter Reben, Zeiningen'),
(145904, 2, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-03-23', '00:00:00', 'FC Gelterkinden ', 'Wolfstiege, Gelterkinden - 1', 'Wolfstiege', 'Gelterkinden', '1', 'Wolfstiege, Gelterkinden'),
(145915, 2, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-03-30', '00:00:00', 'FC Eiken', 'Sportanlage Netzi, Eiken,   - 1', 'Sportanlage Netzi, Eiken', ' ', '1', 'Kultureller Saal, Eiken                     '),
(145917, 2, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-04-06', '00:00:00', 'AC Virtus Liestal b', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145926, 2, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-04-13', '00:00:00', 'Pratteln United ', 'Hexmatt, Pratteln - 1', 'Hexmatt', 'Pratteln', '1', 'Hexmatt, Pratteln'),
(145930, 2, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-04-27', '00:00:00', 'FC Bubendorf', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145937, 2, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-04', '00:00:00', 'NK Pajde', 'Sportzentrum Steinli, Moehlin - B 02', 'Sportzentrum Steinli', 'Moehlin', 'B 02', 'Sportzentrum Steinli, Moehlin'),
(145943, 2, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-11', '00:00:00', 'FC Lausen 72', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145948, 2, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-18', '00:00:00', 'FC Wallbach', 'Sandgrube, Wallbach - 1', 'Sandgrube', 'Wallbach', '1', 'Sandgrube, Wallbach'),
(145956, 2, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-25', '00:00:00', 'FC Liestal  ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145959, 2, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-06-01', '00:00:00', 'FC Diegten Eptingen ', 'Hofmatt, Diegten - 1', 'Hofmatt', 'Diegten', '1', 'Hofmatt, Diegten'),
(145969, 2, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-06-15', '00:00:00', 'FC Zeiningen ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146454, 1, 1, 'Meisterschaft', 1, 2, 0, 'Fr', '2013-08-16', '20:00:00', 'SC Muenchenstein a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146465, 1, 0, 'Meisterschaft', 1, 0, 1, 'Di', '2013-08-27', '20:00:00', 'FC Arisdorf  ', 'Gemeindesportplatz, Arisdorf - 1', 'Gemeindesportplatz', 'Arisdorf', '1', 'Arisdorf'),
(146467, 1, 0, 'Meisterschaft', 1, 1, 1, 'Sa', '2013-08-31', '20:00:00', 'SV Sissach a', 'Sportzentrum Tannenbrunn, Sissach - 1', 'Sportzentrum Tannenbrunn', 'Sissach', '1', 'Sportzentrum Tannenbrunn, Sissach'),
(146476, 1, 1, 'Meisterschaft', 1, 5, 0, 'Sa', '2013-09-07', '18:00:00', 'FC Oberdorf ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146480, 1, 0, 'Meisterschaft', 1, 0, 4, 'So', '2013-09-22', '13:00:00', 'FC Bubendorf', 'Bruehl, Bubendorf - 1', 'Bruehl', 'Bubendorf', '1', 'Bruehl, Bubendorf'),
(146487, 1, 1, 'Meisterschaft', 1, 8, 0, 'Sa', '2013-09-28', '18:00:00', 'SV Muttenz b', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146493, 1, 0, 'Meisterschaft', 1, 0, 0, 'Sa', '2013-10-05', '19:00:00', 'FC Diegten Eptingen  ', 'Hofmatt, Diegten - 1', 'Hofmatt', 'Diegten', '1', 'Hofmatt, Diegten'),
(146498, 1, 1, 'Meisterschaft', 1, 2, 0, 'Sa', '2013-10-12', '18:00:00', 'FC Gelterkinden b', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146506, 1, 0, 'Meisterschaft', 1, 0, 3, 'Sa', '2013-10-19', '20:00:00', 'FC Lausen 72', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146509, 1, 1, 'Meisterschaft', NULL, 0, 0, 'Sa', '2013-10-26', '18:00:00', 'FC Stein b', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146519, 1, 0, 'Meisterschaft', NULL, 0, 0, 'Sa', '2013-11-02', '17:00:00', 'FC Laufenburg-Kaisten b', 'Blauen, Laufenburg - 1', 'Blauen', 'Laufenburg', '1', 'Blauen, Laufenburg'),
(146520, 1, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-03-23', '00:00:00', 'SC Muenchenstein a', 'Sportplatz Au, Muenchenstein - 1', 'Sportplatz Au', 'Muenchenstein', '1', 'Sportplatz Au, Muenchenstein'),
(146531, 1, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-03-30', '00:00:00', 'FC Arisdorf  ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146533, 1, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-04-06', '00:00:00', 'SV Sissach a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146542, 1, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-04-13', '00:00:00', 'FC Oberdorf ', 'z''Hof, Oberdorf - 1 Kunstrasen', 'z''Hof', 'Oberdorf', '1 Kunstrasen', 'z''Hof, Oberdorf'),
(146546, 1, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-04-27', '00:00:00', 'FC Bubendorf', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146553, 1, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-04', '00:00:00', 'SV Muttenz b', 'Sportplatz Margelacker, Muttenz - 1', 'Sportplatz Margelacker', 'Muttenz', '1', 'Sportplatz Margelacker, Muttenz'),
(146559, 1, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-11', '00:00:00', 'FC Diegten Eptingen  ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146564, 1, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-18', '00:00:00', 'FC Gelterkinden b', 'Wolfstiege, Gelterkinden - 1', 'Wolfstiege', 'Gelterkinden', '1', 'Wolfstiege, Gelterkinden'),
(146572, 1, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-25', '00:00:00', 'FC Lausen 72', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146575, 1, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-06-01', '11:00:00', 'FC Stein b', 'Bustelbach, Stein - 1', 'Bustelbach', 'Stein', '1', 'Bustelbach, Stein'),
(146585, 1, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-06-15', '00:00:00', 'FC Laufenburg-Kaisten b', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152013, 10, 1, 'Meisterschaft', 1, 4, 1, 'Fr', '2013-08-16', '20:00:00', 'US Bottecchia BS', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152022, 10, 1, 'Meisterschaft', 1, 5, 1, 'Mi', '2013-09-04', '20:00:00', 'US Olympia 1963 ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152024, 10, 0, 'Meisterschaft', 1, 4, 2, 'Fr', '2013-08-30', '20:30:00', 'FC Birsfelden  ', 'Sternenfeld, Birsfelden - A', 'Sternenfeld', 'Birsfelden', 'A', 'Sternenfeld, Birsfelden'),
(152031, 10, 1, 'Meisterschaft', 1, 1, 4, 'Sa', '2013-09-07', '16:00:00', 'FC Laufenburg-Kaisten ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152035, 10, 0, 'Meisterschaft', 1, 4, 1, 'Sa', '2013-09-21', '13:00:00', 'FC Tuerkguecue Basel ', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(152040, 10, 1, 'Meisterschaft', NULL, 0, 0, 'Sa', '2013-10-23', '20:15:00', 'FC Rheinfelden', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152046, 10, 0, 'Meisterschaft', 1, 6, 1, 'Fr', '2013-10-11', '20:15:00', 'FC Bubendorf  ', 'Bruehl, Bubendorf - 1', 'Bruehl', 'Bubendorf', '1', 'Bruehl, Bubendorf'),
(152049, 10, 1, 'Meisterschaft', 1, 1, 7, 'Sa', '2013-10-19', '16:00:00', 'FC Dardania', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152057, 10, 0, 'Meisterschaft', NULL, 0, 0, 'Sa', '2013-10-26', '13:00:00', 'FC Birlik', 'Sportanlagen St. Jakob, Basel - wird vor Ort zugeteilt', 'Sportanlagen St. Jakob', 'Basel', 'wird vor Ort zugeteilt', 'Sportanlagen St. Jakob, Basel'),
(152058, 10, 0, 'Meisterschaft', NULL, 0, 0, 'Sa', '2014-04-05', '15:00:00', 'US Bottecchia BS', 'Sportanlage Rheinacker, Landauerstr. 45,   - Hauptplatz', 'Sportanlage Rheinacker, Landauerstr. 45', ' ', 'Hauptplatz', 'Sportanlage Rheinacker, Landauerstr. 45,  '),
(152067, 10, 0, 'Meisterschaft', NULL, 0, 0, 'Sa', '2014-04-12', '00:00:00', 'US Olympia 1963 ', 'Sportzentrum Pfaffenholz, Basel - wird vor Ort zugeteilt', 'Sportzentrum Pfaffenholz', 'Basel', 'wird vor Ort zugeteilt', 'Sportzentrum Pfaffenholz, Basel'),
(152069, 10, 1, 'Meisterschaft', NULL, 0, 0, 'Sa', '2014-04-26', '00:00:00', 'FC Birsfelden  ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152076, 10, 0, 'Meisterschaft', NULL, 0, 0, 'Sa', '2014-05-03', '00:00:00', 'FC Laufenburg-Kaisten ', 'Blauen, Laufenburg - 1', 'Blauen', 'Laufenburg', '1', 'Blauen, Laufenburg'),
(152080, 10, 1, 'Meisterschaft', NULL, 0, 0, 'Sa', '2014-05-10', '00:00:00', 'FC Tuerkguecue Basel ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152085, 10, 0, 'Meisterschaft', NULL, 0, 0, 'Fr', '2014-05-16', '20:00:00', 'FC Rheinfelden', 'Im Schiffacker, Rheinfelden - wird vor Ort zugeteilt', 'Im Schiffacker', 'Rheinfelden', 'wird vor Ort zugeteilt', 'Im Schiffacker, Rheinfelden'),
(152091, 10, 1, 'Meisterschaft', NULL, 0, 0, 'Sa', '2014-05-24', '00:00:00', 'FC Bubendorf  ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152094, 10, 0, 'Meisterschaft', NULL, 0, 0, 'Sa', '2014-05-31', '15:00:00', 'FC Dardania', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(152102, 10, 1, 'Meisterschaft', NULL, 0, 0, 'Sa', '2014-06-14', '00:00:00', 'FC Birlik', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153357, 15, 1, 'Meisterschaft', 1, 0, 10, 'So', '2013-08-25', '14:00:00', 'FC Allschwil', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153358, 15, 0, 'Meisterschaft', 1, 3, 0, 'So', '2013-09-01', '13:00:00', 'FC Nordstern BS ', 'Rankhof, Basel - wird vor Ort zugeteilt', 'Rankhof', 'Basel', 'wird vor Ort zugeteilt', 'Rankhof, Basel'),
(153362, 15, 1, 'Meisterschaft', 1, 0, 6, 'Sa', '2013-09-11', '19:30:00', 'FC Concordia Basel ', 'Bifang, Lausen - Stutz', 'Bifang', 'Lausen', 'Stutz', 'siehe Bemerkungen:                             '),
(153365, 15, 0, 'Meisterschaft', 1, 13, 0, 'So', '2013-09-22', '13:00:00', 'FC Telegraph BS ', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(153367, 15, 1, 'Meisterschaft', 1, 0, 16, 'So', '2013-09-29', '13:00:00', 'FC Reinach', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153372, 15, 0, 'Meisterschaft', 1, 3, 0, 'So', '2013-10-06', '15:00:00', 'FC Laufenburg-Kaisten ', 'Hard, Kaisten - 1', 'Hard', 'Kaisten', '1', 'Turnhalle, Kaisten                           '),
(153378, 15, 0, 'Meisterschaft', 1, 0, 0, 'Sa', '2013-10-19', '17:30:00', 'FC Allschwil', 'Im Brueel, Allschwil,   - 2', 'Im Brueel, Allschwil', ' ', '2', 'Im Brueel, Allschwil,  '),
(153379, 15, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2013-10-27', '13:00:00', 'FC Nordstern BS ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153383, 15, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2013-11-03', '13:00:00', 'FC Concordia Basel ', 'Sportanlagen St. Jakob, Basel - wird vor Ort zugeteilt', 'Sportanlagen St. Jakob', 'Basel', 'wird vor Ort zugeteilt', 'Sportanlagen St. Jakob, Basel'),
(153386, 15, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-03-30', '00:00:00', 'FC Telegraph BS ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153388, 15, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-04-06', '00:00:00', 'FC Reinach', 'Einschlag, Reinach - Kunstrasen (1)', 'Einschlag', 'Reinach', 'Kunstrasen (1)', 'Einschlag, Reinach'),
(153393, 15, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-04-13', '00:00:00', 'FC Laufenburg-Kaisten ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153399, 15, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-04', '00:00:00', 'FC Allschwil', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153400, 15, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-11', '00:00:00', 'FC Nordstern BS ', 'Rankhof, Basel - wird vor Ort zugeteilt', 'Rankhof', 'Basel', 'wird vor Ort zugeteilt', 'Rankhof, Basel'),
(153404, 15, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-18', '00:00:00', 'FC Concordia Basel ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153407, 15, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-25', '00:00:00', 'FC Telegraph BS ', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(153409, 15, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-06-01', '00:00:00', 'FC Reinach', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153414, 15, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-06-15', '00:00:00', 'FC Laufenburg-Kaisten ', 'Blauen, Laufenburg - 1', 'Blauen', 'Laufenburg', '1', 'Blauen, Laufenburg'),
(160837, 3, 1, 'Meisterschaft', 1, 3, 5, 'So', '2013-08-18', '13:00:00', 'FC Xalko', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160848, 3, 1, 'Meisterschaft', 1, 3, 4, 'So', '2013-08-25', '16:00:00', 'FC Amicitia Riehen ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160850, 3, 0, 'Meisterschaft', 1, 3, 2, 'Sa', '2013-08-31', '18:00:00', 'AC Virtus Liestal a', 'Stadion Gitterli, Liestal - 2 (Kunstrasen)', 'Stadion Gitterli', 'Liestal', '2 (Kunstrasen)', 'Stadion Gitterli, Liestal'),
(160859, 3, 1, 'Meisterschaft', 1, 3, 1, 'So', '2013-09-08', '11:00:00', 'FC Birsfelden', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160863, 3, 0, 'Meisterschaft', 1, 3, 3, 'So', '2013-09-22', '15:00:00', 'CD Espanol Basel a', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(160870, 3, 1, 'Meisterschaft', 1, 0, 7, 'So', '2013-09-29', '15:00:00', 'SC Basel Nord a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160876, 3, 0, 'Meisterschaft', 1, 1, 5, 'So', '2013-10-06', '15:00:00', 'FC Ferad a', 'Sportanlagen St. Jakob, Basel - wird vor Ort zugeteilt', 'Sportanlagen St. Jakob', 'Basel', 'wird vor Ort zugeteilt', 'Sportanlagen St. Jakob, Basel'),
(160881, 3, 1, 'Meisterschaft', 1, 2, 6, 'So', '2013-10-13', '14:00:00', 'FC Schwarz-Weiss', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160889, 3, 0, 'Meisterschaft', 1, 9, 0, 'So', '2013-10-20', '13:00:00', 'FK Srbija Basel ', 'Rankhof, Basel - wird vor Ort zugeteilt', 'Rankhof', 'Basel', 'wird vor Ort zugeteilt', 'Rankhof, Basel'),
(160892, 3, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2013-10-27', '15:00:00', 'FC Pratteln', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160902, 3, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2013-11-03', '13:00:00', 'FC Telegraph BS', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(160903, 3, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-03-23', '00:00:00', 'FC Xalko', 'Rankhof, Basel - wird vor Ort zugeteilt', 'Rankhof', 'Basel', 'wird vor Ort zugeteilt', 'Rankhof, Basel'),
(160914, 3, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-03-30', '00:00:00', 'FC Amicitia Riehen ', 'Grendelmatte, Riehen - wird vor Ort zugeteilt', 'Grendelmatte', 'Riehen', 'wird vor Ort zugeteilt', 'Grendelmatte, Riehen'),
(160916, 3, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-04-06', '00:00:00', 'AC Virtus Liestal a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160925, 3, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-04-13', '00:00:00', 'FC Birsfelden', 'Sternenfeld, Birsfelden - A', 'Sternenfeld', 'Birsfelden', 'A', 'Sternenfeld, Birsfelden'),
(160929, 3, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-04-27', '00:00:00', 'CD Espanol Basel a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160936, 3, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-04', '00:00:00', 'SC Basel Nord a', 'Rankhof, Basel - wird vor Ort zugeteilt', 'Rankhof', 'Basel', 'wird vor Ort zugeteilt', 'Rankhof, Basel'),
(160942, 3, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-11', '00:00:00', 'FC Ferad a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160947, 3, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-18', '00:00:00', 'FC Schwarz-Weiss', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(160955, 3, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-25', '00:00:00', 'FK Srbija Basel ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160958, 3, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-06-01', '00:00:00', 'FC Pratteln', 'In den Sandgruben, Pratteln - wird vor Ort zugeteilt', 'In den Sandgruben', 'Pratteln', 'wird vor Ort zugeteilt', 'In den Sandgruben, Pratteln'),
(160968, 3, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-06-15', '00:00:00', 'FC Telegraph BS', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(510297, 1, 1, 'Cup Grosspeter Basler Cup / 1. Vorrunde', 1, 5, 0, 'Sa', '2013-08-03', '18:00:00', 'FC Roeschenz', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(512170, 1, 1, 'Cup Grosspeter Basler Cup / 1. Vorrunde', 1, 4, 1, 'Sa', '2013-08-10', '20:00:00', 'FC Ferad', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(512261, 1, 1, 'Grosspeter Basler Cup / 1/16 - Final', 1, 0, 2, 'Sa', '2013-09-14', '18:00:00', 'FC Therwil', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `member_active`
--

CREATE TABLE IF NOT EXISTS `member_active` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `trikot` int(11) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `nickName` varchar(255) NOT NULL,
  `bDay` date NOT NULL,
  `nat` varchar(255) NOT NULL,
  `toTeam` int(11) NOT NULL,
  `toPosition` int(11) NOT NULL,
  `pictureURL` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=143 ;

--
-- Daten für Tabelle `member_active`
--

INSERT INTO `member_active` (`id`, `trikot`, `lastName`, `firstName`, `nickName`, `bDay`, `nat`, `toTeam`, `toPosition`, `pictureURL`) VALUES
(1, 17, 'Apostolo', 'Ilaria', '', '1996-08-09', '', 15, 3, ''),
(2, 19, 'Apostolo', 'Martina', '', '1993-08-18', '', 15, 2, ''),
(3, 13, 'Aquilino', 'Marilena', '', '1993-03-03', '', 15, 2, ''),
(117, 19, 'Lagnaz', 'Thomas', '', '0000-00-00', '', 2, 2, '00128.jpg'),
(8, 20, 'Branca', 'Alessandro', '', '1988-06-14', '', 1, 3, '00113.jpg'),
(9, 10, 'Branca', 'Davide', '', '1994-03-05', '', 1, 3, '00109.jpg'),
(10, 11, 'Branca', 'Sara', '', '1992-12-12', '', 15, 3, '00134.jpg'),
(11, 22, 'Buchholz', 'Thomas', '', '1993-07-31', '', 2, 2, ''),
(120, 93, 'Özdemir', 'Kerim', '', '0000-00-00', '', 1, 4, '00182.jpg'),
(13, 3, 'Carlen', 'Nicolas', '', '1991-10-23', '', 2, 2, ''),
(5, 10, 'Catozza', 'Francesco', '', '1975-02-23', '', 10, 4, '00170.jpg'),
(15, 16, 'Chiriaco', 'Domenico', '', '1983-11-16', '', 1, 2, '00110.jpg'),
(17, 12, 'Ciraolo', 'Gaetano', '', '1984-06-27', '', 1, 1, '00101.jpg'),
(18, 1, 'Concepcion', 'Hanna', '', '1989-10-20', '', 15, 1, '00132.jpg'),
(19, 9, 'Cordeiro', 'Danilo', '', '1991-04-22', '', 1, 3, '00108.jpg'),
(20, 7, 'Cubaixo', 'David', 'Cubi', '1985-02-01', '', 2, 2, ''),
(107, 18, 'Feller', 'Celine', '', '0000-00-00', '', 15, 3, '00131.jpg'),
(23, 6, 'De Sousa', 'Jose', '', '1965-01-18', '', 10, 3, '00177.jpg'),
(26, 21, 'Eggli', 'Kevin', '', '1986-09-17', '', 2, 3, '00136.jpg'),
(27, 14, 'Elma', 'Halil', '', '1976-12-30', '', 10, 2, '00171.jpg'),
(30, 18, 'Fankhauser', 'Patrick', 'Büsi', '1988-02-06', '', 2, 3, ''),
(31, 11, 'Feller', 'Philippe', '', '1988-09-17', '', 2, 2, '00129.jpg'),
(33, 21, 'Gatti', 'Alessandro', '', '1992-06-22', '', 1, 2, '00181.jpg'),
(35, 1, 'Gubser', 'Stefan', 'Gubsi', '1990-12-26', '', 1, 1, '00100.jpg'),
(36, 27, 'Haas', 'Alejandra', '', '1988-12-18', '', 15, 4, ''),
(99, 2, 'Colangelo', 'Giuseppe', 'Giusi', '0000-00-00', '', 1, 3, '00122.jpg'),
(38, 16, 'Inguscio', 'Sara', '', '1990-03-27', '', 15, 2, '00133.jpg'),
(40, 1, 'Kaiser', 'Benjamin', '', '1986-08-21', '', 2, 1, ''),
(41, 17, 'Kaiser', 'Roman', '', '1988-09-27', '', 2, 4, ''),
(42, 16, 'Kaufmann', 'Pierre', '', '1988-04-27', '', 2, 2, ''),
(44, 15, 'Kull', 'Nicolas', '', '1993-07-12', '', 2, 3, '00139.jpg'),
(46, 5, 'La Ianca', 'Giuseppe', '', '1978-07-21', '', 10, 3, ''),
(47, 20, 'Leanza', 'Salvatore', '', '1970-11-30', '', 10, 3, '00162.jpg'),
(48, 33, 'Leone', 'Aron', '', '1993-04-23', '', 1, 2, '00121.jpg'),
(49, 8, 'Lupo', 'Michael', '', '1991-05-22', '', 2, 3, ''),
(50, 22, 'Luruena Rivera', 'Santos', '', '1975-05-24', '', 10, 4, '00172.jpg'),
(55, 2, 'Mazza', 'Antonio', '', '1976-10-17', '', 10, 2, '00163.jpg'),
(57, 5, 'Mulas', 'Andrea', 'Thiago Silva', '1993-04-11', '', 1, 2, '00102.jpg'),
(58, 11, 'Mulas', 'Dario', '', '1968-04-04', '', 10, 4, '00166.jpg'),
(59, 18, 'Mulas', 'Salvatore', 'FantAntonio', '1988-08-22', '', 1, 4, '00112.jpg'),
(116, 4, 'Thommen', 'Martin', '', '0000-00-00', '', 2, 3, '00138.jpg'),
(61, 20, 'Oberle', 'Marco', '', '1987-06-09', '', 2, 2, ''),
(62, 4, 'Palmieri', 'Angelo', '', '1967-02-11', '', 10, 3, '00165.jpg'),
(64, 24, 'Paoletti', 'Gianluca', '', '1972-10-03', '', 10, 2, '00175.jpg'),
(65, 7, 'Parlato', 'Gerardo', '', '1975-09-23', '', 10, 3, '00167.jpg'),
(66, 6, 'Pezzo', 'Stefania', '', '1989-08-11', '', 15, 2, ''),
(67, 13, 'Pilia', 'Stefano', '', '1990-04-03', '', 1, 2, '00105.jpg'),
(68, 16, 'Piras', 'Fabrizio', '', '1978-07-01', '', 10, 4, '00169.jpg'),
(69, 15, 'Rickenbacher', 'Lukas', '', '1992-03-17', '', 1, 2, '00106.jpg'),
(70, 57, 'Rieder', 'Yves', '', '1989-10-04', '', 2, 2, '00125.jpg'),
(71, 15, 'Rosamilia', 'Nicola', '', '1975-04-07', '', 10, 3, '00164.jpg'),
(72, 7, 'Rüedi', 'Flavio', '', '1993-03-30', '', 1, 3, '00107.jpg'),
(73, 17, 'Sahin', 'Denis', '', '1986-08-17', '', 3, 3, '00111.jpg'),
(76, 10, 'Salfinger', 'Fabian', '', '1988-11-03', '', 2, 4, ''),
(77, 5, 'Salvadori', 'Ilaria', '', '1995-02-05', '', 15, 2, ''),
(78, 10, 'Santo', 'Deila', '', '1989-12-25', '', 15, 4, '00130.jpg'),
(79, 6, 'Santoni', 'Fabrizio', '', '1984-05-30', '', 1, 2, '00103.jpg'),
(106, 8, 'Apostolo', 'Naomi', '', '0000-00-00', '', 15, 3, ''),
(81, 21, 'Sappracone', 'Elena', '', '1989-01-11', '', 15, 2, ''),
(115, 1, 'Galizia', 'Andrea Domenico', '', '1976-03-11', '', 10, 1, '00168.jpg'),
(83, 87, 'Shala', 'Nure', '', '1988-11-15', '', 2, 3, '00124.jpg'),
(86, 5, 'Tanner', 'Lukas', '', '1991-06-02', '', 2, 2, '00137.jpg'),
(87, 24, 'Tanner', 'Michael', '', '1987-03-24', '', 2, 3, ''),
(88, 21, 'Teotino', 'Daniele', '', '1978-05-22', '', 10, 2, ''),
(89, 23, 'Tielke', 'Tobias', '', '1992-05-03', '', 2, 3, ''),
(105, 2, 'Calabrese', 'Valeria', '', '0000-00-00', '', 15, 2, ''),
(92, 13, 'Weibel', 'Stefan', '', '1990-11-23', '', 2, 4, '00126.jpg'),
(93, 31, 'Werisch', 'Sebastian', 'Basti', '1984-10-04', '', 1, 2, '00104.jpg'),
(94, 18, 'Yalcin', 'Sinan', '', '1973-05-01', '', 10, 3, '00173.jpg'),
(114, 30, 'Linguanti', 'Massimo', '', '0000-00-00', '', 10, 2, ''),
(96, 22, 'Zimmermann', 'Stefan', 'Pocho', '1986-01-07', '', 1, 3, '00114.jpg'),
(97, 14, 'Zollinger', 'Sandro', '', '1988-04-28', '', 2, 4, '00127.jpg'),
(98, 6, 'Zwicky', 'Tobias', '', '1986-11-21', '', 2, 3, '00140.jpg'),
(100, 23, 'Calabrese', 'Gerardo', 'Gerry', '0000-00-00', '', 1, 3, '00183.jpg'),
(101, 11, 'Tettey', 'David Prince', 'Dave', '0000-00-00', '', 1, 3, '00118.jpg'),
(102, 3, 'Lo Presti', 'Luca', '', '0000-00-00', '', 1, 2, '00120.jpg'),
(103, 14, 'Argun', 'Berat', '', '0000-00-00', '', 1, 3, '00119.jpg'),
(104, 8, 'Marchetta', 'Maurizio', 'Mauri', '0000-00-00', '', 1, 4, ''),
(109, 19, 'Hofacker', 'Sven', '', '0000-00-00', '', 1, 2, '00115.jpg'),
(110, 4, 'Özdemir', 'Recep', '', '0000-00-00', '', 1, 2, '00123.jpg'),
(111, 7, 'Schmid', 'Melanie', '', '0000-00-00', '', 15, 4, '00135.jpg'),
(112, 32, 'Batista', 'Vedran', 'Vedi', '0000-00-00', '', 1, 2, '00116.jpg'),
(113, 69, 'Parrillo', 'Dario', '', '0000-00-00', '', 1, 2, '00117.jpg'),
(118, 13, 'Tomeo', 'Ferdinando', '', '0000-00-00', '', 10, 3, '00174.jpg'),
(119, 19, 'Schreiber', 'Pascal', '', '0000-00-00', '', 10, 3, '00176.jpg'),
(121, 1, 'Höfler', 'Alain', '', '1983-02-12', '', 3, 1, ''),
(122, 2, 'Accanito', 'Luciano', '', '1981-06-07', '', 3, 2, ''),
(123, 3, 'Caselle', 'Mirco', '', '1989-12-16', '', 3, 2, ''),
(124, 4, 'Isone', 'Damiano', '', '1989-09-27', '', 3, 2, ''),
(125, 5, 'Jeanneret', 'Nicolas', '', '1992-09-15', '', 3, 2, ''),
(126, 6, 'Bürkler', 'Saverio', '', '1990-08-06', '', 3, 2, ''),
(127, 7, 'Furler', 'Yves', '', '1993-02-05', '', 3, 3, ''),
(128, 8, 'Russo', 'Fabio', '', '1990-07-08', '', 3, 3, ''),
(129, 9, 'Schilt', 'Ramon', '', '1997-08-28', '', 3, 3, ''),
(130, 10, 'Spinella', 'Giuseppe', '', '1985-06-07', '', 3, 4, ''),
(131, 13, 'Russo', 'Gianluca', '', '1995-05-29', '', 3, 3, ''),
(132, 14, 'Di Benedetto', 'Samuele', '', '1992-12-22', '', 3, 3, ''),
(133, 15, 'Schiliro', 'Vincenzo', '', '1990-11-24', '', 3, 2, ''),
(134, 18, 'Aegerter', 'Christian', '', '1991-12-17', '', 3, 3, ''),
(135, 19, 'Gazel', 'Onur', '', '1995-01-16', '', 3, 4, ''),
(136, 21, 'Greco', 'Aniello', '', '1994-04-15', '', 3, 3, ''),
(137, 22, 'Spinella', 'Luigi', '', '1977-09-08', '', 3, 4, ''),
(138, 12, 'Lopez', 'Selina', '', '1995-07-29', '', 15, 3, ''),
(139, 30, 'Bonsignore', 'Giovanni', '', '0000-00-00', '', 1, 4, '00184.jpg'),
(140, 11, 'Roberti', 'Alessandro', 'Ale', '1982-09-26', '', 3, 3, ''),
(141, 88, 'Stoll', 'Philipp', '', '1988-04-27', '', 2, 3, ''),
(142, 12, 'Docci', 'Luca', '', '1991-09-26', '', 2, 2, '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `member_junior`
--

CREATE TABLE IF NOT EXISTS `member_junior` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `bDay` date NOT NULL,
  `toTeam` int(11) NOT NULL,
  `pictureURL` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Daten für Tabelle `member_junior`
--

INSERT INTO `member_junior` (`id`, `firstName`, `lastName`, `bDay`, `toTeam`, `pictureURL`) VALUES
(1, 'Lauriane', 'Frei', '2006-09-13', 22, '00141.jpg'),
(2, 'Timo', 'Giger', '2007-01-12', 22, '00151.jpg'),
(3, 'Raul', 'Luruena', '2006-02-03', 22, '00156.jpg'),
(4, 'Giulia', 'Mulas', '2006-03-19', 22, '00142.jpg'),
(5, 'Leandro', 'Piras', '2006-07-28', 22, '00155.jpg'),
(6, 'Matteo', 'Roberti', '2006-10-20', 22, '00153.jpg'),
(7, 'Corrado', 'Rosati', '2005-01-31', 22, '00150.jpg'),
(8, 'Jerimo', 'Sollberger', '2007-01-04', 22, '00154.jpg'),
(9, 'Gian Andrea', 'Steingrube', '2006-03-27', 22, '00178.jpg'),
(10, 'Diego', 'Kammer', '2007-04-04', 22, '00149.jpg'),
(11, 'Ilario', 'Peng', '2007-02-06', 22, '00158.jpg'),
(12, 'Marco', 'Branca', '2006-04-16', 22, '00157.jpg'),
(13, 'Simone', 'Damante', '2008-02-11', 20, '00147.jpg'),
(14, 'Alessio', 'Crusi', '2007-08-31', 20, '00160.jpg'),
(15, 'Shawn', 'Liverani', '2008-01-21', 20, '00146.jpg'),
(16, 'Chiara', 'Roberti', '2008-11-05', 20, '00144.jpg'),
(17, 'Giuseppe', 'Barbato', '2008-12-10', 20, '00180.jpg'),
(18, 'Ayaz', 'Sercan', '2007-07-07', 20, '00148.jpg'),
(19, 'Karim', 'Hablami', '2007-03-03', 20, ''),
(20, 'Henrique Magno', 'Santos', '0000-00-00', 20, '00143.jpg'),
(21, 'Lenny', 'Graber', '2006-08-17', 22, '00159.jpg'),
(22, 'Sophie', 'Argenton', '2006-11-13', 22, '00152.jpg'),
(23, 'Joana', 'De Sousa', '0000-00-00', 22, '00179.jpg'),
(24, 'Lorin', 'Strübin', '2006-06-15', 22, '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `member_management`
--

CREATE TABLE IF NOT EXISTS `member_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `function` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipLoc` int(11) NOT NULL,
  `picURL` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Daten für Tabelle `member_management`
--

INSERT INTO `member_management` (`id`, `firstName`, `lastName`, `function`, `phone`, `email`, `mobile`, `street`, `zipLoc`, `picURL`) VALUES
(1, 'Dario', 'Mulas', 'Präsident', '+41 (61) 9215914', 'dario.mulas@acrossoneri.ch', '+41 (79) 3226428', 'Peterhansstrasse 5b', 4415, ''),
(4, 'Salvatore', 'Mulas', 'Marketing', '+41 (61) 9210489', 'marketing@acrossoneri.ch', '', 'Geissbrunnenweg 22', 4452, ''),
(2, 'Paolo', 'Mulas', 'Vizepräsident', '+41 (61) 8211648', 'spal@eblcom.ch', '+41 (79) 3223550', 'Peterhansstrasse 5a', 4415, ''),
(3, 'Luca', 'Mulas', 'Sportchef', '+41 (61) 8211648', 'luca.mulas@acrossoneri.ch', '+41 (79) 7610594', 'Peterhansstrasse 5a', 4415, ''),
(5, 'Giuseppe', 'Roberti', 'Spiko-Präsident', '', '', '+41 (79) 3025465', 'Hauptstrasse 103', 4415, ''),
(6, 'Claudia', 'Mulas-Badella', 'Finanzen', '+41 (61) 9215914', 'cdmulas@eblcom.ch', '', 'Peterhansstrasse 5b', 4415, ''),
(7, 'Antonio', 'Fagà', 'Beisitzer', '+41 (61) 8212086', '', '', 'Zweiengasse 1', 4133, ''),
(8, 'Valerio', 'Fagà', 'Beisitzer', '', '', '+41 (78) 6420241', 'Ergolzstrasse 1', 4415, ''),
(9, 'Mauro', 'Fuorchieri', 'Beisitzer', '', 'fuorchi@libero.it', '+41 (79) 8695146', 'Kanalstrasse 17', 4415, ''),
(10, 'Giuseppe', 'Grandinetti', 'Beisitzer', '+41 (61) 9219958', '', '+41 (76) 4557035', 'Wolfgasse 2', 4415, ''),
(11, 'Giuseppe', 'Ceniviva', 'Beisitzer', '', 'giuseppeceniviva@tiscalinet.ch', '+41 (79) 3150743', 'Hauptstrasse 27', 4415, ''),
(12, 'Vincenzo', 'Cuzzocrea', 'Beisitzer', '', 'info@lenkgeometrie-center.ch', '+41 (79) 3225508', 'Bl', 4133, ''),
(13, 'Lorena', 'Fagà', 'Sekretärin', '', 'sekretariat@acrossoneri.ch', '+41 (79) 3786649', 'Zweiengasse 1', 4133, ''),
(14, 'Deila', 'Santo', 'Sekretärin', '+41 (58) 8536669', 'sekretariat@acrossoneri.ch', '+41 (79) 5851724', 'Standweg 6', 4410, '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `member_staff`
--

CREATE TABLE IF NOT EXISTS `member_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `bDay` date NOT NULL,
  `function` varchar(255) NOT NULL,
  `toTeam` int(11) NOT NULL,
  `pictureURL` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Daten für Tabelle `member_staff`
--

INSERT INTO `member_staff` (`id`, `firstName`, `lastName`, `bDay`, `function`, `toTeam`, `pictureURL`, `tel`) VALUES
(1, 'Alessandro', 'Roberti', '0000-00-00', 'Trainer', 1, '', ''),
(2, 'Pascal', 'Schreiber', '0000-00-00', 'Co-Trainer', 1, '', ''),
(3, 'Antonio', 'Mazza', '0000-00-00', 'Torwart-Trainer', 1, '', ''),
(4, 'Romano', 'Branca', '0000-00-00', 'Trainer', 2, '', ''),
(5, 'Luca', 'Severo', '0000-00-00', 'Trainer', 3, '', ''),
(6, 'Luca', 'Mulas', '0000-00-00', 'Co-Trainer', 3, '', ''),
(7, 'Daniel', 'Barca', '0000-00-00', 'Trainer', 10, '', ''),
(8, 'Deila', 'Santo', '0000-00-00', 'Trainerin', 15, '', ''),
(9, 'Fabrizio', 'Piras', '0000-00-00', 'Trainer', 22, '', '+41 (0)76 328 03 35'),
(10, 'Santos', 'Luruena', '0000-00-00', 'Trainer', 22, '', '+41 (0)79 689 89 56'),
(11, 'José', 'De Sousa', '0000-00-00', 'Trainer', 22, '', '+41 (0)79 257 27 25'),
(12, 'Giuseppe', 'Roberti', '0000-00-00', 'Trainer', 20, '', '+41 (0)79 302 54 65'),
(13, 'Mark', 'Crusi', '0000-00-00', 'Trainer', 20, '', '+41 (079 203 53 19'),
(14, 'Gaetano', 'Ciraolo', '0000-00-00', 'Trainer', 20, '', '+41 (0)79 267 30 50');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `article` longtext NOT NULL,
  `pictureURL` varchar(255) NOT NULL,
  `autor` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` int(11) NOT NULL,
  `gameID` int(255) DEFAULT NULL,
  `formation` int(255) DEFAULT NULL,
  `playerArray` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Daten für Tabelle `news`
--

INSERT INTO `news` (`id`, `title`, `article`, `pictureURL`, `autor`, `date`, `category`, `gameID`, `formation`, `playerArray`) VALUES
(1, 'Wir sind wieder online!', 'Es hat zwar ein wenig gedauert, aber nun endlich ist sie da: die neue Webseite des AC Rossoneri. Wir sind sehr stolz, nun endlich eine saubere und übersichtliche Webseite präsentieren zu dürfen und hoffen, dass sich alle Nutzer problemlos mit der neuen Navigation vertraut machen können.\r\nDas System, welches sich hinter dieser Webseite verbirgt, wurde von A bis Z für unser Verein realisiert und bietet dementsprechend ein einzigartiges Surferlebnis. Ebenfalls ermöglicht diese Webseite eine dynamische Interaktion mit mehreren registrierten Benutzern, vereinfacht bedeutet dies, dass wir mehrere Hilfskräfte beschäftigen werden um Matchberichte zu verfassen und Inhalte zu pflegen.\r\nDas System wurde von Salvatore Mulas entworfen und programmiert, für sämtliche Fragen oder Unklarheiten bitte Kontakt Aufnahmen unter marketing@acrossoneri.ch.', '00103.jpg', 1, '2013-08-28 19:33:58', 1, NULL, NULL, NULL),
(2, 'Familienturnier und Grillabend am 14. September', 'Der AC Rossoneri organisiert am 14. September 2013 um 14:00 Uhr ein Familienturnier in Lausen. Am Turnier sind sämtliche Mitglieder nach Anmeldung spielberechtigt. Darüber hinaus findet am selben Tag um 18:00 Uhr das Cupspiel unserer ersten Mannschaft gegen den FC Therwil (2. Liga) statt. Zum krönenden Abschluss gibt es natürlich gleich neben dem Spielfeld einen wunderbaren Grillplausch, unsere Bar ist selbstverständlich ebenfalls vor Ort und kümmert sich sehr gerne um unsere durstige Gäste. Wir freuen uns auf diesen Event!', '00102.jpg', 1, '2013-09-05 22:41:03', 1, NULL, NULL, NULL),
(3, 'Die erste Mannschaft auf dem ersten Platz', 'Die harte Arbeit des Trainer-Trio''s und der gesamten Mannschaft hat sich nun endlich ausbezahlt! Die erste Mannschaft erreicht nach dem grandiosen Sieg von 8:0 gegen den SV Muttenz den ersten Platz. Unsere erste Mannschaft hat bisher insgesamt 6 Spiele bestritten - davon 5 Spiele gewonnen und 1 Spiel unentschieden. Eine sagenhafte Leistung!<br />\r\nAuch das Torverhältnis sieht fantastisch aus: Nach den 6 Spielen hat die erste Mannschaft bisher nur ein einziges Gegentor kassiert und konnte satte 21 Treffer erzielen - somit hat der AC Rossoneri in der gesamten 4. Liga die beste Verteidigung überhaupt (natürlich gehört die ganze Mannschaft dazu).<br />\r\nWir wünschen der ersten Mannschaft weiterhin viel Erfolg. Weiter so!', '00104.jpg', 1, '2013-09-28 21:54:47', 1, NULL, NULL, NULL),
(9, 'Trotz unentschieden noch auf dem 1. Platz', 'Nach dem Unentschieden unserer ersten Mannschaft gegen den FC Diegten Eptingen ging die plötzliche Euphorie wieder den Bach runter. Sofort nach dem Erlangen des ersten Platzes erfasste uns die Panik, die Führung wieder abgeben zu müssen. Unsere Jungs werden in der Tabelle zur Zeit sehr dicht von Laufenburg, Gelterkinden und dem FC Stein verfolgt - einmal stolpern wäre bereits genug, um die Führung wieder zu verlieren. Das Stolpern liess nicht lange auf sich warten: Leider reichte es in Diegten trotz einer brillianten Leistung nur für ein Unentschieden.<br />\r\nDas Spiel zwischen Laufenburg und Gelterkinden endete allerdings zu unseren Gunsten ebenfalls mit einem Unentschieden. Diesbezüglich können wir weiterhin von der Tabellenspitze grüssen und bereiten uns auf ein spannendes Spiel nächsten Samstag gegen den FC Gelterkinden vor. Forza Rossoneri. ', '00105.jpg', 1, '2013-10-06 13:59:28', 1, NULL, NULL, NULL),
(10, 'Drei direkte Begegnungen und ein Derby', 'Die Vorrunde neigt sich dem Ende zu - und was für ein Ende! Die Leistung der ersten Mannschaft kann zur Zeit nicht einmal in Worte gefasst werden. Sagenhaft, grandios, souverän! Angesichts der super Leistungen der gesamten Mannschaft inklusive Trainerstab ist dieser erste Platz hochverdient.<br />\r\nSpannend werden die letzten vier Spiele der Vorrunde: Uns erwarten nämlich drei Direktbegegnungen mit dem zweit-, dritt- und viert-Platzierten. Darüber hinaus wird es auch noch zum hochspannenden Derby mit dem FC Lausen kommen. Die Vorrunde wird in einem fussballerischen Spektakel enden. Forza Rossoneri', '00106.jpg', 1, '2013-10-11 14:16:06', 1, NULL, NULL, NULL),
(11, 'Auch dieses Jahr: Die AC Rossoneri Silvesterparty!', 'Es ist wieder soweit, das Jahr 2013 ist schon bald zu Ende. Grund genug um erneut die Champagner-Gläser hochzuheben und gemeinsam auf das neue Jahr anzustossen. Der AC Rossoneri wird euch auch dieses Jahr mit einem grandiosen Anlass verzaubern und mit einer spektakulären Silvesterfeier unterhalten. Weitere Infos werden in Kürze auf unserer Webseite folgen. Save the date!', '00100.jpg', 1, '2013-10-10 13:47:21', 3, NULL, NULL, NULL),
(12, 'Danke! Das Familienturnier war ein Erfolg!', 'Der AC Rossoneri möchte sich von Herzen bei allen Teilnehmerinnen und Teilnehmer unseres Familienturniers des 14. September 2013 bedanken. Die hohe Anzahl an Teilnehmer und Zuschauer für das Turnier und das anschliessende Cupspiel hat uns sehr gefreut. Es war uns eine Ehre, so viele Gäste für diese Anlässe begrüssen zu dürfen. Vielen Dank an unsere Fans und den Familien unserer Mitglieder.', '00101.jpg', 1, '2013-10-10 22:41:45', 3, NULL, NULL, NULL),
(13, 'Ein High-Five auf die Tabellenführung', 'Mit einem Sieg, der nie in Gefahr war, eroberte die AC Rossoneri die Tabellenspitze in der 2. Gruppe der vierten Liga. Der fünffache Torschütze Maurizio Marchetta schoss den SV Muttenz beinahe im Alleingang ab.<br />\rAuch ein früher Tiefschlag konnte die extrem gefestigt wirkende Truppe der AC Rossoneri nicht aus dem Tritt bringen. Nach nur zehn gespielten Minuten musste Danilo Cordeiro verletz ausgewechselt werden. Nach einem Zweikampf bekam Cordeiro einen Schlag ins Gesicht und musste mit einer Platzwunde im Mund ins Krankenhaus. Auf diesem Weg, gute Besserung Danilo!<br />\rAls Glück im Unglück kann man diesen Spielertausch betrachten. Nur knappe zehn Minuten brauchte  Maurizio Marchetta nach seiner Hereinnahme um das erste Mal zu scoren. In der Folge vergab die AC in Form von Stefan Zimmermann, Basti Werisch und Marchetta hochkarätige Chancen. Letzterer vollendete dennoch mit dem Pausenpfiff einen schönen Konter zum 2:0.<br />\rAus einer stabilen Defensive heraus spielte Rosso die erste Hälfte souverän runter. Wenn es etwas zu bemängeln gibt, ist dies das nonchalante Umgehen mit den zahlreichen Torchancen.<br />\rDiese vermeintliche Schwäche der ersten Hälfte wurde im zweiten Abschnitt zur Stärke. Beinahe jeder Schuss schien den Weg ins Tor zu finden. Kurz nach Wiederbeginn erhöhte der starke David Prince Tettey auf 3:0. Ab Spielminute 62 klingelte es in schöner Regelmässigkeit im Tor der Gäste. Der Reihe nach trafen Zimmermann, zweimal Marchetta und nochmals Tettey. In der 72. Minute gelang Marchetta gar sein fünfter Treffer (Spielball behalten??) zum 8:0, was sogleich der Endstand war.<br />\rMit diesem zu jeder Zeit ungefährdeten Sieg übernimmt die AC die Tabellenführung, auch dank der zeitgleichen Niederlage des grössten Konkurrenten Laufenburg-Kaisten gegen den FC Diegten-Eptingen. Ein weiteres Mal in der noch jungen Saison konnte sich das Roberti-Team auf eine solide Defensive verlassen. Genau ein einziges Gegentor musste Rosso in allen bisher gespielten Partien hinnehmen – absolute Ligaspitze.', '00107.jpg', 3, '2013-09-30 21:15:59', 2, 146487, 4231, 'a:18:{i:0;i:35;i:1;i:102;i:2;i:69;i:3;i:93;i:4;i:79;i:5;i:101;i:6;i:100;i:7;i:19;i:8;i:96;i:9;i:109;i:10;i:120;i:11;i:17;i:12;i:57;i:13;i:113;i:14;i:67;i:15;i:103;i:16;i:59;i:17;i:104;}'),
(14, 'Zurück zur Normalität?', 'Die vorgezogene Zweitrunden-Begegnung zwischen der AC Rossoneri und dem FC Eiken wurde in Extremis entschieden \rMit dem FC Eiken kam ein Sieger der ersten Spielrunde nach Lausen um sich mit der AC Rossoneri zu messen. Und der Gast war, wie zu erwarten, ein unangenehmer Gegner. Spielerisch kein Schlechter und auch harter Gegner in den Zweikämpfen. Nach einem forschen Beginn beider Teams, gelang Eiken der Führungstreffer. Nicht zwingend verdient. Die AC hatte och die eine oder andere Möglichkeit fahrlässig vergeben. Und in dieser Zeit war auch das viel zitierte Momentum nicht auf der Seite der Gastgeber. Chancen ausgelassen, Gegentreffer und ein weiterer verletzter Spieler – Captain Eggli ging frühzeitig duschen.<br />\rIm zweiten Spielabschnitt gelang rasch der Ausgleich: Ein typische Weibel-Tor. Im allgemeinen Durcheinander spedierte Weibel den Ball über die Linie. Doch nur wenig später gelang dem FCE die neuerliche Führung. Fortan spielte nur noch Rosso. Nach einem schönen Spielzug war es der interimistische Captain Shala der Sandinho mustergültig bediente und dieser nur noch einzunicken brauchte. Viertes Tor im zweiten Spiel. Der Knoten scheint gelöst. Die AC wollte jetzt mehr. Eiken wirkte platt und handlungsunfähig. Das i-Tüpfelchen gelang dem Pflichtspiel-Debütanten Stefan Kaiser. Der Eingewechselte erzielte beinahe mit dem Schlusspfiff den erlösenden Siegestreffer. <br />\rTrotz dem Punktemaximum nach zwei Spielen ist Rosso „nur“ auf Rang vier wiederzufinden. Die guten alten Strafpunkte. Ein, aller Voraussicht nach, zu unseren Ungunsten ewiger Wegbegleiter…<br />\rEin grosser Dank geht an die erste Mannschaft, die uns einmal mehr aushalf und den wiederum zahlreich erschienenen Fans. Danke!!<br /> \rP.S.: Die Ferienzeit neigt sich dem Ende zu, einige Verletzte und Militärisch-Aktive kehren Schritt für Schritt wieder zurück. Dennoch war das „Zwei“ einmal mehr auf die Hilfe der Ersten Mannschaft angewiesen um dieses Spiel zu bestreiten. Doch langsam sollte es wieder vermöglichbar sein, einen geregelten Trainingsablauf mit genügend Spielern zu gewährleisten und eine „eigene“ Mannschaft für Meisterschaftsspiele aufzubieten… Merciiiiiii<br />\r', '00113.jpg', 3, '2013-08-21 21:00:00', 2, 145849, NULL, ''),
(15, 'Aufgeben verboten!', '„Derby d`Italia“ in Liestal. Emotionen. Leidenschaft. Spannung. Dramatik. Ein Unentschieden eines Sieges gleich.\rVirtus, der vermeintliche Favorit der Gruppe, empfing die Associazione Calcio Rossoneri in der dritten Runde. Ein weiteres Mal war die AC zu mehreren unerwünschten Positionswechseln gezwungen. Unter solchen Umständen ist ein Einspielen schlicht nicht möglich.<br />\rUnd es kam, wie es kommen musste: Nach zirka sieben Minuten und mehreren Fehlern im Spielaufbau, gelang den Hausherrn der Führungstreffer. Die AC, scheinbar unbeeindruckt vom frühen Rückstand,  liess sich nicht unterkriegen. Nur ein paar Zeigerumdrehungen später wurde Zollinho lanciert. Dieser zog alleine aufs Tor zu, umkurvte den Keeper und wurde von diesem (ziemlich krass) regelwidrig gestoppt. Rot. Überzahl für Rosso. <br />\rVirtus legte seinen Fokus nun auf die Defensive. Nur vereinzelt setzten sie Nadelstiche in der Offensive. Doch wie schon so oft gesehen im brutalen Fussball-Buisness sass einer dieser Stiche. 0:2.<br />\rDer derzeit Formstarke Zollinho verkürzte jedoch nur kurz später. Schön über die linke Seite lanciert flankte Weibel auf Zolli, der zum 2:1 vollendete. Aber an diesem Tag war das so eine Geschichte mit den Kontern. Fehler im Spielaufbau, Pass in die Schnittstelle, 1:3. Ein ereignisreicher erster Spielabschnitt. <br />\rWer nun glaubte, dass die zweite Hälfte abflachen würde, sah sich getäuscht. Innert 15 Minuten fielen nicht weniger als 5(!!!) Treffer. Aber der Reihe nach: Konter – Gegentor, 1:4. Virtus schien der Favoritenrolle trotz Unterzahl gerecht zu werden. Rosso gab nicht auf und versuchte weiter mitzuspielen. Freistoss aus ungefähr 40 Metern von Martin Thommen. Der Ball segelt über Freund und Feind hinweg ins Tor. Oder war eventuell doch noch jemand am Ball?? Etwa wieder dieser Zolli?? Es lässt sich nicht genau aufklären. Höchste Zeit für den Videobeweis in der  5. Liga!!! Freude, aufbäumen, die Suche nach dem erneuten Anschluss und Konter, Tor! Für Virtus. Nur gefühlte drei Sekunden nach dem 4:2 (durch Martin/Zolli) erhöhte Virtus auf 2:5. <br />\rNun dauert es doch ein wenig länger bis die Reaktion von Rosso folgte. Aber sie kam heftig. Innert drei Minuten zweimal Freistoss Martin, zweimal Kopfball, zweimal Tor. Und gleich eine Debüt-Dublette. Sowohl Yves Rieder als auch Ale Roberti scorten jeweils zum ersten Mal für Rosso II. 5:4.<br />\rNoch waren gut 30 Minuten zu spielen und die AC drückte und drängte. Das erlösende fünfte Tor wollte partout nicht fallen. Es brauchte zum Ende des Spiels – genau in der 92. Minute - schon einen Geniestreich von Ale R. Einen Abpraller versenkte er gekonnt (aber auch glücklich) direkt im langen Eck. 5:5. Ausgleich. Schlusspfiff. Das rot-schwarze Team feierte mit dem Anhang. Auch an diesem Abend kamen unzählige Supporter zu diesem spät abendlichen Derby (sind Derbys nicht schlicht geil???).<br />\rEs passte bei Weitem nicht alles im Spiel der AC. Doch erneut, wie bereits in den beiden Spielen zuvor, wusste die Truppe von Romano Branca mit Kampfgeist zu gefallen. Zum dritten Mal ein Spiel einen Rückstand aufgeholt. Aufgeben verboten, so die Devise. ', '00112.jpg', 3, '2013-08-29 21:00:00', 2, 145851, 4231, 'a:11:{i:0;i:41;i:1;i:44;i:2;i:89;i:3;i:57;i:4;i:117;i:5;i:92;i:6;i:141;i:7;i:140;i:8;i:116;i:9;i:83;i:10;i:97;}'),
(16, 'Perfekt war nur das Wetter!', 'Nach einer längeren Spielpause nahm die AC den Spielbetrieb wieder auf - gegen die neu formierte Retortentruppe Pratteln United.<br />\r\rMit einer nur ganz leicht veränderten Mannschaft und nur ganz wenigen Spielern der ersten Mannschaft starteten die Rot-Schwarzen perfekt in die Partie (Achtung Ironie/Sarkasmus). Langer Ball, Zielspieler Weibel verlängert mit dem Kopf in den Lauf von Sandinho und Tor. Das sechste Tor im vierten Spiel. Bei perfekten äusseren Bedingungen (zumindest für die Akteure auf dem Feld) kamen die Gäste dann aber besser ins Spiel. Wie es bereits Freddy Krüger in „Nightmare on Elm Street“ tat, verwandelte Pratteln den süssen (Traum-)Start der AC in einen bitteren, rot-schwarzen Albtraum. Eins, Zwei, Freddy kommt vorbei – 1:2. Drei, Vier, er ist gleich hier – 1:4. Fünf, Sechs, es holt dich gleich die Hex – 1:6. <br />\rDa half auch der Treffer von Ale Roberti zum 2:6 nichts mehr. Reine Resultatkosmetik. Was bleibt nach diesem Spiel hängen? Mit nunmehr 16 Gegentreffern stellt Rosso die drittschlechteste Defensive. Mit 15 erzielten Toren jedoch den viertbesten Angriff – also nichts Neues. Immerhin kassierte keiner der Rosso-Akteure den gelben Karton. <br />\rWie weiter? Aufstehen, zusammenraufen und weiterspielen. Niederlagen passieren und gehören zum Fussball. Wichtig ist, was man daraus lernt und wie es weiter geht. Mit dem FC Bubendorf wartet am Sonntag ein unangenehmer Gegner auf die Romano-Elf, mit welchem wir noch ein Hühnchen zu rupfen haben. Also, steh auf wenn du am Boden bist.', '00111.jpg', 3, '2013-09-18 21:12:25', 2, 145860, 442, 'a:13:{i:0;i:41;i:1;i:117;i:2;i:67;i:3;i:57;i:4;i:70;i:5;i:83;i:6;i:141;i:7;i:116;i:8;i:89;i:9;i:92;i:10;i:97;i:11;i:59;i:12;i:110;}'),
(17, 'Schlimmer geht es nimmer - oder eben doch…', 'Nach der blamablen Vorstellung gegen den FC Pratteln United war gegen Bubendorf Wiedergutmachung angesagt. Doch weit gefehlt.<br / >\rIn einer über weite Strecken hart geführten Partie, welche Madame Schiri NIE im Griff hatte, kam es zu unendlich vielen, unschönen Situationen. Etliche Schwalben, niedere Wortgefechte und überhartes Einsteigen überstrahlten die ansonsten „faire“ Partie. <br / >\rZwar führte B`dorf die feinere Klinge, Rosso aber hatte die besseren Chancen. Sandinho knallte den Ball an den Pfosten, Weibel tauchte gefühlte 1000 Mal alleine vor dem Tor auf. Aber alle wissen es: hätte, wäre, wenn und Aber, Fussball ist kein Spiel der Konjunktive… Nach 45 Minuten stand es 0:2 aus Sicht des FCB. Unnötig, aber Realität. Was hingegen zu Beginn der zweiten Hälfte passierte, erinnerte einmal mehr stark an einen Albtraum. Freddy lässt grüssen… \rBoom, boom, boom, boom. Bubendorf erhöhte und erhöhte. Die Treffer von Sandinho und Weibel waren nur Resi-Kosmetik. 2:8 hiess das Gesamtscore. <br / >\rWollen wir nach dem Guten suchen, sind dies die ersten 30 Minuten, in welchen die Blau-Gelben gefühlte null Torchancen hatten. Auch die Schluss-Viertelstunde lässt ebenso aufhorchen. Als sich die AC vermehrt auf Fussball konzentrierte, kamen auf einmal auch wieder die Möglichkeiten. Die Gastgeber wurden teils regelrecht in die eigene Hälfte, gar den eigenen 16ner gedrängt.  ', '00110.jpg', 3, '2013-09-22 21:30:00', 2, 145864, 442, 'a:11:{i:0;i:17;i:1;i:86;i:2;i:141;i:3;i:112;i:4;i:117;i:5;i:41;i:6;i:116;i:7;i:83;i:8;i:70;i:9;i:97;i:10;i:92;}'),
(18, 'Pech, Pech und ein weiteres Mal Pech…', 'Nach zwei deftigen Klatschen setzte es gegen den NK Pajde eine extrem unglückliche Niederlage ab. Es war ein Spiel mit Schatten- und einigen Sonnenseiten. <br />\rRehabilitation war angesagt. Nach insgesamt 14 Gegentoren in zwei Spielen sollte gegen den NK Pajde eine Leistungssteigerung her. Doch es hätte nicht schlimmer beginnen können: Nach nur wenigen gespielten Sekunden zappelte der Ball bereits zum ersten Mal im Gehäuse der Gastgeber. Ein eher harmloser Schuss rutschte Gubsi unglücklich zwischen den Beinen durch. <br />\rAber anders als noch in den Spielen zuvor liessen die AC-Spieler die Köpfe nicht hängen, sondern versuchten das Heft in die eigenen Hände zu nehmen. Aus einer (ausnahmsweise) starken Defensive heraus, spielte Rosso gefälligen Fussball. Einzig die zwingenden Chancen blieben aus. Mit dem  knappen 0:1-Rückstand ging es in die Pause. <br />\rAuch im zweiten Abschnitt dominierte Rosso das Spiel. Mit der Hereinnahme des wiedergenesenen Büsi kehrte merklich die Ruhe im Spielaufbau zurück. Die Gäste kamen kaum zu einer Tormöglichkeit. Jedoch trat erneut die Nonchalance vor dem Gäste-Gehäuse auf. Doch neben dem Auslassen der Chancen darf man die positiven Aspekte nicht vergessen: Kämpferisch top, Moral wieder gefunden und spielerisch wieder auf einem guten Niveau. <br />\rAls, wie so oft, Sandinho das Spielgerät irgendwie im Gehäuse zum Ausgleich unterbrachte, glaubten alle an einen Sieg. Eine weitere unglückliche Aktion von Gubsi später befand sich Rosso erneut im Hintertreffen. Nun lagen die Nerven hüben wie drüben blank. Es wurde pausenlos reklamiert, lamentiert und gehadert. Der masslos überforderte Schiedsrichter verteilte mehr Karten als an Weihnachten – was zu einem berechtigten Platzverweis für die Gäste führte. Nummerisch in Überzahl stürmte und drängte die AC nun vehement auf den Ausgleich. Dieser gelang dem Super-Sub Nure Shala in der zweiten Minute der Nachspielzeit. Die Freude war jedoch nur von kurzer Dauer… Eine schier endlose Fehlerkette fand seinen Abschluss mit dem erneuten Gegentor zum 2:3. Nur gefühlte zehn Sekunden nach dem Ausgleich. Bitter, einfach nur bitter. <br />\rIm Vergleich zu den letzten Spielen war eine deutliche Leistungssteigerung erkennbar. Wenn auch in Extremis  brutal verloren, lässt sich auf dieser Partie aufbauen. Vielleicht gelingt der ersehnte Befreiungsschlag schon im nächsten Spiel. Im Derby gegen den FC Lausen.\r', '00109.jpg', 3, '2013-09-29 21:30:00', 2, 145871, 442, 'a:11:{i:0;i:35;i:1;i:117;i:2;i:141;i:3;i:113;i:4;i:70;i:5;i:98;i:6;i:116;i:7;i:140;i:8;i:92;i:9;i:26;i:10;i:97;}'),
(19, 'Nach dem Spitzenspiel ist vor dem Derby', 'Eine starke zweite Hälfte reichte Rosso um im Spitzenspiel gegen den FC Gelterkinden einen souveränen Sieg einzufahren. Die beiden Joker Maurizio Marchetta und Giovanni Bonsignore erzielten die Treffer.<br />\nEine alte Weisheit besagt: Wenn es läuft, dann läuft es. Erneut war es Super-Sub Marchetta, der die AC auf die Siegesstrasse brachte. Dieser Junge hat zurzeit einen Lauf und trifft beinahe nach Belieben. Doch für einen Sieg benötigt es mehr als nur Solisten. Und das Team funktioniert von A bis Z. Die Defensive ist seit Beginn der Saison die absolute Stärke von Rosso: Lediglich ein Gegentor musste die neuformierte Defensive hinnehmen. Auch die Offensive harmoniert meist gut zusammen.  Und von der Breite des Kaders träumen viele Konkurrenten nur. Es scheint keine unumstössliche „Erste-Elf“ zu geben, von der Bank kann das Trainerteam immer wieder die benötigten Impulse setzten und falls gewünscht rotieren. <br />\nIn der ersten Hälfte war nicht alles Gold, was glänzt. Der FCG hatte, trotz spielerischer Überlegenheit, nicht eine ernsthafte Torchance. Keeper Gubser musste sich lediglich bei Abstössen sportlich betätigen. Aber auch die AC kam in der Offensive kaum je zur Entfaltung. Als der - nicht immer auf der Höhe wirkende - Spielleiter zur zweiten Halbzeit blies, spielten die Gastgeber befreiter und inspirierter auf. Dank starkem Gegenpressing wurden Gältis Angriffsversuche im Keim erstickt und mit teils ansehnlichen Vorstössen gezielte Nadelstiche gesetzt. Aus diesen Nadelstichen resultierte auch das zu diesem Zeitpunkt verdiente Führungstor durch Marchetta. Als kurz vor dem Ende – genau in einer Druckphase der Gäste – die Neuerwerbung Bonsignore das 2:0 markierte, war der Deckel drauf. <br />\nDank diesem Sieg konnte Robertis Team einen direkten Konkurrenten um den Aufstieg entscheidend distanzieren. Doch das Restprogramm hat es in sich: Zuerst das Derby „auswärts“ beim FC Lausen,  gefolgt vom Spiel gegen den viertplatzierten FC Stein und zum Abschluss noch die Partie gegen Laufenburg-Kaisten – notabene dem Zweiten der Gruppe. Doch die Mannschaft scheint gefestigt und für die kommenden schweren Aufgaben gerüstet.', '00108.jpg', 3, '2013-10-16 19:30:00', 2, 146498, 4231, 'a:18:{i:0;i:35;i:1;i:102;i:2;i:33;i:3;i:69;i:4;i:79;i:5;i:99;i:6;i:103;i:7;i:96;i:8;i:93;i:9;i:101;i:10;i:19;i:11;i:57;i:12;i:113;i:13;i:100;i:14;i:139;i:15;i:109;i:16;i:120;i:17;i:104;}'),
(20, 'Let it roll!', 'Mit dem 3:1-Sieg gegen Wallbach startet die AC Rossoneri eine kleine Sieges-Serie.  Kann diese auch am kommenden Weekend gegen den Lieblings-Erzrivalen Liestal anhalten?<br />\nEiner nach dem Anderen kehrt zurück. Das Team nimmt immer mehr die gewohnte, erfolgreiche Form an. Und mit der Rückkehr einiger etablierter Spieler kehren auch die positiven Resultate zurück. Mit dem Derby-Sieg im „Auswärtsspiel“ gegen den FC Lausen ist ein erster Befreiungsschlag gelungen, mit dem Sieg gegen die Freaktaler am vergangenen Samstag gar eine Mini-Serie gestartet worden. <br />\nIn einer ereignisarmen ersten Hälfte sorgte Stefan Kaiser mit dem 1:0 für erste Jubelstürme. Mit dieser knappen Führung ging die Romano-Elf in die Pause. Es wurden einige taktische Änderungen vorgenommen und weiter ging es mit Halbzeit zwei. In Durchgang zwei führte Rosso dann auch eine weitaus feinere Klinge als in den ersten 45 Minuten.<br />\nAls Sandinho alleine aufs Tor marschierte, scheiterte er zunächst noch am Gäste-Keeper. Es gelang ihm jedoch die sofortige Rückeroberung des Balles. Mit viel Übersicht legte er die Pille im 16er quer auf den heranstürmenden Michi Tanner, der mit seinem Premieren-Tor in dieser Saison das Score auf 2:0 erhöhen konnte. Nur kurze Zeit später erhöhte Sandinho auf 3:0. Jetzt waren die Fans waren nicht mehr zu halten. Sie sangen und tanzten (siehe Videos) das restliche Spiel über.<br /> \nAuch der von Langnaz unglücklich verursachte Elfmeter (diese Mal ein Handspiel, also nicht ganz typisch Langnaz-like mit beiden Beinen voraus;-) ) für die Gäste, vermochte der guten Stimmung keinen Abbruch zu tun. Beim fälligen Strafstoss hatte der interimistische Goalie Nure Shala keine Chance. Das Tor sollte ein kleiner Schönheitsfehler bleiben. In der Folge passierte nichts mehr und der starke Schiri beendete dieses Spiel. <br />\nEs ist schön zu sehen, wie vor dem wohl wichtigsten Spiel der Hinrunde der AC-Zug langsam aber sicher immer mehr ins Rollen kommt. Nur ein Gegentor in den letzten Zwei Pflichtspielen. Liestal kann also kommen. In diesem Sinne: Let it roll.', '00114.jpg', 3, '2013-10-13 21:30:00', 2, 145882, 4231, 'a:11:{i:0;i:83;i:1;i:117;i:2;i:142;i:3;i:26;i:4;i:70;i:5;i:98;i:6;i:141;i:7;i:116;i:8;i:30;i:9;i:41;i:10;i:98;}');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `ligaDesc` varchar(255) NOT NULL,
  `pictureURL` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `teams`
--

INSERT INTO `teams` (`id`, `name`, `type`, `ligaDesc`, `pictureURL`) VALUES
(1, 'Erste Mannschaft', 1, '4. Liga - Gruppe 2', '00100.jpg'),
(2, 'Zweite Mannschaft', 1, '5. Liga - Gruppe 1', '00101.jpg'),
(3, 'Dritte Mannschaft', 1, '5. Liga - Gruppe 2', ''),
(10, 'Senioren', 1, 'Senioren Promotion - Gruppe 1', '00102.jpg'),
(15, 'Frauen', 1, 'Frauen - 4. Liga', ''),
(20, 'Junioren G', 2, '', ''),
(22, 'Junioren F', 2, '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `teams_ranking`
--

CREATE TABLE IF NOT EXISTS `teams_ranking` (
  `id` int(11) NOT NULL,
  `team` varchar(255) NOT NULL,
  `points` int(11) NOT NULL,
  `fairplay` int(11) NOT NULL,
  `teamID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `teams_ranking`
--

INSERT INTO `teams_ranking` (`id`, `team`, `points`, `fairplay`, `teamID`) VALUES
(1, 'SC M&uuml;nchenstein', 9, 16, 1),
(2, 'FC Arisdorf', 16, 11, 1),
(3, 'FC Diegten Eptingen', 16, 12, 1),
(4, 'SV Muttenz b', 3, 21, 1),
(5, 'FC Oberdorf', 13, 20, 1),
(6, 'AC Rossoneri', 23, 14, 1),
(7, 'FC Stein b', 17, 29, 1),
(8, 'SV Sissach a', 14, 19, 1),
(9, 'FC Lausen 72', 1, 22, 1),
(10, 'FC Gelterkinden b', 16, 12, 1),
(11, 'FC Laufenburg-Kaisten b', 22, 14, 1),
(12, 'FC Bubendorf', 6, 16, 1),
(13, 'FC Lausen 72', 18, 6, 2),
(14, 'Pratteln United', 19, 15, 2),
(15, 'FC Eiken', 6, 10, 2),
(16, 'NK Pajde', 22, 10, 2),
(17, 'FC Liestal', 12, 7, 2),
(18, 'FC Wallbach', 6, 13, 2),
(19, 'AC Virtus Liestal b', 18, 14, 2),
(20, 'FC Zeiningen', 0, 17, 2),
(21, 'AC Rossoneri a', 13, 13, 2),
(22, 'FC Gelterkinden', 9, 24, 2),
(23, 'FC Diegten Eptingen', 3, 20, 2),
(24, 'FC Bubendorf', 24, 5, 2),
(25, 'CD Espanol Basel a', 4, 10, 3),
(26, 'SC Basel Nord a', 9, 14, 3),
(27, 'FC Ferad a', 4, 8, 3),
(28, 'AC Virtus Liestal a', 22, 11, 3),
(29, 'FC Telegraph BS', 13, 22, 3),
(30, 'FC Birsfelden', 13, 12, 3),
(31, 'FC Schwarz-Weiss', 11, 14, 3),
(32, 'FC Amicitia Riehen', 9, 8, 3),
(33, 'FK Srbija Basel', 15, 18, 3),
(34, 'FC Pratteln', 20, 24, 3),
(35, 'AC Rossoneri b', 7, 14, 3),
(36, 'FC Xalko', 17, 23, 3),
(37, 'FC Dardania', 22, 4, 10),
(38, 'FC Birlik', 9, 8, 10),
(39, 'FC Rheinfelden', 15, 8, 10),
(40, 'AC Rossoneri', 6, 10, 10),
(41, 'FC Bubendorf', 13, 6, 10),
(42, 'FC Laufenburg-Kaisten', 13, 19, 10),
(43, 'US Olympia 1963', 1, 6, 10),
(44, 'US Bottecchia BS', 7, 5, 10),
(45, 'FC Türkgücü Basel', 11, 3, 10),
(46, 'FC Birsfelden', 12, 12, 10),
(47, 'FC Allschwil', 9, 0, 15),
(48, 'FC Concordia Basel', 24, 0, 15),
(49, 'FC Nordstern BS', 18, 1, 15),
(50, 'FC Reinach', 12, 0, 15),
(51, 'FC Telegraph BS', 12, 0, 15),
(52, 'AC Rossoneri', 0, 21, 15),
(53, 'FC Laufenburg-Kaisten', 6, 0, 15);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `gplus` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `plz` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstName`, `lastName`, `email`, `facebook`, `twitter`, `gplus`, `youtube`, `address`, `plz`, `country`, `phone`, `mobile`, `fax`) VALUES
(1, 'salvo', '7af5c96bf001fd494760aacc951bc97b145e404c', 'Salvatore', 'Mulas', 'marketing@acrossoneri.ch', '', 'twitter.com/salvomulas', '', '', 'Geissbrunnenweg 22', '4452 Itingen', 'Schweiz', '+41 61 921 04 89', '+41 79 291 55 77', ''),
(2, 'sgubser', '7af5c96bf001fd494760aacc951bc97b145e404c', 'Stefan', 'Gubser', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'pfeller', '7af5c96bf001fd494760aacc951bc97b145e404c', 'Philippe', 'Feller', '', '', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
