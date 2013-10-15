-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 15. Okt 2013 um 23:18
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

INSERT INTO `match` (`gameID`, `teamID`, `isHome`, `gameType`, `pointsHome`, `pointsAway`, `day`, `date`, `time`, `opponent`, `location`, `complex`, `plz`, `field`, `dressing`) VALUES
(145838, 2, 1, 'Meisterschaft', 5, 3, 'Sa', '2013-08-17', '20:00:00', 'FC Gelterkinden', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145849, 2, 1, 'Meisterschaft', 3, 2, 'Mi', '2013-08-21', '20:00:00', 'FC Eiken', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145851, 2, 0, 'Meisterschaft', 5, 5, 'Do', '2013-08-29', '20:30:00', 'AC Virtus Liestal b', 'Stadion Gitterli, Liestal - 2 (Kunstrasen)', 'Stadion Gitterli', 'Liestal', '2 (Kunstrasen)', 'Stadion Gitterli, Liestal'),
(145860, 2, 1, 'Meisterschaft', 2, 6, 'Sa', '2013-09-18', '20:00:00', 'Pratteln United ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145864, 2, 0, 'Meisterschaft', 8, 2, 'So', '2013-09-22', '10:00:00', 'FC Bubendorf', 'Bruehl, Bubendorf - 1', 'Bruehl', 'Bubendorf', '1', 'Bruehl, Bubendorf'),
(145871, 2, 1, 'Meisterschaft', 2, 3, 'So', '2013-09-29', '11:00:00', 'NK Pajde', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145877, 2, 0, 'Meisterschaft', 0, 1, 'So', '2013-10-06', '12:30:00', 'FC Lausen 72', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145882, 2, 1, 'Meisterschaft', 0, 0, 'Sa', '2013-10-12', '20:00:00', 'FC Wallbach', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145890, 2, 0, 'Meisterschaft', 0, 0, 'Sa', '2013-10-19', '19:00:00', 'FC Liestal  ', 'Stadion Gitterli, Liestal - 2 (Kunstrasen)', 'Stadion Gitterli', 'Liestal', '2 (Kunstrasen)', 'Stadion Gitterli, Liestal'),
(145893, 2, 1, 'Meisterschaft', 0, 0, 'So', '2013-10-27', '11:00:00', 'FC Diegten Eptingen ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145903, 2, 0, 'Meisterschaft', 0, 0, 'So', '2013-11-03', '14:00:00', 'FC Zeiningen ', 'Unter Reben, Zeiningen - 1', 'Unter Reben', 'Zeiningen', '1', 'Unter Reben, Zeiningen'),
(145904, 2, 0, 'Meisterschaft', 0, 0, 'So', '2014-03-23', '00:00:00', 'FC Gelterkinden ', 'Wolfstiege, Gelterkinden - 1', 'Wolfstiege', 'Gelterkinden', '1', 'Wolfstiege, Gelterkinden'),
(145915, 2, 0, 'Meisterschaft', 0, 0, 'So', '2014-03-30', '00:00:00', 'FC Eiken', 'Sportanlage Netzi, Eiken,   - 1', 'Sportanlage Netzi, Eiken', ' ', '1', 'Kultureller Saal, Eiken                     '),
(145917, 2, 1, 'Meisterschaft', 0, 0, 'So', '2014-04-06', '00:00:00', 'AC Virtus Liestal b', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145926, 2, 0, 'Meisterschaft', 0, 0, 'So', '2014-04-13', '00:00:00', 'Pratteln United ', 'Hexmatt, Pratteln - 1', 'Hexmatt', 'Pratteln', '1', 'Hexmatt, Pratteln'),
(145930, 2, 1, 'Meisterschaft', 0, 0, 'So', '2014-04-27', '00:00:00', 'FC Bubendorf', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145937, 2, 0, 'Meisterschaft', 0, 0, 'So', '2014-05-04', '00:00:00', 'NK Pajde', 'Sportzentrum Steinli, Moehlin - B 02', 'Sportzentrum Steinli', 'Moehlin', 'B 02', 'Sportzentrum Steinli, Moehlin'),
(145943, 2, 1, 'Meisterschaft', 0, 0, 'So', '2014-05-11', '00:00:00', 'FC Lausen 72', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145948, 2, 0, 'Meisterschaft', 0, 0, 'So', '2014-05-18', '00:00:00', 'FC Wallbach', 'Sandgrube, Wallbach - 1', 'Sandgrube', 'Wallbach', '1', 'Sandgrube, Wallbach'),
(145956, 2, 1, 'Meisterschaft', 0, 0, 'So', '2014-05-25', '00:00:00', 'FC Liestal  ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(145959, 2, 0, 'Meisterschaft', 0, 0, 'So', '2014-06-01', '00:00:00', 'FC Diegten Eptingen ', 'Hofmatt, Diegten - 1', 'Hofmatt', 'Diegten', '1', 'Hofmatt, Diegten'),
(145969, 2, 1, 'Meisterschaft', 0, 0, 'So', '2014-06-15', '00:00:00', 'FC Zeiningen ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146454, 1, 1, 'Meisterschaft', 2, 0, 'Fr', '2013-08-16', '20:00:00', 'SC Muenchenstein a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146465, 1, 0, 'Meisterschaft', 0, 1, 'Di', '2013-08-27', '20:00:00', 'FC Arisdorf  ', 'Gemeindesportplatz, Arisdorf - 1', 'Gemeindesportplatz', 'Arisdorf', '1', 'Arisdorf'),
(146467, 1, 0, 'Meisterschaft', 1, 1, 'Sa', '2013-08-31', '20:00:00', 'SV Sissach a', 'Sportzentrum Tannenbrunn, Sissach - 1', 'Sportzentrum Tannenbrunn', 'Sissach', '1', 'Sportzentrum Tannenbrunn, Sissach'),
(146476, 1, 1, 'Meisterschaft', 5, 0, 'Sa', '2013-09-07', '18:00:00', 'FC Oberdorf ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146480, 1, 0, 'Meisterschaft', 0, 4, 'So', '2013-09-22', '13:00:00', 'FC Bubendorf', 'Bruehl, Bubendorf - 1', 'Bruehl', 'Bubendorf', '1', 'Bruehl, Bubendorf'),
(146487, 1, 1, 'Meisterschaft', 8, 0, 'Sa', '2013-09-28', '18:00:00', 'SV Muttenz b', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146493, 1, 0, 'Meisterschaft', 0, 0, 'Sa', '2013-10-05', '19:00:00', 'FC Diegten Eptingen  ', 'Hofmatt, Diegten - 1', 'Hofmatt', 'Diegten', '1', 'Hofmatt, Diegten'),
(146498, 1, 1, 'Meisterschaft', 0, 0, 'Sa', '2013-10-12', '18:00:00', 'FC Gelterkinden b', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146506, 1, 0, 'Meisterschaft', 0, 0, 'Sa', '2013-10-19', '20:00:00', 'FC Lausen 72', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146509, 1, 1, 'Meisterschaft', 0, 0, 'Sa', '2013-10-26', '18:00:00', 'FC Stein b', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146519, 1, 0, 'Meisterschaft', 0, 0, 'Sa', '2013-11-02', '17:00:00', 'FC Laufenburg-Kaisten b', 'Blauen, Laufenburg - 1', 'Blauen', 'Laufenburg', '1', 'Blauen, Laufenburg'),
(146520, 1, 0, 'Meisterschaft', 0, 0, 'So', '2014-03-23', '00:00:00', 'SC Muenchenstein a', 'Sportplatz Au, Muenchenstein - 1', 'Sportplatz Au', 'Muenchenstein', '1', 'Sportplatz Au, Muenchenstein'),
(146531, 1, 1, 'Meisterschaft', 0, 0, 'So', '2014-03-30', '00:00:00', 'FC Arisdorf  ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146533, 1, 1, 'Meisterschaft', 0, 0, 'So', '2014-04-06', '00:00:00', 'SV Sissach a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146542, 1, 0, 'Meisterschaft', 0, 0, 'So', '2014-04-13', '00:00:00', 'FC Oberdorf ', 'z''Hof, Oberdorf - 1 Kunstrasen', 'z''Hof', 'Oberdorf', '1 Kunstrasen', 'z''Hof, Oberdorf'),
(146546, 1, 1, 'Meisterschaft', 0, 0, 'So', '2014-04-27', '00:00:00', 'FC Bubendorf', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146553, 1, 0, 'Meisterschaft', 0, 0, 'So', '2014-05-04', '00:00:00', 'SV Muttenz b', 'Sportplatz Margelacker, Muttenz - 1', 'Sportplatz Margelacker', 'Muttenz', '1', 'Sportplatz Margelacker, Muttenz'),
(146559, 1, 1, 'Meisterschaft', 0, 0, 'So', '2014-05-11', '00:00:00', 'FC Diegten Eptingen  ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146564, 1, 0, 'Meisterschaft', 0, 0, 'So', '2014-05-18', '00:00:00', 'FC Gelterkinden b', 'Wolfstiege, Gelterkinden - 1', 'Wolfstiege', 'Gelterkinden', '1', 'Wolfstiege, Gelterkinden'),
(146572, 1, 1, 'Meisterschaft', 0, 0, 'So', '2014-05-25', '00:00:00', 'FC Lausen 72', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(146575, 1, 0, 'Meisterschaft', 0, 0, 'So', '2014-06-01', '11:00:00', 'FC Stein b', 'Bustelbach, Stein - 1', 'Bustelbach', 'Stein', '1', 'Bustelbach, Stein'),
(146585, 1, 1, 'Meisterschaft', 0, 0, 'So', '2014-06-15', '00:00:00', 'FC Laufenburg-Kaisten b', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152013, 10, 1, 'Meisterschaft', 4, 1, 'Fr', '2013-08-16', '20:00:00', 'US Bottecchia BS', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152022, 10, 1, 'Meisterschaft', 5, 1, 'Mi', '2013-09-04', '20:00:00', 'US Olympia 1963 ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152024, 10, 0, 'Meisterschaft', 4, 2, 'Fr', '2013-08-30', '20:30:00', 'FC Birsfelden  ', 'Sternenfeld, Birsfelden - A', 'Sternenfeld', 'Birsfelden', 'A', 'Sternenfeld, Birsfelden'),
(152031, 10, 1, 'Meisterschaft', 1, 4, 'Sa', '2013-09-07', '16:00:00', 'FC Laufenburg-Kaisten ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152035, 10, 0, 'Meisterschaft', 4, 1, 'Sa', '2013-09-21', '13:00:00', 'FC Tuerkguecue Basel ', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(152040, 10, 1, 'Meisterschaft', 0, 0, 'Sa', '2013-10-23', '20:15:00', 'FC Rheinfelden', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152046, 10, 0, 'Meisterschaft', 1, 6, 'Fr', '2013-10-11', '20:15:00', 'FC Bubendorf  ', 'Bruehl, Bubendorf - 1', 'Bruehl', 'Bubendorf', '1', 'Bruehl, Bubendorf'),
(152049, 10, 1, 'Meisterschaft', 0, 0, 'Sa', '2013-10-19', '16:00:00', 'FC Dardania', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152057, 10, 0, 'Meisterschaft', 0, 0, 'Sa', '2013-10-26', '13:00:00', 'FC Birlik', 'Sportanlagen St. Jakob, Basel - wird vor Ort zugeteilt', 'Sportanlagen St. Jakob', 'Basel', 'wird vor Ort zugeteilt', 'Sportanlagen St. Jakob, Basel'),
(152058, 10, 0, 'Meisterschaft', 0, 0, 'Sa', '2014-04-05', '15:00:00', 'US Bottecchia BS', 'Sportanlage Rheinacker, Landauerstr. 45,   - Hauptplatz', 'Sportanlage Rheinacker, Landauerstr. 45', ' ', 'Hauptplatz', 'Sportanlage Rheinacker, Landauerstr. 45,  '),
(152067, 10, 0, 'Meisterschaft', 0, 0, 'Sa', '2014-04-12', '00:00:00', 'US Olympia 1963 ', 'Sportzentrum Pfaffenholz, Basel - wird vor Ort zugeteilt', 'Sportzentrum Pfaffenholz', 'Basel', 'wird vor Ort zugeteilt', 'Sportzentrum Pfaffenholz, Basel'),
(152069, 10, 1, 'Meisterschaft', 0, 0, 'Sa', '2014-04-26', '00:00:00', 'FC Birsfelden  ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152076, 10, 0, 'Meisterschaft', 0, 0, 'Sa', '2014-05-03', '00:00:00', 'FC Laufenburg-Kaisten ', 'Blauen, Laufenburg - 1', 'Blauen', 'Laufenburg', '1', 'Blauen, Laufenburg'),
(152080, 10, 1, 'Meisterschaft', 0, 0, 'Sa', '2014-05-10', '00:00:00', 'FC Tuerkguecue Basel ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152085, 10, 0, 'Meisterschaft', 0, 0, 'Fr', '2014-05-16', '20:00:00', 'FC Rheinfelden', 'Im Schiffacker, Rheinfelden - wird vor Ort zugeteilt', 'Im Schiffacker', 'Rheinfelden', 'wird vor Ort zugeteilt', 'Im Schiffacker, Rheinfelden'),
(152091, 10, 1, 'Meisterschaft', 0, 0, 'Sa', '2014-05-24', '00:00:00', 'FC Bubendorf  ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(152094, 10, 0, 'Meisterschaft', 0, 0, 'Sa', '2014-05-31', '15:00:00', 'FC Dardania', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(152102, 10, 1, 'Meisterschaft', 0, 0, 'Sa', '2014-06-14', '00:00:00', 'FC Birlik', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153357, 15, 1, 'Meisterschaft', 0, 10, 'So', '2013-08-25', '14:00:00', 'FC Allschwil', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153358, 15, 0, 'Meisterschaft', 3, 0, 'So', '2013-09-01', '13:00:00', 'FC Nordstern BS ', 'Rankhof, Basel - wird vor Ort zugeteilt', 'Rankhof', 'Basel', 'wird vor Ort zugeteilt', 'Rankhof, Basel'),
(153362, 15, 1, 'Meisterschaft', 0, 6, 'Sa', '2013-09-11', '19:30:00', 'FC Concordia Basel ', 'Bifang, Lausen - Stutz', 'Bifang', 'Lausen', 'Stutz', 'siehe Bemerkungen:                             '),
(153365, 15, 0, 'Meisterschaft', 13, 0, 'So', '2013-09-22', '13:00:00', 'FC Telegraph BS ', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(153367, 15, 1, 'Meisterschaft', 0, 16, 'So', '2013-09-29', '13:00:00', 'FC Reinach', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153372, 15, 0, 'Meisterschaft', 3, 0, 'So', '2013-10-06', '15:00:00', 'FC Laufenburg-Kaisten ', 'Hard, Kaisten - 1', 'Hard', 'Kaisten', '1', 'Turnhalle, Kaisten                           '),
(153378, 15, 0, 'Meisterschaft', 0, 0, 'Sa', '2013-10-19', '17:30:00', 'FC Allschwil', 'Im Brueel, Allschwil,   - 2', 'Im Brueel, Allschwil', ' ', '2', 'Im Brueel, Allschwil,  '),
(153379, 15, 1, 'Meisterschaft', 0, 0, 'So', '2013-10-27', '13:00:00', 'FC Nordstern BS ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153383, 15, 0, 'Meisterschaft', 0, 0, 'So', '2013-11-03', '13:00:00', 'FC Concordia Basel ', 'Sportanlagen St. Jakob, Basel - wird vor Ort zugeteilt', 'Sportanlagen St. Jakob', 'Basel', 'wird vor Ort zugeteilt', 'Sportanlagen St. Jakob, Basel'),
(153386, 15, 1, 'Meisterschaft', 0, 0, 'So', '2014-03-30', '00:00:00', 'FC Telegraph BS ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153388, 15, 0, 'Meisterschaft', 0, 0, 'So', '2014-04-06', '00:00:00', 'FC Reinach', 'Einschlag, Reinach - Kunstrasen (1)', 'Einschlag', 'Reinach', 'Kunstrasen (1)', 'Einschlag, Reinach'),
(153393, 15, 1, 'Meisterschaft', 0, 0, 'So', '2014-04-13', '00:00:00', 'FC Laufenburg-Kaisten ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153399, 15, 1, 'Meisterschaft', 0, 0, 'So', '2014-05-04', '00:00:00', 'FC Allschwil', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153400, 15, 0, 'Meisterschaft', 0, 0, 'So', '2014-05-11', '00:00:00', 'FC Nordstern BS ', 'Rankhof, Basel - wird vor Ort zugeteilt', 'Rankhof', 'Basel', 'wird vor Ort zugeteilt', 'Rankhof, Basel'),
(153404, 15, 1, 'Meisterschaft', 0, 0, 'So', '2014-05-18', '00:00:00', 'FC Concordia Basel ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153407, 15, 0, 'Meisterschaft', 0, 0, 'So', '2014-05-25', '00:00:00', 'FC Telegraph BS ', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(153409, 15, 1, 'Meisterschaft', 0, 0, 'So', '2014-06-01', '00:00:00', 'FC Reinach', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(153414, 15, 0, 'Meisterschaft', 0, 0, 'So', '2014-06-15', '00:00:00', 'FC Laufenburg-Kaisten ', 'Blauen, Laufenburg - 1', 'Blauen', 'Laufenburg', '1', 'Blauen, Laufenburg'),
(160837, 3, 1, 'Meisterschaft', 3, 5, 'So', '2013-08-18', '13:00:00', 'FC Xalko', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160848, 3, 1, 'Meisterschaft', 3, 4, 'So', '2013-08-25', '16:00:00', 'FC Amicitia Riehen ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160850, 3, 0, 'Meisterschaft', 3, 2, 'Sa', '2013-08-31', '18:00:00', 'AC Virtus Liestal a', 'Stadion Gitterli, Liestal - 2 (Kunstrasen)', 'Stadion Gitterli', 'Liestal', '2 (Kunstrasen)', 'Stadion Gitterli, Liestal'),
(160859, 3, 1, 'Meisterschaft', 3, 1, 'So', '2013-09-08', '11:00:00', 'FC Birsfelden', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160863, 3, 0, 'Meisterschaft', 3, 3, 'So', '2013-09-22', '15:00:00', 'CD Espanol Basel a', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(160870, 3, 1, 'Meisterschaft', 0, 7, 'So', '2013-09-29', '15:00:00', 'SC Basel Nord a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160876, 3, 0, 'Meisterschaft', 1, 5, 'So', '2013-10-06', '15:00:00', 'FC Ferad a', 'Sportanlagen St. Jakob, Basel - wird vor Ort zugeteilt', 'Sportanlagen St. Jakob', 'Basel', 'wird vor Ort zugeteilt', 'Sportanlagen St. Jakob, Basel'),
(160881, 3, 1, 'Meisterschaft', 0, 0, 'So', '2013-10-13', '14:00:00', 'FC Schwarz-Weiss', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160889, 3, 0, 'Meisterschaft', 0, 0, 'So', '2013-10-20', '13:00:00', 'FK Srbija Basel ', 'Rankhof, Basel - wird vor Ort zugeteilt', 'Rankhof', 'Basel', 'wird vor Ort zugeteilt', 'Rankhof, Basel'),
(160892, 3, 1, 'Meisterschaft', 0, 0, 'So', '2013-10-27', '15:00:00', 'FC Pratteln', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160902, 3, 0, 'Meisterschaft', 0, 0, 'So', '2013-11-03', '13:00:00', 'FC Telegraph BS', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(160903, 3, 0, 'Meisterschaft', 0, 0, 'So', '2014-03-23', '00:00:00', 'FC Xalko', 'Rankhof, Basel - wird vor Ort zugeteilt', 'Rankhof', 'Basel', 'wird vor Ort zugeteilt', 'Rankhof, Basel'),
(160914, 3, 0, 'Meisterschaft', 0, 0, 'So', '2014-03-30', '00:00:00', 'FC Amicitia Riehen ', 'Grendelmatte, Riehen - wird vor Ort zugeteilt', 'Grendelmatte', 'Riehen', 'wird vor Ort zugeteilt', 'Grendelmatte, Riehen'),
(160916, 3, 1, 'Meisterschaft', 0, 0, 'So', '2014-04-06', '00:00:00', 'AC Virtus Liestal a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160925, 3, 0, 'Meisterschaft', 0, 0, 'So', '2014-04-13', '00:00:00', 'FC Birsfelden', 'Sternenfeld, Birsfelden - A', 'Sternenfeld', 'Birsfelden', 'A', 'Sternenfeld, Birsfelden'),
(160929, 3, 1, 'Meisterschaft', 0, 0, 'So', '2014-04-27', '00:00:00', 'CD Espanol Basel a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160936, 3, 0, 'Meisterschaft', 0, 0, 'So', '2014-05-04', '00:00:00', 'SC Basel Nord a', 'Rankhof, Basel - wird vor Ort zugeteilt', 'Rankhof', 'Basel', 'wird vor Ort zugeteilt', 'Rankhof, Basel'),
(160942, 3, 1, 'Meisterschaft', 0, 0, 'So', '2014-05-11', '00:00:00', 'FC Ferad a', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160947, 3, 0, 'Meisterschaft', 0, 0, 'So', '2014-05-18', '00:00:00', 'FC Schwarz-Weiss', 'Bachgraben, Allschwil - wird vor Ort zugeteilt', 'Bachgraben', 'Allschwil', 'wird vor Ort zugeteilt', 'Bachgraben, Allschwil'),
(160955, 3, 1, 'Meisterschaft', 0, 0, 'So', '2014-05-25', '00:00:00', 'FK Srbija Basel ', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(160958, 3, 0, 'Meisterschaft', 0, 0, 'So', '2014-06-01', '00:00:00', 'FC Pratteln', 'In den Sandgruben, Pratteln - wird vor Ort zugeteilt', 'In den Sandgruben', 'Pratteln', 'wird vor Ort zugeteilt', 'In den Sandgruben, Pratteln'),
(160968, 3, 1, 'Meisterschaft', 0, 0, 'So', '2014-06-15', '00:00:00', 'FC Telegraph BS', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(510297, 1, 1, 'Cup Grosspeter Basler Cup / 1. Vorrunde', 5, 0, 'Sa', '2013-08-03', '18:00:00', 'FC Roeschenz', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(512170, 1, 1, 'Cup Grosspeter Basler Cup / 1. Vorrunde', 4, 1, 'Sa', '2013-08-10', '20:00:00', 'FC Ferad', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz'),
(512261, 1, 1, 'Grosspeter Basler Cup / 1/16 - Final', 0, 2, 'Sa', '2013-09-14', '18:00:00', 'FC Therwil', 'Bifang, Lausen - 1', 'Bifang', 'Lausen', '1', 'Mehrzweckhalle Stutz');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=140 ;

--
-- Daten für Tabelle `member_active`
--

INSERT INTO `member_active` (`id`, `trikot`, `lastName`, `firstName`, `nickName`, `bDay`, `nat`, `toTeam`, `toPosition`, `pictureURL`) VALUES
(1, 17, 'Apostolo', 'Ilaria', '', '1996-08-09', '', 15, 3, ''),
(2, 19, 'Apostolo', 'Martina', '', '1993-08-18', '', 15, 2, ''),
(3, 13, 'Aquilino', 'Marilena', '', '1993-03-03', '', 15, 2, ''),
(117, 2, 'Lagnaz', 'Thomas', '', '0000-00-00', '', 2, 2, '00128.jpg'),
(8, 20, 'Branca', 'Alessandro', '', '1988-06-14', '', 1, 3, '00113.jpg'),
(9, 10, 'Branca', 'Davide', '', '1994-03-05', '', 1, 3, '00109.jpg'),
(10, 11, 'Branca', 'Sara', '', '1992-12-12', '', 15, 3, '00134.jpg'),
(11, 22, 'Buchholz', 'Thomas', '', '1993-07-31', '', 2, 2, ''),
(120, 93, 'Özdemir', 'Kerim', '', '0000-00-00', '', 1, 4, ''),
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
(33, 21, 'Gatti', 'Alessandro', '', '1992-06-22', '', 1, 2, ''),
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
(116, 9, 'Thommen', 'Martin', '', '0000-00-00', '', 2, 3, '00138.jpg'),
(61, 4, 'Oberle', 'Marco', '', '1987-06-09', '', 2, 2, ''),
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
(87, 19, 'Tanner', 'Michael', '', '1987-03-24', '', 2, 3, ''),
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
(100, 23, 'Calabrese', 'Gerardo', 'Gerry', '0000-00-00', '', 1, 3, ''),
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
(139, 30, 'Bonsignore', 'Giovanni', '', '0000-00-00', '', 1, 4, '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

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
(13, 'Ein High-Five auf die Tabellenführung', 'Mit einem Sieg, der nie in Gefahr war, eroberte die AC Rossoneri die Tabellenspitze in der 2. Gruppe der vierten Liga. Der fünffache Torschütze Maurizio Marchetta schoss den SV Muttenz beinahe im Alleingang ab.<br />\rAuch ein früher Tiefschlag konnte die extrem gefestigt wirkende Truppe der AC Rossoneri nicht aus dem Tritt bringen. Nach nur zehn gespielten Minuten musste Danilo Cordeiro verletz ausgewechselt werden. Nach einem Zweikampf bekam Cordeiro einen Schlag ins Gesicht und musste mit einer Platzwunde im Mund ins Krankenhaus. Auf diesem Weg, gute Besserung Danilo!<br />\rAls Glück im Unglück kann man diesen Spielertausch betrachten. Nur knappe zehn Minuten brauchte  Maurizio Marchetta nach seiner Hereinnahme um das erste Mal zu scoren. In der Folge vergab die AC in Form von Stefan Zimmermann, Basti Werisch und Marchetta hochkarätige Chancen. Letzterer vollendete dennoch mit dem Pausenpfiff einen schönen Konter zum 2:0.<br />\rAus einer stabilen Defensive heraus spielte Rosso die erste Hälfte souverän runter. Wenn es etwas zu bemängeln gibt, ist dies das nonchalante Umgehen mit den zahlreichen Torchancen.<br />\rDiese vermeintliche Schwäche der ersten Hälfte wurde im zweiten Abschnitt zur Stärke. Beinahe jeder Schuss schien den Weg ins Tor zu finden. Kurz nach Wiederbeginn erhöhte der starke David Prince Tettey auf 3:0. Ab Spielminute 62 klingelte es in schöner Regelmässigkeit im Tor der Gäste. Der Reihe nach trafen Zimmermann, zweimal Marchetta und nochmals Tettey. In der 72. Minute gelang Marchetta gar sein fünfter Treffer (Spielball behalten??) zum 8:0, was sogleich der Endstand war.<br />\rMit diesem zu jeder Zeit ungefährdeten Sieg übernimmt die AC die Tabellenführung, auch dank der zeitgleichen Niederlage des grössten Konkurrenten Laufenburg-Kaisten gegen den FC Diegten-Eptingen. Ein weiteres Mal in der noch jungen Saison konnte sich das Roberti-Team auf eine solide Defensive verlassen. Genau ein einziges Gegentor musste Rosso in allen bisher gespielten Partien hinnehmen – absolute Ligaspitze.', '00107.jpg', 3, '2013-09-30 21:15:59', 2, 146487, 451, NULL);

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
(1, 'SC M&uuml;nchenstein', 6, 16, 1),
(2, 'FC Arisdorf', 13, 8, 1),
(3, 'FC Diegten Eptingen', 10, 11, 1),
(4, 'SV Muttenz b', 3, 21, 1),
(5, 'FC Oberdorf', 7, 16, 1),
(6, 'AC Rossoneri', 17, 10, 1),
(7, 'FC Stein b', 14, 29, 1),
(8, 'SV Sissach a', 11, 19, 1),
(9, 'FC Lausen 72', 1, 22, 1),
(10, 'FC Gelterkinden b', 16, 1, 1),
(11, 'FC Laufenburg-Kaisten b', 16, 14, 1),
(12, 'FC Bubendorf', 6, 14, 1),
(13, 'FC Lausen 72', 15, 6, 2),
(14, 'Pratteln United', 19, 12, 2),
(15, 'FC Eiken', 3, 10, 2),
(16, 'NK Pajde', 18, 8, 2),
(17, 'FC Liestal', 12, 7, 2),
(18, 'FC Wallbach', 6, 13, 2),
(19, 'AC Virtus Liestal b', 17, 12, 2),
(20, 'FC Zeiningen', 0, 17, 2),
(21, 'AC Rossoneri a', 10, 11, 2),
(22, 'FC Gelterkinden', 6, 23, 2),
(23, 'FC Diegten Eptingen', 0, 20, 2),
(24, 'FC Bubendorf', 21, 4, 2),
(25, 'CD Espanol Basel a', 4, 8, 3),
(26, 'SC Basel Nord a', 8, 8, 3),
(27, 'FC Ferad a', 4, 8, 3),
(28, 'AC Virtus Liestal a', 21, 18, 3),
(29, 'FC Telegraph BS', 13, 21, 3),
(30, 'FC Birsfelden', 10, 9, 3),
(31, 'FC Schwarz-Weiss', 8, 11, 3),
(32, 'FC Amicitia Riehen', 6, 8, 3),
(33, 'FK Srbija Basel', 9, 14, 3),
(34, 'FC Pratteln', 16, 24, 3),
(35, 'AC Rossoneri b', 7, 9, 3),
(36, 'FC Xalko', 13, 22, 3),
(37, 'FC Dardania', 16, 4, 10),
(38, 'FC Birlik', 6, 8, 10),
(39, 'FC Rheinfelden', 12, 6, 10),
(40, 'AC Rossoneri', 6, 9, 10),
(41, 'FC Bubendorf', 7, 5, 10),
(42, 'FC Laufenburg-Kaisten', 12, 19, 10),
(43, 'US Olympia 1963', 1, 6, 10),
(44, 'US Bottecchia BS', 7, 5, 10),
(45, 'FC Türkgücü Basel', 7, 3, 10),
(46, 'FC Birsfelden', 12, 11, 10),
(47, 'FC Allschwil', 9, 0, 15),
(48, 'FC Concordia Basel', 15, 0, 15),
(49, 'FC Nordstern BS', 12, 1, 15),
(50, 'FC Reinach', 12, 0, 15),
(51, 'FC Telegraph BS', 12, 0, 15),
(52, 'AC Rossoneri', 0, 11, 15),
(53, 'FC Laufenburg-Kaisten', 3, 0, 15);

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
