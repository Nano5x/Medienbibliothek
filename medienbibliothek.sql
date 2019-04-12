-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Feb 2019 um 12:50
-- Server Version: 5.6.21
-- PHP-Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `medienbibliothek`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE IF NOT EXISTS `benutzer` (
`ID` int(3) NOT NULL,
  `Benutzername` varchar(16) COLLATE latin1_german1_ci NOT NULL,
  `Name` text COLLATE latin1_german1_ci NOT NULL,
  `Vorname` text COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fgenre`
--

CREATE TABLE IF NOT EXISTS `fgenre` (
  `fgID` int(3) NOT NULL,
  `Name` text COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Daten für Tabelle `fgenre`
--

INSERT INTO `fgenre` (`fgID`, `Name`) VALUES
(1, 'Horror'),
(2, 'Science-Fiction'),
(3, 'Komödie');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `filme`
--

CREATE TABLE IF NOT EXISTS `filme` (
`fID` int(5) NOT NULL,
  `Titel` varchar(188) COLLATE latin1_german1_ci NOT NULL,
  `Typ` text COLLATE latin1_german1_ci NOT NULL,
  `Genre` text COLLATE latin1_german1_ci NOT NULL,
  `Erscheinungsjahr` int(4) NOT NULL,
  `Regisseur` text COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mgenre`
--

CREATE TABLE IF NOT EXISTS `mgenre` (
`mgID` int(3) NOT NULL,
  `Name` text COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `musik`
--

CREATE TABLE IF NOT EXISTS `musik` (
`mID` int(6) NOT NULL,
  `Songtitel` varchar(100) COLLATE latin1_german1_ci NOT NULL,
  `Interpret` varchar(32) COLLATE latin1_german1_ci NOT NULL,
  `Genre` text COLLATE latin1_german1_ci NOT NULL,
  `Erscheinungsjahr` int(4) NOT NULL,
  `Album` varchar(32) COLLATE latin1_german1_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sgenre`
--

CREATE TABLE IF NOT EXISTS `sgenre` (
`sgID` int(3) NOT NULL,
  `Name` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `spiele`
--

CREATE TABLE IF NOT EXISTS `spiele` (
`sID` int(5) NOT NULL,
  `Titel` varchar(100) COLLATE latin1_german1_ci NOT NULL,
  `Typ` varchar(20) COLLATE latin1_german1_ci NOT NULL,
  `Genre` text COLLATE latin1_german1_ci NOT NULL,
  `Erscheinungsjahr` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
 ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `fgenre`
--
ALTER TABLE `fgenre`
 ADD PRIMARY KEY (`fgID`);

--
-- Indizes für die Tabelle `filme`
--
ALTER TABLE `filme`
 ADD PRIMARY KEY (`fID`);

--
-- Indizes für die Tabelle `mgenre`
--
ALTER TABLE `mgenre`
 ADD PRIMARY KEY (`mgID`);

--
-- Indizes für die Tabelle `musik`
--
ALTER TABLE `musik`
 ADD PRIMARY KEY (`mID`);

--
-- Indizes für die Tabelle `sgenre`
--
ALTER TABLE `sgenre`
 ADD PRIMARY KEY (`sgID`);

--
-- Indizes für die Tabelle `spiele`
--
ALTER TABLE `spiele`
 ADD PRIMARY KEY (`sID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `filme`
--
ALTER TABLE `filme`
MODIFY `fID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `mgenre`
--
ALTER TABLE `mgenre`
MODIFY `mgID` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `musik`
--
ALTER TABLE `musik`
MODIFY `mID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `sgenre`
--
ALTER TABLE `sgenre`
MODIFY `sgID` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `spiele`
--
ALTER TABLE `spiele`
MODIFY `sID` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
