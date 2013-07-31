-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 31. Jul 2013 um 18:52
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
-- Tabellenstruktur für Tabelle `member_Active`
--

CREATE TABLE IF NOT EXISTS `member_Active` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `bDay` date NOT NULL,
  `toTeam` int(11) NOT NULL,
  `toPosition` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=99 ;

--
-- Daten für Tabelle `member_Active`
--

INSERT INTO `member_Active` (`id`, `lastName`, `firstName`, `bDay`, `toTeam`, `toPosition`) VALUES
(1, 'Apostolo', 'Ilaria', '1996-08-09', 4, 0),
(2, 'Apostolo', 'Martina', '1993-08-18', 4, 0),
(3, 'Aquilino', 'Marilena', '1993-03-03', 4, 0),
(4, 'Bachschi', 'Davud', '1976-04-23', 5, 0),
(5, 'Barca', 'Daniel', '1978-09-15', 5, 0),
(6, 'Baretincic', 'Manuel', '1985-02-19', 2, 0),
(7, 'Batista', 'Vedran', '1986-06-23', 2, 2),
(8, 'Branca', 'Alessandro', '1988-06-14', 1, 3),
(9, 'Branca', 'Davide', '1994-03-05', 1, 3),
(10, 'Branca', 'Sara', '1992-12-12', 4, 0),
(11, 'Buchholz', 'Thomas', '1993-07-31', 2, 0),
(12, 'Caldaralo', 'Laetitia', '1993-09-22', 4, 0),
(13, 'Carlen', 'Nicolas', '1991-10-23', 2, 2),
(14, 'Catozza', 'Francesco', '1975-02-23', 5, 0),
(15, 'Chiriaco', 'Domenico', '1983-11-16', 1, 2),
(16, 'Ciliberto', 'Fabrizio', '1973-12-30', 5, 0),
(17, 'Ciraolo', 'Gaetano', '1984-06-27', 1, 1),
(18, 'Concepcion', 'Hanna', '1989-10-20', 4, 0),
(19, 'Cordeiro', 'Danilo', '1991-04-22', 1, 3),
(20, 'Cubaixo', 'David', '1985-02-01', 2, 2),
(21, 'Cuzzocrea', 'Alessia', '1994-07-08', 4, 0),
(22, 'De Nuccio', 'Francesca', '1989-10-07', 4, 0),
(23, 'De Sousa', 'Jose', '1965-01-18', 5, 0),
(24, 'Demir', 'Murat Serg', '1983-03-09', 5, 0),
(25, 'Di Stefano', 'Rocco', '1957-04-09', 5, 0),
(26, 'Eggli', 'Kevin', '1986-09-17', 2, 0),
(27, 'Elma', 'Halil', '1976-12-30', 5, 0),
(28, 'Faga', 'Antonio', '1970-11-16', 5, 0),
(29, 'FagaValerio', 'Giuseppe', '1967-11-11', 5, 0),
(30, 'Fankhauser', 'Patrick', '1988-02-06', 2, 0),
(31, 'Feller', 'Philippe', '1988-09-17', 2, 0),
(32, 'Galizia', 'Andrea Domenico', '1976-03-11', 5, 0),
(33, 'Gatti', 'Alessandro', '1992-06-22', 1, 2),
(34, 'Gonzalez Saez', 'Matias', '1990-12-07', 1, 2),
(35, 'Gubser', 'Stefan', '1990-12-26', 1, 1),
(36, 'Haas', 'Alejandra', '1988-12-18', 4, 0),
(37, 'Herrero', 'Alberto', '1983-03-03', 1, 2),
(38, 'Inguscio', 'Sara', '1990-03-27', 4, 0),
(39, 'Job', 'Claudio', '1969-03-12', 5, 0),
(40, 'Kaiser', 'Benjamin', '1986-08-21', 2, 0),
(41, 'Kaiser', 'Roman', '1988-09-27', 2, 0),
(42, 'Kaufmann', 'Pierre', '1988-04-27', 2, 0),
(43, 'Kiener', 'Roman', '1985-03-09', 2, 0),
(44, 'Kull', 'Nicolas', '1993-07-12', 2, 0),
(45, 'La Grassa', 'Francesco', '1965-04-16', 5, 0),
(46, 'La Ianca', 'Giuseppe', '1978-07-21', 5, 0),
(47, 'Leanza', 'Salvatore', '1970-11-30', 5, 0),
(48, 'Leone', 'Aron', '1993-04-23', 1, 2),
(49, 'Lupo', 'Michael', '1991-05-22', 2, 0),
(50, 'Luruena Rivera', 'Santos', '1975-05-24', 5, 0),
(51, 'Maglio', 'Claudio', '1972-02-08', 5, 0),
(52, 'Malgir', 'Mehmet', '1991-02-25', 5, 0),
(53, 'Martin Rodriguez', 'Agustin', '1978-07-28', 5, 0),
(54, 'Martins', 'Liliana', '1993-08-30', 4, 0),
(55, 'Mazza', 'Antonio', '1976-10-17', 5, 0),
(56, 'Mmojekwu', 'Samuel', '1992-04-15', 5, 0),
(57, 'Mulas', 'Andrea', '1993-04-11', 1, 2),
(58, 'Mulas', 'Dario', '1968-04-04', 5, 0),
(59, 'Mulas', 'Salvatore', '1988-08-22', 1, 4),
(60, 'M', 'Yves', '1987-04-10', 2, 0),
(61, 'Oberle', 'Marco', '1987-06-09', 2, 0),
(62, 'Palmieri', 'Angelo', '1967-02-11', 5, 0),
(63, 'Paoletti', 'Fabio', '1980-05-08', 5, 0),
(64, 'Paoletti', 'Gianluca', '1972-10-03', 5, 0),
(65, 'Parlato', 'Gerard', '1975-09-23', 5, 0),
(66, 'Pezzo', 'Stefania', '1989-08-11', 4, 0),
(67, 'Pilia', 'Stefano', '1990-04-03', 1, 2),
(68, 'Piras', 'Fabrizio', '1978-07-01', 5, 0),
(69, 'Rickenbacher', 'Lukas', '1992-03-17', 1, 2),
(70, 'Rieder', 'Yves', '1989-10-04', 2, 0),
(71, 'Rosamilia', 'Nicola', '1975-04-07', 5, 0),
(72, 'R', 'Flavio', '1993-03-30', 1, 3),
(73, 'Sahin', 'Denis', '1986-08-17', 1, 3),
(74, 'Sahin', 'Serdal', '1979-09-12', 5, 0),
(75, 'Sahin', 'Utku', '1981-07-08', 5, 0),
(76, 'Salfinger', 'Fabian', '1988-11-03', 2, 4),
(77, 'Salvadori', 'Ilaria', '1995-02-05', 4, 0),
(78, 'Santo', 'Deila', '1989-12-25', 4, 0),
(79, 'Santoni', 'Fabrizio', '1984-05-30', 1, 2),
(80, 'Santoro', 'Annarita', '1993-05-03', 4, 0),
(81, 'Sappracone', 'Elena', '1989-01-11', 4, 0),
(82, 'Schreiber', 'Pascal', '1979-01-17', 5, 0),
(83, 'Shala', 'Nure', '1988-11-15', 2, 3),
(84, 'Stasolla', 'Manuela', '1990-11-22', 4, 0),
(85, 'Strano', 'Giuseppe', '1970-06-28', 5, 0),
(86, 'Tanner', 'Lukas', '1991-06-02', 2, 0),
(87, 'Tanner', 'Michael', '1987-03-24', 2, 0),
(88, 'Teotino', 'Daniele', '1978-05-22', 5, 0),
(89, 'Tielke', 'Tobias', '1992-05-03', 2, 0),
(90, 'Unutulmaz', 'Selcuk', '1977-12-12', 5, 0),
(91, 'Valente', 'Katia', '1989-09-12', 4, 0),
(92, 'Weibel', 'Stefan', '1990-11-23', 2, 4),
(93, 'Werisch', 'Sebastian', '1984-10-04', 1, 2),
(94, 'Yalcin', 'Sinan', '1973-05-01', 5, 0),
(95, 'Yildiz', 'Dogan', '1976-04-05', 5, 0),
(96, 'Zimmermann', 'Stefan', '1986-01-07', 1, 3),
(97, 'Zollinger', 'Sandro', '1988-04-28', 2, 4),
(98, 'Zwicky', 'Tobias', '1986-11-21', 2, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `member_Management`
--

CREATE TABLE IF NOT EXISTS `member_Management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `eMail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `member_Management`
--

INSERT INTO `member_Management` (`id`, `username`, `firstName`, `lastName`, `eMail`, `password`) VALUES
(1, 'salvo', 'Salvatore', 'Mulas', 'marketing@acrossoneri.ch', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `team_1_ranking`
--

CREATE TABLE IF NOT EXISTS `team_1_ranking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(255) NOT NULL,
  `points` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Daten für Tabelle `team_1_ranking`
--

INSERT INTO `team_1_ranking` (`id`, `team`, `points`) VALUES
(1, 'SC M&uuml;nchenstein', 0),
(2, 'FC Arisdorf', 0),
(3, 'FC Diegten Eptingen', 0),
(4, 'SV Muttenz b', 0),
(5, 'FC Oberdorf', 0),
(6, 'AC Rossoneri', 0),
(7, 'FC Stein b', 0),
(8, 'SV Sissach a', 0),
(9, 'FC Lausen 72', 0),
(10, 'FC Gelterkinden b', 0),
(11, 'FC Laufenburg-Kaisten b', 0),
(12, 'FC Bubendorf', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `team_2_ranking`
--

CREATE TABLE IF NOT EXISTS `team_2_ranking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(255) NOT NULL,
  `points` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Daten für Tabelle `team_2_ranking`
--

INSERT INTO `team_2_ranking` (`id`, `team`, `points`) VALUES
(12, 'FC Lausen 72', 0),
(11, 'Pratteln United', 0),
(10, 'FC Eiken', 0),
(9, 'NK Pajde', 0),
(8, 'FC Liestal', 0),
(7, 'FC Wallbach', 0),
(6, 'AC Virtus Liestal b', 0),
(5, 'FC Zeiningen', 0),
(4, 'AC Rossoneri a', 0),
(3, 'FC Gelterkinden', 0),
(2, 'FC Diegten Eptingen', 0),
(1, 'FC Bubendorf', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `team_3_ranking`
--

CREATE TABLE IF NOT EXISTS `team_3_ranking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(255) NOT NULL,
  `points` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Daten für Tabelle `team_3_ranking`
--

INSERT INTO `team_3_ranking` (`id`, `team`, `points`) VALUES
(12, 'CD Espanol Basel a', 0),
(11, 'SC Basel Nord a', 0),
(10, 'FC Ferad a', 0),
(9, 'AC Virtus Liestal a', 0),
(8, 'FC Telegraph BS', 0),
(7, 'FC Birsfelden', 0),
(6, 'FC Schwarz-Weiss', 0),
(5, 'FC Amicitia Riehen', 0),
(4, 'FK Srbija Basel', 0),
(3, 'FC Pratteln', 0),
(2, 'AC Rossoneri b', 0),
(1, 'FC Xalko', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
