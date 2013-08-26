-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 26. Aug 2013 um 17:37
-- Server Version: 5.5.16
-- PHP-Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `rosso_cms`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=116 ;

--
-- Daten für Tabelle `member_active`
--

INSERT INTO `member_active` (`id`, `trikot`, `lastName`, `firstName`, `nickName`, `bDay`, `nat`, `toTeam`, `toPosition`, `pictureURL`) VALUES
(1, 17, 'Apostolo', 'Ilaria', '', '1996-08-09', '', 15, 3, ''),
(2, 19, 'Apostolo', 'Martina', '', '1993-08-18', '', 15, 2, ''),
(3, 13, 'Aquilino', 'Marilena', '', '1993-03-03', '', 15, 2, ''),
(5, 23, 'Barca', 'Daniel', '', '1978-09-15', '', 10, 2, ''),
(6, 0, 'Baretincic', 'Manuel', 'Maki', '1985-02-19', '', 2, 4, ''),
(7, 0, 'Batista', 'Vedran', 'Vedi', '1986-06-23', '', 2, 2, ''),
(8, 20, 'Branca', 'Alessandro', '', '1988-06-14', '', 1, 3, '00113.jpg'),
(9, 10, 'Branca', 'Davide', '', '1994-03-05', '', 1, 3, '00109.jpg'),
(10, 11, 'Branca', 'Sara', '', '1992-12-12', '', 15, 3, ''),
(11, 0, 'Buchholz', 'Thomas', '', '1993-07-31', '', 2, 0, ''),
(108, 3, 'Caselle', 'Mirco', '', '0000-00-00', '', 3, 2, ''),
(13, 0, 'Carlen', 'Nicolas', '', '1991-10-23', '', 2, 2, ''),
(14, 10, 'Catozza', 'Francesco', '', '1975-02-23', '', 10, 4, ''),
(15, 16, 'Chiriaco', 'Domenico', '', '1983-11-16', '', 1, 2, '00110.jpg'),
(17, 12, 'Ciraolo', 'Gaetano', '', '1984-06-27', '', 1, 1, '00101.jpg'),
(18, 1, 'Concepcion', 'Hanna', '', '1989-10-20', '', 15, 1, ''),
(19, 9, 'Cordeiro', 'Danilo', '', '1991-04-22', '', 1, 3, '00108.jpg'),
(20, 0, 'Cubaixo', 'David', 'Cubi', '1985-02-01', '', 2, 2, ''),
(107, 18, 'Feller', 'Celine', '', '0000-00-00', '', 15, 3, ''),
(23, 6, 'De Sousa', 'Jose', '', '1965-01-18', '', 10, 3, ''),
(26, 0, 'Eggli', 'Kevin', '', '1986-09-17', '', 2, 3, ''),
(27, 14, 'Elma', 'Halil', '', '1976-12-30', '', 10, 2, ''),
(30, 0, 'Fankhauser', 'Patrick', 'Büsi', '1988-02-06', '', 2, 3, ''),
(31, 0, 'Feller', 'Philippe', '', '1988-09-17', '', 2, 3, ''),
(33, 21, 'Gatti', 'Alessandro', '', '1992-06-22', '', 1, 2, ''),
(35, 1, 'Gubser', 'Stefan', 'Gubsi', '1990-12-26', '', 1, 1, '00100.jpg'),
(36, 27, 'Haas', 'Alejandra', '', '1988-12-18', '', 15, 4, ''),
(99, 2, 'Colangelo', 'Giuseppe', 'Giusi', '0000-00-00', '', 1, 3, '00122.jpg'),
(38, 16, 'Inguscio', 'Sara', '', '1990-03-27', '', 15, 2, ''),
(40, 0, 'Kaiser', 'Benjamin', '', '1986-08-21', '', 2, 4, ''),
(41, 0, 'Kaiser', 'Roman', '', '1988-09-27', '', 2, 1, ''),
(42, 0, 'Kaufmann', 'Pierre', '', '1988-04-27', '', 2, 3, ''),
(43, 0, 'Kiener', 'Roman', '', '1985-03-09', '', 2, 2, ''),
(44, 0, 'Kull', 'Nicolas', '', '1993-07-12', '', 2, 3, ''),
(46, 5, 'La Ianca', 'Giuseppe', '', '1978-07-21', '', 10, 3, ''),
(47, 20, 'Leanza', 'Salvatore', '', '1970-11-30', '', 10, 3, ''),
(48, 33, 'Leone', 'Aron', '', '1993-04-23', '', 1, 2, '00121.jpg'),
(49, 0, 'Lupo', 'Michael', '', '1991-05-22', '', 2, 3, ''),
(50, 22, 'Luruena Rivera', 'Santos', '', '1975-05-24', '', 10, 4, ''),
(55, 2, 'Mazza', 'Antonio', '', '1976-10-17', '', 10, 2, ''),
(57, 5, 'Mulas', 'Andrea', 'Thiago Silva', '1993-04-11', '', 1, 2, '00102.jpg'),
(58, 11, 'Mulas', 'Dario', '', '1968-04-04', '', 10, 4, ''),
(59, 18, 'Mulas', 'Salvatore', 'FantAntonio', '1988-08-22', '', 1, 4, '00112.jpg'),
(60, 0, 'M', 'Yves', '', '1987-04-10', '', 2, 2, ''),
(61, 0, 'Oberle', 'Marco', '', '1987-06-09', '', 2, 2, ''),
(62, 4, 'Palmieri', 'Angelo', '', '1967-02-11', '', 10, 3, ''),
(64, 24, 'Paoletti', 'Gianluca', '', '1972-10-03', '', 10, 2, ''),
(65, 7, 'Parlato', 'Gerardo', '', '1975-09-23', '', 10, 3, ''),
(66, 6, 'Pezzo', 'Stefania', '', '1989-08-11', '', 15, 2, ''),
(67, 13, 'Pilia', 'Stefano', '', '1990-04-03', '', 1, 2, '00105.jpg'),
(68, 16, 'Piras', 'Fabrizio', '', '1978-07-01', '', 10, 4, ''),
(69, 15, 'Rickenbacher', 'Lukas', '', '1992-03-17', '', 1, 2, '00106.jpg'),
(70, 0, 'Rieder', 'Yves', '', '1989-10-04', '', 2, 4, ''),
(71, 15, 'Rosamilia', 'Nicola', '', '1975-04-07', '', 10, 3, ''),
(72, 7, 'Rüedi', 'Flavio', '', '1993-03-30', '', 1, 3, '00107.jpg'),
(73, 17, 'Sahin', 'Denis', '', '1986-08-17', '', 1, 3, '00111.jpg'),
(76, 10, 'Salfinger', 'Fabian', '', '1988-11-03', '', 2, 4, ''),
(77, 5, 'Salvadori', 'Ilaria', '', '1995-02-05', '', 15, 2, ''),
(78, 10, 'Santo', 'Deila', '', '1989-12-25', '', 15, 4, ''),
(79, 6, 'Santoni', 'Fabrizio', '', '1984-05-30', '', 1, 2, '00103.jpg'),
(106, 8, 'Apostolo', 'Naomi', '', '0000-00-00', '', 15, 3, ''),
(81, 21, 'Sappracone', 'Elena', '', '1989-01-11', '', 15, 2, ''),
(115, 1, 'Galizia', 'Andrea Domenico', '', '1976-03-11', '', 10, 1, ''),
(83, 0, 'Shala', 'Nure', '', '1988-11-15', '', 2, 3, ''),
(86, 0, 'Tanner', 'Lukas', '', '1991-06-02', '', 2, 3, ''),
(87, 0, 'Tanner', 'Michael', '', '1987-03-24', '', 2, 3, ''),
(88, 21, 'Teotino', 'Daniele', '', '1978-05-22', '', 10, 2, ''),
(89, 0, 'Tielke', 'Tobias', '', '1992-05-03', '', 2, 2, ''),
(105, 2, 'Calabrese', 'Valeria', '', '0000-00-00', '', 15, 2, ''),
(92, 0, 'Weibel', 'Stefan', '', '1990-11-23', '', 2, 4, ''),
(93, 31, 'Werisch', 'Sebastian', 'Basti', '1984-10-04', '', 1, 2, '00104.jpg'),
(94, 18, 'Yalcin', 'Sinan', '', '1973-05-01', '', 10, 3, ''),
(114, 30, 'Linguanti', 'Massimo', '', '0000-00-00', '', 10, 2, ''),
(96, 22, 'Zimmermann', 'Stefan', 'Zimmi', '1986-01-07', '', 1, 3, '00114.jpg'),
(97, 14, 'Zollinger', 'Sandro', '', '1988-04-28', '', 2, 4, ''),
(98, 0, 'Zwicky', 'Tobias', '', '1986-11-21', '', 2, 2, ''),
(100, 23, 'Calabrese', 'Gerardo', 'Gerry', '0000-00-00', '', 1, 3, ''),
(101, 11, 'Tettey', 'David Prince', 'Dave', '0000-00-00', '', 1, 3, '00118.jpg'),
(102, 3, 'Lo Presti', 'Luca', '', '0000-00-00', '', 1, 2, '00120.jpg'),
(103, 14, 'Argun', 'Berat', '', '0000-00-00', '', 1, 3, '00119.jpg'),
(104, 8, 'Marchetta', 'Maurizio', 'Mauri', '0000-00-00', '', 1, 4, ''),
(109, 19, 'Hofacker', 'Sven', '', '0000-00-00', '', 1, 2, '00115.jpg'),
(110, 4, 'Özdemir', 'Recep', '', '0000-00-00', '', 1, 2, '00123.jpg'),
(111, 7, 'Schmid', 'Melanie', '', '0000-00-00', '', 15, 4, ''),
(112, 32, 'Batista', 'Vedran', 'Vedi', '0000-00-00', '', 1, 2, '00116.jpg'),
(113, 69, 'Parrillo', 'Dario', '', '0000-00-00', '', 1, 2, '00117.jpg');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Daten für Tabelle `member_staff`
--

