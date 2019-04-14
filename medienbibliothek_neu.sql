-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Apr 2019 um 18:55
-- Server-Version: 10.1.21-MariaDB
-- PHP-Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `medienbibliothek`
--
CREATE DATABASE IF NOT EXISTS `medienbibliothek` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `medienbibliothek`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `ID` int(3) NOT NULL,
  `Benutzername` varchar(16) COLLATE latin1_german1_ci NOT NULL,
  `Name` text COLLATE latin1_german1_ci NOT NULL,
  `Vorname` text COLLATE latin1_german1_ci NOT NULL,
  `pass` varchar(32) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`ID`, `Benutzername`, `Name`, `Vorname`, `pass`) VALUES
(5, 'Maiku', 'RÃ¶hl', 'Maik', '3e45af4ca27ea2b03fc6183af40ea112');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `filme`
--

CREATE TABLE `filme` (
  `fID` int(5) NOT NULL,
  `Titel` varchar(188) COLLATE latin1_german1_ci NOT NULL,
  `Typ` text COLLATE latin1_german1_ci NOT NULL,
  `Genre` text COLLATE latin1_german1_ci NOT NULL,
  `Erscheinungsjahr` int(4) NOT NULL,
  `Regisseur` text COLLATE latin1_german1_ci NOT NULL,
  `username` varchar(60) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `musik`
--

CREATE TABLE `musik` (
  `mID` int(6) NOT NULL,
  `Songtitel` varchar(100) COLLATE latin1_german1_ci NOT NULL,
  `Interpret` varchar(32) COLLATE latin1_german1_ci NOT NULL,
  `Genre` text COLLATE latin1_german1_ci NOT NULL,
  `Erscheinungsjahr` int(4) NOT NULL,
  `Album` varchar(32) COLLATE latin1_german1_ci DEFAULT NULL,
  `username` varchar(60) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `spiele`
--

CREATE TABLE `spiele` (
  `sID` int(5) NOT NULL,
  `Titel` varchar(100) COLLATE latin1_german1_ci NOT NULL,
  `Typ` varchar(20) COLLATE latin1_german1_ci NOT NULL,
  `Genre` text COLLATE latin1_german1_ci NOT NULL,
  `Erscheinungsjahr` int(4) NOT NULL,
  `username` varchar(60) COLLATE latin1_german1_ci NOT NULL
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
-- Indizes für die Tabelle `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`fID`);

--
-- Indizes für die Tabelle `musik`
--
ALTER TABLE `musik`
  ADD PRIMARY KEY (`mID`);

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
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `filme`
--
ALTER TABLE `filme`
  MODIFY `fID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `musik`
--
ALTER TABLE `musik`
  MODIFY `mID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `spiele`
--
ALTER TABLE `spiele`
  MODIFY `sID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
