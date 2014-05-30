-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 30. Mai 2014 um 13:29
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Daten für Tabelle `fields`
--

INSERT INTO `fields` (`id`, `title`, `pictureURL`, `belag`, `masse`, `jahr`, `sitze`) VALUES
(1, 'Hauptplatz Bifang', '00100.jpg', 'Naturrasen', '101/64', 1979, 500),
(2, 'Nebenplatz Stutz', '00101.jpg', 'Naturrasen', '90/57', 1994, 200),
(3, 'KiFu Bifang', '00102.jpg', 'Naturrasen', '35/30', 0, 0),
(4, 'Schelligacker', '00103.jpg', 'Naturrasen', '90/58', 2013, 300);

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
(145893, 2, 0, 'Meisterschaft', 1, 1, 0, 'So', '2013-10-27', '11:00:00', 'FC Diegten Eptingen ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145903, 2, 0, 'Meisterschaft', 1, 0, 4, 'So', '2014-03-19', '20:00:00', 'FC Zeiningen ', 'Unter Reben, Zeiningen - 1', 'Unter Reben', 'Zeiningen', '1', 'Unter Reben, Zeiningen'),
(145904, 2, 0, 'Meisterschaft', 1, 3, 0, 'So', '2014-03-23', '11:00:00', 'FC Gelterkinden ', 'Wolfstiege, Gelterkinden - 1', 'Wolfstiege', 'Gelterkinden', '1', 'Wolfstiege, Gelterkinden'),
(145915, 2, 0, 'Meisterschaft', 1, 1, 2, 'So', '2014-03-29', '19:30:00', 'FC Eiken', 'Sportanlage Netzi, Eiken,   - 1', 'Sportanlage Netzi, Eiken', ' ', '1', 'Kultureller Saal, Eiken                     '),
(145917, 2, 1, 'Meisterschaft', 1, 0, 6, 'So', '2014-04-06', '11:00:00', 'AC Virtus Liestal b', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145926, 2, 0, 'Meisterschaft', 1, 2, 1, 'So', '2014-04-13', '14:00:00', 'Pratteln United ', 'Hexmatt, Pratteln - 1', 'Hexmatt', 'Pratteln', '1', 'Hexmatt, Pratteln'),
(145930, 2, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-14', '00:00:00', 'FC Bubendorf', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145937, 2, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-04', '13:00:00', 'NK Pajde', 'Sportzentrum Steinli, Moehlin - B 02', 'Sportzentrum Steinli', 'Moehlin', 'B 02', 'Sportzentrum Steinli, Moehlin'),
(145943, 2, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-11', '11:00:00', 'FC Lausen 72', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145948, 2, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-05-17', '18:30:00', 'FC Wallbach', 'Sandgrube, Wallbach - 1', 'Sandgrube', 'Wallbach', '1', 'Sandgrube, Wallbach'),
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
(146509, 1, 1, 'Meisterschaft', 1, 3, 1, 'Sa', '2013-10-26', '18:00:00', 'FC Stein b', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146519, 1, 0, 'Meisterschaft', 1, 0, 0, 'Sa', '2013-11-02', '17:00:00', 'FC Laufenburg-Kaisten b', 'Blauen, Laufenburg - 1', 'Blauen', 'Laufenburg', '1', 'Blauen, Laufenburg'),
(146520, 1, 0, 'Meisterschaft', 1, 0, 4, 'So', '2014-04-10', '20:30:00', 'SC Muenchenstein a', 'Sportplatz Au, Muenchenstein - 1', 'Sportplatz Au', 'Muenchenstein', '1', 'Sportplatz Au, Muenchenstein'),
(146531, 1, 1, 'Meisterschaft', 1, 2, 0, 'So', '2014-03-29', '18:00:00', 'FC Arisdorf  ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146533, 1, 1, 'Meisterschaft', 1, 2, 0, 'So', '2014-04-05', '18:00:00', 'SV Sissach a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146542, 1, 0, 'Meisterschaft', 1, 1, 2, 'So', '2014-04-13', '11:00:00', 'FC Oberdorf ', 'z''Hof, Oberdorf - 1 Kunstrasen', 'z''Hof', 'Oberdorf', '1 Kunstrasen', 'z''Hof, Oberdorf'),
(146546, 1, 1, 'Meisterschaft', 1, 2, 0, 'So', '2014-04-26', '18:00:00', 'FC Bubendorf', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146553, 1, 0, 'Meisterschaft', 1, 1, 4, 'So', '2014-05-04', '14:30:00', 'SV Muttenz b', 'Sportplatz Margelacker, Muttenz - 1', 'Sportplatz Margelacker', 'Muttenz', '1', 'Sportplatz Margelacker, Muttenz'),
(146559, 1, 1, 'Meisterschaft', 1, 5, 3, 'So', '2014-05-10', '18:00:00', 'FC Diegten Eptingen  ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146564, 1, 0, 'Meisterschaft', 1, 1, 3, 'So', '2014-05-17', '17:00:00', 'FC Gelterkinden b', 'Wolfstiege, Gelterkinden - 1', 'Wolfstiege', 'Gelterkinden', '1', 'Wolfstiege, Gelterkinden'),
(146572, 1, 1, 'Meisterschaft', 1, 4, 0, 'So', '2014-05-21', '20:00:00', 'FC Lausen 72', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146575, 1, 0, 'Meisterschaft', NULL, 0, 0, 'So', '2014-06-01', '13:30:00', 'FC Stein b', 'Bustelbach, Stein - 1', 'Bustelbach', 'Stein', '1', 'Bustelbach, Stein'),
(146585, 1, 1, 'Meisterschaft', NULL, 0, 0, 'So', '2014-06-14', '18:00:00', 'FC Laufenburg-Kaisten b', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152013, 10, 1, 'Meisterschaft', 1, 4, 1, 'Fr', '2013-08-16', '20:00:00', 'US Bottecchia BS', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152022, 10, 1, 'Meisterschaft', 1, 5, 1, 'Mi', '2013-09-04', '20:00:00', 'US Olympia 1963 ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152024, 10, 0, 'Meisterschaft', 1, 4, 2, 'Fr', '2013-08-30', '20:30:00', 'FC Birsfelden  ', 'Sternenfeld, Birsfelden - A', 'Sternenfeld', 'Birsfelden', 'A', 'Sternenfeld, Birsfelden'),
(152031, 10, 1, 'Meisterschaft', 1, 1, 4, 'Sa', '2013-09-07', '16:00:00', 'FC Laufenburg-Kaisten ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152035, 10, 0, 'Meisterschaft', 1, 4, 1, 'Sa', '2013-09-21', '13:00:00', 'FC Tuerkguecue Basel ', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(152040, 10, 1, 'Meisterschaft', 1, 2, 2, 'Sa', '2014-03-28', '20:30:00', 'FC Rheinfelden', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152046, 10, 0, 'Meisterschaft', 1, 6, 1, 'Fr', '2013-10-11', '20:15:00', 'FC Bubendorf  ', 'Bruehl, Bubendorf - 1', 'Bruehl', 'Bubendorf', '1', 'Bruehl, Bubendorf'),
(152049, 10, 1, 'Meisterschaft', 1, 1, 7, 'Sa', '2013-10-19', '16:00:00', 'FC Dardania', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152057, 10, 0, 'Meisterschaft', 1, 3, 0, 'Sa', '2013-10-26', '13:00:00', 'FC Birlik', 'Sportanlagen St. Jakob, Basel - wird vor Ort zugeteilt', 'Sportanlagen St. Jakob', 'Basel', 'wird vor Ort zugeteilt', 'Sportanlagen St. Jakob, Basel'),
(152058, 10, 0, 'Meisterschaft', 1, 2, 2, 'Sa', '2014-04-05', '15:00:00', 'US Bottecchia BS', 'Sportanlage Rheinacker, Landauerstr. 45,   - Hauptplatz', 'Sportanlage Rheinacker, Landauerstr. 45', ' ', 'Hauptplatz', 'Sportanlage Rheinacker, Landauerstr. 45,  '),
(152069, 10, 1, 'Meisterschaft', 1, 4, 7, 'Sa', '2014-04-26', '20:30:00', 'FC Birsfelden  ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
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
(153378, 15, 0, 'Meisterschaft', 1, 3, 0, 'Sa', '2013-10-19', '17:30:00', 'FC Allschwil', 'Im Brueel, Allschwil,   - 2', 'Im Brueel, Allschwil', ' ', '2', 'Im Brueel, Allschwil,  '),
(153379, 15, 1, 'Meisterschaft', 1, 1, 12, 'So', '2013-10-27', '13:00:00', 'FC Nordstern BS ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153383, 15, 0, 'Meisterschaft', 1, 13, 0, 'So', '2013-11-03', '13:00:00', 'FC Concordia Basel ', 'Sportanlagen St. Jakob, Basel - wird vor Ort zugeteilt', 'Sportanlagen St. Jakob', 'Basel', 'wird vor Ort zugeteilt', 'Sportanlagen St. Jakob, Basel'),
(153386, 15, 1, 'Meisterschaft', 1, 0, 7, 'So', '2014-03-30', '00:00:00', 'FC Telegraph BS ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153388, 15, 0, 'Meisterschaft', 1, 18, 0, 'So', '2014-04-06', '00:00:00', 'FC Reinach', 'Einschlag, Reinach - Kunstrasen (1)', 'Einschlag', 'Reinach', 'Kunstrasen (1)', 'Einschlag, Reinach'),
(153393, 15, 1, 'Meisterschaft', 1, 0, 4, 'So', '2014-04-13', '11:00:00', 'FC Laufenburg-Kaisten ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
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
(160892, 3, 1, 'Meisterschaft', 1, 1, 8, 'So', '2013-10-27', '15:00:00', 'FC Pratteln', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160902, 3, 0, 'Meisterschaft', 1, 2, 1, 'So', '2013-11-03', '13:00:00', 'FC Telegraph BS', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(160903, 3, 0, 'Meisterschaft', 1, 4, 2, 'So', '2014-03-23', '11:00:00', 'FC Xalko', 'Rankhof, Basel - wird vor Ort zugeteilt', 'Rankhof', 'Basel', 'wird vor Ort zugeteilt', 'Rankhof, Basel'),
(160914, 3, 0, 'Meisterschaft', 1, 3, 1, 'So', '2014-03-30', '00:00:00', 'FC Amicitia Riehen ', 'Grendelmatte, Riehen - wird vor Ort zugeteilt', 'Grendelmatte', 'Riehen', 'wird vor Ort zugeteilt', 'Grendelmatte, Riehen'),
(160916, 3, 1, 'Meisterschaft', 1, 1, 3, 'So', '2014-04-06', '00:00:00', 'AC Virtus Liestal a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160925, 3, 0, 'Meisterschaft', 1, 6, 2, 'So', '2014-04-13', '15:00:00', 'FC Birsfelden', 'Sternenfeld, Birsfelden - A', 'Sternenfeld', 'Birsfelden', 'A', 'Sternenfeld, Birsfelden'),
(160929, 3, 1, 'Meisterschaft', 1, 1, 1, 'So', '2014-04-27', '00:00:00', 'CD Espanol Basel a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=151 ;

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
(120, 8, 'Özdemir', 'Kerim', '', '0000-00-00', '', 1, 4, '00182.jpg'),
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
(48, 33, 'Leone', 'Aron', '', '1993-04-23', '', 3, 2, '00121.jpg'),
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
(147, 3, 'Lavilla', 'Carmelo', '', '1982-11-25', '', 3, 2, ''),
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
(104, 17, 'Marchetta', 'Maurizio', 'Mauri', '0000-00-00', '', 1, 4, '00187.jpg'),
(109, 19, 'Hofacker', 'Sven', '', '0000-00-00', '', 1, 2, '00115.jpg'),
(110, 37, 'Özdemir', 'Recep', '', '0000-00-00', '', 1, 2, '00123.jpg'),
(111, 7, 'Schmid', 'Melanie', '', '0000-00-00', '', 15, 4, '00135.jpg'),
(112, 4, 'Batista', 'Vedran', 'Vedi', '0000-00-00', '', 1, 2, '00116.jpg'),
(113, 69, 'Parrillo', 'Dario', '', '0000-00-00', '', 1, 2, '00117.jpg'),
(118, 13, 'Tomeo', 'Ferdinando', '', '0000-00-00', '', 10, 3, '00174.jpg'),
(119, 19, 'Schreiber', 'Pascal', '', '0000-00-00', '', 10, 3, '00176.jpg'),
(121, 12, 'Höfler', 'Alain', '', '1983-02-12', '', 3, 1, ''),
(122, 2, 'Accanito', 'Luciano', '', '1981-06-07', '', 3, 2, ''),
(148, 19, 'Vukadin', 'Kristian', '', '1984-09-22', '', 3, 2, ''),
(124, 4, 'Isone', 'Damiano', '', '1989-09-27', '', 3, 2, '00188.jpg'),
(125, 5, 'Jeanneret', 'Nicolas', '', '1992-09-15', '', 3, 2, ''),
(127, 7, 'Furler', 'Yves', '', '1993-02-05', '', 3, 3, ''),
(128, 8, 'Russo', 'Fabio', '', '1990-07-08', '', 3, 3, ''),
(129, 9, 'Schilt', 'Ramon', '', '1997-08-28', '', 3, 3, ''),
(130, 10, 'Spinella', 'Giuseppe', '', '1985-06-07', '', 3, 4, ''),
(131, 13, 'Russo', 'Gianluca', '', '1995-05-29', '', 3, 3, ''),
(132, 14, 'Di Benedetto', 'Samuele', '', '1992-12-22', '', 3, 3, ''),
(133, 15, 'Schiliro', 'Vincenzo', '', '1990-11-24', '', 3, 2, ''),
(134, 18, 'Aegerter', 'Christian', '', '1991-12-17', '', 3, 3, ''),
(146, 1, 'Cuzzocrea', 'Domenico', '', '1998-05-08', '', 3, 1, ''),
(137, 22, 'Spinella', 'Luigi', '', '1977-09-08', '', 3, 4, ''),
(138, 12, 'Lopez', 'Selina', '', '1995-07-29', '', 15, 3, ''),
(139, 30, 'Bonsignore', 'Giovanni', '', '0000-00-00', '', 1, 4, '00184.jpg'),
(140, 11, 'Roberti', 'Alessandro', 'Ale', '1982-09-26', '', 3, 3, ''),
(141, 88, 'Stoll', 'Philipp', '', '1988-04-27', '', 2, 3, ''),
(142, 12, 'Docci', 'Luca', '', '1991-09-26', '', 2, 2, ''),
(144, 88, 'Rügge', 'Marc', '', '0000-00-00', '', 1, 4, '00186.jpg'),
(145, 55, 'Nucerito', 'Luigi', 'Lui', '0000-00-00', '', 1, 1, '00185.jpg'),
(149, 21, 'Vukadin', 'Goran', '', '1987-01-28', '', 3, 3, ''),
(150, 6, 'Lobsiger', 'Michel', '', '1988-06-15', '', 3, 2, '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Daten für Tabelle `member_staff`
--

INSERT INTO `member_staff` (`id`, `firstName`, `lastName`, `bDay`, `function`, `toTeam`, `pictureURL`, `tel`) VALUES
(1, 'Alessandro', 'Roberti', '0000-00-00', 'Trainer', 1, '00100.jpg', ''),
(2, 'Pascal', 'Schreiber', '0000-00-00', 'Co-Trainer', 1, '00101.jpg', ''),
(3, 'Antonio', 'Mazza', '0000-00-00', 'Torwart-Trainer', 1, '00103.jpg', ''),
(4, 'Philip', 'Stoll', '0000-00-00', 'Trainer', 2, '', ''),
(5, 'Luca', 'Severo', '0000-00-00', 'Trainer', 3, '', ''),
(6, 'Luca', 'Mulas', '0000-00-00', 'Co-Trainer', 3, '', ''),
(7, 'Daniel', 'Barca', '0000-00-00', 'Trainer', 10, '00102.jpg', ''),
(8, 'Katia', 'Valente', '0000-00-00', 'Trainerin', 15, '', ''),
(9, 'Fabrizio', 'Piras', '0000-00-00', 'Trainer', 22, '00105.jpg', '+41 (0)76 328 03 35'),
(10, 'Santos', 'Luruena', '0000-00-00', 'Trainer', 22, '00107.jpg', '+41 (0)79 689 89 56'),
(11, 'José', 'De Sousa', '0000-00-00', 'Trainer', 22, '', '+41 (0)79 257 27 25'),
(12, 'Giuseppe', 'Roberti', '0000-00-00', 'Trainer', 20, '00108.jpg', '+41 (0)79 302 54 65'),
(13, 'Mark', 'Crusi', '0000-00-00', 'Trainer', 20, '00106.jpg', '+41 (079 203 53 19'),
(14, 'Gaetano', 'Ciraolo', '0000-00-00', 'Trainer', 20, '00104.jpg', '+41 (0)79 267 30 50'),
(15, 'Philippe', 'Feller', '0000-00-00', 'Co-Trainer', 2, '', ''),
(16, 'Michel', 'Lobsiger', '0000-00-00', 'Aufbau-Trainer', 1, '00109.jpg', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Daten für Tabelle `news`
--

INSERT INTO `news` (`id`, `title`, `article`, `pictureURL`, `autor`, `date`, `category`, `gameID`, `formation`, `playerArray`) VALUES
(1, 'Wir sind wieder online!', 'Es hat zwar ein wenig gedauert, aber nun endlich ist sie da: die neue Webseite des AC Rossoneri. Wir sind sehr stolz, nun endlich eine saubere und übersichtliche Webseite präsentieren zu dürfen und hoffen, dass sich alle Nutzer problemlos mit der neuen Navigation vertraut machen können.\r\nDas System, welches sich hinter dieser Webseite verbirgt, wurde von A bis Z für unser Verein realisiert und bietet dementsprechend ein einzigartiges Surferlebnis. Ebenfalls ermöglicht diese Webseite eine dynamische Interaktion mit mehreren registrierten Benutzern, vereinfacht bedeutet dies, dass wir mehrere Hilfskräfte beschäftigen werden um Matchberichte zu verfassen und Inhalte zu pflegen.\r\nDas System wurde von Salvatore Mulas entworfen und programmiert, für sämtliche Fragen oder Unklarheiten bitte Kontakt Aufnahmen unter marketing@acrossoneri.ch.', '00103.jpg', 1, '2013-08-28 19:33:58', 1, NULL, NULL, NULL),
(2, 'Familienturnier und Grillabend am 14. September', 'Der AC Rossoneri organisiert am 14. September 2013 um 14:00 Uhr ein Familienturnier in Lausen. Am Turnier sind sämtliche Mitglieder nach Anmeldung spielberechtigt. Darüber hinaus findet am selben Tag um 18:00 Uhr das Cupspiel unserer ersten Mannschaft gegen den FC Therwil (2. Liga) statt. Zum krönenden Abschluss gibt es natürlich gleich neben dem Spielfeld einen wunderbaren Grillplausch, unsere Bar ist selbstverständlich ebenfalls vor Ort und kümmert sich sehr gerne um unsere durstige Gäste. Wir freuen uns auf diesen Event!', '00102.jpg', 1, '2013-09-05 22:41:03', 1, NULL, NULL, NULL),
(3, 'Die erste Mannschaft auf dem ersten Platz', 'Die harte Arbeit des Trainer-Trio''s und der gesamten Mannschaft hat sich nun endlich ausbezahlt! Die erste Mannschaft erreicht nach dem grandiosen Sieg von 8:0 gegen den SV Muttenz den ersten Platz. Unsere erste Mannschaft hat bisher insgesamt 6 Spiele bestritten - davon 5 Spiele gewonnen und 1 Spiel unentschieden. Eine sagenhafte Leistung!<br />\r\nAuch das Torverhältnis sieht fantastisch aus: Nach den 6 Spielen hat die erste Mannschaft bisher nur ein einziges Gegentor kassiert und konnte satte 21 Treffer erzielen - somit hat der AC Rossoneri in der gesamten 4. Liga die beste Verteidigung überhaupt (natürlich gehört die ganze Mannschaft dazu).<br />\r\nWir wünschen der ersten Mannschaft weiterhin viel Erfolg. Weiter so!', '00104.jpg', 1, '2013-09-28 21:54:47', 1, NULL, NULL, NULL),
(9, 'Trotz unentschieden noch auf dem 1. Platz', 'Nach dem Unentschieden unserer ersten Mannschaft gegen den FC Diegten Eptingen ging die plötzliche Euphorie wieder den Bach runter. Sofort nach dem Erlangen des ersten Platzes erfasste uns die Panik, die Führung wieder abgeben zu müssen. Unsere Jungs werden in der Tabelle zur Zeit sehr dicht von Laufenburg, Gelterkinden und dem FC Stein verfolgt - einmal stolpern wäre bereits genug, um die Führung wieder zu verlieren. Das Stolpern liess nicht lange auf sich warten: Leider reichte es in Diegten trotz einer brillianten Leistung nur für ein Unentschieden.<br />\r\nDas Spiel zwischen Laufenburg und Gelterkinden endete allerdings zu unseren Gunsten ebenfalls mit einem Unentschieden. Diesbezüglich können wir weiterhin von der Tabellenspitze grüssen und bereiten uns auf ein spannendes Spiel nächsten Samstag gegen den FC Gelterkinden vor. Forza Rossoneri. ', '00105.jpg', 1, '2013-10-06 13:59:28', 1, NULL, NULL, NULL),
(10, 'Drei direkte Begegnungen und ein Derby', 'Die Vorrunde neigt sich dem Ende zu - und was für ein Ende! Die Leistung der ersten Mannschaft kann zur Zeit nicht einmal in Worte gefasst werden. Sagenhaft, grandios, souverän! Angesichts der super Leistungen der gesamten Mannschaft inklusive Trainerstab ist dieser erste Platz hochverdient.<br />\r\nSpannend werden die letzten vier Spiele der Vorrunde: Uns erwarten nämlich drei Direktbegegnungen mit dem zweit-, dritt- und viert-Platzierten. Darüber hinaus wird es auch noch zum hochspannenden Derby mit dem FC Lausen kommen. Die Vorrunde wird in einem fussballerischen Spektakel enden. Forza Rossoneri', '00106.jpg', 1, '2013-10-11 14:16:06', 1, NULL, NULL, NULL),
(12, 'Danke! Das Familienturnier war ein Erfolg!', 'Der AC Rossoneri möchte sich von Herzen bei allen Teilnehmerinnen und Teilnehmer unseres Familienturniers des 14. September 2013 bedanken. Die hohe Anzahl an Teilnehmer und Zuschauer für das Turnier und das anschliessende Cupspiel hat uns sehr gefreut. Es war uns eine Ehre, so viele Gäste für diese Anlässe begrüssen zu dürfen. Vielen Dank an unsere Fans und den Familien unserer Mitglieder.', '00101.jpg', 1, '2013-10-10 22:41:45', 3, NULL, NULL, NULL),
(13, 'Ein High-Five auf die Tabellenführung', 'Mit einem Sieg, der nie in Gefahr war, eroberte die AC Rossoneri die Tabellenspitze in der 2. Gruppe der vierten Liga. Der fünffache Torschütze Maurizio Marchetta schoss den SV Muttenz beinahe im Alleingang ab.<br />\rAuch ein früher Tiefschlag konnte die extrem gefestigt wirkende Truppe der AC Rossoneri nicht aus dem Tritt bringen. Nach nur zehn gespielten Minuten musste Danilo Cordeiro verletz ausgewechselt werden. Nach einem Zweikampf bekam Cordeiro einen Schlag ins Gesicht und musste mit einer Platzwunde im Mund ins Krankenhaus. Auf diesem Weg, gute Besserung Danilo!<br />\rAls Glück im Unglück kann man diesen Spielertausch betrachten. Nur knappe zehn Minuten brauchte  Maurizio Marchetta nach seiner Hereinnahme um das erste Mal zu scoren. In der Folge vergab die AC in Form von Stefan Zimmermann, Basti Werisch und Marchetta hochkarätige Chancen. Letzterer vollendete dennoch mit dem Pausenpfiff einen schönen Konter zum 2:0.<br />\rAus einer stabilen Defensive heraus spielte Rosso die erste Hälfte souverän runter. Wenn es etwas zu bemängeln gibt, ist dies das nonchalante Umgehen mit den zahlreichen Torchancen.<br />\rDiese vermeintliche Schwäche der ersten Hälfte wurde im zweiten Abschnitt zur Stärke. Beinahe jeder Schuss schien den Weg ins Tor zu finden. Kurz nach Wiederbeginn erhöhte der starke David Prince Tettey auf 3:0. Ab Spielminute 62 klingelte es in schöner Regelmässigkeit im Tor der Gäste. Der Reihe nach trafen Zimmermann, zweimal Marchetta und nochmals Tettey. In der 72. Minute gelang Marchetta gar sein fünfter Treffer (Spielball behalten??) zum 8:0, was sogleich der Endstand war.<br />\rMit diesem zu jeder Zeit ungefährdeten Sieg übernimmt die AC die Tabellenführung, auch dank der zeitgleichen Niederlage des grössten Konkurrenten Laufenburg-Kaisten gegen den FC Diegten-Eptingen. Ein weiteres Mal in der noch jungen Saison konnte sich das Roberti-Team auf eine solide Defensive verlassen. Genau ein einziges Gegentor musste Rosso in allen bisher gespielten Partien hinnehmen – absolute Ligaspitze.', '00107.jpg', 3, '2013-09-30 21:15:59', 2, 146487, 4231, 'a:18:{i:0;i:35;i:1;i:102;i:2;i:69;i:3;i:93;i:4;i:79;i:5;i:101;i:6;i:100;i:7;i:19;i:8;i:96;i:9;i:109;i:10;i:120;i:11;i:17;i:12;i:57;i:13;i:113;i:14;i:67;i:15;i:103;i:16;i:59;i:17;i:104;}'),
(14, 'Zurück zur Normalität?', 'Die vorgezogene Zweitrunden-Begegnung zwischen der AC Rossoneri und dem FC Eiken wurde in Extremis entschieden \rMit dem FC Eiken kam ein Sieger der ersten Spielrunde nach Lausen um sich mit der AC Rossoneri zu messen. Und der Gast war, wie zu erwarten, ein unangenehmer Gegner. Spielerisch kein Schlechter und auch harter Gegner in den Zweikämpfen. Nach einem forschen Beginn beider Teams, gelang Eiken der Führungstreffer. Nicht zwingend verdient. Die AC hatte och die eine oder andere Möglichkeit fahrlässig vergeben. Und in dieser Zeit war auch das viel zitierte Momentum nicht auf der Seite der Gastgeber. Chancen ausgelassen, Gegentreffer und ein weiterer verletzter Spieler – Captain Eggli ging frühzeitig duschen.<br />\rIm zweiten Spielabschnitt gelang rasch der Ausgleich: Ein typische Weibel-Tor. Im allgemeinen Durcheinander spedierte Weibel den Ball über die Linie. Doch nur wenig später gelang dem FCE die neuerliche Führung. Fortan spielte nur noch Rosso. Nach einem schönen Spielzug war es der interimistische Captain Shala der Sandinho mustergültig bediente und dieser nur noch einzunicken brauchte. Viertes Tor im zweiten Spiel. Der Knoten scheint gelöst. Die AC wollte jetzt mehr. Eiken wirkte platt und handlungsunfähig. Das i-Tüpfelchen gelang dem Pflichtspiel-Debütanten Stefan Kaiser. Der Eingewechselte erzielte beinahe mit dem Schlusspfiff den erlösenden Siegestreffer. <br />\rTrotz dem Punktemaximum nach zwei Spielen ist Rosso „nur“ auf Rang vier wiederzufinden. Die guten alten Strafpunkte. Ein, aller Voraussicht nach, zu unseren Ungunsten ewiger Wegbegleiter…<br />\rEin grosser Dank geht an die erste Mannschaft, die uns einmal mehr aushalf und den wiederum zahlreich erschienenen Fans. Danke!!<br /> \rP.S.: Die Ferienzeit neigt sich dem Ende zu, einige Verletzte und Militärisch-Aktive kehren Schritt für Schritt wieder zurück. Dennoch war das „Zwei“ einmal mehr auf die Hilfe der Ersten Mannschaft angewiesen um dieses Spiel zu bestreiten. Doch langsam sollte es wieder vermöglichbar sein, einen geregelten Trainingsablauf mit genügend Spielern zu gewährleisten und eine „eigene“ Mannschaft für Meisterschaftsspiele aufzubieten… Merciiiiiii<br />\r', '00113.jpg', 3, '2013-08-21 21:00:00', 2, 145849, NULL, ''),
(15, 'Aufgeben verboten!', '„Derby d`Italia“ in Liestal. Emotionen. Leidenschaft. Spannung. Dramatik. Ein Unentschieden eines Sieges gleich.\rVirtus, der vermeintliche Favorit der Gruppe, empfing die Associazione Calcio Rossoneri in der dritten Runde. Ein weiteres Mal war die AC zu mehreren unerwünschten Positionswechseln gezwungen. Unter solchen Umständen ist ein Einspielen schlicht nicht möglich.<br />\rUnd es kam, wie es kommen musste: Nach zirka sieben Minuten und mehreren Fehlern im Spielaufbau, gelang den Hausherrn der Führungstreffer. Die AC, scheinbar unbeeindruckt vom frühen Rückstand,  liess sich nicht unterkriegen. Nur ein paar Zeigerumdrehungen später wurde Zollinho lanciert. Dieser zog alleine aufs Tor zu, umkurvte den Keeper und wurde von diesem (ziemlich krass) regelwidrig gestoppt. Rot. Überzahl für Rosso. <br />\rVirtus legte seinen Fokus nun auf die Defensive. Nur vereinzelt setzten sie Nadelstiche in der Offensive. Doch wie schon so oft gesehen im brutalen Fussball-Buisness sass einer dieser Stiche. 0:2.<br />\rDer derzeit Formstarke Zollinho verkürzte jedoch nur kurz später. Schön über die linke Seite lanciert flankte Weibel auf Zolli, der zum 2:1 vollendete. Aber an diesem Tag war das so eine Geschichte mit den Kontern. Fehler im Spielaufbau, Pass in die Schnittstelle, 1:3. Ein ereignisreicher erster Spielabschnitt. <br />\rWer nun glaubte, dass die zweite Hälfte abflachen würde, sah sich getäuscht. Innert 15 Minuten fielen nicht weniger als 5(!!!) Treffer. Aber der Reihe nach: Konter – Gegentor, 1:4. Virtus schien der Favoritenrolle trotz Unterzahl gerecht zu werden. Rosso gab nicht auf und versuchte weiter mitzuspielen. Freistoss aus ungefähr 40 Metern von Martin Thommen. Der Ball segelt über Freund und Feind hinweg ins Tor. Oder war eventuell doch noch jemand am Ball?? Etwa wieder dieser Zolli?? Es lässt sich nicht genau aufklären. Höchste Zeit für den Videobeweis in der  5. Liga!!! Freude, aufbäumen, die Suche nach dem erneuten Anschluss und Konter, Tor! Für Virtus. Nur gefühlte drei Sekunden nach dem 4:2 (durch Martin/Zolli) erhöhte Virtus auf 2:5. <br />\rNun dauert es doch ein wenig länger bis die Reaktion von Rosso folgte. Aber sie kam heftig. Innert drei Minuten zweimal Freistoss Martin, zweimal Kopfball, zweimal Tor. Und gleich eine Debüt-Dublette. Sowohl Yves Rieder als auch Ale Roberti scorten jeweils zum ersten Mal für Rosso II. 5:4.<br />\rNoch waren gut 30 Minuten zu spielen und die AC drückte und drängte. Das erlösende fünfte Tor wollte partout nicht fallen. Es brauchte zum Ende des Spiels – genau in der 92. Minute - schon einen Geniestreich von Ale R. Einen Abpraller versenkte er gekonnt (aber auch glücklich) direkt im langen Eck. 5:5. Ausgleich. Schlusspfiff. Das rot-schwarze Team feierte mit dem Anhang. Auch an diesem Abend kamen unzählige Supporter zu diesem spät abendlichen Derby (sind Derbys nicht schlicht geil???).<br />\rEs passte bei Weitem nicht alles im Spiel der AC. Doch erneut, wie bereits in den beiden Spielen zuvor, wusste die Truppe von Romano Branca mit Kampfgeist zu gefallen. Zum dritten Mal ein Spiel einen Rückstand aufgeholt. Aufgeben verboten, so die Devise. ', '00112.jpg', 3, '2013-08-29 21:00:00', 2, 145851, 4231, 'a:11:{i:0;i:41;i:1;i:44;i:2;i:89;i:3;i:57;i:4;i:117;i:5;i:92;i:6;i:141;i:7;i:140;i:8;i:116;i:9;i:83;i:10;i:97;}'),
(16, 'Perfekt war nur das Wetter!', 'Nach einer längeren Spielpause nahm die AC den Spielbetrieb wieder auf - gegen die neu formierte Retortentruppe Pratteln United.<br />\r\rMit einer nur ganz leicht veränderten Mannschaft und nur ganz wenigen Spielern der ersten Mannschaft starteten die Rot-Schwarzen perfekt in die Partie (Achtung Ironie/Sarkasmus). Langer Ball, Zielspieler Weibel verlängert mit dem Kopf in den Lauf von Sandinho und Tor. Das sechste Tor im vierten Spiel. Bei perfekten äusseren Bedingungen (zumindest für die Akteure auf dem Feld) kamen die Gäste dann aber besser ins Spiel. Wie es bereits Freddy Krüger in „Nightmare on Elm Street“ tat, verwandelte Pratteln den süssen (Traum-)Start der AC in einen bitteren, rot-schwarzen Albtraum. Eins, Zwei, Freddy kommt vorbei – 1:2. Drei, Vier, er ist gleich hier – 1:4. Fünf, Sechs, es holt dich gleich die Hex – 1:6. <br />\rDa half auch der Treffer von Ale Roberti zum 2:6 nichts mehr. Reine Resultatkosmetik. Was bleibt nach diesem Spiel hängen? Mit nunmehr 16 Gegentreffern stellt Rosso die drittschlechteste Defensive. Mit 15 erzielten Toren jedoch den viertbesten Angriff – also nichts Neues. Immerhin kassierte keiner der Rosso-Akteure den gelben Karton. <br />\rWie weiter? Aufstehen, zusammenraufen und weiterspielen. Niederlagen passieren und gehören zum Fussball. Wichtig ist, was man daraus lernt und wie es weiter geht. Mit dem FC Bubendorf wartet am Sonntag ein unangenehmer Gegner auf die Romano-Elf, mit welchem wir noch ein Hühnchen zu rupfen haben. Also, steh auf wenn du am Boden bist.', '00111.jpg', 3, '2013-09-18 21:12:25', 2, 145860, 442, 'a:13:{i:0;i:41;i:1;i:117;i:2;i:67;i:3;i:57;i:4;i:70;i:5;i:83;i:6;i:141;i:7;i:116;i:8;i:89;i:9;i:92;i:10;i:97;i:11;i:59;i:12;i:110;}'),
(17, 'Schlimmer geht es nimmer - oder eben doch…', 'Nach der blamablen Vorstellung gegen den FC Pratteln United war gegen Bubendorf Wiedergutmachung angesagt. Doch weit gefehlt.<br / >\rIn einer über weite Strecken hart geführten Partie, welche Madame Schiri NIE im Griff hatte, kam es zu unendlich vielen, unschönen Situationen. Etliche Schwalben, niedere Wortgefechte und überhartes Einsteigen überstrahlten die ansonsten „faire“ Partie. <br / >\rZwar führte B`dorf die feinere Klinge, Rosso aber hatte die besseren Chancen. Sandinho knallte den Ball an den Pfosten, Weibel tauchte gefühlte 1000 Mal alleine vor dem Tor auf. Aber alle wissen es: hätte, wäre, wenn und Aber, Fussball ist kein Spiel der Konjunktive… Nach 45 Minuten stand es 0:2 aus Sicht des FCB. Unnötig, aber Realität. Was hingegen zu Beginn der zweiten Hälfte passierte, erinnerte einmal mehr stark an einen Albtraum. Freddy lässt grüssen… \rBoom, boom, boom, boom. Bubendorf erhöhte und erhöhte. Die Treffer von Sandinho und Weibel waren nur Resi-Kosmetik. 2:8 hiess das Gesamtscore. <br / >\rWollen wir nach dem Guten suchen, sind dies die ersten 30 Minuten, in welchen die Blau-Gelben gefühlte null Torchancen hatten. Auch die Schluss-Viertelstunde lässt ebenso aufhorchen. Als sich die AC vermehrt auf Fussball konzentrierte, kamen auf einmal auch wieder die Möglichkeiten. Die Gastgeber wurden teils regelrecht in die eigene Hälfte, gar den eigenen 16ner gedrängt.  ', '00110.jpg', 3, '2013-09-22 21:30:00', 2, 145864, 442, 'a:11:{i:0;i:17;i:1;i:86;i:2;i:141;i:3;i:112;i:4;i:117;i:5;i:41;i:6;i:116;i:7;i:83;i:8;i:70;i:9;i:97;i:10;i:92;}'),
(18, 'Pech, Pech und ein weiteres Mal Pech…', 'Nach zwei deftigen Klatschen setzte es gegen den NK Pajde eine extrem unglückliche Niederlage ab. Es war ein Spiel mit Schatten- und einigen Sonnenseiten. <br />\rRehabilitation war angesagt. Nach insgesamt 14 Gegentoren in zwei Spielen sollte gegen den NK Pajde eine Leistungssteigerung her. Doch es hätte nicht schlimmer beginnen können: Nach nur wenigen gespielten Sekunden zappelte der Ball bereits zum ersten Mal im Gehäuse der Gastgeber. Ein eher harmloser Schuss rutschte Gubsi unglücklich zwischen den Beinen durch. <br />\rAber anders als noch in den Spielen zuvor liessen die AC-Spieler die Köpfe nicht hängen, sondern versuchten das Heft in die eigenen Hände zu nehmen. Aus einer (ausnahmsweise) starken Defensive heraus, spielte Rosso gefälligen Fussball. Einzig die zwingenden Chancen blieben aus. Mit dem  knappen 0:1-Rückstand ging es in die Pause. <br />\rAuch im zweiten Abschnitt dominierte Rosso das Spiel. Mit der Hereinnahme des wiedergenesenen Büsi kehrte merklich die Ruhe im Spielaufbau zurück. Die Gäste kamen kaum zu einer Tormöglichkeit. Jedoch trat erneut die Nonchalance vor dem Gäste-Gehäuse auf. Doch neben dem Auslassen der Chancen darf man die positiven Aspekte nicht vergessen: Kämpferisch top, Moral wieder gefunden und spielerisch wieder auf einem guten Niveau. <br />\rAls, wie so oft, Sandinho das Spielgerät irgendwie im Gehäuse zum Ausgleich unterbrachte, glaubten alle an einen Sieg. Eine weitere unglückliche Aktion von Gubsi später befand sich Rosso erneut im Hintertreffen. Nun lagen die Nerven hüben wie drüben blank. Es wurde pausenlos reklamiert, lamentiert und gehadert. Der masslos überforderte Schiedsrichter verteilte mehr Karten als an Weihnachten – was zu einem berechtigten Platzverweis für die Gäste führte. Nummerisch in Überzahl stürmte und drängte die AC nun vehement auf den Ausgleich. Dieser gelang dem Super-Sub Nure Shala in der zweiten Minute der Nachspielzeit. Die Freude war jedoch nur von kurzer Dauer… Eine schier endlose Fehlerkette fand seinen Abschluss mit dem erneuten Gegentor zum 2:3. Nur gefühlte zehn Sekunden nach dem Ausgleich. Bitter, einfach nur bitter. <br />\rIm Vergleich zu den letzten Spielen war eine deutliche Leistungssteigerung erkennbar. Wenn auch in Extremis  brutal verloren, lässt sich auf dieser Partie aufbauen. Vielleicht gelingt der ersehnte Befreiungsschlag schon im nächsten Spiel. Im Derby gegen den FC Lausen.\r', '00109.jpg', 3, '2013-09-29 21:30:00', 2, 145871, 442, 'a:11:{i:0;i:35;i:1;i:117;i:2;i:141;i:3;i:113;i:4;i:70;i:5;i:98;i:6;i:116;i:7;i:140;i:8;i:92;i:9;i:26;i:10;i:97;}'),
(19, 'Nach dem Spitzenspiel ist vor dem Derby', 'Eine starke zweite Hälfte reichte Rosso um im Spitzenspiel gegen den FC Gelterkinden einen souveränen Sieg einzufahren. Die beiden Joker Maurizio Marchetta und Giovanni Bonsignore erzielten die Treffer.<br />\nEine alte Weisheit besagt: Wenn es läuft, dann läuft es. Erneut war es Super-Sub Marchetta, der die AC auf die Siegesstrasse brachte. Dieser Junge hat zurzeit einen Lauf und trifft beinahe nach Belieben. Doch für einen Sieg benötigt es mehr als nur Solisten. Und das Team funktioniert von A bis Z. Die Defensive ist seit Beginn der Saison die absolute Stärke von Rosso: Lediglich ein Gegentor musste die neuformierte Defensive hinnehmen. Auch die Offensive harmoniert meist gut zusammen.  Und von der Breite des Kaders träumen viele Konkurrenten nur. Es scheint keine unumstössliche „Erste-Elf“ zu geben, von der Bank kann das Trainerteam immer wieder die benötigten Impulse setzten und falls gewünscht rotieren. <br />\nIn der ersten Hälfte war nicht alles Gold, was glänzt. Der FCG hatte, trotz spielerischer Überlegenheit, nicht eine ernsthafte Torchance. Keeper Gubser musste sich lediglich bei Abstössen sportlich betätigen. Aber auch die AC kam in der Offensive kaum je zur Entfaltung. Als der - nicht immer auf der Höhe wirkende - Spielleiter zur zweiten Halbzeit blies, spielten die Gastgeber befreiter und inspirierter auf. Dank starkem Gegenpressing wurden Gältis Angriffsversuche im Keim erstickt und mit teils ansehnlichen Vorstössen gezielte Nadelstiche gesetzt. Aus diesen Nadelstichen resultierte auch das zu diesem Zeitpunkt verdiente Führungstor durch Marchetta. Als kurz vor dem Ende – genau in einer Druckphase der Gäste – die Neuerwerbung Bonsignore das 2:0 markierte, war der Deckel drauf. <br />\nDank diesem Sieg konnte Robertis Team einen direkten Konkurrenten um den Aufstieg entscheidend distanzieren. Doch das Restprogramm hat es in sich: Zuerst das Derby „auswärts“ beim FC Lausen,  gefolgt vom Spiel gegen den viertplatzierten FC Stein und zum Abschluss noch die Partie gegen Laufenburg-Kaisten – notabene dem Zweiten der Gruppe. Doch die Mannschaft scheint gefestigt und für die kommenden schweren Aufgaben gerüstet.', '00108.jpg', 3, '2013-10-16 19:30:00', 2, 146498, 4231, 'a:18:{i:0;i:35;i:1;i:102;i:2;i:33;i:3;i:69;i:4;i:79;i:5;i:99;i:6;i:103;i:7;i:96;i:8;i:93;i:9;i:101;i:10;i:19;i:11;i:57;i:12;i:113;i:13;i:100;i:14;i:139;i:15;i:109;i:16;i:120;i:17;i:104;}'),
(20, 'Let it roll!', 'Mit dem 3:1-Sieg gegen Wallbach startet die AC Rossoneri eine kleine Sieges-Serie.  Kann diese auch am kommenden Weekend gegen den Lieblings-Erzrivalen Liestal anhalten?<br />\nEiner nach dem Anderen kehrt zurück. Das Team nimmt immer mehr die gewohnte, erfolgreiche Form an. Und mit der Rückkehr einiger etablierter Spieler kehren auch die positiven Resultate zurück. Mit dem Derby-Sieg im „Auswärtsspiel“ gegen den FC Lausen ist ein erster Befreiungsschlag gelungen, mit dem Sieg gegen die Freaktaler am vergangenen Samstag gar eine Mini-Serie gestartet worden. <br />\nIn einer ereignisarmen ersten Hälfte sorgte Stefan Kaiser mit dem 1:0 für erste Jubelstürme. Mit dieser knappen Führung ging die Romano-Elf in die Pause. Es wurden einige taktische Änderungen vorgenommen und weiter ging es mit Halbzeit zwei. In Durchgang zwei führte Rosso dann auch eine weitaus feinere Klinge als in den ersten 45 Minuten.<br />\nAls Sandinho alleine aufs Tor marschierte, scheiterte er zunächst noch am Gäste-Keeper. Es gelang ihm jedoch die sofortige Rückeroberung des Balles. Mit viel Übersicht legte er die Pille im 16er quer auf den heranstürmenden Michi Tanner, der mit seinem Premieren-Tor in dieser Saison das Score auf 2:0 erhöhen konnte. Nur kurze Zeit später erhöhte Sandinho auf 3:0. Jetzt waren die Fans waren nicht mehr zu halten. Sie sangen und tanzten (siehe Videos) das restliche Spiel über.<br /> \nAuch der von Langnaz unglücklich verursachte Elfmeter (diese Mal ein Handspiel, also nicht ganz typisch Langnaz-like mit beiden Beinen voraus;-) ) für die Gäste, vermochte der guten Stimmung keinen Abbruch zu tun. Beim fälligen Strafstoss hatte der interimistische Goalie Nure Shala keine Chance. Das Tor sollte ein kleiner Schönheitsfehler bleiben. In der Folge passierte nichts mehr und der starke Schiri beendete dieses Spiel. <br />\nEs ist schön zu sehen, wie vor dem wohl wichtigsten Spiel der Hinrunde der AC-Zug langsam aber sicher immer mehr ins Rollen kommt. Nur ein Gegentor in den letzten Zwei Pflichtspielen. Liestal kann also kommen. In diesem Sinne: Let it roll.', '00114.jpg', 3, '2013-10-13 21:30:00', 2, 145882, 4231, 'a:11:{i:0;i:83;i:1;i:117;i:2;i:142;i:3;i:26;i:4;i:70;i:5;i:98;i:6;i:141;i:7;i:116;i:8;i:30;i:9;i:41;i:10;i:98;}'),
(21, 'Der Siegesmarsch geht weiter - Sieg im Derby!', 'Nach der erst kürzlich eingetroffenen Polarkälte und jeweiligem Regenschauer hat uns Mutter-Natur für das Derby plötzlich mit optimalem Fussballwetter beschenkt. Dafür hat es allerdings Vater-Fussballfeld mit den katastrophalen Platzbedingungen nicht wirklich gut mit uns gemeint. Zur Zeit müssen unsere Jungs auf einem hügeligen Acker auftreten und dabei mit vielen Fehlpässen und Probleme bei der Ballkontrolle rechnen.<br /><br />\r\n \r\nDoch der Fussballplatz und dessen Konditionen sollten uns heute nicht interessieren, das Ziel war sonnenklar: das Derby auf jeden Fall gewinnen und die drei Punkte einsacken um weiterhin von der Tabellenspitze grüssen zu dürfen.<br /><br />\r\n \r\nDer Schiri betritt das Feld, gefolgt von den Teams in zwei Reihen, beide angeführt vom jeweiligen Captain. Die Zuschauer werden von den beiden Kontrahenten begrüsst, lautes Klatschen und Jubeln unserer zahlreichen Fans, Handschlag der Kapitäne, Münzwurf und Anpfiff - das Derby geht los!<br /><br />\r\n \r\nEs vergehen nicht einmal 3 Minuten und Stefan Zimmermann erzielt den ersten Treffer für den AC Rossoneri, ein unglaublicher Start in eine sehr heikle Partie. Der Führungstreffer sorgt sofort für Jubel und Enthusiasmus, aber er wirkt gleichzeitig auch als Weckruf für unseren Gegner.<br /><br />\r\n\r\nDer FC Lausen zeigt trotz Rückstand einen enormen Siegeswillen. Immer wieder muss unsere Verteidigung harte Arbeit leisten um gefährliche Situationen zu klären. Einige Minuten werden wir unter Druck gesetzt und mangeln etwas am Spielaufbau. Viele Bälle gehen verloren und oft fehlt uns etwas Fantasie, so dass wir dem Gegner viele lange Bälle schenken und oftmals etwas zu viel unnötige Sprints von unserer Sturmspitze verlangen.<br /><br />\r\n\r\nWir wachen in der zweiten Hälfte der ersten Halbzeit wieder auf und machen unser Spiel. Der AC Rossoneri steht nun etwas kompakter und bezaubert mit schönen Spielkombinationen im Mittelfeld. Besonders kommt hier unser Aussenläufer David Tettey zum Vorschein, welcher wie besessen das ganze Spielfeld rauf- und runter läuft und wunderschöne Aktionen in die Wege leitet.<br /><br />\r\n\r\nAus dem Nichts erobert plötzlich unsere Nummer 31 Sebastian Werisch im Mittelfeld den Ball und schlängelt sich elegant durch die gesamte Verteidigung des FC Lausen. Beim Eintreffen im Strafraum wird er anschliessend vom Innenverteidiger mit unfairen Mitteln aufgehalten – der Schiri erteilt sofort den glasklaren Elfmeter.<br /><br />\r\n\r\n0:2 – Penaltyschütze Werisch trifft wie immer eiskalt von den 11 Metern.<br /><br />\r\n\r\nTrotz doppelter Führung wird es kurz vor der Pause nochmals extrem gefährlich. Der FC Lausen dringt in den Strafraum ein und der Stürmer kann den Ball in Richtung Tor befördern, doch Lukas Rickenbacher steht wie immer bereit und kann kurz vor der Linie noch klären.<br /><br />\r\n\r\nNach einer kurzen Pause und etwas Tee geht es weiter in die zweite Hälfte. Trainer Roberti verpasst seinen Jungs einen ordentlichen Motivationsschub und schickt seine Krieger zurück auf das Schlachtfeld – die Reaktion lässt sich von der ersten Minute sehen. Wir übernehmen die Kontrolle und lassen den Ball laufen.<br /><br />\r\n\r\nKurz vor Spielende verpasst Kerim Özdemir unseren Gegner den KO Schlag. Nach einem genialen Assist von unserem Torhüter befördert Kerim den Ball mit einem sagenhaften Schuss ins Netz – das dritte Tor ist gefallen. Der AC Rossoneri bezwingt den FC Lausen und ergattert weitere 3 Punkte.<br /><br />', '00115.jpg', 1, '2013-10-21 13:50:38', 2, 146506, 4231, 'a:18:{i:0;i:35;i:1;i:79;i:2;i:57;i:3;i:69;i:4;i:109;i:5;i:99;i:6;i:103;i:7;i:139;i:8;i:93;i:9;i:101;i:10;i:96;i:11;i:17;i:12;i:100;i:13;i:33;i:14;i:67;i:15;i:59;i:16;i:120;i:17;i:112;}'),
(23, 'Der AC Rossoneri sucht neue Schiedsrichter', 'Frauen und Männer mit Pfiff - wir brauchen euch!<br /><br />\r\nFussball ohne Schiedsrichter? Undenkbar! Der Spielleiter trägt eine grosse Verantwortung: er führt Regie, er diktiert die Disziplin, er trifft die Entscheidungen und zieht Konsequenzen.<br /><br />\r\nDer AC Rossoneri ist stets auf der Suche nach neuen Schiedsrichtern, welche für unseren Verein in die Rolle des Unparteiischen schlüpfen möchten. Gesucht sind motivierte Frauen und Männer, welche auf der Suche nach einer neuen Herausforderung sind – aber natürlich auch Leute mit Erfahrung.<br /><br />\r\nSelbstverständlich ist unser Verein dazu bereit, Interessierte individuell zu beraten und über die Details aufzuklären.<br /><br />\r\nHaben wir dein Interesse geweckt? Bitte kontaktiere unseren Sportchef Luca Mulas entweder per e-Mail (<a href="mailto:luca.mulas@acrossoneri.ch">luca.mulas@acrossoneri.ch</a>) oder direkt per Telefon unter der Handynummer +41 79 761 05 94. Wir freuen uns auf dich!\r\n', '00116.jpg', 1, '2014-02-13 20:06:35', 3, NULL, NULL, NULL),
(24, 'Das AC Rossoneri Sommerturnier kehrt zurück!', 'Diesen Sommer 2014 kehrt das berühmte AC Rossoneri 11er Fussballturnier für Aktive und Senioren (zwischen 3. und 5. Liga) zurück. Das Turnier wird wie üblich auf der Sportanlage Bifang/Stutz in Lausen ausgetragen.<br/><br/>\r\nWir freuen uns jetzt schon auf diesen grandiosen Event und hoffen auf eine zahlreiche Teilnahme. Alle Informationen zum Sommerturnier findet ihr unter <a href="../../aktuelles/sommerturnier">diesem Link</a> (auch erreichbar über die Seitennavigation).<br/><br/>\r\nWir freuen uns auf das Turnier!', '00117.jpg', 1, '2014-03-31 16:56:25', 3, NULL, NULL, NULL),
(25, 'Ohne Glanz zur Leistung', 'Endlich – für den AC Rossoneri entpuppte sich die Verzögerung zum Rückrunden-Start als eine enorme Qual. Nach einem fantastischem Trainingslager und einer harten Vorbereitung wünschte sich das Team lediglich eins: Spielen und Punkte tanken! Nach der enttäuschenden Absage des Spiels gegen den SC Münchenstein wegen schlechter Witterung (verschoben auf den 10. April 2014 um 20:30 Uhr) durfte es nun endlich losgehen – die Rückrunde beginnt und unser erster Gegner heisst FC Arisdorf.<br/><br/>\n\nOb es wohl daran lag, dass das erste Spiel der Rückrunde verschoben und somit die kontinuierliche Hochleistung der letzten 2 Monate beeinflusst wurde ist nicht bekannt. Fakt ist: Es war nicht unser bestes Spiel, aber wir waren dennoch effizient und konnten die 3 Punkte mit nach Hause nehmen.<br/><br/>\n\nDer AC Rossoneri tritt wie folgt auf: Im Gehäuse steht Gubser, vor ihm die Viererkette Giuseppe, Vedran, Lukas und Dave. Zimmermann und Werisch stehen gleich davor und die äusseren Mittelfeldspieler Ale Branca und Marc Rügge kümmern sich um die Aussenbahnen. Im Zentrum steht Davide Branca und an der Front Kerim als Spitze bereit. Auf der Bank sitzt genauso viel Qualität wie auf dem Spielfeld: Gaetano, Recep, Berat, Gatti, Giovanni, Sven und Mauri.<br/><br/>\n\nDie unspektakuläre Partie beginnt. Schon einige Minuten nach Anpfiff kommt der AC Rossoneri vors Tor, doch der Ball will nicht ins Netz und es bleibt beim 0:0. Während der ersten Hälfte der ersten Halbzeit nimmt Arisdorf das Spiel in die Hand, kann allerdings dem AC Rossoneri nie wirklich gefährlich werden.<br/><br/>\r\rWährend des gesamten Spiels leidet das Spektakel unter frustrierenden Fehlpässen – meist ausgelöst durch ein katastrophales Fussballfeld (-acker). Flache Bälle sind durch die vielen Unebenheiten im Boden nur schwer zu kontrollieren, also werden prinzipiell nur noch lange Bälle geschlagen – während einigen Minuten verbringt der Ball mehr Zeit in der Luft als auf dem Rasen.<br/><br/>\r\rGegen Ende der ersten Halbzeit übernimmt der AC Rossoneri schliesslich die Kontrolle und begeistert immer wieder mit schönen Spielzügen – doch leider bleiben wir ungefährlich und können bis ans Ende der ersten Halbzeit keine Torchance für uns verwerten. Es geht mit einem 0:0 in die Pause – warmer Tee und etwas „Motivation“ durch das Trainertrio Roberti, Schreiber und Mazza kann jetzt definitiv nicht schaden.<br/><br/>\r\rAuf in die zweite Halbzeit! Wie bereits erwähnt konnte ein wenig Motivation durch eine ordentliche Pausenansprache der Coaches nicht schaden – keine drei Minuten vergehen und Ale Branca versenkt einen präzisen Ball ins linke, untere Eck – 1:0 für den AC Rossoneri und Gruppenumarmung.<br/><br/>\r\rIn der 66. Minute muss der Torschütze allerdings vom Feld: Krämpfe. Sven betritt das Spielfeld und übernimmt die Position von Dave in der Aussenverteidigung, Dave wiederum übernimmt die Position von Branca. Und plötzlich klingelt es aus dem Nichts wieder: Marc Rügge ballert das Leder ins Netz und bringt den AC Rossoneri 2:0 in Führung.<br/><br/>\r\rVon nun an heisst es leiden, leiden, leiden. Denn erneut hören wir auf zu spielen und lassen uns unnötig durch den FC Arisdorf unter Druck setzen. Während eines Eckballs für den Gegner kann ein Arisdorfer mit dem Kopf den Ball ins lange Eck steuern. Die Zuschauer müssen zusehen wie der Ball fast in Zeitlupe im hohen Bogen auf unser Tor zirkelt – doch plötzlich taucht aus dem Nichts unser Gubsi auf und verhindert in letzter Sekunde das 2:1 – Spiderman hätte es nicht besser machen können.<br/><br/>\r\rSchliesslich endet das Spiel mit 2:0 für den AC Rossoneri – weitere drei Punkte und noch ein Spiel zu null gewonnen! Weiter so!\r', '00118.jpg', 1, '2014-04-01 01:47:23', 2, 146531, 4231, 'a:18:{i:0;i:35;i:1;i:99;i:2;i:69;i:3;i:112;i:4;i:101;i:5;i:8;i:6;i:93;i:7;i:9;i:8;i:96;i:9;i:144;i:10;i:120;i:11;i:17;i:12;i:110;i:13;i:103;i:14;i:33;i:15;i:139;i:16;i:109;i:17;i:104;}'),
(26, 'Herz, Kampfbereitschaft, Dominanz und drei Punkte', 'Zu Hause haben wir bisher jedes Spiel dieser Saison gewonnen – auch letzten Samstag wurde keine Ausnahme gemacht! Ein grandioser Auftritt unserer Jungs und vor allem eine starke Reaktion nach der etwas trockenen (aber doch erfolgreichen) Partie gegen den FC Arisdorf.<br /><br />\r\n\r\nDie Rossoneri treten im eigenen Heim wie folgt auf: In der Defensive steht Gubsi im Tor (heute als Kapitän), vor ihm die Viererkette Giusi, Ricki, Gatti und Dave. Im defensiven Mitteldfeld sorgt das Duo Zimmi-Berat für ordentlichen Spielaufbau und Sicherheit. Auf den beiden Flügel stehen Marc und Danilo um der Partie die nötige Geschwindigkeit und Tiefe zu verleihen. An der vordersten Front steht schliesslich Kerim als Sturmspitze, der sich von Davide (gleich hinter ihm) inspirieren lässt.<br /><br />\r\n\r\nDer Schiri gibt das Startsignal und es geht los. Trotz Regen haben sich in Lausen erneut zahlreiche Fans versammelt um die erste Mannschaft zu unterstützen – das Team ist fest entschlossen sich mit einer Paradenleistung zu bedanken. Der ACR nimmt sofort das Spiel in die Hand und versüsst das Ereignis mit vielen Zuckerpässen und spektakulären Aktionen. Mit dem richtigen Fuss steigen wir in die Partie. Zufrieden beobachten Trainer Roberti und seine zwei Assistenten das Spiel.<br /><br />\r\n\r\nDas Tor lässt nicht sehr lange auf sich warten. Davide Branca knallt in der Mitte der ersten Halbzeit das Leder aus 25 Metern mit einem präzisen Volley direkt unter die Latte – keine Chance für den gegnerischen Keeper! Die Torfreude ist allerdings kurz, denn der SV Sissach übt ab diesem Zeitpunkt etwas mehr Druck aus. Während den nächsten 15 Minuten müssen wir ein wenig einstecken und lassen den Gegner etwas aufrücken, wirklich gefährlich wird es allerdings nicht. Es geht schliesslich mit einem 1:0 in die Pause.<br /><br />\r\n\r\nNach der Pause setzt sich das Spiel ziemlich ausgeglichen fort, wobei unsere Jungs einen wesentlich kühleren Kopf als unsere Gegner bewahren können. Sissach versucht es immer wieder mit langen Bällen, aber Gatti verliert kein einziges Kopfballduell und lässt den Ball niemals in die Gefahrenzone eindringen.<br /><br />\r\n\r\nZeit für einige Wechsel: Mit der Einwechslung von Marchetta und Ale Branca wird das Spiel durch die frischen Energien etwas würziger. Kaum das Spielfeld betreten empfängt Marchetta einen Steilpass und schiebt ein – die Party wird allerdings vom Unparteiischen sofort abgebrochen: Abseits!<br /><br />\r\n\r\nIm weiteren Verlauf des Spiels findet ein wahres Abseits-Festival statt. Ob Marchetta, Rügge oder Branca – alle Offensivspieler erwischt es mindestens drei Mal. Trotzdem, das Team bezaubert das Publikum mit einer sagenhaften Leistung. Alle Spieler sind hochinspiriert und motiviert. Passkombinationen gelingen problemlos, der Ball wird abgeklatscht und gleich weitergespielt, das Dreieck wird gebildet und der Gegner immer wieder stehen gelassen – Trainer Roberti geniesst von der Aussenlinie die Früchte seiner harten Arbeit.<br /><br />\r\n\r\nEndlich – das 2:0! Marchetta haut das Spielgerät ins Netz und entscheidet somit die Partie für den AC Rossoneri. Nur in der letzten Minute konnte der SV Sissach etwas gefährlich werden, doch die Chance wurde nicht gepackt und das Spiel wird beendet. Mit Freude und Stolz gehen wir vom Platz und geniessen den Applaus unseres Publikums – verdient!', '00119.jpg', 1, '2014-04-10 14:48:20', 2, 146533, 4231, 'a:18:{i:0;i:35;i:1;i:99;i:2;i:69;i:3;i:33;i:4;i:101;i:5;i:144;i:6;i:103;i:7;i:9;i:8;i:96;i:9;i:19;i:10;i:120;i:11;i:17;i:12;i:112;i:13;i:57;i:14;i:79;i:15;i:8;i:16;i:109;i:17;i:104;}'),
(27, 'Back to the top!', '"Zurück an die Spitze!“ – Der AC Rossoneri grüsst nach dem sagenhaften Spiel gegen Münchenstein erneut von der Tabellenspitze der 4. Liga. Das Team hat gestern einmal mehr seine Stärke und Willenskraft unter Beweis gestellt und die Konkurrenz ohne Erbarmen weggefegt. Mit einem 4:0 Auswärtssieg macht das Roberti Team eine klare Ansage und setzt somit seinen Siegesrausch ungehindert fort.<br/><br/>\r\nEs ist ein wunderschöner Abend mit perfekten Wetterbedingungen für ein Fussballspiel. Am Himmel leuchten einige Sterne und das Flutlicht taucht die Arena des Sportplatz Au auf der Münchensteiner Heiligholzstrasse in helles Licht. Die beiden Teams betreten unter einer Applauswelle das Spielfeld und begrüssen ihre Zuschauer – einmal mehr hat sich so mancher Rossoneri-Supporter auf dem Platz der Gäste verirrt, wir sind dankbar für die Treue und Unterstützung unserer Fans!<br/><br/>\r\nDer Schiri gibt das Startsignal. Von Anfang an ist es klar, dass dies kein einfaches Spiel wird. Der Gegner scheint gut auf uns vorbereitet zu sein und übt ein wahnsinniges Pressing aus. Schnelle Ballabgabe, gute Kommunikation, viel Laufbereitschaft und präzise Seitenwechsel sind heute gefordert. Wir machen unsere Arbeit ziemlich gut und können den Gegner die gesamte erste Halbzeit vom Tor fern halten, leiden allerdings klar unter dem starken Pressing und können somit das Spiel nicht richtig kontrollieren.<br/><br/>\r\nDie erste Halbzeit endet mit einem 0:0. Bis hierhin ist das Spiel ziemlich ausgeglichen, aber aus unserer Seite liegt definitiv viel mehr drin. Die Trainer ziehen sich zusammen mit der Mannschaft in die Umkleidekabine zurück – Zeit für eine Pausenansprache. In der Zwischenzeit herrscht unter den Ersatzspieler viel Bewegung, insbesondere bei Marchetta und Zimmi.<br/><br/>\r\nFür die nächsten 45 Minuten treten Marchetta an der Stelle von Kerim und Zimmi für Davide auf. Die Anweisungen sind klar: Mehr Dominanz im Mittelfeld und etwas mehr Geschwindigkeit nach Vorne. Wie üblich zeigt die Pausenansprache ihre Früchte: Wir betreten das Feld und geben den Takt an, so bleibt es auch bis zum Schlusspfiff.<br/><br/>\r\nDas Zusammenspiel und die Kreativität unserer Jungs lässt keine Wünsche mehr offen. Erfolgreiche Dribblings, saubere Pässe, präzise Seitenwechsel, sinnvolle Entscheidungen und gute Abschlüsse – es ist ein Spektakel. Unmitelbar nach dem Beginn der zweiten Halbzeit eröffnet (einmal mehr) Ale Branca die Tänze. Nach einer schönen Aktion von Marchetta landet der Ball vor Brancas Füsse, der das Spielgerät sicher und präzise in die Ecke schleudert – 1:0 für den ACR.<br/><br/>\r\nLeider kann der Schütze seinem Jubel nicht freien Lauf lassen, denn er wird von starken Schmerzen gezwungen das Feld zu verlassen – Branca verlässt hinkend das Feld, begleitet von einem grossen Applaus seiner Teamkollegen und Zuschauer. Trainer Roberti schickt nun Danilo aufs Feld, der das Vertrauen seines Trainers einige Minuten später mit dem Treffer zum 2:0 belohnt. Danilo trifft mit einem satten Schuss ins linke Eck und verpasst dem Gegner somit eine weitere Klatsche.<br/><br/>\r\nMünchenstein versucht etwas aufzudrehen und sucht oft die Tiefe mit vielen hohen Bällen, doch Innenverteidiger Gatti und Ricki lassen niemanden vorbeikommen – die Defensive ist kaum zu durchbrechen. Die Rotschwarzen kommen immer wieder vors Tor und bilden eine Chance nach der anderen, der Gegner betreibt nun nur noch Schadensbegrenzung.<br/><br/>\r\nFreistoss für Rosso. Zimmi legt den Ball vor sich hin und beobachtet die Lage. Kleine Schritte nach Vorne, Augen auf die Mauer und den Torwart und Abschuss: das Spielgerät fliegt in einer schönen Kurve ins Netz – keine Chance für den gegnerischen Torhüter, das 3:0 ist serviert. Kurz darauf erzielt Zimmi einen weiteren Treffer, ein wunderschöner Lob fliegt über den Torhüter ins Netz – doch die Freude dauert nicht lange: Abseits, es bleibt bim 3:0.<br/><br/>\r\nKurz vor dem Ende setzt Marc noch das i-Tüpfchen auf die grandiose Leistung des Teams. Nach einem Angriff von Münchenstein entsteht ein schneller Konter und Marc kann das Leder ins Tor hauen – ein hochverdienter und erfreulicher Treffer um die individuelle Leistung des letzten Schützen zu belohnen.<br/><br/>\r\nSchlusspfiff! Jetzt wird gefeiert! Wir kehren somit zurück an die Spitze und setzen unseren Siegeszug fort – weiter so! Forza Rossoneri!', '00120.jpg', 1, '2014-04-11 15:42:02', 2, 146520, 4231, 'a:18:{i:0;i:35;i:1;i:99;i:2;i:69;i:3;i:33;i:4;i:101;i:5;i:144;i:6;i:103;i:7;i:9;i:8;i:93;i:9;i:8;i:10;i:120;i:11;i:17;i:12;i:112;i:13;i:57;i:14;i:96;i:15;i:19;i:16;i:110;i:17;i:104;}');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `userID` int(11) NOT NULL,
  `permVorstand` tinyint(1) NOT NULL,
  `permPlayer` tinyint(1) NOT NULL,
  `permTeam` tinyint(1) NOT NULL,
  `permNews` tinyint(1) NOT NULL,
  `permReport` tinyint(1) NOT NULL,
  `permManagement` tinyint(1) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ranking`
--

CREATE TABLE IF NOT EXISTS `ranking` (
  `rankingID` int(11) NOT NULL AUTO_INCREMENT,
  `teamName` varchar(255) DEFAULT NULL,
  `gamesPlayed` int(11) DEFAULT NULL,
  `gamesWon` int(11) DEFAULT NULL,
  `gamesDraw` int(11) DEFAULT NULL,
  `gamesLost` int(11) DEFAULT NULL,
  `fairplay` int(11) DEFAULT NULL,
  `goalsMade` int(11) DEFAULT NULL,
  `goalsAgainst` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `teamID` int(11) DEFAULT NULL,
  PRIMARY KEY (`rankingID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `referee`
--

CREATE TABLE IF NOT EXISTS `referee` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL DEFAULT '',
  `lastName` varchar(255) NOT NULL DEFAULT '',
  `pictureURL` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `referee`
--

INSERT INTO `referee` (`id`, `firstName`, `lastName`, `pictureURL`) VALUES
(1, 'Giuseppe', 'Minio', NULL),
(2, 'Ralph', 'Tschudin', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sponsors`
--

CREATE TABLE IF NOT EXISTS `sponsors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `fullDesc` longtext,
  `address` varchar(255) DEFAULT NULL,
  `zipCity` varchar(75) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `pictureURL` varchar(45) DEFAULT NULL,
  `webpage` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Daten für Tabelle `sponsors`
--

INSERT INTO `sponsors` (`id`, `name`, `fullDesc`, `address`, `zipCity`, `country`, `pictureURL`, `webpage`, `mail`) VALUES
(1, 'Lenkgeometrie Center & Pneuservice GmbH', NULL, 'Grüssenhölzliweg 9', '4133 Pratteln', 'Schweiz', '00100', 'www.lenkgeometrie-center.ch', NULL),
(2, 'Visam Sport', NULL, 'Poststrasse 9', '4410 Liestal', 'Schweiz', '00101', 'www.visam.ch', NULL),
(3, 'DM Haustechnik', NULL, 'Peterhansstrasse 10b', '4415 Lausen', 'Schweiz', '00102', 'www.dmhaustechnik.ch', NULL),
(4, 'Malergeschäft Gebr. Roberti GmbH', NULL, NULL, '4452 Itingen', 'Schweiz', '00103', NULL, NULL),
(5, 'Coiffure Chic', NULL, 'Hauptstrasse 93', '4450 Sissach', 'Schweiz', '00104', 'www.coiffure-chic.ch', NULL),
(6, 'Trafico Cafe Bistro', NULL, 'Bahnhofstrasse 8', '4460 Gelterkinden', 'Schweiz', '00105', 'www.trafico.ch', NULL),
(7, 'AxaNova', NULL, 'Ottenhofenstrasse 110 ', '8738 Uetliburg', 'Schweiz', '00106', 'www.axanova.ch', NULL),
(8, 'Mohler-Nager + Co. AG', NULL, 'Götzisbodenweg 2', '4133 Pratteln', 'Schweiz', '00107', 'www.mohlernager.ch', NULL);

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
  `parserObject` varchar(255) NOT NULL,
  `toSponsor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `teams`
--

INSERT INTO `teams` (`id`, `name`, `type`, `ligaDesc`, `pictureURL`, `parserObject`, `toSponsor`) VALUES
(1, 'Erste Mannschaft', 1, '4. Liga - Gruppe 2', '00100.jpg', 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl01_tbRangliste', 1),
(2, 'Zweite Mannschaft', 1, '5. Liga - Gruppe 1', '00101.jpg', 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl03_tbRangliste', 6),
(3, 'Dritte Mannschaft', 1, '5. Liga - Gruppe 2', '', 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl05_tbRangliste', 2),
(10, 'Senioren', 1, 'Senioren Promotion - Gruppe 1', '00102.jpg', 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl07_tbRangliste', 0),
(15, 'Frauen', 1, 'Frauen - 4. Liga', '', 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl09_tbRangliste', 1),
(20, 'Junioren G', 2, '', '', '', 8),
(22, 'Junioren F', 2, '', '', '', 8);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `teams_ranking`
--

CREATE TABLE IF NOT EXISTS `teams_ranking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(255) NOT NULL,
  `gamePlayed` int(255) NOT NULL,
  `gameWon` int(255) NOT NULL,
  `gameLost` int(255) NOT NULL,
  `gameDraw` int(255) NOT NULL,
  `fairplay` int(11) NOT NULL,
  `goalsMade` int(255) NOT NULL,
  `goalsAgainst` int(255) NOT NULL,
  `points` int(11) NOT NULL,
  `teamID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Daten für Tabelle `teams_ranking`
--

INSERT INTO `teams_ranking` (`id`, `team`, `gamePlayed`, `gameWon`, `gameLost`, `gameDraw`, `fairplay`, `goalsMade`, `goalsAgainst`, `points`, `teamID`) VALUES
(1, 'AC Rossoneri', 20, 17, 0, 3, 28, 57, 8, 54, 1),
(2, 'FC Laufenburg-Kaisten b', 20, 16, 1, 3, 41, 81, 22, 51, 1),
(3, 'FC Gelterkinden b', 20, 11, 5, 4, 26, 68, 30, 37, 1),
(4, 'SV Sissach a', 20, 10, 6, 4, 42, 60, 36, 34, 1),
(5, 'FC Stein b', 20, 10, 6, 4, 75, 48, 41, 34, 1),
(6, 'FC Arisdorf', 20, 10, 9, 1, 20, 45, 32, 31, 1),
(7, 'FC Diegten Eptingen', 21, 10, 10, 1, 52, 40, 40, 31, 1),
(8, 'FC Oberdorf', 20, 6, 11, 3, 54, 36, 60, 21, 1),
(9, 'SC M&uuml;nchenstein a', 20, 5, 12, 3, 48, 38, 73, 18, 1),
(10, 'FC Bubendorf', 21, 5, 14, 2, 35, 38, 65, 17, 1),
(11, 'SV Muttenz b', 20, 3, 13, 4, 52, 29, 75, 13, 1),
(12, 'FC Lausen 72', 20, 1, 17, 2, 54, 31, 89, 5, 1),
(13, 'FC Lausen 72', 20, 15, 3, 2, 17, 50, 22, 47, 2),
(14, 'NK Pajde', 20, 15, 3, 2, 28, 83, 34, 47, 2),
(15, 'FC Bubendorf', 20, 15, 4, 1, 16, 82, 38, 46, 2),
(16, 'Pratteln United', 20, 14, 5, 1, 47, 84, 48, 43, 2),
(17, 'FC Liestal', 20, 12, 6, 2, 19, 62, 45, 38, 2),
(18, 'AC Virtus Liestal b', 20, 11, 4, 5, 31, 98, 45, 38, 2),
(19, 'AC Rossoneri a', 20, 8, 11, 1, 33, 39, 55, 25, 2),
(20, 'FC Wallbach', 20, 7, 13, 0, 17, 33, 56, 21, 2),
(21, 'FC Gelterkinden', 20, 5, 13, 2, 38, 41, 84, 17, 2),
(22, 'FC Eiken', 20, 5, 14, 1, 21, 38, 71, 16, 2),
(23, 'FC Diegten Eptingen', 20, 4, 16, 0, 39, 31, 60, 12, 2),
(24, 'FC Zeiningen', 20, 0, 19, 1, 41, 26, 109, 1, 2),
(25, 'AC Virtus Liestal a', 20, 15, 1, 4, 36, 54, 21, 49, 3),
(26, 'FK Srbija Basel', 20, 14, 2, 4, 32, 67, 18, 46, 3),
(27, 'FC Xalko', 20, 14, 3, 3, 35, 75, 35, 45, 3),
(28, 'FC Pratteln', 20, 13, 5, 2, 44, 68, 28, 41, 3),
(29, 'FC Birsfelden', 20, 9, 7, 4, 21, 51, 49, 31, 3),
(30, 'FC Schwarz-Weiss', 20, 7, 7, 6, 30, 37, 32, 27, 3),
(31, 'SC Basel Nord a', 20, 7, 9, 4, 28, 51, 40, 25, 3),
(32, 'FC Telegraph BS', 20, 6, 10, 4, 44, 26, 39, 22, 3),
(33, 'FC Amicitia Riehen', 20, 6, 12, 2, 25, 44, 47, 20, 3),
(34, 'AC Rossoneri b', 19, 4, 14, 1, 23, 38, 75, 13, 3),
(35, 'FC Ferad a', 20, 3, 13, 4, 16, 44, 83, 13, 3),
(36, 'CD Espanol Basel a', 19, 1, 16, 2, 19, 20, 108, 5, 3),
(37, 'FC Dardania', 17, 12, 2, 1, 9, 76, 37, 37, 10),
(38, 'FC Rheinfelden', 16, 10, 3, 1, 14, 49, 23, 31, 10),
(39, 'FC Bubendorf', 17, 9, 5, 1, 12, 64, 52, 28, 10),
(40, 'FC Laufenburg-Kaisten', 16, 7, 6, 1, 27, 42, 40, 22, 10),
(41, 'FC T&uuml;rkg&uuml;c&uuml; Basel', 16, 6, 5, 3, 9, 53, 51, 21, 10),
(42, 'FC Birsfelden', 16, 5, 8, 1, 26, 38, 47, 16, 10),
(43, 'US Bottecchia BS', 16, 3, 8, 3, 15, 23, 42, 12, 10),
(44, 'FC Birlik', 16, 3, 8, 3, 19, 37, 54, 12, 10),
(45, 'AC Rossoneri', 16, 1, 11, 2, 40, 21, 57, 5, 10),
(46, 'US Olympia 1963', 0, 0, 0, 0, 0, 0, 0, 0, 10),
(57, 'FC Concordia Basel', 17, 12, 1, 1, 1, 69, 10, 37, 15),
(58, 'FC Telegraph BS', 16, 8, 4, 1, 0, 46, 14, 25, 15),
(59, 'FC Nordstern BS', 16, 8, 4, 1, 1, 53, 25, 25, 15),
(60, 'FC Reinach', 17, 8, 5, 1, 1, 59, 19, 25, 15),
(61, 'FC Laufenburg-Kaisten', 17, 2, 12, 0, 0, 12, 58, 6, 15),
(62, 'AC Rossoneri', 15, 0, 12, 0, 22, 1, 114, 0, 15),
(63, 'FC Allschwil', 0, 0, 0, 0, 0, 0, 0, 0, 15);

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