INSERT INTO `member_staff` (`id`, `firstName`, `lastName`, `bDay`, `function`, `toTeam`, `pictureURL`) VALUES
(1, 'Alessandro', 'Roberti', '0000-00-00', 'Trainer', 1, ''),
(2, 'Pascal', 'Schreiber', '0000-00-00', 'Co-Trainer', 1, ''),
(3, 'Antonio', 'Mazza', '0000-00-00', 'Torwart-Trainer', 1, ''),
(4, 'Romano', 'Branca', '0000-00-00', 'Trainer', 2, ''),
(5, 'Luca', 'Mulas', '0000-00-00', 'Trainer', 3, ''),
(6, 'Luca', 'Severo', '0000-00-00', 'Co-Trainer', 3, ''),
(7, 'Daniel', 'Barca', '0000-00-00', 'Trainer', 10, ''),
(8, 'Deila', 'Santo', '0000-00-00', 'Trainerin', 15, '');

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `news`
--

INSERT INTO `news` (`id`, `title`, `article`, `pictureURL`, `autor`, `date`, `category`) VALUES
(1, 'Wir sind wieder online!', 'Es hat zwar ein wenig gedauert, aber nun endlich ist sie da: die neue Webseite des AC Rossoneri. Wir sind sehr stolz, nun endlich eine saubere und übersichtliche Webseite präsentieren zu dürfen und hoffen, dass sich alle Nutzer problemlos mit der neuen Navigation vertraut machen können.\r\nDas System, welches sich hinter dieser Webseite verbirgt, wurde von A bis Z für unser Verein realisiert und bietet dementsprechend ein einzigartiges Surferlebnis. Ebenfalls ermöglicht diese Webseite eine dynamische Interaktion mit mehreren registrierten Benutzern, vereinfacht bedeutet dies, dass wir mehrere Hilfskräfte beschäftigen werden um Matchberichte zu verfassen und Inhalte zu pflegen.\r\nDas System wurde von Salvatore Mulas entworfen und programmiert, für sämtliche Fragen oder Unklarheiten bitte Kontakt Aufnahmen unter marketing@acrossoneri.ch.', '', 0, '2013-08-16 13:24:49', 0),
(2, 'Erste Mannschaft siegt wieder!', 'Endlich wieder ein Sieg!', '', 0, '2013-08-22 13:36:26', 0);

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
(10, 'Senioren', 1, 'Senioren Promotion - Gruppe 1', ''),
(15, 'Frauen', 1, 'Frauen - 4. Liga', ''),
(20, 'Junioren G', 2, '', ''),
(22, 'Junioren F', 2, '', '');

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
(1, 'SC M&uuml;nchenstein', 3),
(2, 'FC Arisdorf', 0),
(3, 'FC Diegten Eptingen', 3),
(4, 'SV Muttenz b', 0),
(5, 'FC Oberdorf', 4),
(6, 'AC Rossoneri', 3),
(7, 'FC Stein b', 4),
(8, 'SV Sissach a', 0),
(9, 'FC Lausen 72', 0),
(10, 'FC Gelterkinden b', 0),
(11, 'FC Laufenburg-Kaisten b', 6),
(12, 'FC Bubendorf', 6);

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
(12, 'FC Lausen 72', 3),
(11, 'Pratteln United', 6),
(10, 'FC Eiken', 3),
(9, 'NK Pajde', 6),
(8, 'FC Liestal', 0),
(7, 'FC Wallbach', 0),
(6, 'AC Virtus Liestal b', 6),
(5, 'FC Zeiningen', 0),
(4, 'AC Rossoneri a', 6),
(3, 'FC Gelterkinden', 0),
(2, 'FC Diegten Eptingen', 0),
(1, 'FC Bubendorf', 6);

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
(12, 'CD Espanol Basel a', 3),
(11, 'SC Basel Nord a', 1),
(10, 'FC Ferad a', 3),
(9, 'AC Virtus Liestal a', 6),
(8, 'FC Telegraph BS', 3),
(7, 'FC Birsfelden', 4),
(6, 'FC Schwarz-Weiss', 1),
(5, 'FC Amicitia Riehen', 3),
(4, 'FK Srbija Basel', 3),
(3, 'FC Pratteln', 1),
(2, 'AC Rossoneri b', 0),
(1, 'FC Xalko', 6);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `team_10_ranking`
--

CREATE TABLE IF NOT EXISTS `team_10_ranking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(255) NOT NULL,
  `points` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Daten für Tabelle `team_10_ranking`
--

INSERT INTO `team_10_ranking` (`id`, `team`, `points`) VALUES
(1, 'FC Dardania', 6),
(2, 'FC Birlik', 3),
(3, 'FC Rheinfelden', 3),
(4, 'AC Rossoneri', 3),
(5, 'FC Bubendorf', 3),
(6, 'FC Laufenburg-Kaisten', 3),
(7, 'US Olympia 1963', 0),
(8, 'US Bottecchia BS', 0),
(9, 'FC Türkgücü Basel', 0),
(10, 'FC Birsfelden', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `team_15_ranking`
--

CREATE TABLE IF NOT EXISTS `team_15_ranking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(255) NOT NULL,
  `points` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Daten für Tabelle `team_15_ranking`
--

INSERT INTO `team_15_ranking` (`id`, `team`, `points`) VALUES
(1, 'FC Allschwil', 6),
(2, 'FC Concordia Basel', 6),
(3, 'FC Nordstern BS', 3),
(4, 'FC Reinach', 3),
(5, 'FC Telegraph BS', 0),
(6, 'AC Rossoneri', 0),
(7, 'FC Laufenburg-Kaisten', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
